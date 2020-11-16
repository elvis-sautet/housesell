<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Account Login</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="all.min.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules\sweetalert2\dist\sweetalert2.min.css">
    <link rel="stylesheet" href="all.min.css">
    <script src="all.min.js"></script>
    <script src="../node_modules\sweetalert2\dist\sweetalert2.min.js"></script>
    <script src="../node_modules\sweetalert\dist\sweetalert.min.js"></script>
    <script src="jquerycodeforall.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>

<body>

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="logo">
                    <h1><a href="../NGICH/index.php" style="color:#fff;text-decoration:none;font-size:24px">Alpine Real
                            Estate</a></h1>
                </div>
            </div>
            <div id="navbar" class="collapse navbar-collapse">

            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center"> Admin Login</h1>
                </div>
            </div>
        </div>
    </header>

    <section id="main">
        <div class="container">

            <div class="row bg-white">
                <div class="col-md-4 col-md-offset-4">
                    <form id="login" action="../includes/adminLogin.php" method="POST" class="well"
                        style="background-color: white;">
                        <?php
                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == "emptyfields") {
                                echo '<p style="color:red" class="text-center">please fill all fields!!</p>';
                            } elseif ($_GET['error'] == 'wrong-password') {
                                echo '<p style="color:red"   class="text-center">incorrect password!!</p>';
                            } elseif ($_GET['error'] == 'nousser') {
                                echo '<p style="color:red"   class="text-center">incorrect email or password!!</p>';
                            }
                        }
                        if (isset($_GET['contact'])) {
                            if ($_GET['contact'] == 'success') {
                                echo '<p style="color:green">Message sent successfully</p>';
                            }
                        }
                        ?>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input name="email" type="text" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" name="admin-login" class="btn btn-secondary"
                            style="background-color: #333;color:white;">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer" style="position: absolute;bottom:0;width:100%">
        <p>Copyright Phares, &copy; 2020</p>
    </footer>

    <script>
    CKEDITOR.replace('editor1');
    </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>