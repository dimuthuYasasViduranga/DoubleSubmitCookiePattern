<?php
session_start();
session_destroy();
unset($_COOKIE['stkn']);
unset($_COOKIE['csrfTkn']);
setcookie ("stkn", "", time()-3600, '/');
setcookie ("csrfTkn", "", time()-3600, '/'); 

header('Location: Login.php');
?>