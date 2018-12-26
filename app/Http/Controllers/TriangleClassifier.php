<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TriangleClassifier extends Controller
{


    public function classifier($a, $b, $c)
    {
//
        $flag = null;
        if ($a + $b > $c && $a + $c > $b && $b + $c > $a && $a > 0 && $b > 0 && $c > 0) {
            if ($a === $b && $b === $c && $a === $c) {
                $flag = 'tam giac deu';
            } else if ($a === $b || $a === $c || $b === $c) {
                $flag = 'tam giac can';
            } else {
                $flag = 'tam giac thuong';
            }
        } else {
            $flag = 'khong phai tam giac';
        }
        return $flag;
    }


}
