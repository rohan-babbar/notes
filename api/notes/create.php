<?php
include '../../Utils/ApiResponse.php';
if (isset($_POST['user_id'])
    && isset($_POST['title'])
    && isset($_POST['content'])
   )
{
    $user_id = $_POST['user_id'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $con = mysqli_connect("localhost:3306", "root", "000", "notes");//connection created
    if (mysqli_connect_errno()) {
        echo negativeMessage("Connection error : ".mysqli_connect_errno());
    }
    $query = "insert into notes values(null,$user_id,'$title','$content')";
    $result = mysqli_query($con,$query);
    if ($result)
    {
        echo successMessage("Successfully Added Notes");
    } else {
        echo negativeMessage(mysqli_error($con));
    }
    return;
}else{
    echo negativeMessage("Bad request");
    return;
}


