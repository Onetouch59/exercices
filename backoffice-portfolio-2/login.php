<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><a href="index.php">retour</a><br><br></div>
    <form action="handler.php" method="post">
        <input type="text" name="name" id="" placeholder="nom" required>
        <input type="password" name="password" id="" placeholder="mot de passe" required>
        <input type="hidden" name="op" value="login">
        <input type="submit" value="enregistrer">
        </form>
</body>
</html>