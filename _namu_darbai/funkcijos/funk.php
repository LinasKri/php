<body style="background-color:mediumseagreen ;"></body>

<?php
// // 1 ///////////////////////////////////////////////////////////////////////////
// echo '1) <br>';

// function insertToH1($string){
//     return "<h1> $string </h1>";
// }

// echo insertToH1('labas');


// // 2 ///////////////////////////////////////////////////////////////////////////
// echo '<br><hr>';echo '2) <br>';

// function makeATag($string, $int){
//     return "<h$int> $string </h$int>";
// }
// echo makeATag('Ate', rand(1,6));


// // 3 ///////////////////////////////////////////////////////////////////////////
// echo '<br><hr>';echo '3) <br>';

// $str =  md5(time());
// echo $str.'<br>';

// $num = filter_var($str, FILTER_SANITIZE_NUMBER_INT);

// echo insertToH1($num);


// // 4 ///////////////////////////////////////////////////////////////////////////
// echo '<br><hr>';echo '4) <br>';


// function beLiekanos($num){
//     $kiek = 0;
//     $daliklis = 2;

//     if (is_int($num) === true) {
//         while ($num > $daliklis) {
//             if ($num % $daliklis === 0) {
//             $kiek++;
//             }
//             $daliklis++;
//         }
//         return $kiek;
//     } else {
//         return 'Naudoti tik sveikus skaicius!';
//     }
// }
// $num = rand(9,100);
// echo "$num<br>";
// echo beLiekanos($num);


// // 5 ///////////////////////////////////////////////////////////////////////////
// echo '<br><hr>';echo '5) <br>';
// echo '<pre>';

// $masyvas = [];

// for ($i=0; $i < 100; $i++) { 
//     $masyvas[] = rand(33, 77);
// }
// print_r($masyvas).'<br>';

// usort($masyvas, function($a, $b) {
//     return beLiekanos($a) <=> beLiekanos($b);
// });

// print_r(array_reverse($masyvas)); 


// // 6 ///////////////////////////////////////////////////////////////////////////
// echo '<br><hr>';echo '6) <br>';


// $masyvas = [];
// $pirminiai = [];
// for ($i=0; $i < 100; $i++) { 
//     $masyvas[] = rand(333, 777);
// }

// foreach ($masyvas as $key => $value) {
//     if (beLiekanos($value) === 0 ) {
//         $pirminiai [] = $value;
//     }
// }
// print_r($pirminiai);


// 7 ///////////////////////////////////////////////////////////////////////////
echo '<br><hr>';echo '7) <br>';
echo '<pre>';



for ($i=0; $i < rand(10, 30) ; $i++) { 
    
    $arr_size = rand(10,20);
    // echo $arr_size.'<br>';
    
    for ($i=0; $i < $arr_size - 1; $i++) { 
        $masyvas[] = rand(0, 10);
    }
    $last = rand(10,20);
    
    for ($i=0; $i < $last - 1; $i++) { 
        $masyvas2[]= rand(0, 10);
    }
    $masyvas[] = $masyvas2;

}


$masyvas[count($masyvas) - 1][$masyvas2[count($masyvas2) - 1]] = array_push($masyvas2, 0);
print_r($masyvas);



// $masyvas[] = $last;

// $masyvas[$arr_size][$last] = 0;

// print_r($masyvas);

// 8 ///////////////////////////////////////////////////////////////////////////
echo '<br><hr>';echo '8) <br>';



// 9 ///////////////////////////////////////////////////////////////////////////
echo '<br><hr>';echo '9) <br>';


// 10 ///////////////////////////////////////////////////////////////////////////
echo '<br><hr>';echo '10) <br>';


// 11 ///////////////////////////////////////////////////////////////////////////
echo '<br><hr>';echo '11) <br>';
