<?php

session_start();

$con = mysqli_connect('localhost', 'root');

if ($con) {
    echo"connection successful";
} else {
    echo"connection failed";
}

$db = mysqli_select_db($con, 'form');


if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "select *from login where user = '$user' and pass = '$pass'";

    $query = mysqli_query($con, $sql);



    $row = mysqli_num_rows($query);
    if ($row == 1) {
        //cookies
if(isset($_COOKIE["SomeName"])) {
    $someOne=$_COOKIE["$user"];
    echo $someOne;
} else {
    $someOne="";
}
    //cookies end
        echo"login successful";
        $_SESSION['user'] = $user;
        header('location:\contact_list.php', 301);
    } else {
        echo"login failed";
        header('location:index.php', 301);
    }
}
?>