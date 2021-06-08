<body style="background-color:mediumseagreen ;"></body>

<?php
// 1 ///////////////////////////////////////////////////////////////////////////
echo '1) <br>';

function insertToH1($string){
    return "<h1> $string </h1>";
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

$num = filter_var($str, FILTER_SANITIZE_NUMBER_INT);

echo insertToH1($num);


// 4 ///////////////////////////////////////////////////////////////////////////
echo '<br><hr>';echo '4) <br>';


function beLiekanos($num){
    $kiek = 0;
    $daliklis = 2;

    if (is_int($num) === true) {
        while ($num > $daliklis) {
            if ($num % $daliklis === 0) {
            $kiek++;
            }
            $daliklis++;
        }
        return $kiek;
    } else {
        return 'Naudoti tik sveikus skaicius!';
    }
}
$num = rand(9,100);
echo "$num<br>";
echo beLiekanos($num);

// 5 ///////////////////////////////////////////////////////////////////////////
echo '<br><hr>';echo '5) <br>';

$masyvas = [];

for ($i=0; $i < 100; $i++) { 
    $masyvas[]= rand(33, 77);
}
echo '<pre>';
print_r($masyvas);

foreach ($masyvas as $value) {
    if(beLiekanos($value)>){

    }
}
