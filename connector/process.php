<?php
$conn = new mysqli('localhost', 'root', '', 'form');
//check connection

if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
}

//upload file in folder

$currentDir = getcwd();
$uploadDirectory = "/uploads/";

$errors = []; // Store all foreseen and unforseen errors here

$fileExtensions = ['pdf', 'doc', 'docx', 'png', 'jpeg', 'JPEG']; // Get all the file extensions

$fileName = $_FILES['myfile']['name'];
$fileSize = $_FILES['myfile']['size'];
$fileTmpName = $_FILES['myfile']['tmp_name'];
$fileType = $_FILES['myfile']['type'];
$fileExtension = strtolower(end(explode('.', $fileName)));

$uploadPath = $currentDir . $uploadDirectory . basename($fileName);

if (isset($_POST['submit'])) {

    if (!in_array($fileExtension, $fileExtensions)) {
        $errors[] = "This file extension is not allowed. Please upload a PDF or DOC file";
    }

    if ($fileSize > 2000000) {
        $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
    }

    if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

        if ($didUpload) {
            echo "The file " . basename($fileName) . " has been uploaded";
        } else {
            echo "An error occurred somewhere. Try again or contact the admin";
        }
    } else {
        foreach ($errors as $error) {
            echo $error . "These are the errors" . "\n";
        }
    }
}
//file upload ends
//data insert into databases
echo "connected successfully";
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email_id = $_POST['email_id'];
$phone_no = $_POST['phone_no'];
$description = $_POST['description'];
$opt = $_POST['opt'];
$query = "INSERT INTO contact(first_name,last_name,email_id,phone_no,description,opt)VALUES('$first_name','$last_name','$email_id','$phone_no','$description','$opt')";
if (mysqli_query($conn, $query)) {
    echo "records saved";
} else {
    echo'not saved';
}
header("location:/contact.php", 301);
//insert data ends
?>
mysqli_close();