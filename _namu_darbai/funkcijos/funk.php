<body style="background-color:mediumseagreen ;"></body>

<?php
// 1 ///////////////////////////////////////////////////////////////////////////
echo '1) <br>';

function insertToH1(string|array $text) : string {
    if (is_array($text)) {
        $text = $text[0];
    }
    return "<h1 style = \"display:inline;\"> $text </h1>";
}

echo insertToH1('labas');


// 2 ///////////////////////////////////////////////////////////////////////////
echo '<br><hr>';echo '2) <br>';

function makeATag($string, $int){
    return "<h$int> $string </h$int>";
}
echo makeATag('Ate', rand(1,6));


// 3 ///////////////////////////////////////////////////////////////////////////
echo '<br><hr>';echo '3) <br>';

$str =  md5(time());
echo $str.'<br>';

$num = preg_replace_callback('/\d+/', 'insertToH1', $str);

echo insertToH1($num);


// 4 ///////////////////////////////////////////////////////////////////////////
echo '<br><hr>';echo '4) <br>';


function beLiekanos(int $num) : int {
    $kiek = 0;
    $daliklis = 2;

        while ($num > $daliklis) {
            if ($num % $daliklis === 0) {
            $kiek++;
            }
            $daliklis++;
        }
        return $kiek;
}
$num = rand(9,100);
echo "$num<br>";
echo beLiekanos($num);


// 5 ///////////////////////////////////////////////////////////////////////////
echo '<br><hr>';echo '5) <br>';
echo '<pre>';

$masyvas = [];

foreach (range(1, 100) as $_) {
    $masyvas[] = rand(33, 77);
}

print_r($masyvas).'<br>';

usort($masyvas, function($a, $b) {

    return beLiekanos($a) <=> beLiekanos($b);
});

print_r(array_reverse($masyvas)); 


// 6 ///////////////////////////////////////////////////////////////////////////
echo '<br><hr>';echo '6) <br>';


$masyvas = [];
$pirminiai = [];

for ($i=0; $i < 100; $i++) { 
    $masyvas[] = rand(333, 777);
}

foreach ($masyvas as $key => $value) {
    if (beLiekanos($value) === 0 ) {
        $pirminiai [] = $value;
    }
}
print_r($pirminiai);


// 7 ///////////////////////////////////////////////////////////////////////////
echo '<br><hr>';echo '7) <br>';
echo '<pre>';


function gen_array($count){   
    $length = rand(10, 20);
    foreach (range(1, $length - 1) as $_) {
        $masyvas[] = rand(0, 10);
    }
    $masyvas[] = 0;
    if ($count > 0) {
        $masyvas[$length - 1] = gen_array(--$count);
    }
    return $masyvas;
}
$masyvas = gen_array(30);
_dc($masyvas);


// function generate($r) {

//     static $i = 1;

//     if ($i <= $r) {
//         $z = rand(10, 20);
//         foreach (range(1, $z) as $key => $_) {
//             if ($key == ($z - 1) && $i == $r) {
//                 $arr[] = 0;
//             } elseif ($key == ($z - 1) && $i != $r) {
//                 $i++;
//                 $arr[] = generate($r);
//             } else {
//                 $arr[] = rand(0, 10);
//             }
//         }
//         return $arr;
//     }
// }


// 8 ///////////////////////////////////////////////////////////////////////////
echo '<br><hr>';echo '8) <br>';

function calc($masyvas) {
    $sum = 0;

    foreach($masyvas as $key => $value) {
        if(!is_array($value)) {
            $sum += $value;
        } else {
            $sum += calc($value);
        }
    }
    return $sum;
} 

print_r(calc($masyvas));



// 9 ///////////////////////////////////////////////////////////////////////////
echo '<br><hr>';echo '9) <br>';


// 10 //////////////////////////////////////////////////////////////////////////
echo '<br><hr>';echo '10) <br>';

// $masyvas = [];

// foreach (range(1,10) as $key => $value) {
//     foreach ($value as $value2) {
//         $masyvas[] = gen_array();
//     }
// }
// print_r($masyvas);

// 11 //////////////////////////////////////////////////////////////////////////
echo '<br><hr>';echo '11) <br>';


  