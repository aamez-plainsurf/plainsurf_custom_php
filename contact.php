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
        <?php include_once './includes/contact_form.php'; ?>	
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