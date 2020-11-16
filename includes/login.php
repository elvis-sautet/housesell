<?php

if (isset($_POST['login-btn'])) {
    require 'dbconnection.php';

    $userName = $_POST['logusername'];
    $userPassword = $_POST['logpass'];

    if (empty($userName) || empty($userPassword)) {
        header("location: ../NGICH/login.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM registration  WHERE username=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$userName,]);
        $results = $stmt->rowcount();
        if ($row = $stmt->fetch($results)) {
            $pwdcheck = password_verify($userPassword, $row['password']);
            if ($pwdcheck == false) {
                header("location: ../NGICH/login.php?error=wrong-password");
                exit();
            } elseif ($pwdcheck == true) {
                session_start();
                $_SESSION['id'] = $row->id;
                $_SESSION['email'] = $row->email;
                $_SESSION['username'] = $row->$username;
                header("location: ../NGICH/homepage.php?login=success");
                exit();
            } else {
                header("location: ../NGICH/login.php?error=wrong-password");
                exit();
            }
        } else {
            header("location: ../NGICH/login.php?error=nousser");
            exit();
        }
    }
} else {
    header("location: ../NGICH/index.php");
    exit();
}