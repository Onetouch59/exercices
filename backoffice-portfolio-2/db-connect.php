<?php
$serveurname = 'localhost';
$dbname = 'backoffice_exemple';
$username = 'root';
$password = '';
try {
    $db = new PDO("mysql:host=$serveurname; dbname=$dbname", $username,$password);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /* echo 'success'; */
} catch (PDOException $e) {
    echo 'connexion fail :' .$e->getMessage();
}