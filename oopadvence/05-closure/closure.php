<?php
    // $var = "clouser";
    // $func = function($string){echo "{$string} defined";}; //ini adalah anonimous function
    // echo $func($var);
    // menggunakan keyword use
    // $var = "clouser";
    // $func = function () use($var) { echo  "{$var} defined";}; //ini adalah anonimous function
    // echo $func($var);

    $array = [1,2,3,4,5,6,7,8,9];
    $even = array_filter($array, function($item){
        return ($item % 2 == 0);
    });

    print_r($array);
    print_r($even);

    $firtterFunc = function($item){
        return ($item % 2 == 1);
    }; //ini adalah anonimouse function dan harus menggunakan titik koma
    $odd = array_filter($array, $firtterFunc);
    print_r($odd);

?>