<?php
namespace app\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller {


    protected function create()
    {
        $request = request();
        if($request['username'] !=null && $request['email'] !=null && $request['telephone'] !=null && preg_match('/^(?=.*[A-Za-z])[0-9A-Za-z]{8,}$/', $request['pass'])) 
        {
                 $newUser =  User::create([
            'username' => $request['username'],
            'password' => Hash::make($request['pass']),
            'email' => $request['email'],
            'number'=>$request['telephone']
                 ]);
        }     
        else{
                Session::flash("errors", "Inserisci tutte le credenziali!!");
                return redirect("login");
            }
        if ($newUser)
         {
                Session::put('user_id', $newUser->username);
                return redirect('home');
        } 
            else {
                return redirect('login')->withInput();
            }
        }
        
        
    }



?>