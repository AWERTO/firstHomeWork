<?php
    $array = array (10,32,43,5);

    var_dump($array);
    echo ("</br>");
    function getArrayCountOfFive ($array){
        if (is_array($array)){
            echo "Massive is int";
            echo ("</br>");
        }
        for ($i = 0 ; $i < count($array); $i++) {

            if ($array[$i] % 5 != 0 ) {
                unset($array[$i]);
            }
        }
        return $array ;
    }



print_r(getArrayCountOfFIve($array));

    $string = "google";
    function changeString ($string){
        for ($j = 0 ; $j < strlen($string); $j++){
            if ($string[$j] == 'o'){
                $string[$j]='0';
            }
        }
        return $string;
    }
    echo ("</br>");
    print_r(changeString($string));

    $n = 6 ;
    function factorial($n)
{
    return $n ? $n * factorial($n-1) : 1;
}
    echo ("</br>");
    print_r(factorial($n));
    ?>