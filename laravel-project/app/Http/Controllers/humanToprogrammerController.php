<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class humanToprogrammerController extends Controller
{
    function convertNum(Request $request){
        $string = $request->string;
        // spliting each chracter in that sring in a list form
        $list = str_split($string);
        $numerics = "";
        $expression = "";
        $i = 0;
        while ($i < strlen($string)) {
            if (is_numeric($list[$i])) {
                $numerics .= $list[$i];
                if (($i + 1 <  strlen($string)  && !is_numeric($list[$i + 1]))  || $i + 1 >= strlen($string)){
                    $expression .= decbin($numerics);
                    $numerics = "";
                    $i++;
                }
            }
            $expression .= $list[$i];
            $i++;
        }
        return response()->json([
            "status" => "Success",
            "message" => $expression
        ]);
    }
}

