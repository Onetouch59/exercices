<?php 
session_start(); 
include('header.php'); 
require_once('db-connect.php');
if (isset($_GET['id'])&&!empty($_GET['id'])) {
    $id = strip_tags($_GET['id']);
    $sql = 'SELECT * FROM `topics` WHERE `topic_id`=:id';
    $query = $db->prepare($sql);
    $query->bindValue(':id',$id,PDO::PARAM_STR);
    $query ->execute();
    $topic = $query->fetch();
    echo 'ça marche ! ';
} else {
    $_SESSION['error']='Je ne sais pas ou vous voulez aller !' ;
    header('Location:index.php');
}


?>