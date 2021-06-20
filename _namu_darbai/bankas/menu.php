<div>
<a href="https://localhost/_php_/_namu_darbai/bankas/users.php">users</a>
<a href="?action=add-acc">Add account</a>
<a href="http://localhost/_php_/_namu_darbai/bankas/">Home</a>
<?php if(!isset($_SESSION['logged'])) : ?>
<a href="https://localhost/_php_/_namu_darbai/bankas/login.php">Login</a>
<?php else : ?>
<a href="https://localhost/_php_/_namu_darbai/bankas/login.php?logout">Logout</a>
<?php endif ?>
</div>