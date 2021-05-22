<?php   include("bootstrap.php");   ?> 
<?php   include("registration-data.php");   ?>
<?php   include("connection.php");   ?>
   <!doctype html>
<html>
    <head lang="en">
        <link rel="stylesheet" type="text/css" href="mastercss/style1.css">
        <title>View Users</title>
    </head>
    <body>
        <div class="table-scrol">
        <div class="center-form"><a id="home-button" class="btn btn-info mx-4 " href="index.php">Home</a></div>
        <div class="center-form"><h1>All the Users</h1></div>
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>

                            <tr>

                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Delete User</th>
                            </tr>
                        </thead>
<?php
            $view_users_query="select * from users";
            $run=mysqli_query($conn,$view_users_query);

            while($row=mysqli_fetch_array($run))
            {
                $user_id=$row[0];
                $user_name=$row[2];
                $user_email=$row[3];
                $user_pass=$row[1];

?>
                            <tr>
                                <td><?php echo $user_name;  ?></td>
                                <td><?php echo $user_email;  ?></td>
                                <td><?php echo $user_pass;  ?></td>
                                <td><a href="delete.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td>

                            </tr>
<?php } ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="center2">
                <div class="col-md-6 ">
                    <form method="post" action="view_users.php">
                        <fieldset>
                            <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="name" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email">
                            </div>
                            <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="pass" type="password">
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="add new user" name="register" >
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </body>
    </html>
