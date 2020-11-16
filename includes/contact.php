<?php
if (isset($_POST['contact'])) {
    require 'dbconnection.php';
    $name = $_POST['name'];
    $email = $_POST['mail'];
    $phone = $_POST['tel'];
    $message = $_POST['mess'];

    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        header("location: ../NGICH/index.php?error=emptyfields");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $name) && !preg_match("/^[a-zA-Z0-9]*$/", $email && !preg_match("/^[a-zA-Z0-9]*$/", $message && !preg_match("/^[0-9]*$/", $phone)))) {
        header("Location: ../NGICH/index.php?error=detailserror");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location:  ../NGICH/index.php?error=invalidemail");
        exit();
    } else {
        $sql = "INSERT INTO contacts (name,email,phone,message) VALUES (?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$name, $email, $phone, $message]);
        //inserting data in the other table
        header("Location: ../NGICH/index.php?contact=success");
        exit();
    }
    $stmt->closeCursor();
    $conn = null;
} else {
    header("Location: ../NGICH/index.php");
    exit();
}