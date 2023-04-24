<?php
    class Accounts{
        public function login($username,$password){
            if($username == 'admin' && $password == 'admin'){
                echo 'login successful';
            }
                else{
                    echo 'login failed';
                }
        }
    }      
?>