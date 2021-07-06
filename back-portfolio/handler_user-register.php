<?php
    session_start();
if( isset($_POST['data-username'])&&!empty($_POST['data-username'])&&
    isset($_POST['data-email'])&&!empty($_POST['data-email'])&&
    isset($_POST['data-password'])&&!empty($_POST['data-password'])&&
    isset($_POST['data-confirmation'])&&!empty($_POST['data-confirmation']) ){
    if($_POST['data-password']==$_POST['data-confirmation']){

        $user_username = strip_tags($_POST['data-username']);
        $user_email = strip_tags($_POST['data-email']);
        $user_unencrypted_password = strip_tags($_POST['data-password']);
        $user_encrypted_password = password_hash($user_unencrypted_password , PASSWORD_DEFAULT);

        require_once('db-connect.php');
        $sql = 'INSERT INTO table_users(`user_username`, `user_password`, `user_email`) VALUES(:user_username, :user_password, :user_email)';
        $query = $db->prepare($sql);
        $query->bindValue(':user_username', $user_username, PDO::PARAM_STR);
        $query->bindValue(':user_password', $user_encrypted_password, PDO::PARAM_STR);
        $query->bindValue(':user_email', $user_email, PDO::PARAM_STR);
        $query->execute();
        
        $_SESSION['success']='Bienvenue !';
        header('Location:index.php');
    }else {
        $_SESSION['error']='Les mots de passe ne sont pas identiques !';
        header('Location:form_user-register.php');
    }
}else {
     $_SESSION['error']='Remplissez tous les champs !';
     header('Location:form_user-register.php');
}