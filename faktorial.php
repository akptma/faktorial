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
