<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Register</title>
</head>
<body class="bg-light">
        <div class="container col-sm-6  p-3">
            <div class="card shadow">
                <div class="card-title">
                <h5 class="alert alert-light"> Create Account</h5> 
                </div>
                <div class="card-body">
                <form  class="form-control" action="register_backend.php" method="post" enctype="multipart/form-data">

                    <div class="mb-3">    
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name">
                    </div>

                    <div class="mb-3"> 
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="uname" placeholder="Enter Username">
                    </div>

                    <div class="mb-3"> 
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Password">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Profile Picture</label>
                        <input type="file" class="form-control" name="profile_picture">
                    </div>

                     
                    <button type="submit" class="btn btn-primary" name='submit'>Sign Up</button><hr>
                    <a href="login.php" class="link-secondary">Login</a> </div><br>
                </form>
                </div>
                
            </div>
        </div>

<script src="js/bootstrap.bundle.js">
</script>
</body>
</html>