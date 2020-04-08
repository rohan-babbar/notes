<?php

    if(isset($_POST['name'])&&
       isset($_POST['email'])&&
       isset($_POST['mobile'])&&
       isset($_POST['password'])
      )
    {
            $name = $_POST['name'];
           $email = $_POST['email'];
           $mobile = $_POST['mobile'];
           $password = $_POST['password'];

       $con = mysqli_connect("localhost:3306","root","000","notes");
       if(mysqli_connect_errno())
       {
           $error =  "Failed Connection".mysqli_connect_error();
       }
       $query = "insert into users values(null,'$name','$email','$mobile','$password')";
       $result = mysqli_query($con,$query);

        if($result)
        {
            if(mysqli_affected_rows($con)==1)
            {
                header("Location: ../Authentication/login");
                die();
            }else{
            $error = "Something Went Wrong";
        }
        }else{
            $error = "Invalid".mysqli_error($con);
        }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Notes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="alert alert-danger alert-dismissible fade <?php if(isset($error)) echo "show"?>">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
         <?php if(isset($error))echo $error?>
    </div>
    <form method="post">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="card col-lg-6">
                <div class="card-header">Register</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile:</label>
                        <input type="tel" class="form-control" id="mobile" name="mobile">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="password">
                    </div>
                         <div class="form-group">
                        <label for="pwd2">Re-enter Password:</label>
                        <input type="password" class="form-control" id="pwd2" name="password2">
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <button type="submit" class="btn btn-primary col-md-6">Submit</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </form>
</div>


</body>
</html>
