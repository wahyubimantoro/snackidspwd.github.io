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

    <!-- All Products -->

    <div class="small-container">
        <div class="row row-2">
            <h2>All Products</h2>
            <select>
                <option>Default Sort</option>
                <option>Sort By Price</option>
                <option>Sort By Popularity</option>
                <option>Sort By Rating</option>
                <option>Sort By Sale</option>
            </select>
        </div>
        <div class="row">
            <div class="col-4">
                <a href="product_details.php"><img src="images/product-5.jpg"></a>
                <h4>Soes kering original 50 Gram</h4>
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
                <a href="product_details.php"><img src="images/product-6.jpg"></a>
                <h4>Nyamnyam coklat / nyam nyam pouch - rice crispy</h4>
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
                <a href="product_details.php"><img src="images/product-7.jpg"></a>
                <h4>Mino Mini Nopia Rasa Gula Jawa netto 131 gram</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rp. 5.500</p>
            </div>
            <div class="col-4">
                <a href="product_details.php"><img src="images/product-1.jpg"></a>
                <h4>Keripik Kaca Extra Pedas (40 gram)</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rp. 5.800</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <a href="product_details.php"><img src="images/product-9.jpg"></a>
                <h4>Jamur crispy 50gram</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rp 5.000</p>
            </div>
            <div class="col-4">
                <a href="product_details.php"><img src="images/product-10.jpg"></a>
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
                <a href="product_details.php"><img src="images/product-3.jpg"></a>
                <h4>KERIPIK KRIPIK USUS 50 GRAM </h4>
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
                <a href="product_details.php"><img src="images/product-4.jpg"></a>
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
        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
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
            <p class="copyright"><a href="https://risset.me">RISSET Copyright 2022 - Indah dwi susanti</a></p>
        </div>
    </div>

    <!-- javascript -->

    <script src="js/jquery-2.2.3.min.js"></script>
    <script type='text/javascript' src="js/bootstrap.min.js"></script>
    <script type='text/javascript' src="js/jquery.mycart.js"></script>
    <script src="js/script.js"></script>

</body>

</html>