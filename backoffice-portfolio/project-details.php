<?php
    session_start();
    if ($_SESSION['username']){
        if(isset($_GET['id'])&&!empty($_GET['id'])){
            require_once("db-connect.php");
            $id = strip_tags($_GET['id']);
            $sql = 'SELECT * FROM `projects` WHERE `project_id`=:id';
            $query = $db->prepare($sql);
            $query->bindValue(':id',$id,PDO::PARAM_STR);
            $query->execute();
            $result = $query->fetch();
            ?>
             
            

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <h1>Detail du project </h1>
        <?= $result['project_title']; ?><br>
        <img style="width:240px " src="assets/images/<?= $result['project_picture']; ?>"><br>
        <?= $result['project_context']; ?><br>
        <?= $result['project_specs']; ?><br>

    

        <a href="project-delete.php?id=<?=$result['project_id']; ?>"><button>delete this article</button></a> 
        <br>
        <a href="project-edit.php?id=<?=$result['project_id']; ?>"><button>edit this article</button></a> 
        <br> 
        <a href="home.php"><button>Retour</button></a>

        

    </body>
    </html>


    <?php
        }else{
            echo "get incorrect";
        }
    }else{
        echo "identifiant incorrect";
    }