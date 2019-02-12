<?php
$servername = "localhost";
$username = "test1";
$password = "test123";
$dbname = "form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])) 
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $Phone=$_POST['Phone'];
  $Email=$_POST['Email'];
  $details=$_POST['details'];
  $optradio=$_POST['optradio'];
  
}
  $sql = "INSERT INTO contact(fname, lname, Phone, Email, details, optradio) VALUES ('$fname', '$lname', '$Phone', '$Email', '$details', '$optradio')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

