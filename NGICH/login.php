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
    <title>Login</title>
</head>
<style>
body {
    display: flex;
    align-content: center;
    justify-content: center;
    position: relative;
}

.container {
    position: absolute;
    top: 15%;
}

input[type="text"] {
    padding-left: 22px;
}

input[type="password"] {
    padding-left: 22px;
}
</style>

<body style="background-color: #f2f2f2;">
    <!-- <header style="border-bottom: 1px solid red;">
        <div class="logo">
            <h1><a href="index.php" style="color:#333;text-decoration:none">Alpine Real Estate</a></h1>
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="index.php#about">About us</a></li>
            <li><a href="index.php#properties">Properties</a></li>
            <li><a href="index.php#services">Services</a></li>
            <li><a href="index.php#contact">Contact</a></li>
            <li><a href="login.php" class="active">Register / Login</a></li>
            <li><a href="../admin/index.php" class="active">Admin</a></li>

            <li class="menu">Close</li>
        </ul>
        <div class="menu">Menu</div>
    </header> -->
    <?php

    if (isset($_GET['signup'])) {
        if ($_GET['signup'] == "success") {
            echo '
    <script>
    Swal.fire ({title: "Signup successful" ,text:" Login here" ,  icon:"success"} )

     </script>
    ';
        }
    }



    if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
            echo '
                <script>
                Swal.fire ({
                   title :"Oops" ,
                    text: "fields cannot be empty!!",
                    icon:  "warning" })
                 </script>
                ';
        } elseif ($_GET['error'] == "wrong-password") {
            echo '
                <script>
                Swal.fire ({ title:"Oops" ,  text:"incorrect password!!" ,  icon:"error" })
                 </script>
                ';
        } elseif ($_GET['error'] == "invalidemail") {
            echo '
                <script>
                Swal.fire ({ ttile:"Oops" , text: "Email is invalid!!" , icon: "error" })

                 </script>
                ';
        } elseif ($_GET['error'] == "nousser") {
            echo '
                <script>
                Swal.fire ({title: "Oops" , text: "incorrect username or password!!" ,icon:  "error"} )

                 </script>
                ';
        }
    }





    ?>
    <div class="logo">
        <h1><a href="index.php">Alpine Real Estate</a></h1>
    </div>

    <div class="container bg-white"
        style="overflow:hidden; width:40%;height:fit-content;border-radius:5px;box-shadow:0 1px 5px rgba(104,104,104,0.8)">

        <form action="../includes/login.php" id="loginForm" method="POST" style="padding:12px">
            <h2>Login</h2>
            <div class="form-group">
                <i class="fa fa-envelope mt-2 ml-1" style="position: absolute;z-index:10" aria-hidden="true"></i>
                <input type="text" style="position: relative;" class="form-control" name="logusername" id="logmail"
                    placeholder="  Your Username" />
            </div>
            <div class="form-group">
                <i class="fa fa-lock mt-2 ml-1" style="position: absolute;z-index:10" aria-hidden="true"></i>
                <input type="password" style="position: relative;" class="form-control" name="logpass" id="logpass"
                    placeholder="  Your Password" />
            </div>

            <div class="form-group">
                <input type="checkbox" name="chk" id="chk" />
                Remember me
            </div>

            <button name="login-btn" class="btn btn-secondary" style="width: 40%;" type="submit">Login</button>
            <!-- <p>Or login with</p>
            <a href="#" class="btn btn-fb"><i class=" fa-facebook"></i> Facebook</a>
            <a href="#" class="btn btn-gg"><i class="fa fa-google"></i> Google</a> -->
            <br> <br>
            <p>Not a member? <a href="register.php" class="next-log"
                    style="color:rebeccapurple;background-color:white;">Register
                    now</a></p>
        </form>

    </div>
</body>

</html>