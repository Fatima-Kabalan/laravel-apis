<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class separateNumController extends Controller
{
    function getNum($num){

        $counter = 1;
        $list = [] ;
        
        while ($num !=0 ){
            $rem = $num % 10 ;
            $list[] = ($rem * $counter);
            $num = $num / 10;
            $num = round($num, 0);
            $counter = $counter * 10;
        }
    
        return response()->json([
            "status" => "Success",
            "message" => $list
        ]);
    }
}
