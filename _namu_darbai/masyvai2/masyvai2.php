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

// foreach ($masyvas as $value) {
//     foreach ($value as $key => $value2) {
//         match ($key) {
//             0 => $sum += $value2,
//             1 => $sum1 += $value2,
//             2 => $sum2 += $value2,
//             3 => $sum3 += $value2,
//             4 => $sum4 += $value2,
//         };
//     }
// }
// _d("$sum $sum1 $sum2 $sum3 $sum4", '2c');

$reiksmes = [];
$reiksme = 0;
foreach (range(1, 5) as $key => $value) {
foreach (range(1, 10) as $key2 => $value2) {
$reiksme += $masyvas[$key2][$key];
}
$reiksmes[] = $reiksme;
$reiksme = 0;
}
print_r($reiksmes);





echo'<br>';echo'<br>d) <br>';//--------------d---------------

foreach ($masyvas as $index_ii => &$value) {
    $value[] =  rand(5, 25);
    $value[] =  rand(5, 25);
}
print_r($masyvas);

// foreach ($masyvas as $key => $_) {
//     $masyvas[$key][] = rand(5, 25);
//     $masyvas[$key][] = rand(5, 25);
// }
// _d($masyvas, '2d');

echo'<br>';echo'<br>e) <br>';//--------------e---------------

// $sum = 0;

// foreach($masyvas as $x){
//     foreach($x as $y){
//         $sum += $y;
//     }
//     $naujasMasyvas[] = $sum;
//     $sum = 0;
// }
// _d($naujasMasyvas, 'Naujas masyvas, Antras namu darbas: E');

foreach($masyvas as $i => $val) {
    $sumos[$i]=array_sum($val);
}

print_r($sumos);

echo '<br><hr>';
// 3 ///////////////////////////////////////////////////////////////////////////
echo '3) <br>';
for ($ii = 0; $ii < 10; $ii++) {
    $iSize = rand(2, 20);
    for ($i = 0; $i < $iSize; $i++) {
        $masyvas2[$ii][$i] = range('A', 'Z')[rand(0, 25)];
    }
    sort($masyvas2[$ii]);
}
_d($masyvas2, '5-3');


echo '<br><hr>';
// 4 ///////////////////////////////////////////////////////////////////////////
echo '4) <br>';

sort($masyvas2);

_d($masyvas2, '5-4');

$indexes_K_sorted = [];

foreach ($masyvas2 as $ii => $value_ii) {
    if (in_array('K', $value_ii)) {

        $indexes_K_sorted[] = $ii;

    }
}

foreach ($masyvas2 as $ii => $value_ii) {
    if (!in_array($ii, $indexes_K_sorted)) {

        $indexes_K_sorted[] = $ii;

    }

}

// _d($indexes_K_sorted);

foreach ($indexes_K_sorted as $index => $value) {
    $masyvas2_KSorted[$index] = $masyvas2[$value];
}
$masyvas2 = $masyvas2_KSorted;

_d($masyvas2, '5-4');

echo '<br><hr>';
// 5 ///////////////////////////////////////////////////////////////////////////
echo '5) <br>';
$masyvas = [];

$count = 0;

do {
    $count++;
    $uid = rand(1, 50);
    foreach ($masyvas as $user) {
        if ($user['user_id'] == $uid) {
            continue 2;
        }
    }
    $masyvas[] = [
        'user_id' => $uid,
        'place_in_row' => rand(0, 100)
    ];
} while(count($masyvas) < 30);


echo '<br><hr>';
// 6 ///////////////////////////////////////////////////////////////////////////
echo '6) <br>';

echo '<br><hr>';
// 7 ///////////////////////////////////////////////////////////////////////////
echo '7) <br>';

echo '<br><hr>';
// 8 ///////////////////////////////////////////////////////////////////////////
echo '8) <br>';
