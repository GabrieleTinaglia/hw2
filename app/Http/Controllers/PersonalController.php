<?php
namespace app\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\Review;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PersonalController extends Controller {

    public function getReviews()
    {
        if(Session::has("permission"))
        {
            $res=Review::get()->all();
            return response()->json($res);
        }
        $name= User::select ('username')->where ('username', Session('user_id'))->first();
        $res= Review::where('user', $name['username'])->orderby('data', 'desc')->get();
        return response()->json($res);
    }

    public function getReservations()
    {
        if(Session::has("permission"))
        {
            $res=Reservation::get()->all();
            return response()->json($res);
        }
        $name= User::select ('username')->where ('username', Session('user_id'))->first();
        $res= Reservation::where('user', $name['username'])->orderby('data', 'desc')->get();
        return response()->json($res);
    }
        public function deleteReservations($valore, $valore2){
        Reservation::where('data', $valore)->where("ora", $valore2)->delete();
        return $this->getReservations();
    }
    public function modifyEmail(REQUEST $data)
    {
        if($data['email']!=null)
        {
        $User= User::where('username', Session('user_id'))->update(['email' => $data['email']]);
        Session::flash("em", "Email Modificata!");
        return redirect("/areap");
        }
        else{
            Session::flash("em", "Requisiti non rispettati!");
            return redirect("/areap");
        }

    }
    public function modifyNumber(REQUEST $data)
    {
        if($data['number']!= null)
        {
        $User= User::where('username', Session('user_id'))->update(['number' => $data['number']]);
        Session::flash("num", "Numero Modificato!");
        return redirect("/areap");
        }
        else{
            Session::flash("num", "Campo vuoto!!");
            return redirect("/areap");  
        }
    }
    public function modifyPassword(REQUEST $data)
    {
        if (preg_match('/^(?=.*[A-Za-z])[0-9A-Za-z]{8,}$/', $data['pass'])) {
            $hashed=Hash::make($data['pass']);
            $User= User::where('username', Session('user_id'))->update(['password' => $hashed]);
            Session::flash("pass", "Password Modificata!");
            return redirect("/areap");
       } 
        else{
            Session::flash("pass", "Requisiti non rispettati!");
            return redirect("/areap");
 

        }
    }

    }

  
?>