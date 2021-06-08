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

$int = filter_var($str, FILTER_SANITIZE_NUMBER_INT);
insertToH1($int);






