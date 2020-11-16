<?php

if (isset($_POST["register-btn"])) {
    require 'dbconnection.php';
    $username = $_POST['username'];
    $email = $_POST['resmail'];
    $password = $_POST['pass'];
    $conPassword = $_POST['conpass'];

    if (empty($username) || empty($email) || empty($password) || empty($conPassword)) {
        header("Location: ../NGICH/register.php?error=emptyfields");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../NGICH/register.php?error=details error");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location:  ../NGICH/register.php?error=invalidemail");
        exit();
    } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location:  ../NGICH/register.php?error=invalidusername");
        exit();
    } elseif (strlen($password) < 6) {
        header("Location:  ../NGICH/register.php?error=passwordshort");
        exit();
    } elseif ($password !== $conPassword) {
        header("Location:  ../NGICH/register.php?error=passwordmismatch");
        exit();
    } else {
        $sql = "SELECT username FROM registration WHERE username=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$username]);
        $checkresult = $stmt->rowcount();
        if ($checkresult > 0) {
            header("Location: ../NGICH/register.php?error=usernametaken");
            exit();
        } else {
            $hashedpass = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO registration (username,email,password) VALUES (?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$username, $email, $hashedpass]);
            //inserting data in the other table
            header("Location: ../NGICH/login.php?signup=success");
            exit();
        }
    }
    $stmt->closeCursor();
    $conn = null;
} else {
    header("Location: ../NGICH/index.php");
    exit();
}