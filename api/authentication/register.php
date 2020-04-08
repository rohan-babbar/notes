
<?php
include '../../Utils/ApiResponse.php';

if (isset($_POST['name'])
    && isset($_POST['email'])
    && isset($_POST['mobile'])
    && isset($_POST['password'])
    && isset($_POST['password2'])
) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if($password != $password2){
        echo negativeMessage("Mismatched password");
        return;
    }

    $con = mysqli_connect("localhost:3306", "root", "000", "notes");//connection created
    if (mysqli_connect_errno()) {
        echo negativeMessage("Connection error : ".mysqli_connect_errno());
    }

    $query = "insert into users values(null,'$name','$email','$mobile','$password')";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo successMessage("Successfully registered");
    } else {
        echo negativeMessage(mysqli_error($con));
    }
    return;
}else{
    echo negativeMessage("Bad request");
    return;
}
