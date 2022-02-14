<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Arr;

use App\Models\Breakdown;
use App\Models\Random;

class HomeController extends Controller
{
    public function index() {
            return view('welcome');
        }

    public function retrieve(Random $randoms, Breakdown $breakdowns) {
    
        // \Log::info(json_encode($randoms->all()));
        
        //if you want to get the values on where condition use below code
        $randoms = Random::Where('flag', "0")->get();

        $breakdowns = Breakdown::all();
            
        return view('retrieve', compact('randoms', 'breakdowns'));
        // return view('retrieve', compact('randoms'));

        }

    public function test() {

        $array = [5, 6, 7, 8, 9, 10];

        // Random number of iterations from 5-10 (random)
        $randomloop = Arr::random($array);
        
        // Random name (not alphanumeric? later)
        $random = Str::random($randomloop);
        
        // Random number of iterations from 5-10 (breakdown)
        $breakdownloop = Arr::random($array);
        
        // Random name (Alphanumeric)
        $breakdown = Str::random('5');

        return view('test', compact('random', 'randomloop', 'breakdown', 'breakdownloop'));
    }

    public function saveItem(Request $request) {

        // \Log::info(json_encode($request->all()));

        $newRandom = new Random;
        $newRandom->values = $request->randominput;
        $newRandom->flag = 0;
        $newRandom->save();

        $newBreakdown = new Breakdown;
        $newBreakdown->values = $request->breakdowninput;

        $newRandom->id;
        $newBreakdown->random_id = $newRandom->id;
        $newBreakdown->save();
        
        return view('welcome');
    }

}
