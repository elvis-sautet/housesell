<?php

if (isset($_POST['admin-login'])) {
    require 'dbconnection.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        header("location: ../admin/login.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM admin  WHERE email=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$email,]);
        $results = $stmt->rowcount();
        if ($row = $stmt->fetch($results)) {
            $pwdcheck = password_verify($password, $row['password']);
            if ($pwdcheck == false) {
                header("location: ../admin/login.php?error=wrong-password");
                exit();
            } elseif ($pwdcheck == true) {
                session_start();
                $_SESSION['id'] = $row->id;
                $_SESSION['email'] = $row->email;
                $_SESSION['ema$email'] = $row->$email;
                header("location: ../admin/index.php?login=success");
                exit();
            } else {
                header("location: ../admin/login.php?error=wrong-password");
                exit();
            }
        } else {
            header("location: ../admin/login.php?error=nousser");
            exit();
        }
    }
} else {
    header("location: ../NGICH/index.php");
    exit();
}