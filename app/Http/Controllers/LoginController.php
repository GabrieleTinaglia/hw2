<?php
namespace app\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller {
    public function getName()
    {
        $name= User::where ('username', Session('user_id'))->first();
        return response()->json($name);
    }
    public function getUsernames(){

        $res= User::get()->all();
        return response()->json($res); 
       }
       
     public function checkLogin() {
         $request=request();
         $user=User::where('email', $request['username'])->first();
        if($user === null)
{            
    Session::flash("error", "Credenziali errate!!");
    return view("login");
 }
        if(Hash::check($request['password'],$user->password)) {
             Session::put('user_id', $user->username);
            if($user->admin_lvl !=null)
            {
                Session::put('permission', $user->admin_lvl);
            }
             return redirect('home');
         }
         else {

                 Session::flash("error", "Password Incorretta!");
                 return view("login");
                 
             
 
         }
     }

     public function logout() {
         Session::flush();
         return view('login');
     }
}
?>