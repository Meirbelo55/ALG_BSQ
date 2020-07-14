<?php 
if ($argv != 3) {
    print("program x y density \n");
}

function map($argv) {
    $x = $argv[0];
    $y = $argv[1];
    $density = $argv[2];
    $i = 0;
    $j = 0;
    $map = $y . "\n";
    while ($i < $y) {
        $j = 0;
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