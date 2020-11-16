<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="all.min.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules\sweetalert2\dist\sweetalert2.min.css">
    <link rel="stylesheet" href="all.min.css">
    <script src="all.min.js"></script>
    <script src="../node_modules\sweetalert2\dist\sweetalert2.min.js"></script>
    <script src="../node_modules\sweetalert\dist\sweetalert.min.js"></script>
    <script src="jquerycodeforall.js"></script>
    <script src="bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header>
        <div class="logo">
            <h1><a href="index.php" style="color:#333;text-decoration:none;font-size:24px">Alpine Real Estate</a></h1>
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="#properties">Properties</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
            <li>
                <form action="../includes/logout.php" method="post">
                    <a href="#"><button id="logout" class="btn btn-danger" type="submit" name="logout"><i
                                class="fas fa-sign-out-alt"></i>
                            logout</button></a>
                </form>
            </li>
            <li class="menu">Close</li>
        </ul>
        <div class="menu">Menu</div>
    </header>
</body>

</html>