<?php
$id = $_GET['id'] ?? 0;
foreach ($accounts as &$account) {
    if ($account['id'] == $id) {
        $account['funds'] -= (int) $_POST['funds'];
        file_put_contents(__DIR__.'/accounts.json', json_encode($accounts));
        redirect();
    }
}
