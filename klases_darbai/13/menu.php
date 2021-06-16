<div>
    <a href="http://localhost/_php_/klases_darbai/13/users.php">users</a>
    <a href="http://localhost/_php_/klases_darbai/13/">Home</a>
    <a href="http://localhost/_php_/klases_darbai/13/member.php">Member</a>
    <?php if (!isset($_SESSION['logged'])) : ?> 
    <a href="http://localhost/_php_/klases_darbai/13/login.php">Login</a>
    <?php else :  ?>
    <a href="http://localhost/_php_/klases_darbai/13/login.php?logout">Logout</a>
    <?php endif ?>
</div>