<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

use App\Models\Random;

class FlagController extends Controller
{
   
    public function randomflag() {

        // \Log::info(json_encode($request->all()));

    // $request = Random::table('randoms')->where('flag', 0)->update(['flag' => 1]);
    // Random::whereIn('flag', $request->flag)->update(['flag' => "1"]);
    Random::table('randoms')->updateOrInsert(['flag' => 0], ['flag' => 1]);
    
        return view('welcome');
    }

}
