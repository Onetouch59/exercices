<?php

require_once("db-connect.php");
/* cherche une entrée dans la base de données (username) qui correspond avec ce que l'utilisateur a renseigné dans le formaulaire */
$sql = 'SELECT id, username, password FROM users WHERE username=:username';
$query = $db->prepare($sql);
$query->execute (array('username'=>$_POST['username']));
$result = $query->fetch();

if(!$result){
    echo 'l\'identifiant et/ou le mot de passe sont incorrects';
}else{
    echo 'C\'est ok';
    $verif = password_verify($_POST['password'],$result['password']);
    if(!$verif){
        echo 'l\'identifiant et/ou le mot de passe sont incorrects';
    }else{
        session_start();
        $_SESSION['id']=$result['id'];
        $_SESSION['username']=$result['username'];
        $_SESSION['success']='connexion réussie';
        header('Location:home.php');
    }


}