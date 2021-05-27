<?php
// 1
echo '1) <br>';

$vardas = 'Linas';
$pavarde = 'Kri';
$gimMetai = 1991;
$esamiMetai = 2021;


echo 'As esu '. $vardas. ' '. $pavarde.' . Man yra '. $esamiMetai - $gimMetai. ' metu.';

echo '<br> ========== <br>';
// 2 //////////////////////////////////////////////////////////////
echo '2) <br>';

$pirmas = rand(0,4);
$antras = rand(0,4);

echo $pirmas, '<br>';
echo $antras, '<br>';


if ($pirmas > $antras) {
    if ($antras != 0){
        echo round($pirmas/$antras,2);
    }else{
        echo 'dalyba is 0 negalima';
    }
} elseif($pirmas< $antras) {
    if ($pirmas != 0) {
        echo round($antras/$pirmas,2);
    } else {
        echo 'dalyba is 0 negalima';
    }
}else {
    echo 'Nariai lygus';
}

echo '<br>=========<br>';
// 3 //////////////////////////////////////////////////////////////
echo '3) <br>';

$pirm = rand(0,25);
$antr = rand(0,25);
$trec = rand(0,25);


echo $pirm. ', '. $antr.', '. $trec;
echo '<br>----------- <br>';

if($pirm>$antr && $pirm<$trec && $antr< $trec){  // reikia fix'o  
    echo $pirm;
}elseif($antr>$pirm && $antr<$trec && $pirm<$trec){
    echo $antr;
}elseif($trec >$pirm && $trec<$antr && $pirm< $antr){
    echo $trec;
}elseif ($pirm===$antr|| $antr===$trec|| $pirm===$trec) {
    echo 'Bent du nariai lygus';
}

// echo $pirm, $antr, $trec;

echo '<br> ========== <br>';
// 4 //////////////////////////////////////////////////////////////
echo '4) <br>';

$a = rand(1,10);
$b = rand(1,10);
$c = rand(1,10);

echo $a. ', '. $b.', '. $c. '<br>';


if(($a + $b) > $c && ($a + $c) > $b && ($b + $c) > $a ){
    echo 'Trikampis gaunasi';
} else {
    echo 'Trikampis nesigauna';
}


echo '<br> ========== <br>';
// 5 ////////////////////////////////////////////////////////////////////
echo '5) <br>';

$k1 = rand(0,2);
$k2 = rand(0,2);
$k3 = rand(0,2);
$k4 = rand(0,2);

echo $k1. ', '. $k2.', '. $k3. ', '. $k4.'<br>';


    $nulis = 0;
    $vienas = 0;
    $du = 0;


if ($k1 === 0) {
    $nulis++;
}elseif($k1===1){
    $vienas++;
}else{
    $du++;
}
if ($k2 === 0) {
    $nulis++;
}elseif($k2===1){
    $vienas++;
}else{
    $du++;
}
if ($k3 === 0) {
    $nulis++;
}elseif($k3===1){
    $vienas++;
}else{
    $du++;
}
if ($k4 === 0) {
    $nulis++;
}elseif($k4===1){
    $vienas++;
}else{
    $du++;
}

echo '0 = ', $nulis, '; 1 = ', $vienas, '; 2 = ', $du;


echo '<br> ========== <br>';
// 6 ///////////////////////////////////////////////////////////
echo '6) <br>';

$busimasH = rand(1,6);
echo '<h', $busimasH, '>', $busimasH, '</h', $busimasH,'>', '<br>';

echo '<br> ========== <br>';
// 7 //////////////////////////////////////////////////////////////
echo '7) <br>';

$sk1 = rand(-10,10);
$sk2 = rand(-10,10);
$sk3 = rand(-10,10);
                                    

if ($sk1<0) {
    echo "<font color='green'>",$sk1,"</font><br>";
}
if ($sk1===0) {
    echo "<font color='red'>",$sk1,"</font><br>";
}
if ($sk1>0) {
    echo "<font color='blue'>",$sk1,"</font><br>";
}
if ($sk2<0) {
    echo "<font color='green'>",$sk2,"</font><br>";
}
if ($sk2===0) {
    echo "<font color='red'>",$sk2,"</font><br>";
}
if ($sk2>0) {
    echo "<font color='blue'>",$sk2,"</font><br>";
}
if ($sk3<0) {
    echo "<font color='green'>",$sk3,"</font><br>";
}
if ($sk3===0) {
    echo "<font color='red'>",$sk3,"</font><br>";
}
if ($sk3>0) {
    echo "<font color='blue'>",$sk3,"</font><br>";
}

echo '<br> ========== <br>';
// 8 //////////////////////////////////////////////////////////////
echo '8) <br>';

$zvakiuKiekis = rand(5, 3000);

if ($zvakiuKiekis<1000){
    echo 'kiekis: '. $zvakiuKiekis. ', kaina: '. $zvakiuKiekis;
}
if ($zvakiuKiekis>= 1000 && $zvakiuKiekis<2000) {
    echo 'kiekis: '. $zvakiuKiekis.' , nuolaida: '.$zvakiuKiekis * 0.03 . ' , kaina: '. $zvakiuKiekis - ($zvakiuKiekis * 0.03);
}
if ($zvakiuKiekis>= 2000) {
    echo 'kiekis: '. $zvakiuKiekis. ' , nuolaida: '.$zvakiuKiekis * 0.04 .' , kaina: '. $zvakiuKiekis - ($zvakiuKiekis * 0.04);
}

echo '<br> ========== <br>';
// 9 //////////////////////////////////////////////////////////////
echo '9) <br>';

$kint1 = rand(0,100);
$kint2 = rand(0,100);
$kint3 = rand(0,100);

echo $kint1. ' ' .$kint2. ' ' .$kint3.'<br>'; 

echo 'Avg = '.($kint1 + $kint2 + $kint3) / 3 . '<br>';

if (10 < $kint1 && $kint1 < 90 && 10 < $kint2 && $kint2 < 90 && 10 < $kint3 && $kint3 < 90) {
    echo 'Avg2 = '.($kint1 + $kint2 + $kint3) / 3 . '<br>';
}


echo '<br> ========== <br>';
// 10 /////////////////////////////////////////////////////////////
echo '10) <br>';

