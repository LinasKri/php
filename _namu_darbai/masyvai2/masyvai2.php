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
echo'a) <br>';//--------------a---------------

$counter = 0;

foreach ($masyvas as $value) {
    foreach ($value as $smallValue) {
        if ($smallValue > 10) {
            $counter++;
        }
    }
}
echo "vertes didesnes uz 10: $counter";


echo'<br>b) <br>';//--------------b---------------

$max = 0;

foreach ($masyvas as $value) {
    foreach ($value as $smallValue) {
        if ($smallValue > $max) {
            $max = $smallValue;
        }
    }
}
echo $max;


echo'<br>c) <br>';//--------------c---------------