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
// 4 ///////////////////////////////////////////////////////////////////////////
echo '4) <br><br>';

echo "<div style='line-height: 50%;'>";

for($i=0; $i<25; $i++) {
    for($j=0; $j<25; $j++) {
    echo '*';
    }
    echo '<br>';
}

echo '</div>';
