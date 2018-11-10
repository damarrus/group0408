<?php

include '../db.php';

function getAllUsers() {
    global $link;

    $query = "SELECT * FROM users";
    $result = mysqli_query($link, $query);

    $users = [];
    while ($user = mysqli_fetch_assoc($result)) {
        $users[] = $user;
    }

    return $users;
}
