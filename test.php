<?php
    include 'db.php';

    $query = "SELECT * FROM users";
    $result = mysqli_query($link, $query);

    $users = [];
    while ($user = mysqli_fetch_assoc($result)) {
        $users[] = $user;
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Главная страница</h1>
    <hr>

    <h2>Список пользователей</h2>
    <?php 
        foreach ($users as $user) {
            echo '<h3>'.$user['name'].'</h3>';
            echo '<i>'.$user['date_created'].'</i>';
        }
    ?>

    <hr>
    Все права защищены
</body>
</html>