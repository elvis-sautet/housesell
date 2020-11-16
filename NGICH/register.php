<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules\sweetalert2\dist\sweetalert2.min.css">
    <link rel="stylesheet" href="all.min.css">
    <script src="all.min.js"></script>
    <script src="../node_modules\sweetalert2\dist\sweetalert2.min.js"></script>
    <script src="../node_modules\sweetalert\dist\sweetalert.min.js"></script>
    <script src="jquerycodeforall.js"></script>
    <script src="bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<style>
body {
    display: flex;
    justify-content: center;
    align-content: center;
    position: relative;
}

.container {
    position: absolute;
    top: 15%;
}

input[type="text"] {
    padding-left: 22px;
}

input[type="email"] {
    padding-left: 22px;
}

input[type="password"] {
    padding-left: 22px;
}
</style>

<body style="background-color:#f2f2f2;">
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

    $empty = 'fill up all the fields';
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
        } elseif ($_GET['error'] == "details error") {
            echo '
                <script>
                Swal.fire ({ title:"Oops" ,  text:"incorrect details!!" ,  icon:"error" })
                 </script>
                ';
        } elseif ($_GET['error'] == "invalidemail") {
            echo '
                <script>
                Swal.fire ({ ttile:"Oops" , text: "Email is invalid!!" , icon: "error" })

                 </script>
                ';
        } elseif ($_GET['error'] == "invalidusername") {
            echo '
                <script>
                Swal.fire ({title: "Oops" , text: "invalid username format!!" ,icon:  "error"} )

                 </script>
                ';
        } elseif ($_GET['error'] == "usernametaken") {
            echo '
                <script>
                Swal.fire ({title: "Oops" , text: "Username already taken!" ,icon:  "error"} )

                 </script>
                ';
        } elseif ($_GET['error'] == "passwordshort") {
            echo '
            <script>
            Swal.fire ({ title:"Oops" , text: "password too short!!" , icon: "error"} )

             </script>
            ';
        } elseif ($_GET['error'] == "passwordmismatch") {
            echo '
        <script>
        Swal.fire ({title: "Oops" , text: "password does not match!!" ,  icon:"warning"} )

         </script>
        ';
        }
    }




    ?>
    <div class="logo">
        <h1><a href="index.php">Alpine Real Estate</a></h1>
    </div>
    <div class="container  bg-white"
        style="overflow:hidden; width:40%;height:fit-content;border-radius:5px;box-shadow:0 1px 5px rgba(104,104,104,0.8)">
        <form action="../includes/register.php" method="POST" style="padding:12px">
            <h2 class=" text-center">Register
            </h2>
            <div class="form-group ">
                <i class="fa fa-user mt-2 ml-1" style="position: absolute;z-index:10" aria-hidden="true"></i>
                <input class="form-control " style="position: relative;" type="text" name="username" id="username"
                    placeholder="  User Name" value="" />
            </div>
            <div class="form-group">
                <i class="fa fa-envelope mt-2 ml-1" style="position: absolute;z-index:1000" aria-hidden="true"></i>
                <input class="form-control" style="position: relative;" type="email" name="resmail" id="resmail"
                    placeholder="  Your Email" value="" />

            </div>
            <div class="form-group ">

                <i class="fa fa-lock mt-2 ml-1" style="position: absolute;z-index:1000" aria-hidden="true"></i>
                <input class="form-control" style="position: relative;" type="password" name="pass" id="pass"
                    placeholder="  Your Password" value="" />

            </div>
            <div class="form-group">
                <i class="fa fa-lock  mt-2 ml-1" id="lock" style="position: absolute;z-index:1000"
                    aria-hidden="true"></i>
                <input class="form-control" style="position: relative;" type="password" name="conpass" id="cf-pass"
                    placeholder="  Confirm Password" value="" />

            </div>
            <div class="form-group">
                <label for="chk1" class="check">
                    <input type="checkbox" name="chk1" id="chk1" />
                    I accept <span>Terms of User</span> & <span>Privacy Pollicy</span>
                </label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-secondary" style="width: 40%;" name="register-btn"
                    id="register-btn">Register</button>
                <p>
                    Already have an account? <a href="login.php" class="next-log">Login now</a>
                </p>
            </div>
        </form>
    </div>
    <script src="index.js"></script>

</body>

</html>