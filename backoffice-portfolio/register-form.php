<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back-Office Portfolio</title>
</head>

<body>
    <form action="register-form-handler.php" method="post">
        <div>
            <label for="input-username">nom d'utilisateur : </label>
            <input type="text" name="username" id="input-username" require>       
        </div>
        <div>
            <label for="input-email">email : </label>
            <input type="email" name="email" id="input-email" require>       
        </div>
        <div>
            <label for="input-password">password : </label>
            <input type="password" name="password" id="input-password" require>       
        </div>
        <div>
            <label for="input-confirmation">confirmation de password : </label>
            <input type="password" name="confirmation" id="input-confirmation" require> <span id ="error"></span>       
        </div>
        <div>
            <input type="submit" value="enregistrer" id = "submit">     
        </div>
    </form>
    <script src="main.js"></script>
</body>
</html>