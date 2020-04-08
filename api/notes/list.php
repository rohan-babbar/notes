<?php
include '../../Utils/ApiResponse.php';
if(isset($_GET['user_id']))
{
    $user_id = $_GET['user_id'];

    $con = mysqli_connect("localhost:3306", "root", "000", "notes");//connection created
    if (mysqli_connect_errno()) {
        echo negativeMessage("Connection error : ".mysqli_connect_errno());
    }

    $query= "select * from notes where user_id = $user_id";
    $result = mysqli_query($con,$query);
    if ($result)
    {
        $arr = [];
        while($row = mysqli_fetch_assoc($result))
        {
            array_push($arr,$row);
        }
        echo successData("Notes",$arr);
    } else {
        echo negativeMessage(mysqli_error($con));
    }
    return;
}else{
    echo negativeMessage("Bad request");
    return;
}

