<body style="background-color:cadetblue ;"></body>

<?php
// 1 ///////////////////////////////////////////////////////////////////////////
echo '1) <br>';

$masyvas = [];
$tenOrMore = 0;
$size = 30;

for ($i = 0; $i < $size; $i++) { 
    $masyvas[] = rand(5,25);
}

echo'<pre>';
print_r($masyvas);


echo '<br><hr>';
// 2 ///////////////////////////////////////////////////////////////////////////
echo '2) <br>';
echo'a) <br>';//-----------------------------
foreach ($masyvas as $key => $value) {
    if ($value >= 10) {
        $tenOrMore++;
    }
}
echo "Elementai didesni uz 10: $tenOrMore <br>";

echo'b) <br>';//-----------------------------
$biggest = 0;
foreach ($masyvas as $key => $value) {

    if($value > $biggest){
        $biggest =  $value;
    }
}
echo "Max reiksme: $biggest <br>";
echo 'Index: '.array_search($biggest,$masyvas);

echo'<br>c) <br>';//-----------------------------
$sum = 0;
foreach ($masyvas as $key => $value) {
    if ($key % 2 === 0) {
        $sum += $value;
    }
}
echo "Poriniu index'u suna: $sum";

echo'<br>d) <br>';//-----------------------------
$masyvas_d = [];
foreach ($masyvas as $key => $value) {
    array_push($masyvas_d,($value-$key));
}
print_r($masyvas_d);

echo'<br>e) <br>';//-----------------------------
for ($i=0; $i < 10 ; $i++) { 
    array_push($masyvas_d, rand(5,25));
}
print_r($masyvas_d);

echo'<br>f) <br>';//-----------------------------

$masyvas_f1 = [];
$masyvas_f2 = [];

foreach ($masyvas_d as $key => $value) {
    if ($key % 2 === 0) {
        array_push($masyvas_f2, $value);
    } else{
        array_push($masyvas_f1, $value);
    }
}
print_r($masyvas_f1);
print_r($masyvas_f2);

echo '<br><hr>';
// 3 ///////////////////////////////////////////////////////////////////////////
echo '3) <br>';



echo '<br><hr>';
// 4 ///////////////////////////////////////////////////////////////////////////
echo '4) <br>';



echo '<br><hr>';
// 5 ///////////////////////////////////////////////////////////////////////////
echo '5) <br>';



echo '<br><hr>';
// 6 ///////////////////////////////////////////////////////////////////////////
echo '6) <br>';



echo '<br><hr>';
// 7 ///////////////////////////////////////////////////////////////////////////
echo '7) <br>';



echo '<br><hr>';
// 8 ///////////////////////////////////////////////////////////////////////////
echo '8) <br>';



echo '<br><hr>';
// 9 ///////////////////////////////////////////////////////////////////////////
echo '9) <br>';



echo '<br><hr>';
// 10 ///////////////////////////////////////////////////////////////////////////
echo '10) <br>';



echo '<br><hr>';
// 11 ///////////////////////////////////////////////////////////////////////////
echo '11) <br>';