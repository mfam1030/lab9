<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apicont extends Controller
{
    //
    public function suma ($num1, $num2){
        return $num1 + $num2;
    }

    public function multiplicar($num1, $num2){
        return $num1 * $num2;
    }
}
