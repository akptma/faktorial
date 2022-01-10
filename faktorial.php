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

// RECURSIVE NOT FIXED
function RecursiveF($in)
{
    if ($in == 0) {
        $in = 1;
    }
    return $in * RecursiveF($in - 1);
}
echo RecursiveF(5);
