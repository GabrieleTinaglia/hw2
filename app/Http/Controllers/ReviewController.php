<?php
namespace app\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ReviewController extends Controller {

    public function getReviews()
    {
        $res= Review::get()->all();
        return response()->json($res);
    }

    protected function create(REQUEST $datas)
    {
        $res= User::where('username', Session('user_id'))->first();

            $newReview =  Review::create([
            'data' => $datas['data'],
            'orario' => $datas['ora'],
            'commento' => $datas['note'],
            'user'=>Session('user_id')
            ]);      
            return redirect(('home').'/#formrecensioni') ;     
        }

    }

  
?>