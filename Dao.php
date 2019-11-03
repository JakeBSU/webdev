mysql://b9719fdd1787f7:00f7255a@us-cdbr-iron-east-05.cleardb.net/heroku_9604bb6ecbe8698?reconnect=true<?php

<?php
class Dao {
private $host = "us-cdbr-iron-east-05.cleardb.net";
private $db = "heroku_9604bb6ecbe8698";
private $user = "b9719fdd1787f7";
private $pass = "00f7255a";
public function getConnection () {
return
new PDO("mysql:host={$this->host};dbname={$this->db}"
}

/*
*
*<?php
   define('DB_SERVER', 'localhost:3036');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'rootpassword');
   define('DB_DATABASE', 'database');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
*
*/