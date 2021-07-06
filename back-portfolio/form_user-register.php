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
            <form method="post" action="handler_user-register.php">
                <div class="mb-3">
                    <label for="input-username" class="form-label">Nom d'utilisateur</label>
                    <input type="text" class="form-control" id="input-username" name="data-username">
                </div>
                <div class="mb-3">
                    <label for="input-email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="input-email" name="data-email">
                </div>
                <div class="mb-3">
                    <label for="input-password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="input-password" name="data-password">
                </div>
                <div class="mb-4">
                    <label for="input-confirmation" class="form-label">Confirmer le mot de passe</label>
                    <input type="password" class="form-control" id="input-confirmation" name="data-confirmation">
                </div>
                <div class="d-grid mb-4 gap-2">
                    <button type="submit" class="btn btn-outline-primary">S'inscrire</button>
                </div>
            </form>
               <?php 
                    if(!empty($_SESSION['error'])){
                        echo '<div class="alert alert-danger" role="alert">'. $_SESSION['error'].'</div>';
                        $_SESSION['error']='';
                    }
               ?>
            <div class="d-flex justify-content-end mt-2">
                <a href="index.php">Retour</a>
            </div>
        </div>
    </div>
</div>

   





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
</body>
</html>