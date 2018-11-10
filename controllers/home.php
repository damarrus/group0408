<?php

include '../models/user.php';

$users = getAllUsers();

include '../views/home.php';