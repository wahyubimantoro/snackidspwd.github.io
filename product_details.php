<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack Store | Snack IDS Purwodadi</title>
    <link rel="shortcut icon" href="images/icon.png">

    <meta name="author" content="Danang Haris Setiawan">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.php"><img src="images/logo.jpeg" alt="logo" width="125px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="account.php">Account</a></li>
                </ul>
            </nav>
            <div style="float: right; cursor: pointer;">
                <span class="glyphicon glyphicon-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
            </div>

            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>

    <!-- Single Products -->
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="images/product-1.jpg" width="100%" id="ProductImg">
                <hr>
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images/product-1.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/product-1.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/product-1.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/product-1.jpg" width="100%" class="small-img">
                    </div>
                </div>

            </div>
            <div class="col-2">
                <p>Home / Snack</p>
                <h1>Keripik Kaca Extra Pedas (40 gram)</h1>
                <h4>Rp. 5.800</h4>

                <input type="number" value="1">
                <button style="margin-bottom: 35px;" class="btn btn-danger my-cart-btn" data-id="5" data-name="Keripik Kaca Extra Pedas (40 gram)" data-summary="summary 1" data-price="5800" data-quantity="1" data-image="images/product-1.jpg">Add To Cart</button>

                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <br>
                <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    industry's standard dummy text.</p>
            </div>
        </div>
    </div>
    <!-- title -->
    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <p>View More</p>
        </div>
    </div>
    <!-- Products -->
    <div class="small-container">
        <div class="row">
            <div class="col-4">
                <img src="images/product-9.jpg">
                <h4>Jamur crispy 50gram</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rp. 5.000</p>
            </div>
            <div class="col-4">
                <img src="images/product-10.jpg">
                <h4>Tela - tela 50gram</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rp. 5.200</p>
            </div>
            <div class="col-4">
                <img src="images/product-3.jpg">
                <h4>KERIPIK KRIPIK USUS 50 GRAM</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rp. 5.200</p>
            </div>
            <div class="col-4">
                <img src="images/product-4.jpg">
                <h4>Keripik singkong pedas asam manis </h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rp. 6.300</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="images/play-store.png">
                        <img src="images/app-store.png">
                    </div>
                </div>

            </div>
            <hr>
            <p class="copyright"><a href="https://risset.me">Snack IDS Copyright 2022 - Indah dwi susanti</a></p>
        </div>
    </div>

    <!-- javascript -->

    <script src="js/jquery-2.2.3.min.js"></script>
    <script type='text/javascript' src="js/bootstrap.min.js"></script>
    <script type='text/javascript' src="js/jquery.mycart.js"></script>
    <script src="js/script.js"></script>


</body>

</html>