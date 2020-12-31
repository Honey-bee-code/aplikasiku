<?php
session_start();

?>


<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="jumbotron">
        <h1 style="text-align: center;">Halaman Login</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
            <div class="container-sm">
            <p><center><h3>Silahkan Masuk</h3></center></p>
                <form class="form-group" action="login_cek.php" method="post">
                    <div class="form-group">
                        <label for="inputUser">Username</label>
                        <input type="text" name="username" class="form-control" id="inputUser" placeholder="Username ..." required="required">
                    </div>
                    <div class="form-group">
                        <label for="inputPass">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPass" placeholder="Password ..." required="required">
                    </div>
                    <input type="submit" class="btn btn-primary" value="LOGIN">
                </form>
            </div>
            </div>
        </div>
    </div>

</body>
</html>