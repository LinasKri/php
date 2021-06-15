<?php
function DelayCommand($functionToDelay, $delayTimeInSeconds) {
    sleep($delayTimeInSeconds);
    $functionToDelay();
}
$id = $_GET['id'] ?? 0;
foreach ($accounts as &$account) {
    if ($account['id'] == $id) {
        if ($account['funds'] > 0) {

            $account['funds'] -= (int) $_POST['funds'];
            file_put_contents(__DIR__.'/accounts.json', json_encode($accounts));
            redirect();
        }else{
            echo 'insufficient funds!!! Please go back :)';
            
        }
    }
}
