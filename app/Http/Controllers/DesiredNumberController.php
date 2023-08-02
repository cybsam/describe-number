<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesiredNumberController extends Controller
{
    public function index(Request $request, $input){
        $input = $request['input'];
        return view('in',[
            'input'=>$input
        ]);
    }
    public function descInput(Request $request){
        $t = intval($request->input('t'));

        $desc = [];

        for ($i = 0; $i < $t; $i++) {
            $line1 = explode(" ", $request->input('number_of_item' . ($i + 1) . '_line1'));
            $n = intval($line1[0]);
            $d = intval($line1[1]);

            $line2 = explode(" ", $request->input('number_of_item' . ($i + 1) . '_line2'));
            sort($line2);

            $total = 0;
            foreach ($line2 as $num) {
                $total += $num;
                if ($total >= $d) {
                    $desc[] = "Yes";
                    break;
                }
            }

            if (!isset($desc[$i])) {
                $desc[] = "No";
            }
        }

        return view('Describ', ['descri' => $desc]);
    }
}

