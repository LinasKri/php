<?php
    

    
    $skaiciai[ ] = array($_GET['skaiciai1'],$_GET['skaiciai2'],$_GET['skaiciai3']);


// print_r($skaiciai);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <form action="" method="get">
    <input type="text" name="skaiciai1"><br><br>
    <input type="text" name="skaiciai2"><br><br>
    <input type="text" name="skaiciai3"><br><br>
    
    <button type="submit">GO</button>
    <button type="reset">reset</button>
    <?php
        usort($skaiciai, function($a, $b){
            return $a['skaiciai'] <=> $b['skaiciai'];
        });
    ?>
    <h1>Result: </h1>
    <?= print_r($skaiciai)?>
    
    </form>
</body>
</html>