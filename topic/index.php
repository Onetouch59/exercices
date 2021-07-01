<?php
     require_once("db-connect.php");
     $sql = 'SELECT * FROM `topic`';
    $query = $db-> prepare($sql);
    $query->execute();
    $topics = $query->fetchAll(PDO::FETCH_ASSOC);
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
<?php
    foreach ($topics as $topic) {
        echo'<div class="color">' . '<a href="form-topic.php?id='.$topic ['id'].'" >' .  $topic ['object'] . '</a><br>';
    }

    ?>
<a href="form-topic.php">nouveau topic</a>

</body>
</html>