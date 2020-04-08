<?php
    if(isset($_POST['mobile'])&&
      isset($_POST['password'])
)
    {
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $con = mysqli_connect("localhost:3306","root","000","notes");
        if(mysqli_connect_errno())
        {
            $error = "Failed connection".mysqli_connect_errno();
        }
        $query = "select * from users where mobile='$mobile' and password ='$password'";
        $result = mysqli_query($con,$query);
        if($result)
        {
            $rowcount=mysqli_num_rows($result);
            if($rowcount==1)
            {
                header("Location: ../Dashboard/dashboard");
                die();
            }else{
                $error = "Invalid Mobile/Password";
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

<?php
if(isset($error)) {
    echo '<div class="alert alert-danger" >'.$error.'</div>';
}
?>
<div class="container">
    <form action="#" method="post">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="card col-lg-6">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="mobile">Mobile:</label>
                        <input type="tel" class="form-control" id="mobile" name="mobile">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="password">
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
    </form>
</div>
</div>

</body>
</html>
