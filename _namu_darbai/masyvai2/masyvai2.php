<body style="background-color:cadetblue ;"></body>

<?php
// 1 ///////////////////////////////////////////////////////////////////////////
echo '1) <br>';

$masyvas = [];

foreach (range(1,10) as $keyBig => $_) {
    foreach (range(1,5) as $keySmall => $smallValue) {
        $masyvas[$keyBig][$keySmall] = rand(5,25);
    }
}

echo'<pre>';
print_r($masyvas);


echo '<br><hr>';
// 2 ///////////////////////////////////////////////////////////////////////////
echo '2) <br>';
echo'<br>';echo'a) <br>';//--------------a---------------

$counter = 0;

foreach ($masyvas as $value) {
    foreach ($value as $smallValue) {
        if ($smallValue > 10) {
            $counter++;
        }
    }
}
echo "vertes didesnes uz 10: $counter";


echo'<br>';echo'<br>b) <br>';//--------------b---------------

$max = 0;

foreach ($masyvas as $value) {
    foreach ($value as $smallValue) {
        if ($smallValue > $max) {
            $max = $smallValue;
        }
    }
}
echo $max;


echo'<br>';echo'<br>c) <br>';//--------------c---------------

foreach ($masyvas as $value) {
    foreach ($value as $key => $value2) {
        match ($key) {
            0 => $sum += $value2,
            1 => $sum1 += $value2,
            2 => $sum2 += $value2,
            3 => $sum3 += $value2,
            4 => $sum4 += $value2,
        };
    }
}
_d("$sum $sum1 $sum2 $sum3 $sum4", '2c');

// $reiksmes = [];
// $reiksme = 0;
// foreach (range(1, 5) as $key => $value) {
// foreach (range(1, 10) as $key2 => $value2) {
// $reiksme += $masyvas[$key2][$key];
// }
// $reiksmes[] = $reiksme;
// $reiksme = 0;
// }
// print_r($reiksmes);





echo'<br>';echo'<br>d) <br>';//--------------d---------------

foreach ($masyvas as $index_ii => &$value) {
    $value[] =  rand(5, 25);
    $value[] =  rand(5, 25);
}

// foreach ($masyvas as $key => $_) {
//     $masyvas[$key][] = rand(5, 25);
//     $masyvas[$key][] = rand(5, 25);
// }
// _d($masyvas, '2d');

echo'<br>';echo'<br>e) <br>';//--------------e---------------