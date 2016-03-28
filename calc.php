<?php

function calc($x, $y, $increase)
{
        switch ($increase) {
            case '0':
                $res = $x * 1 * $y;
                break;
            case '1':
                $res = $x * 1.1 * $y;
                break;
            case '2':
                $res = $x * 1.2 * $y;
                break;
            case '3':
                $res = $x * 1.3 * $y;
                break;
            case '4':
                $res = $x * 1.4 * $y;
                break;
            case '5':
                $res = $x * 1.5 * $y;
                break;
            case '6':
                $res = $x * 1.6 * $y;
                break;
            case '7':
                $res = $x * 1.7 * $y;
                break;
            case '8':
                $res = $x * 1.8 * $y;
                break;
            case '9':
                $res = $x * 1.9 * $y;
                break;
        }
        return number_format($res, $decimals = 0, $dec_point = '.', $thousands_sep = ' ');
}

function calc2($a, $b, $raise)
{
    switch ($raise) {
        case '0':
            $result = $a * 1 * $b;
            break;
        case '1':
            $result = $a * 1.1 * $b;
            break;
        case '2':
            $result = $a * 1.2 * $b;
            break;
        case '3':
            $result = $a * 1.3 * $b;
            break;
        case '4':
            $result = $a * 1.4 * $b;
            break;
        case '5':
            $result = $a * 1.5 * $b;
            break;
        case '6':
            $result = $a * 1.6 * $b;
            break;
        case '7':
            $result = $a * 1.7 * $b;
            break;
        case '8':
            $result = $a * 1.8 * $b;
            break;
        case '9':
            $result = $a * 1.9 * $b;
            break;
    }
    return number_format($result, $decimals = 0, $dec_point = '.', $thousands_sep = ' ');
}


function calc3($res, $result){
   $sum = $res + $result;
    return number_format($sum, $decimals = 0, $dec_point = '.', $thousands_sep = ' ');
}



?>