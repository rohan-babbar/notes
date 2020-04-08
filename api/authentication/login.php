<?php
include '../../Utils/ApiResponse.php';

if(isset($_POST['mobile'])
&& isset($_POST['password']))
{
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $con = mysqli_connect("localhost:3306", "root", "000", "notes");//connection created
    if (mysqli_connect_errno()) {
        echo negativeMessage("Connection error : ".mysqli_connect_errno());
    }

    $query = "select * from users where mobile = '$mobile' and password = '$password'";
    $result = mysqli_query($con, $query);
    if ($result)
    {
       $data = mysqli_fetch_assoc($result);
        echo successData("Successfully logged in",$data);
    } else
        {
        echo negativeMessage(mysqli_error($con));
        }
}else{
    echo negativeMessage("Bad request");
    return;
}