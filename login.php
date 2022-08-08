<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

</head>

<body>

   <div class="container  col-sm-6" >
        <form class="shadow form-control col-sm-4" action="login_backend.php" method="post">

                <h4 class="display-4  fs-1">LOGIN</h4><br>
                <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $_GET['error']; ?>
                    </div>
                <?php } ?>

                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" required name="uname" value=" ">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" required class="form-control" name="password">
                </div>
                <input type="submit" class="btn btn-primary" value='Login' name='submit'> <br>
           
            <a href="register.php" class="link-success justify-content-center align-items-center">Sign Up</a>
        </form>
   </div>
    

    <script src="js/bootstrap.bundle.js">
    </script>
</body>

</html>