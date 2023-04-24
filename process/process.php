<?php

    if($_POST['username'] == 'admin' && $_POST['password'] == 'admin'){
        echo 'login successful';
    }else{
        echo 'login failed';
    }
?>