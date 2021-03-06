<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <title>Pham Cao Nguyen</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="css/templatemo-style.css" rel="stylesheet" />
</head>


<body>

    <div class="container">
        <!-- Top box -->
        <!-- Logo & Site Name -->
        <div class="placeholder">
            <div class="parallax-window" data-parallax="scroll" data-image-src="img/simple-house-01.jpg">
                <div class="tm-header">
                    <div class="row tm-header-inner">
                        <div class="col-md-6 col-12">
                            <img src="img/simple-house-logo.png" alt="Logo" class="tm-site-logo" />
                            <div class="tm-site-text-box">
                                <h1 class="tm-site-title">Pham Cao Nguyen</h1>
                                <a href="https://www.facebook.com/pham.c.nguyen.37" target="blank"><i class="fab fa-facebook"></i></a>
                                <h6 class="tm-site-description">new restaurant template</h6>
                            </div>
                        </div>
                        <nav class="col-md-6 col-12 tm-nav">
                            <ul class="tm-nav-ul">
                            <?php
                                 if(isset($_SESSION['state']) =="1"){
                                    ?>
                                    <li>
                                        <a style="background-color:#069;color:#FFF" href="?page=update_customer">
                                            <i class="fa fa-lock"></i>Hi, <?php echo $_SESSION['us']?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?page=logout" style="background-color:#069;color:#FFF">
                                            <i class="fa fa-crosshairs"></i>Logout</a>
                                    </li>
                                <?php
                                        }
                                        else{
                                    ?>
                                <?php
                                if(isset($_GET['page'])){
                                    $page=$_GET['page'];
                                    if (isset($_SESSION["state"] == "1")){
                                        if($page=="register"){
                                        include_once("Register.php");
                                        }
                                    }
                                    
                                    elseif($page=="login"){
                                        include_once("Login.php");
                                    }
                                    elseif($page=="category_management"){
                                        include_once("Category_Management.php");
                                    }
                                    elseif($page=="product_management"){
                                        include_once("Product_Management.php");
                                    }
                                    elseif($page=="add_category"){
                                        include_once("Add_Category.php");
                                    }
                                    elseif($page=="update_category"){
                                        include_once("Update_Category.php");
                                    }
                                    elseif($page=="logout"){
                                        include_once("Logout.php");
                                    }
                                    elseif($page=="add_product"){
                                        include_once("Add_Product.php");
                                    }
                                    elseif($page=="update_product"){
                                        include_once("Update_Product.php");
                                    }
                                    elseif($page=="update_customer"){
                                        include_once("Update_customer.php");
                                    }
                                }
                                else{
                                    include("Content.php");
                                }
                                ?>
                                
                                <li class="tm-nav-li"><a href="about.html" class="tm-nav-link">About</a></li>
                                <li class="tm-nav-li"><a href="contact.html" class="tm-nav-link">Contact</a></li>
                                <li class="tm-nav-li"><a href="Login.html" class="tm-nav-link">Login</a></li>
                                <li class="tm-nav-li"><a href="Login.html" class="tm-nav-link">Register</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!--Content -->

        <footer class="tm-footer text-center">
            <p>Pham Cao Nguyen</p>
        </footer>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script>
        $(document).ready(function() {
            // Handle click on paging links
            $('.tm-paging-link').click(function(e) {
                e.preventDefault();

                var page = $(this).text().toLowerCase();
                $('.tm-gallery-page').addClass('hidden');
                $('#tm-gallery-page-' + page).removeClass('hidden');
                $('.tm-paging-link').removeClass('active');
                $(this).addClass("active");
            });
        });
    </script>
</body>

</html>