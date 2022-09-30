<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prefixController extends Controller
{
    // getting the prefix expression and transforming it into solution expression 
    function prefixToinfix(Request $request){
        $string = $request->string; 
        $list = str_split($text);
        $result=$list[1];

        // returns the values after postfix expression
        switch ($list[0]) {
            case "+":
                for ($i = 2; $i < count($list); $i++) {
                    $result += $list[$i];
                }
                break;
            case "-":
                for ($i = 2; $i < count($list); $i++) {
                    $result -= $list[$i];
                }
                break;
            case "*":
                for ($i = 2; $i < count($list); $i++) {
                    $result *= $list[$i];
                }
                break;
            case "/":
                for ($i = 2; $i < count($list); $i++) {
                    $result /= $list[$i];
                }
                break;
        }
        return response()->json([
            "status" => "Success",
            "message" => $result
        ]);
    }
}
