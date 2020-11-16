<?php require "../includes/adminSession.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>

<body>
    <?php

    if (isset($_GET['signup'])) {
        if ($_GET['signup'] == "success") {
            echo '
    <script>
    Swal.fire ({title:" Admin added succesfully" ,  icon:"success"} )

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
        } elseif ($_GET['error'] == "passwordshort") {
            echo '
                <script>
                Swal.fire ({ title:"Oops" ,  text:"password too short!!" ,  icon:"error" })
                 </script>
                ';
        } elseif ($_GET['error'] == "emailtaken") {
            echo '
                <script>
                Swal.fire ({ ttile:"Oops" , text: "Email is already taken!!" , icon: "error" })
                 </script>
                ';
        } elseif ($_GET['error'] == "invalidemail") {
            echo '
                <script>
                Swal.fire ({title: "Oops" , text: "incorrect email format!!" ,icon:  "error"} )

                 </script>
                ';
        }
    }





    ?>
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
                <a class="navbar-brand" href="index.php">
                    Admin
                </a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Dashboard</a></li>
                    <li><a href="pages.php">Pages</a></li>
                    <li><a href="posts.php">Posts</a></li>
                    <li><a href="users.php">Users</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right "
                    style="display: flex;flex-direction:row;align-content:center;margin:4px 0">
                    <li><a href="#">Welcome, <?php
                                                $admin = $user['id'];
                                                $sqlprofile = "SELECT *  FROM admin WHERE id=$admin ";
                                                $result = $conn->query($sqlprofile);
                                                $resultcount = $result->rowcount();

                                                while ($rowprofile = $result->fetch()) {
                                                    $profile = $rowprofile->name;
                                                    echo '<span style="text-transform:capitalize">' . $profile . '</span>';
                                                }
                                                ?></a></li>
                    <form action="../includes/logout.php">
                        <li><button type="submit" name="logout" class="btn btn-danger">Logout</button></li>
                    </form>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage Your
                            Site</small></h1>
                </div>
                <div class="col-md-2">
                    <div class="dropdown create">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Manage...
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a type="button" data-toggle="modal" data-target="#addPage">Add Page</a></li>
                            <!-- <li><a href="#">Add Post</a></li> -->
                            <li><a type="button" data-toggle="modal" data-target="#addUser">Add User</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="active">Dashboard</li>
            </ol>
        </div>
    </section>

    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="index.php" class="list-group-item active main-color-bg">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
                        </a>
                        <a href="pages.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt"
                                aria-hidden="true"></span> Pages <span class="badge">3</span></a>
                        <a href="posts.html" class="list-group-item"><span class="glyphicon glyphicon-pencil"
                                aria-hidden="true"></span> Posts <span class="badge">12</span></a>
                        <a href="users.html" class="list-group-item"><span class="glyphicon glyphicon-user"
                                aria-hidden="true"></span> Users <span class="badge">50</span></a>
                    </div>

                    <div class="well">
                        <h4>Disk Space Used</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                aria-valuemax="100" style="width: 60%;">
                                50%
                            </div>
                        </div>
                        <h4>Bandwidth Used </h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                aria-valuemax="100" style="width: 40%;">
                                30%
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <!-- Website Overview -->
                    <div class="panel panel-default">
                        <div class="panel-heading main-color-bg">
                            <h3 class="panel-title">Website Overview</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-3">
                                <div class="well dash-box">
                                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 50</h2>
                                    <h4>Users</h4>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="well dash-box">
                                    <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 1</h2>
                                    <h4>Pages</h4>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="well dash-box">
                                    <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 12</h2>
                                    <h4>Posts</h4>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="well dash-box">
                                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 1000</h2>
                                    <h4>Visitors</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Latest Users -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Latest Users</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-hover">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Time</th>
                                </tr>
                                <tr>
                                    <td>MichealDonald</td>
                                    <td>MichealDonald@gmail.com</td>
                                    <td>October,8 2020</td>
                                </tr>
                                <tr>
                                    <td>Linda Mendoza</td>
                                    <td>lindamendoza@gmail.com</td>
                                    <td>October8,2020</td>
                                </tr>
                                <tr>
                                    <td>Claire Sclnon</td>
                                    <td>clairesclnon@gmail.com</td>
                                    <td>October 9,2020</td>
                                </tr>
                                <tr>
                                    <td>Neil Campbell</td>
                                    <td>neilcampbell@gmail.com</td>
                                    <td>October10,2020</td>
                                </tr>
                                <tr>
                                    <td>Mike Johnson</td>
                                    <td>mjohnson@gmail.com</td>
                                    <td>October8, 2020</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <p>Copyright Phares, &copy; 2020</p>
    </footer>

    <!-- Modals -->

    <!-- Add Page -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Page</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Page Title</label>
                            <input type="text" class="form-control" placeholder="Page Title">
                        </div>
                        <div class="form-group">
                            <label>Page Body</label>
                            <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Published
                            </label>
                        </div>
                        <div class="form-group">
                            <label>Meta Tags</label>
                            <input type="text" class="form-control" placeholder="Add Some Tags...">
                        </div>
                        <div class="form-group">
                            <label>Meta Description</label>
                            <input type="text" class="form-control" placeholder="Add Meta Description...">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Add User -->
    <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="../includes/addAdmin.php" method="POST">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Admin</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Admin Name</label>
                            <input name="name" type="text" class="form-control" placeholder="Enter name..." required>
                        </div>
                        <div class="form-group">
                            <label>Admin Email</label>
                            <input name="email" class="form-control" placeholder="Enter email..." required>
                        </div>

                        <div class="form-group">
                            <label>Admin Password</label>
                            <input name="password" type="password" class="form-control" placeholder="Enter Password..."
                                required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" name="add-admin" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
    CKEDITOR.replace('editor1');
    </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>