<?php
class Users{
    public function login(){

    }
    public function register($data){
        ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
        $pdo = new PDO('mysql:host=localhost;dbname=chats','root','');

        $query = 'INSERT INTO accounts(name,username,password) VALUES(:name,:username,:
    }
}