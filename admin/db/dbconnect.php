<?php


try {
    // $db_name='c10mkb';
    //
    $host = 'localhost';
    $db_name='stajim';
    $charset ='utf8';
    $username = 'root';
    $password = '';
    $db = new PDO("mysql:host=$host;dbname=$db_name;charset=$charset",$username,$password);
    
} catch (PDOException $e) {
    
    echo 'Veri tabanı bağlantı hatası: '.$e;

}
?>s