<?php

if (isset($_POST['add-admin'])) {
    require 'dbconnection.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (empty($name) || empty($email) || empty($password)) {
        header("Location: ../admin/index.php?error=emptyfields");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location:  ../admin/index.php?error=invalidemail");
        exit();
    } elseif (strlen($password) < 6) {
        header("Location:  ../admin/index.php?error=passwordshort");
        exit();
    } else {
        $sql = "SELECT email FROM admin WHERE email=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$email]);
        $checkresult = $stmt->rowcount();
        if ($checkresult > 0) {
            header("Location: ../admin/index.php?error=emailtaken");
            exit();
        } else {
            $hashedpass = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO admin (name,email,password) VALUES (?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$name, $email, $hashedpass]);
            //inserting data in the other table
            header("Location: ../admin/index.php?signup=success");
            exit();
        }
    }
    $stmt->closeCursor();
    $conn = null;
} else {
    header("Location: ../admin/index.php");
    exit();
}