<?php

require_once "init.php";
$user = getCallback();
$_SESSION['user'] = $user;
header("location: index.php");