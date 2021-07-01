<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="handler.php" method="post">
        <input type="text" name="name" id="" placeholder="nom" required>
        <input type="email" name="email" id="" placeholder="email" required>
        <input type="password" name="password" id="" placeholder="mot de passe" required>
        <input type="password" name="password-verif" id="" placeholder="confirmation mot de passe" required>
        <input type="hidden" name="op" value="add-user">
        <input type="submit" value="enregistrer">
    </form>
</body>
</html>