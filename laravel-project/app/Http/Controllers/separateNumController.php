<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class separateNumController extends Controller
{
    function getNum($num){
        //count the times that a number is divided by 10 
        $counter = 1;
        // a list that will take all the values of numbers(Hundreds,tens,ones) in it at the end 
        $list = [] ;
        
        // The array will take all the values of the user in a placevalue form 
        while ($num !=0 ){
            $rem = $num % 10 ;
            $list[] = ($rem * $counter);
            $num = $num / 10;
            $num = round($num, 0);
            $counter = $counter * 10;
        }
        //reversing the values inside the list  
        $list = array_reverse($list);
        // returns json object
        return response()->json([
            "status" => "Success",
            "message" => $list
        ]);
    }
}
