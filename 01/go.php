<?php
// 1
$vardas = 'Linas';
$pavarde = 'Kri';
$gimMetai = 1991;
$esamiMetai = 2021;


echo 'As esu ', $vardas, ' ', $pavarde,' . Man yra ', $esamiMetai - $gimMetai, ' metu.';
echo '<br>';

// 2 

$pirmas = rand(0,4);
$antras = rand(0,4);

echo $pirmas;
echo '<br>';
echo $antras;
echo '<br>';


if ($pirmas> $antras) {
    if ($antras != 0){
        echo $pirmas/$antras;
    }else{
        echo 'dalyba is 0 negalima';
    }
} else {
    if ($pirmas != 0) {
        echo $antras/$pirmas;
    } else {
        echo 'dalyba is 0 negalima';
    }
}


