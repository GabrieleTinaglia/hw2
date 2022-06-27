<?php
namespace app\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ReservationController extends Controller {

    public function getReservations()
    {
        $res= Reservation::get()->all();
        return response()->json($res);
    }

    protected function create(REQUEST $datas)
    {
        if($datas['message'] == null)
        {
            $datas['message'] ="nessuna";
        }
        if($datas['data'] != null && $datas['numero'] != null && $datas['orari'] != null)
        {
            $newReservation =  Reservation::create([
            'data' => $datas['data'],
            'n_persone' => $datas['numero'],
            'ora' => $datas['orari'],
            'note' => $datas['message'],
            'user'=>Session('user_id')
            ]);   
            Session::flash("contatti", "Prenotazione Inviata!!");
            return redirect("redirect");   
        }
        else{
            Session::flash("contatti", "Prenotazione non inviata! Mancano dei dati!!");
            return redirect("prenota");   
        }
        }

    }

  
?>