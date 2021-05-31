<body style="background-color:cadetblue ;"></body>
<?php

echo '1)<br>';

$vardas = 'Keanu'; 
$pavarde = 'Reeves';

if (strlen($vardas) > strlen($pavarde)) {
    echo "Vardas ilgesnis, spausdinam pavarde $pavarde";
}elseif (strlen($vardas) < strlen($pavarde)) {
    echo "Pavardae ilgesne, spausdinam varda $vardas";
}else{
    echo "Vardas su pavarde yra lygus, spausdinam $vardas $pavarde ";
}

echo '<br><hr><br>';