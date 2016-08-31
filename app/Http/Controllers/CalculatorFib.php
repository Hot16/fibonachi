<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CalculatorFib extends Controller
{
    //
    static public function fib($n){

        return ($n < 3) ? ($n == 0) ? 0 : 1 : CalculatorFib::fib($n - 1) + CalculatorFib::fib($n - 2);

    }
}
