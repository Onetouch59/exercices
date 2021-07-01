<?php
session_start();

if($_POST){

    if(isset($_POST['author'])&&!empty($_POST['author'])&&
    isset($_POST['object'])&&!empty($_POST['object'])&&
    isset($_POST['text'])&&!empty($_POST['text'])) {

        require_once("db-connect.php");
            $title =strip_tags($_POST['author']);
            $begin =strip_tags($_POST['object']);
            $end =strip_tags($_POST['text']);

    } else {
        echo 'Il manque une information !';
    }
}
        ?>