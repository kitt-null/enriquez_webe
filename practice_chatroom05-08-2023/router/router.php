<?php
require_once('../classess/class.users.php');
$users = new Users;
if($_GET['ind'] == 'register'){
    if($users->register($__POST)){
        echo 'sucess';
    }
}