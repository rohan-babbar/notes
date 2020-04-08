<?php
$con = mysqli_connect("localhost:3306", "root", "000", "notes");
if (mysqli_connect_errno()) {
    echo "Failed connection" . mysqli_connect_errno();
}

if(
        isset($_POST['title'])&&
        isset($_POST['content'])
   )
{
    $title = $_POST['title'];
    $content = $_POST['content'];
    $query = "insert into notes values(null,1,'$title','$content')";
    $result = mysqli_query($con,$query);
    if($result)
    {
        if(mysqli_affected_rows($con)==1)
        {
            $message = "Successfully Inserted";
        }else{
            $error = "Something Went Wrong!";
        }
    }
}

$query = "Select * from notes;";
$result = mysqli_query($con, $query);
if (!$result)  // if No Result.
{
    $error = "Something Went Wrong";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-xl bg-light navbar-light fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </ul>
    </div>

    <ul class="navbar-nav" style="display: contents">
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
    </ul>
    <form class="form-inline" action="/action_page.php">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-success" type="submit">Search</button>
    </form>
</nav>
<br>

<div class="container">
    <h2>HOME</h2>
    <div class="alert alert-danger alert-dismissible fade <?php if(isset($error)) echo "show"?>">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php if(isset($error))echo $error?>
    </div>
    <div class="alert alert-success">
        <strong>Success!</strong>
       <?php if (isset($message)) echo $message?>
    </div>

    <ul class="list-group">
        <?php
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
               $title = $row['title'];
               $content = $row['content'];
                echo "<li class=\"list-group-item\">
                        <div class=\"card\">
                            <div class=\"card-header\">$title</div>
                            <div class=\"card-body\">$content</div>
                        </div>
                      </li>";
            }
        }
        ?>
    </ul>
    <form method="post">
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="comment">Add Note:</label>
                        <textarea class="form-control" rows="5" id="content" name="text"></textarea>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" >Submit</button>
                </div>


            </div>
        </div>

    </div>
    </form>
    <!-- Button to Open the Modal -->
    <button type="button" style="border-radius: 50%; height: 70px; width: 70px; position: fixed; bottom: 20px; right: 20px" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        +
    </button>
</div>

</body>
</html>
