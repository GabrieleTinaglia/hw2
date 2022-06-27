<?php
namespace app\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller {


    protected function create()
    {
        
        $request= request();
        if($request['name']!= null && $request['email']!= null && $request['message']!= null &&$request['phone']!= null)
        {    
        $newContact =  Contact::create([
            'name' => $request['name'],
            'data'=>date("Y-m-d H:i:s"),
            'email' => $request['email'],
            'note'=>$request['message'],
            'telefono'=>$request['phone']
            ]);
            Session::flash("contatti", "Form inviato!!!");
        return redirect("redirect"); 
    }
    else{
        Session::flash("contatti", "Form non inviato!! Compila tutti i campi!!");
        return redirect("contatti"); 
    }
      }

    }
   

  
?>