<body style="background-color:cadetblue ;"></body>
<?php
// 1 ///////////////////////////////////////////////////////////////////////////
echo '1) <br>';
$vardas = 'Keanu'; 
$pavarde = 'Reeves';

if (strlen($vardas) > strlen($pavarde)) {
    echo "Vardas ilgesnis, spausdinam pavarde $pavarde";
}elseif (strlen($vardas) < strlen($pavarde)) {
    echo "Pavardae ilgesne, spausdinam varda $vardas";
}else{
    echo "Vardas su pavarde yra lygus, spausdinam $vardas $pavarde ";
}

echo '<br><hr>';
// 2 ///////////////////////////////////////////////////////////////////////////
echo '2) <br>';

$vardas = 'Keanu'; 
$pavarde = 'Reeves';

echo strtoupper($vardas) . ' ' . strtolower($pavarde);

echo '<br><hr>';
// 3 ///////////////////////////////////////////////////////////////////////////
echo '3) <br>';

$vardas = 'Keanu'; 
$pavarde = 'Reeves';
$inicialai = $vardas[0].$pavarde[0];

echo $inicialai;

echo '<br><hr>';
// 4 ///////////////////////////////////////////////////////////////////////////
echo '4) <br>';

$vardas = 'Keanu'; 
$pavarde = 'Reeves';
$paskutines3raides = substr($vardas,-3).substr($pavarde,-3);

echo $paskutines3raides;

echo '<br><hr>';
// 5 ///////////////////////////////////////////////////////////////////////////
echo '5) <br>';

$pavadinimas = 'An American in Paris'; 

echo str_replace(['A','a'],'*',$pavadinimas);

echo '<br><hr>';
// 6 ///////////////////////////////////////////////////////////////////////////
echo '6) <br>';

$pavadinimas = 'An American in Paris'; 

echo substr_count(strtolower($pavadinimas),'a');


echo '<br><hr>';
// 7 ///////////////////////////////////////////////////////////////////////////
echo '7) <br>';

$pavadinimas1 = 'An American in Paris'; 
$pavadinimas2 = 'Breakfast at Tiffany\'s'; 
$pavadinimas3 = '2001: A Space Odyssey'; 
$pavadinimas4 = 'It\'s a Wonderful Life'; 

function balsiuNaikintojas($string){
    $string = str_replace(['A','a','E','e','I','i','Y','y','O','o','U','u'],'',$string);
    return $string.'<br>';
}

echo balsiuNaikintojas($pavadinimas1);
echo balsiuNaikintojas($pavadinimas2);
echo balsiuNaikintojas($pavadinimas3);
echo balsiuNaikintojas($pavadinimas4);

echo '<br><hr>';
// 8 ////////////////////////////////////////////////////////          ///////////////////
echo '8) <br>';

$starWars ='Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo $starWars.'<br> ';

$starWars = str_replace("str_repeat(' ',rand(0,5)). rand(1,9)", '4', $starWars);
echo $starWars; 

;

echo '<br><hr>';
// 9 ///////////////////////////////////////////////////////////////////////////
echo '9) <br>';

$hood = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";

str_word_count($hood,5);
echo $hood;