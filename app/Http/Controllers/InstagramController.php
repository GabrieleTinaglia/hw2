<?php
namespace app\Http\Controllers;

use Illuminate\Routing\Controller;



class InstagramController extends Controller{

protected function getChef()
{
    
$clientSecret = 'AQBTTEj9kMZM7mKPW_JoYA4BpJPbSvGvRjjpm1w06aFWcdXB-_BLaWH_ctWOt_T1Raxqz6ApKyM122aHcV7xqpfRiBI9wXSy0Uuzzk8EcyaONpIUX9v0cUhC091f2Gw7LC8tFldbiful3MjqxL8HEeQW73z-k9n_9QADlWHFQvyAsNdDrIYcIicabkkLvBJAubvAqjVMCeSo6cOmaBsS6gBtgtWCPA4FwNEqeWhlUuCs5g';
$endPoint = 'https://api.instagram.com/oauth/access_token';
$secretCode = '4bea883f06458b7fa1abb81503e52bc3';
 $codeApp = '977020549630025';
 $redirectUrl = 'https://www.GabsRestaurant.it/';
 $endPointImg = 'https://graph.instagram.com/me/';
 $dati = array("client_id" => $codeApp, "client_secret" => $secretCode, "grant_type"=>"authorization_code", "redirect_uri"=> $redirectUrl, "code"=>$clientSecret);
 $dati = http_build_query($dati);

       $curl = curl_init(); 
           curl_setopt($curl, CURLOPT_URL, $endPoint);
 curl_setopt($curl, CURLOPT_POST, 1);
 curl_setopt($curl, CURLOPT_POSTFIELDS, $dati);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 $result = curl_exec($curl);
 $token= json_decode($result)->access_token;
  curl_close($curl);

$curl2 = curl_init();
curl_setopt($curl2, CURLOPT_URL,
$endPointImg."media?fields=media_url,username&access_token=".$token);
curl_setopt($curl2, CURLOPT_RETURNTRANSFER, 1);
$json = json_decode(curl_exec($curl2))->data;
curl_close($curl2);
    $content_array=[];
    $i=0;
    foreach($json as $content){
        $content_array[$i]['media_url']=$content->media_url;
        $content_array[$i]['username']=$content->username;
        $i++; 
    }
    return response()->json($content_array);
}

}

?>