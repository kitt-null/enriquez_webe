<?php
    require_once('../class/class.accounts.php');
    $accounts = new Accounts;
    if($_GET['ref'] == 'login'){
        $accounts->login($_POST['username'],$_POST['password']);
    }
?>