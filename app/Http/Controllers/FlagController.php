<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Random;

class FlagController extends Controller
{
   
    public function randomflag(Request $request) {

        // \Log::info(json_encode($request->all()));
        // $randoms = Random::gettable('randoms')->where('flag', '=', 0)->update(array('flag' => 1));
        // // $randoms = Random::Where('flag', "0")->update(['default' => 1]);
        // $randoms->save();

    Random::gettable('randoms')->where('flag', 0)->lazyById()->each(function ($request) {
    Random::gettable('randoms')->where('id', $request->id)->update(['flag' => 1]);
    });
    
        return view('test');
    }

}
