<body style="background-color:cadetblue ;"></body>

<?php
// 1 ///////////////////////////////////////////////////////////////////////////
echo '1) <br>';

$newLine = 50;
echo "<div style='overflow-wrap: break-word;'>";
for ($i = 1; $i <= 400; $i++) { 
    echo '*';
    if ($i === $newLine) {
        echo '<br>';
        $newLine+=50;
    }
}
echo '</div>';

echo '<br><hr>';
// 2 ///////////////////////////////////////////////////////////////////////////
echo '2) <br>';