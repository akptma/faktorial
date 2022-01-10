<?php
function faktorial($n)
{
    $hsl = $n;
    for ($i = $n; $i >= 1; $i--) {
        $hitung = ($n - $i);
        if ($hitung !== 0) {
            $hsl = $hsl * $hitung;
        }
    }
    return $hsl;
}

echo faktorial(13);




// RECURSIVE 
// function RecursiveF($n)
// {
//     return ($n * RecursiveF($n - 1));
// }

// echo RecursiveF(5);
