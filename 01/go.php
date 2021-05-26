<?php
// 1
$vardas = 'Linas';
$pavarde = 'Kri';
$gimMetai = 1991;
$esamiMetai = 2021;


echo 'As esu ', $vardas, ' ', $pavarde,' . Man yra ', $esamiMetai - $gimMetai, ' metu. <br>';


// 2 

// $pirmas = rand(0,4);
// $antras = rand(0,4);

// echo $pirmas, '<br>';
// echo $antras, '<br>';


// if ($pirmas> $antras) {
//     if ($antras != 0){
//         echo round($pirmas/$antras,2);
//     }else{
//         echo 'dalyba is 0 negalima';
//     }
// } else {
//     if ($pirmas != 0) {
//         echo round($antras/$pirmas,2);
//     } else {
//         echo 'dalyba is 0 negalima';
//     }
// }
// echo '<br>';

// 3 

$pirmas = rand(0,25);
$antras = rand(0,25);
$trecias = rand(0,25);


echo $pirmas, ', ', $antras,', ', $trecias;
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
vidurinis($pirmas, $antras, $trecias);

echo '<br> ========== <br>';

// 4 

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

$k1 = rand(0,2);
$k2 = rand(0,2);
$k3 = rand(0,2);
$k4 = rand(0,2);

echo $k1, ', ', $k2,', ', $k3, ', ', $k4,'<br>';

function kiekSkaitmenu($a, $b, $c, $d){

}
