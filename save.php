<?php
include "try.php";

$username = $_POST['username'];
$pass = $_POST['password'];

if (!empty($username) & !empty($pass)) {
    $sql = "INSERT INTO user (username,	pass ) values ( '$username' , '$pass' )";
    mysqli_query($conn, $sql);
    header("Location: login.php");
    exit();
} else {
    echo 'enter all the details';
    header("Location: form.php");
    exit();
}
