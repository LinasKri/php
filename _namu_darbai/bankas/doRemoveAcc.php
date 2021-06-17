<?php
$id = $_GET['id'] ?? 0;
foreach ($accounts as $index => $account) {
    if ($account['id'] == $id) {
        if ($account['funds'] == 0) {
            unset($accounts[$index]);
            file_put_contents(__DIR__.'/accounts.json', json_encode($accounts));
            setMessage('Saskaita istrinta');
            redirect();
        } else {
            setMessage('Account can not be deleted due to current balamce: ' .$account['funds'].' €');
            redirect();
        }
    }
}
