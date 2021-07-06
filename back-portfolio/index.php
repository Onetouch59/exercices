<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>backoffice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
</head>
<body>

<div class="container vh-100 d-flex align-items-center justify-content-center">
    <div class="card " style="width: 24rem;">
        <img src="img.connect.jpg" class="card-img-top nb-img-cover" alt="...">
        <div class="card-body">
            <form method="post" action="handler_user-login.php">
                <div class="mb-3">
                    <label for="input-username" class="form-label">Nom d'utilisateur</label>
                    <input type="text" class="form-control" id="input-username" name="data-username">
                </div>
                <div class="mb-4">
                    <label for="input-password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="input-password" name="data-password">
                </div>
                <div class="d-grid mb-3 gap-2">
                    <button type="submit" class="btn btn-outline-primary">Se connecter</button>
                </div>
            </form>
            <?php 
                    if(!empty($_SESSION['success'])){
                        echo '<div class="alert alert-success" role="alert">'. $_SESSION['success'].'</div>';
                        $_SESSION['success']='';
                    }
               ?>
            <div class="d-flex justify-content-end ">
                <a href="form_user-register.php">S'inscrire</a>
            </div>
        </div>
    </div>
</div>

   





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
</body>
</html>