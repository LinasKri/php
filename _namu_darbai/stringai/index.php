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
