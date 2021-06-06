<body style="background-color:cadetblue ;"></body>

<?php
// 1 ///////////////////////////////////////////////////////////////////////////
echo '1) <br>';

// a)
echo "<div style='overflow-wrap: break-word;'>";

$newLine = 50;

for ($i = 1; $i <= 400; $i++) { 
    echo '*';

    // b)
    if ($i === $newLine) {
        echo '<br>';
        $newLine+=50;
    }
}
echo '</div>';


echo '<br><hr>';
// 2 ///////////////////////////////////////////////////////////////////////////
echo '2) <br>';

$counter = 0;

for ($i= 1; $i < 300 ; $i++) { 
    $sk = rand(0,300);
    
    if ($sk >= 150) {
        $counter++;
    }
    if ($sk >= 275) {
        echo "<font color='red'>$sk </font>";
    }
    echo $sk.' ';
}
echo "<br>Skaiciu didesniu kaip 150 yra $counter";


echo '<br><hr>';
// 3 ///////////////////////////////////////////// [Nebaigta] //////////////////////////////
echo '3) <br>';



$aibe = rand(1,rand(3000,4000));
echo "aibe: $aibe <br>";

for ($i = 77; $i <= $aibe; $i++) { 
    if ($i % 77 === 0) {

        echo $i .', ';
    }
}


echo '<br><hr>';
// 4, 5 /////////////////////////////////////////////////////////// [Nebaigta] ////////////////
echo '4, 5) <br><br>';

echo "<div style='line-height: 50%;'>";

$side = 25;

for($i = 0; $i < $side; $i++) {
    for($j = 0; $j < $side; $j++) {
        echo '*';
    }
    echo '<br>';
}

echo '<br>';

for($i=0; $i <= $side; $i++) {
    for($j=0; $j <= $side; $j++) {

        if ($i===$j) {
            echo "<font color='red'>*</font>";

        } elseif ($i + $j === $side) {
            echo "<font color='red'>*</font>";
            
        } else {
            echo '*';
        }

    }
    echo '<br>';

}
echo '</div>';


echo '<br><hr>';
// 6 /////////////////////////////////////////////////////////// [Nebaigta] ////////////////
echo '6) <br><br>';

$monetosPuse = '';

do {
    $metimas = rand(0,1);
    
    if ($metimas === 0) {
        $monetosPuse.='H';
    }elseif($metimas === 1){
        $monetosPuse.='S';
    }
} while (!$monetosPuse == '/[HHH]/');

echo $monetosPuse;