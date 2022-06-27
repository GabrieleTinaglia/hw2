<?php
namespace app\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Dish;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class MenuController extends Controller
{

public function getDishes()
{
    $resp= Dish:: orderby('prezzo', 'asc')->get()->all();
    return response()->json($resp);

}
public function deleteDish(REQUEST $request)
{
    $resp=Dish:: where("nome", $request['portata'])->delete();
    return view('areap');
}
public function aggiungiPortata(REQUEST $request)
{
    $risp=Dish::create([
        'nome'=>$request['portata'],
        'categoria'=>$request['categoria'],
        'prezzo'=>doubleval($request['prezzo'])
    ]);
    return view("areap");

    
}
}
