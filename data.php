<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Eduversity Education Category Flat Bootstrap Responsive Website Template | Contact : W3layouts</title>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
                color: rgb(220, 53, 69);
                font-size: 15px;
                text-align: center;
            } 
            th {
                background-color: rgb(85, 85, 85);
                color: white;
            }
            tr:nth-child(even) {background-color: #f2f2f2}
        </style>
    </head>
    <?php include_once './includes/global_css.php'; ?>
    <body>


        <!-- header -->
        <header>
            <?php include_once './includes/header.php'; ?>
        </header>
        <!-- //header -->
        <!-- inner banner -->
        <?php include_once './includes/inner_banner.php'; ?>
        <!-- inner banner -->

        <!-- breadcrumbs -->
        <?php include_once './includes/breadcrumbs.php'; ?>	
        <!-- //breadcrumbs -->

        <!-- contact -->
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Mobile No</th>
                <th>Email-Id</th>
                <th>Comments</th>
                <th>Option</th>
            </tr>
            <?php
            $conn = mysqli_connect("localhost", "test1", "test123", "form");
            if ($conn->connet_error) {
                die("Connection failed :" . $conn->connect_error);
            }

            $sql = "SELECT fname, lname, Phone, Email, details, optradio from contact";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["fname"] . "</td><td>" . $row["lname"] . "</td><td>" . $row["Phone"] . "</td><td>" . $row["Email"] . "</td><td>" . $row["details"] . "</td><td>" . $row["optradio"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 result";
            }

            $conn->close();
            ?>
        </table>


        <!-- //contact -->

        <!-- footer -->	
        <footer>
            <?php include_once './includes/footer.php'; ?>
        </footer>
        <!-- footer -->
        <!-- Login modal -->
        <?php include_once './includes/login.php'; ?>
        <!-- //Login modal -->

        <!-- Register modal -->
        <?php include_once './includes/register.php'; ?>
        <!-- //Register modal -->

        <!-- Gloabl JS Start -->
        <?php include_once './includes/global_js.php'; ?>	
        <!-- Gloabl JS End -->

    </body>
</html>