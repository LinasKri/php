<?php
// 1
echo '1) <br>';

$vardas = 'Linas';
$pavarde = 'Kri';
$gimMetai = 1991;
$esamiMetai = 2021;


echo 'As esu ', $vardas, ' ', $pavarde,' . Man yra ', $esamiMetai - $gimMetai, ' metu.';
echo '<br> ========== <br>';

// 2 
echo '2) <br>';

$pirmas = rand(0,4);
$antras = rand(0,4);

echo $pirmas, '<br>';
echo $antras, '<br>';


if ($pirmas> $antras) {
    if ($antras != 0){
        echo round($pirmas/$antras,2);
    }else{
        echo 'dalyba is 0 negalima';
    }
} else {
    if ($pirmas != 0) {
        echo round($antras/$pirmas,2);
    } else {
        echo 'dalyba is 0 negalima';
    }
}
echo '<br>=========<br>';

// 3 
echo '3) <br>';

$pirm = rand(0,25);
$antr = rand(0,25);
$trec = rand(0,25);


echo $pirm, ', ', $antr,', ', $trec;
echo '<br>----------- <br>';

function vidurinis($a,$b,$c){
                                // reikia fix'o
    if($a>$b && $a<$c){
        echo $a;
    }else if($b>$a && $b<$c){
        echo $b;
    }else if($c>$a && $c<$b){
        echo $c;
    }
    
}
vidurinis($pirm, $antr, $trec);

echo '<br> ========== <br>';

// 4 
echo '4) <br>';

$a = rand(1,10);
$b = rand(1,10);
$c = rand(1,10);

echo $a, ', ', $b,', ', $c, '<br>';

function arTrikampis($a, $b, $c){
    if(($a + $b) > $c && ($a + $c) > $b && ($b + $c) > $a ){
        echo 'Trikampis gaunasi';
    } else {
        echo 'Trikampis nesigauna';
    }
}
arTrikampis($a, $b, $c);

echo '<br> ========== <br>';

// 5 
echo '5) <br>';

$k1 = rand(0,2);
$k2 = rand(0,2);
$k3 = rand(0,2);
$k4 = rand(0,2);

echo $k1, ', ', $k2,', ', $k3, ', ', $k4,'<br>';

function kiekSkaitmenu($a, $b, $c, $d){
    $nulis = 0;
    $vienas = 0;
    $du = 0;

    switch ($a) {
        case '0':
            $nulis++;
            break;
        case '1':
            $vienas++;
            break;
        case '2':
            $du++;
            break;
        default:
            # code...
            break;
    }
    switch ($b) {
        case '0':
            $nulis++;
            break;
        case '1':
            $vienas++;
            break;
        case '2':
            $du++;
            break;
        default:
            # code...
            break;
    }
    switch ($c) {
        case '0':
            $nulis++;
            break;
        case '1':
            $vienas++;
            break;
        case '2':
            $du++;
            break;
        default:
            # code...
            break;
    }
    switch ($d) {
        case '0':
            $nulis++;
            break;
        case '1':
            $vienas++;
            break;
        case '2':
            $du++;
            break;
        default:
            # code...
            break;
    }
    echo '0 = ', $nulis, '; 1 = ', $vienas, '; 2 = ', $du;
}
kiekSkaitmenu($k1,$k2,$k3,$k4);
echo '<br> ========== <br>';

// 6 
echo '6) <br>';

$busimasH = rand(1,6);
echo '<h', $busimasH, '>', $busimasH, '</h', $busimasH,'>', '<br>';

// 7
echo '7) <br>';

$sk1 = rand(-10,10);
$sk2 = rand(-10,10);
$sk3 = rand(-10,10);
                                    
function coloredValues($a,$b,$c){
    if ($a<0) {
        echo "<font color='green'>",$a,"</font><br>";
    }
    if ($a===0) {
        echo "<font color='red'>",$a,"</font><br>";
    }
    if ($a>0) {
        echo "<font color='blue'>",$a,"</font><br>";
    }
    if ($b<0) {
        echo "<font color='green'>",$b,"</font><br>";
    }
    if ($b===0) {
        echo "<font color='red'>",$b,"</font><br>";
    }
    if ($b>0) {
        echo "<font color='blue'>",$b,"</font><br>";
    }
    if ($c<0) {
        echo "<font color='green'>",$c,"</font><br>";
    }
    if ($c===0) {
        echo "<font color='red'>",$c,"</font><br>";
    }
    if ($c>0) {
        echo "<font color='blue'>",$c,"</font><br>";
    }
}

coloredValues($sk1,$sk2,$sk3);
echo '<br> ========== <br>';

// 8
echo '8) <br>';

$zvakiuKiekis = rand(5, 3000);

function zvakiuKaina($a){
    if ($a<1000){
        echo 'kiekis: ', $a, ' kaina: ', $a;
    }
    if ($a>= 1000 && $a<2000) {
        echo 'kiekis: ', $a, ', kaina: ', $a - ($a * 0.03);
    }
    if ($a>= 2000) {
        echo 'kiekis: ', $a, ', kaina: ', $a - ($a * 0.04);
    }
}
zvakiuKaina($zvakiuKiekis);
echo '<br> ========== <br>';

// 9
echo '9) <br>';

$kint1 = rand(0,100);
$kint2 = rand(0,100);
$kint3 = rand(0,100);

echo $kint1, ' ',$kint2, ' ',$kint3,'<br>'; 

function avg($a,$b,$c){
    echo ($a+$b+$c)/3;
}
avg($kint1, $kint2, $kint3);

