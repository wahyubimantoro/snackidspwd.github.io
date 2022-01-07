<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack Store | Snack IDS Purwodadi</title>
    <link rel="shortcut icon" href="images/icon.png">
    <meta name="author" content="Danang Haris Setiawan">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css"></head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"><img src="images/logo.jpeg" alt="logo" width="125px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="products.html">Products</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="account.html">Account</a></li>
                </ul>
            </nav>
            <div style="float: right; cursor: pointer;">
                <span class="glyphicon glyphicon-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
            </div>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>

    <!-- Account Page -->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images/logo.png   " width="100%">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">
                        </div>
                        <form id="LoginForm">
                            <input type="text" placeholder="Username">
                            <input type="password" placeholder="Password">
                            <button type="submit" class="btn">Login</button>
                            <a href="">Forget Password</a>
                        </form>

                        <form id="RegForm">
                            <input type="text" placeholder="Username">
                            <input type="email" placeholder="Email">
                            <input type="password" placeholder="Password">
                            <button type="submit" class="btn">Register</button>
                        </form>
                    </div>
                </div>
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

    <!-- Toggle Form -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <script type='text/javascript' src="js/bootstrap.min.js"></script>
    <script type='text/javascript' src="js/jquery.mycart.js"></script>
    <script src="js/script.js"></script>

</body>

</html>