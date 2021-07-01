<?php
session_start();
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
<form action="handler-topic.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="input_author"></label>
            <input type="text" id="input_author" name="author">
        </div>
        
        <div>
            <label for="input_object"></label>
            <input type="text" id="input_object" name="object">
        </div>
        </div>
            <label for="input_text"></label>
            <textarea name="text" id="input_text" cols="30" rows="10"></textarea>
        </div>

        <div>
            <input type="submit">
        </div>

    </form>
    
</body>
</html>
