<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FibonachiController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function calculator(){
        $data = \Input::only('count');
        $i = $data['count']+0;
        $result = [];
        if ($i>30) {
            return view('result', ['data' => 'Слишком долго!']);
        } else {
            for ($j = 0; $j <= $i; $j++) {
                $result[$j] = CalculatorFib::fib($j);
            }
            $result = implode(' ', $result);
            return view('result', ['data' => $result]);
        }
    }

//    public function schet($i){
//        $result = [];
//        for ($j=0; $j<=$i; $j++){
 //           $result[$j] = fib($j);
 //       }
 //       return $result;
//
 //       function fib($n){
 //           ($n < 3) ? ($n == 0) ? 0 : 1 : fib($n - 1) + fib($n - 2);
 //       }

 //   }
}

//class CalculatorFib extends Controller
//{
//    public function fib(int $n){
       // ($n < 3) ? ($n == 0) ? 0 : 1 : fib($n - 1) + fib($n - 2);
 //       return $n;
//    }
//}