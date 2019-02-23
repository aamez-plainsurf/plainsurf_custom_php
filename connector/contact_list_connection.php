<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT first_name,last_name,email_id,phone_no,description,opt,id FROM contact";
$result = mysqli_query($conn, $sql);



while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr id="<?php echo $row['id'] ?>">
        <td><?php echo $row['first_name'] ?></td>
        <td><?php echo $row['last_name'] ?></td>
        <td><?php echo $row['email_id'] ?></td>
        <td><?php echo $row['phone_no'] ?></td>
        <td><?php echo $row['description'] ?></td>
        <td><?php echo $row['opt'] ?></td>
        <td><button class="btn btn-danger btn-sm remove">Delete</button></td>
    </tr>
<?php } ?>