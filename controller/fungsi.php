<?php 
require "database.php";
function register($signup)
{
    global $databaseConn;
    $nama = $signup["nama"];
    $username = $signup["username"];
    $email = $signup["email"];
    $password = mysqli_real_escape_string($databaseConn, $signup["password"]);

    $findUsername = mysqli_query($databaseConn, "SELECT username FROM users WHERE username = '$username'");
    if (mysqli_fetch_assoc($findUsername)) {
        echo "<script type='text/javascript'>alert('Username sudah terdaftar');</script>";
        return false;
    }

    $findEmail = mysqli_query($databaseConn, "SELECT email FROM users WHERE email = '$email'");
    if (mysqli_fetch_assoc($findEmail)) {
        echo "<script type='text/javascript'>alert('Email anda sudah terdaftar');</script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $insertToDatabase = "INSERT INTO users VALUES('', '$nama', '$username', '$email', '$password')";
    mysqli_query($databaseConn, $insertToDatabase);
    return  mysqli_affected_rows($databaseConn);
}



?>