<body style="background-color:cadetblue ;"></body>

<?php
// 1 ///////////////////////////////////////////////////////////////////////////
echo '1) <br>';

foreach (range(1,10) as $keyBig => $_) {
    foreach (range(1,5) as $keySmall => $_) {
        $masyvas[$keyBig][$keySmall] = rand(5,25);
    }
}

echo'<pre>';
print_r($masyvas);


echo '<br><hr>';
// 2 ///////////////////////////////////////////////////////////////////////////
echo '2) <br>';
echo'a) <br>';//--------------a---------------