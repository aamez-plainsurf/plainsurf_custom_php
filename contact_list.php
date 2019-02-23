<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location:index.php');
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Eduversity Education Category Flat Bootstrap Responsive Website Template | Contact : W3layouts</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
            input.form-control.new1 {
                background: rgb(220, 53, 69);
                color: white;
                border: rgb(220, 53, 69);
            }
        </style>
    </head>
    <?php include_once './includes/global_css.php'; ?>
    <body>


        <!-- header -->
        <header>
            <div class="container">
                <!-- top header -->
                <section class="row top_header pt-3">
                    <div class="col-lg-6">
                    </div>
                    <div class="col-lg-6 buttons">
                        <p><i class="fas mr-1 fa-phone"></i> +12 8976 2334</p>
                        <form action="logout.php" method="post" class="p-3">
                            <div class="btn btn-danger">
                                <input type="submit" value="logout" class="form-control new1" name="logout">
                            </div>
                        </form>

                    </div>
                </section>
                <!-- top header -->

                <!-- nav -->
                <nav class="navbar navbar-expand-lg navbar-light py-sm-4 py-2">
                    <!-- logo -->
                    <h1>
                        <a class="navbar-brand" href="/"> <i class="fab fa-affiliatetheme"></i>
                            Eduversity
                        </a>
                    </h1>
                    <!-- //logo -->
                    <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- main nav -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-lg-auto text-center">
                            <li class="nav-item active  mr-lg-3">
                                <a class="nav-link" href="/">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item mr-lg-3">
                                <a class="nav-link" href="about.php">about</a>
                            </li>
                            <li class="nav-item mr-lg-3">
                                <a class="nav-link" href="services.php">Services</a>
                            </li>
                            <li class="dropdown nav-item mr-lg-3">
                                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle ">
                                    Pages
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="nav-item">
                                        <a href="course.php" class="nav-link">Courses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="error.php" class="nav-link">404</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item mr-3">
                                <a class="nav-link" href="contact.php">contact</a>
                            </li>
                            <!-- search --->
                            <div class="search-bar-agileits">
                                <div class="cd-main-header">
                                    <ul class="cd-header-buttons">
                                        <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                                    </ul>
                                    <!-- cd-header-buttons -->
                                </div>
                                <div id="cd-search" class="cd-search">
                                    <form action="#" method="post">
                                        <input name="Search" type="search" placeholder="Click enter after typing...">
                                    </form>
                                </div>
                            </div>
                            <!-- search --->
                        </ul>
                    </div>
                    <!-- //main nav -->
                </nav>
                <!-- //nav -->
            </div>
        </header>
        <!-- //header -->

        <!-- inner banner -->
        <?php include_once './includes/inner_banner.php'; ?>
        <!-- inner banner -->

        <!-- breadcrumbs -->
        <?php include_once './includes/breadcrumbs.php'; ?>	
        <!-- //breadcrumbs -->

   

            <table class="table table-bordered table-hover table-dark">
                <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>phone</th>
                        <th>description</th>
                        <th>opt</th>
                        <th width="100px">Action</th>

                    </tr>
                </thead>
                
  <?php include_once './connector/contact_list_connection.php'; ?>
            </table>
         <!-- container / end -->

    



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

    <!--bootstrap table-->



</body>
<script type="text/javascript">
    $(".remove").click(function () {
        var id = $(this).parents("tr").attr("id");


        if (confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
                url: '/connector/delete.php',
                type: 'GET',
                data: {id: id},
                error: function () {
                    alert('Something is wrong');
                },
                success: function (data) {
                    $("#" + id).remove();
                    alert("Record removed successfully");
                }
            });
        }
    });


</script>

</html>