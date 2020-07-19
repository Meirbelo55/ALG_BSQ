<?php
//$arg = array with 3 params : first->namefile.php; second-> numberof  ligne ; 3eme: nombre de 0 =  result of numberligne * 2;
if ($argv != 3) {
    print("program x y density \n");
}
function map($argv) {
    $x = $argv[0];
    //$x = file.php
    $y = $argv[1];
    //9 number of line
    $density = $argv[2];
    // number of 0,number of line * 2  = array plein de 0;
    $i = 0;
    $j = 0;
    $map = $y . "\n";
    while ($i < $y) {
        $j = 0;
        for ($r = 0; $r  < $y; $r++) {
            echo $r . "\n";
        }
        while ($j < $x) {
            if (rand($y * 2) < $density) {
                $map .= "o";

            }
            else
            {
                $map .= ".";

            }
            $j++;
        }
        $map .= "\n";
        $i++;
    }

    $handle = fopen('map.txt', 'w');
    fwrite($handle, $map);
    fclose($handle);
}

map($argv);