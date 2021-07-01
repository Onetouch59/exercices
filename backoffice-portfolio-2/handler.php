<?php
if (isset($_POST['op']) && !empty($_POST['op'])) {
        if (($_POST['op']==='add-user')&&
        (isset($_POST['name']) && !empty($_POST['name']))&&
        (isset($_POST['email']) && !empty($_POST['email']))&&
        (isset($_POST['password']) && !empty($_POST['password']))&&
        (isset($_POST['password-verif']) && !empty($_POST['password-verif']))) {
            $name = strip_tags($_POST['name']);
            $email = strip_tags($_POST['email']);
            $password = strip_tags($_POST['password']);
            $passwordverif = strip_tags($_POST['password-verif']);
            // pass identique
            // hash pass
            if ($password===$passwordverif) {
                $passwordhash = password_hash($password, PASSWORD_DEFAULT);
                require_once('db-connect.php');
                try{
                    $sql = "INSERT INTO users(users_nom,users_mail,users_pass) VALUES (:username, :email, :password)";
                    $query = $db->prepare($sql);
                    $query->bindValue(':username', $name, PDO::PARAM_STR);
                    $query->bindValue(':email', $email, PDO::PARAM_STR);
                    $query->bindValue(':password', $passwordhash, PDO::PARAM_STR);
                    $query->execute();
                    echo '<body onLoad="alert(\'Votre compte à été ajouté avec succé\')"><meta http-equiv="refresh" content="0;URL=index.php">';
                }catch(Exception $e){
                die('<body onLoad="alert(\'Erreur : ce pseudo existe peut être déjà\')"><meta http-equiv="refresh" content="0;URL=index.php">');
                }
            
            }else{
                echo 'les pass sont différents';
            }
                
        }elseif(($_POST['op']==='login')&& 
        (isset($_POST['name']) && !empty($_POST['name'])) &&
        (isset($_POST['password']) && !empty($_POST['password']))){

            $name = strip_tags($_POST['name']);
            $passworda = strip_tags($_POST['password']);

            require_once('db-connect.php');
            $sql = 'SELECT users_nom,users_pass FROM users WHERE users_nom=:username';
            $query = $db->prepare($sql);
            $query->execute(array('username'=>$name));
            $result = $query->fetch();
            if(!$result){
                echo 'une erreur est survenue';
            }else {

            $passverif = password_verify($passworda,$result['users_pass']);
                if (!$passverif){
                    echo 'mauvais mot de passe!';
                } else {
                    echo 'bon mdp';
                }
            }
                    
        }else {
            echo 'un probleme est survenu...';
        }
}