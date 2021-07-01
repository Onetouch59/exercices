<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="form.php" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="mail">Votre e-mail :</label>
        <input required type="email" id="mail" name="user_mail">
    </div>
        <div>
            <label for="password">password:</label>
            <input type="password"id="password" name="user_password">
        </div>
        <div>
        <label for="birthdate">birthdate:</label>
        <input type="date"id="birthdate" name="user_birthdate">
        </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
    <div>
        <button type="submit"> send nude </button>
        <button type="reset">reset</button>
    </div>
    </form>

    <script src="main.js"></script>
</body>
</html>