<?php
require_once '../../Model/user.php';
require_once '../../html-element/logState.php';

session_start();

if (isset($_SESSION['user'])) {
    if ($_SESSION['user']->getLogState() == false) {
        header('Location: ../register.php');
    }
} else {
    header('Location: ../register.php');
}

$filename = basename($_SERVER['REQUEST_URI']);
$_SESSION['actual_page'] = $filename;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anon - eCommerce Website</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="../../assets/images/logo/favicon.ico" type="image/x-icon">

    <!-- custom css link -->
    <link rel="stylesheet" href="../../assets/css/main.css">
    <link rel="stylesheet" href="../../assets/css/profile_favoris.css">

    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- custom js link -->
    <script defer src="../../assets/js/script.js"></script>

    <!-- ionicon link -->
    <script defer type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script defer nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="overlay" data-overlay></div>

    <!-- HEADER -->

    <header>
        <div class="header-top">

            <div class="container">

                <ul class="header-social-container">

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                </ul>

                <div class="header-alert-news">
                    <p>
                        <b>Free Shipping</b>
                        This Week Order Over - $55
                    </p>
                </div>

                <div class="header-top-actions">

                    <select name="currency">

                        <option value="usd">USD &dollar;</option>
                        <option value="eur">EUR &euro;</option>

                    </select>

                    <select name="language">

                        <option value="en-US">English</option>
                        <option value="es-ES">Espa&ntilde;ol</option>
                        <option value="fr">Fran&ccedil;ais</option>

                    </select>

                </div>

            </div>

        </div>

        <div class="header-main">

            <div class="container">

                <a href="#" class="header-logo header-logo-favoris">
                    <img src="../../assets/images/logo/logo-deshabillez.PNG" alt="Anon's logo" width="120" height="36">
                </a>

                <div class="header-user-actions">

                    <button class="action-btn">
                        <ion-icon name="person-outline"></ion-icon>
                    </button>

                    <button class="action-btn">
                        <ion-icon name="heart-outline"></ion-icon>
                        <span class="count">0</span>
                    </button>

                    <button class="action-btn">
                        <ion-icon name="bag-handle-outline"></ion-icon>
                        <span class="count">0</span>
                    </button>

                </div>

            </div>

        </div>

        <nav class="desktop-navigation-menu">

            <div class="container">

                <ul class="desktop-menu-category-list">

                    <li class="menu-category">
                        <a href="#" class="menu-title">Home</a>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Categories</a>

                        <div class="dropdown-panel">

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Electronics</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Desktop</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Laptop</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Camera</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Tablet</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Headphone</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="./assets/images/electronics-banner-1.jpg" alt="headphone collection" width="250" height="119">
                                    </a>
                                </li>

                            </ul>

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Men's</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Formal</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Casual</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Sports</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Jacket</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Sunglasses</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="./assets/images/mens-banner.jpg" alt="men's fashion" width="250" height="119">
                                    </a>
                                </li>

                            </ul>

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Women's</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Formal</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Casual</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Perfume</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Cosmetics</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Bags</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="./assets/images/womens-banner.jpg" alt="women's fashion" width="250" height="119">
                                    </a>
                                </li>

                            </ul>

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Electronics</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Smart Watch</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Smart TV</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Keyboard</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Mouse</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Microphone</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="./assets/images/electronics-banner-2.jpg" alt="mouse collection" width="250" height="119">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Men's</a>

                        <ul class="dropdown-list">

                            <li class="dropdown-item">
                                <a href="#">Shirt</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Shorts & Jeans</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Safety Shoes</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Wallet</a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Women's</a>

                        <ul class="dropdown-list">

                            <li class="dropdown-item">
                                <a href="#">Dress & Frock</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Earrings</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Necklace</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Makeup Kit</a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Jewelry</a>

                        <ul class="dropdown-list">

                            <li class="dropdown-item">
                                <a href="#">Earrings</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Couple Rings</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Necklace</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Bracelets</a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Perfume</a>

                        <ul class="dropdown-list">

                            <li class="dropdown-item">
                                <a href="#">Clothes Perfume</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Deodorant</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Flower Fragrance</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Air Freshener</a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Blog</a>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Hot Offers</a>
                    </li>

                </ul>

            </div>

        </nav>

        <div class="mobile-bottom-navigation">
            <a href="../../index.php" class="action-btn">
                <ion-icon name="home-outline"></ion-icon>
            </a>

            <a href="../search.php" class="action-btn">
                <ion-icon name="search-outline"></ion-icon>
            </a>

            <a href="../product.php" class="action-btn">
                <ion-icon name="add-outline"></ion-icon>
            </a>

            <a href="../contact.php" class="action-btn">
                <ion-icon name="mail-outline"></ion-icon>

                <span class="count">3</span>
            </a>

            <a href="../profile.php" class="action-btn">
                <ion-icon name="person-outline"></ion-icon>

                <span class="count">1</span>
            </a>

            <!-- Pour déployer menu utiliser data-mobile-menu-open-btn
                <button class="action-btn" data-mobile-menu-open-btn>
                    <ion-icon name="mail-outline"></ion-icon>

                    <span class="count">3</span>
                </button>

                <button class="action-btn" data-mobile-menu-open-btn>
                    <ion-icon name="person-outline"></ion-icon>
                    <span class="count">1</span>
                </button>
            -->
        </div>

        <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>
            <div class="menu-top">
                <h2 class="menu-title">Menu</h2>

                <button class="menu-close-btn" data-mobile-menu-close-btn>
                    <ion-icon name="close-outline"></ion-icon>
                </button>
            </div>

            <ul class="mobile-menu-category-list">

                <li class="menu-category">
                    <a href="#" class="menu-title">Home</a>
                </li>

                <li class="menu-category">

                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Men's</p>

                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>
                    </button>

                    <ul class="submenu-category-list" data-accordion>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Shirt</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Shorts & Jeans</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Safety Shoes</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Wallet</a>
                        </li>

                    </ul>

                </li>

                <li class="menu-category">

                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Women's</p>

                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>
                    </button>

                    <ul class="submenu-category-list" data-accordion>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Dress & Frock</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Earrings</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Necklace</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Makeup Kit</a>
                        </li>

                    </ul>

                </li>

                <li class="menu-category">

                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Jewelry</p>

                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>
                    </button>

                    <ul class="submenu-category-list" data-accordion>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Earrings</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Couple Rings</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Necklace</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Bracelets</a>
                        </li>

                    </ul>

                </li>

                <li class="menu-category">

                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Perfume</p>

                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>
                    </button>

                    <ul class="submenu-category-list" data-accordion>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Clothes Perfume</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Deodorant</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Flower Fragrance</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Air Freshener</a>
                        </li>

                    </ul>

                </li>

                <li class="menu-category">
                    <a href="#" class="menu-title">Blog</a>
                </li>

                <li class="menu-category">
                    <a href="#" class="menu-title">Hot Offers</a>
                </li>

            </ul>

            <div class="menu-bottom">

                <ul class="menu-category-list">

                    <li class="menu-category">

                        <button class="accordion-menu" data-accordion-btn>
                            <p class="menu-title">Language</p>

                            <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                        </button>

                        <ul class="submenu-category-list" data-accordion>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">English</a>
                            </li>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">Espa&ntilde;ol</a>
                            </li>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">Fren&ccedil;h</a>
                            </li>

                        </ul>

                    </li>

                    <li class="menu-category">
                        <button class="accordion-menu" data-accordion-btn>
                            <p class="menu-title">Currency</p>
                            <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                        </button>

                        <ul class="submenu-category-list" data-accordion>
                            <li class="submenu-category">
                                <a href="#" class="submenu-title">USD &dollar;</a>
                            </li>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">EUR &euro;</a>
                            </li>
                        </ul>
                    </li>

                </ul>

                <ul class="menu-social-container">

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                </ul>

            </div>

        </nav>
    </header>

    <!-- MAIN -->

    <main>

        <!-- PRODUCT -->

        <div class="product-container">

            <div class="container">

                <!-- SIDEBAR -->

                <div class="product-box">

                    <!-- PRODUCT GRID -->

                    <div class="product-main">

                        <h2 class="title favoris-title">Tes favoris</h2>

                        <div class="product-grid">

                            <div class="showcase">

                                <div class="showcase-banner">

                                    <img src="../../assets/images/products/jacket-3.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                                    <img src="../../assets/images/products/jacket-4.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">

                                    <p class="showcase-badge">15%</p>

                                    <div class="showcase-actions">

                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>

                                    </div>

                                </div>

                                <div class="showcase-content">

                                    <a href="#" class="showcase-category">jacket</a>

                                    <a href="#">
                                        <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
                                    </a>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$48.00</p>
                                        <del>$75.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="../../assets/images/products/shirt-1.jpg" alt="Pure Garment Dyed Cotton Shirt" class="product-img default" width="300">
                                    <img src="../../assets/images/products/shirt-2.jpg" alt="Pure Garment Dyed Cotton Shirt" class="product-img hover" width="300">

                                    <p class="showcase-badge angle black">sale</p>

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">shirt</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Pure Garment Dyed Cotton Shirt</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$45.00</p>
                                        <del>$56.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="../../assets/images/products/jacket-5.jpg" alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img default" width="300">
                                    <img src="../../assets/images/products/jacket-6.jpg" alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img hover" width="300">

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">Jacket</a>

                                    <h3>
                                        <a href="#" class="showcase-title">MEN Yarn Fleece Full-Zip Jacket</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$58.00</p>
                                        <del>$65.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="../../assets/images/products/clothes-3.jpg" alt="Black Floral Wrap Midi Skirt" class="product-img default" width="300">
                                    <img src="../../assets/images/products/clothes-4.jpg" alt="Black Floral Wrap Midi Skirt" class="product-img hover" width="300">

                                    <p class="showcase-badge angle pink">new</p>

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">skirt</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Black Floral Wrap Midi Skirt</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$25.00</p>
                                        <del>$35.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="../../assets/images/products/shoe-2.jpg" alt="Casual Men's Brown shoes" class="product-img default" width="300">
                                    <img src="../../assets/images/products/shoe-2_1.jpg" alt="Casual Men's Brown shoes" class="product-img hover" width="300">

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">casual</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Casual Men's Brown shoes</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$99.00</p>
                                        <del>$105.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="../../assets/images/products/watch-3.jpg" alt="Pocket Watch Leather Pouch" class="product-img default" width="300">
                                    <img src="../../assets/images/products/watch-4.jpg" alt="Pocket Watch Leather Pouch" class="product-img hover" width="300">

                                    <p class="showcase-badge angle black">sale</p>

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">watches</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Pocket Watch Leather Pouch</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$150.00</p>
                                        <del>$170.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="../../assets/images/products/watch-1.jpg" alt="Smart watche Vital Plus" class="product-img default" width="300">
                                    <img src="../../assets/images/products/watch-2.jpg" alt="Smart watche Vital Plus" class="product-img hover" width="300">

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">watches</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Smart watche Vital Plus</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$100.00</p>
                                        <del>$120.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="../../assets/images/products/party-wear-1.jpg" alt="Womens Party Wear Shoes" class="product-img default" width="300">
                                    <img src="../../assets/images/products/party-wear-2.jpg" alt="Womens Party Wear Shoes" class="product-img hover" width="300">

                                    <p class="showcase-badge angle black">sale</p>

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">party wear</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Womens Party Wear Shoes</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$25.00</p>
                                        <del>$30.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="../../assets/images/products/jacket-1.jpg" alt="Mens Winter Leathers Jackets" class="product-img default" width="300">
                                    <img src="../../assets/images/products/jacket-2.jpg" alt="Mens Winter Leathers Jackets" class="product-img hover" width="300">

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">jacket</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Mens Winter Leathers Jackets</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$32.00</p>
                                        <del>$45.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="../../assets/images/products/sports-2.jpg" alt="Trekking & Running Shoes - black" class="product-img default" width="300">
                                    <img src="../../assets/images/products/sports-4.jpg" alt="Trekking & Running Shoes - black" class="product-img hover" width="300">

                                    <p class="showcase-badge angle black">sale</p>

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">sports</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Trekking & Running Shoes - black</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$58.00</p>
                                        <del>$64.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="../../assets/images/products/shoe-1.jpg" alt="Men's Leather Formal Wear shoes" class="product-img default" width="300">
                                    <img src="../../assets/images/products/shoe-1_1.jpg" alt="Men's Leather Formal Wear shoes" class="product-img hover" width="300">

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">formal</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Men's Leather Formal Wear shoes</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$50.00</p>
                                        <del>$65.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="../../assets/images/products/shorts-1.jpg" alt="Better Basics French Terry Sweatshorts" class="product-img default" width="300">
                                    <img src="../../assets/images/products/shorts-2.jpg" alt="Better Basics French Terry Sweatshorts" class="product-img hover" width="300">

                                    <p class="showcase-badge angle black">sale</p>

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">shorts</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Better Basics French Terry Sweatshorts</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$78.00</p>
                                        <del>$85.00</del>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- PRODUCT FEATURED
                        <div class="product-featured">

                            <h2 class="title">Deal of the day</h2>

                            <div class="showcase-wrapper has-scrollbar">

                            <div class="showcase-container">

                                <div class="showcase">
                                
                                <div class="showcase-banner">
                                    <img src="../../assets/images/products/shampoo.jpg" alt="shampoo, conditioner & facewash packs" class="showcase-img">
                                </div>

                                <div class="showcase-content">
                                    
                                    <div class="showcase-rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <a href="#">
                                    <h3 class="showcase-title">shampoo, conditioner & facewash packs</h3>
                                    </a>

                                    <p class="showcase-desc">
                                    Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                    dolor dolor sit amet consectetur Lorem ipsum dolor
                                    </p>

                                    <div class="price-box">
                                    <p class="price">$150.00</p>

                                    <del>$200.00</del>
                                    </div>

                                    <button class="add-cart-btn">add to cart</button>

                                    <div class="showcase-status">
                                    <div class="wrapper">
                                        <p>
                                        already sold: <b>20</b>
                                        </p>

                                        <p>
                                        available: <b>40</b>
                                        </p>
                                    </div>

                                    <div class="showcase-status-bar"></div>
                                    </div>

                                    <div class="countdown-box">

                                    <p class="countdown-desc">
                                        Hurry Up! Offer ends in:
                                    </p>

                                    <div class="countdown">

                                        <div class="countdown-content">

                                        <p class="display-number">360</p>

                                        <p class="display-text">Days</p>

                                        </div>

                                        <div class="countdown-content">
                                        <p class="display-number">24</p>
                                        <p class="display-text">Hours</p>
                                        </div>

                                        <div class="countdown-content">
                                        <p class="display-number">59</p>
                                        <p class="display-text">Min</p>
                                        </div>

                                        <div class="countdown-content">
                                        <p class="display-number">00</p>
                                        <p class="display-text">Sec</p>
                                        </div>

                                    </div>

                                    </div>

                                </div>

                                </div>

                            </div>

                            <div class="showcase-container">
                            
                                <div class="showcase">
                            
                                <div class="showcase-banner">
                                    <img src="../../assets/images/products/jewellery-1.jpg" alt="Rose Gold diamonds Earring" class="showcase-img">
                                </div>
                            
                                <div class="showcase-content">
                            
                                    <div class="showcase-rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    </div>
                            
                                    <h3 class="showcase-title">
                                    <a href="#" class="showcase-title">Rose Gold diamonds Earring</a>
                                    </h3>
                            
                                    <p class="showcase-desc">
                                    Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                    dolor dolor sit amet consectetur Lorem ipsum dolor
                                    </p>
                            
                                    <div class="price-box">
                                    <p class="price">$1990.00</p>
                                    <del>$2000.00</del>
                                    </div>
                            
                                    <button class="add-cart-btn">add to cart</button>
                            
                                    <div class="showcase-status">
                                    <div class="wrapper">
                                        <p> already sold: <b>15</b> </p>
                            
                                        <p> available: <b>40</b> </p>
                                    </div>
                            
                                    <div class="showcase-status-bar"></div>
                                    </div>
                            
                                    <div class="countdown-box">
                            
                                    <p class="countdown-desc">Hurry Up! Offer ends in:</p>
                            
                                    <div class="countdown">
                                        <div class="countdown-content">
                                        <p class="display-number">360</p>
                                        <p class="display-text">Days</p>
                                        </div>
                            
                                        <div class="countdown-content">
                                        <p class="display-number">24</p>
                                        <p class="display-text">Hours</p>
                                        </div>
                            
                                        <div class="countdown-content">
                                        <p class="display-number">59</p>
                                        <p class="display-text">Min</p>
                                        </div>
                            
                                        <div class="countdown-content">
                                        <p class="display-number">00</p>
                                        <p class="display-text">Sec</p>
                                        </div>
                                    </div>
                            
                                    </div>
                            
                                </div>
                            
                                </div>
                            
                            </div>

                            </div>

                        </div>
                    -->

                </div>

            </div>

        </div>

        <!-- TESTIMONIALS, CTA & SERVICE-->

        <div>

            <div class="container">

                <div class="testimonials-box">

                    <!-- TESTIMONIALS
                        <div class="testimonial">

                            <h2 class="title">testimonial</h2>

                            <div class="testimonial-card">

                            <img src="../../assets/images/testimonial-1.jpg" alt="alan doe" class="testimonial-banner" width="80" height="80">

                            <p class="testimonial-name">Alan Doe</p>

                            <p class="testimonial-title">CEO & Founder Invision</p>

                            <img src="../../assets/images/icons/quotes.svg" alt="quotation" class="quotation-img" width="26">

                            <p class="testimonial-desc">
                                Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                dolor dolor sit amet.
                            </p>

                            </div>

                        </div>
                    -->

                    <!-- CTA
                        <div class="cta-container">

                            <img src="../../assets/images/cta-banner.jpg" alt="summer collection" class="cta-banner">

                            <a href="#" class="cta-content">

                            <p class="discount">25% Discount</p>

                            <h2 class="cta-title">Summer collection</h2>

                            <p class="cta-text">Starting @ $10</p>

                            <button class="cta-btn">Shop now</button>

                            </a>

                        </div>
                    -->

                    <!-- SERVICE
                        <div class="service">

                            <h2 class="title">Our Services</h2>

                            <div class="service-container">

                            <a href="#" class="service-item">

                                <div class="service-icon">
                                <ion-icon name="boat-outline"></ion-icon>
                                </div>

                                <div class="service-content">

                                <h3 class="service-title">Worldwide Delivery</h3>
                                <p class="service-desc">For Order Over $100</p>

                                </div>

                            </a>

                            <a href="#" class="service-item">
                            
                                <div class="service-icon">
                                <ion-icon name="rocket-outline"></ion-icon>
                                </div>
                            
                                <div class="service-content">
                            
                                <h3 class="service-title">Next Day delivery</h3>
                                <p class="service-desc">UK Orders Only</p>
                            
                                </div>
                            
                            </a>

                            <a href="#" class="service-item">
                            
                                <div class="service-icon">
                                <ion-icon name="call-outline"></ion-icon>
                                </div>
                            
                                <div class="service-content">
                            
                                <h3 class="service-title">Best Online Support</h3>
                                <p class="service-desc">Hours: 8AM - 11PM</p>
                            
                                </div>
                            
                            </a>

                            <a href="#" class="service-item">
                            
                                <div class="service-icon">
                                <ion-icon name="arrow-undo-outline"></ion-icon>
                                </div>
                            
                                <div class="service-content">
                            
                                <h3 class="service-title">Return Policy</h3>
                                <p class="service-desc">Easy & Free Return</p>
                            
                                </div>
                            
                            </a>

                            <a href="#" class="service-item">
                            
                                <div class="service-icon">
                                <ion-icon name="ticket-outline"></ion-icon>
                                </div>
                            
                                <div class="service-content">
                            
                                <h3 class="service-title">30% money back</h3>
                                <p class="service-desc">For Order Over $100</p>
                            
                                </div>
                            
                            </a>

                            </div>

                        </div>
                    -->

                </div>

            </div>

        </div>

        <!-- BLOG
            <div class="blog">

            <div class="container">

                <div class="blog-container has-scrollbar">

                <div class="blog-card">

                    <a href="#">
                    <img src="../../assets/images/blog-1.jpg" alt="Clothes Retail KPIs 2021 Guide for Clothes Executives" width="300" class="blog-banner">
                    </a>

                    <div class="blog-content">

                    <a href="#" class="blog-category">Fashion</a>

                    <a href="#">
                        <h3 class="blog-title">Clothes Retail KPIs 2021 Guide for Clothes Executives.</h3>
                    </a>

                    <p class="blog-meta">
                        By <cite>Mr Admin</cite> / <time datetime="2022-04-06">Apr 06, 2022</time>
                    </p>

                    </div>

                </div>

                <div class="blog-card">
                
                    <a href="#">
                    <img src="../../assets/images/blog-2.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle."
                        class="blog-banner" width="300">
                    </a>
                
                    <div class="blog-content">
                
                    <a href="#" class="blog-category">Clothes</a>
                
                    <h3>
                        <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup Battle.</a>
                    </h3>
                
                    <p class="blog-meta">
                        By <cite>Mr Robin</cite> / <time datetime="2022-01-18">Jan 18, 2022</time>
                    </p>
                
                    </div>
                
                </div>

                <div class="blog-card">
                
                    <a href="#">
                    <img src="../../assets/images/blog-3.jpg" alt="EBT vendors: Claim Your Share of SNAP Online Revenue."
                        class="blog-banner" width="300">
                    </a>
                
                    <div class="blog-content">
                
                    <a href="#" class="blog-category">Shoes</a>
                
                    <h3>
                        <a href="#" class="blog-title">EBT vendors: Claim Your Share of SNAP Online Revenue.</a>
                    </h3>
                
                    <p class="blog-meta">
                        By <cite>Mr Selsa</cite> / <time datetime="2022-02-10">Feb 10, 2022</time>
                    </p>
                
                    </div>
                
                </div>

                <div class="blog-card">
                
                    <a href="#">
                    <img src="../../assets/images/blog-4.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle."
                        class="blog-banner" width="300">
                    </a>
                
                    <div class="blog-content">
                
                    <a href="#" class="blog-category">Electronics</a>
                
                    <h3>
                        <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup Battle.</a>
                    </h3>
                
                    <p class="blog-meta">
                        By <cite>Mr Pawar</cite> / <time datetime="2022-03-15">Mar 15, 2022</time>
                    </p>
                
                    </div>
                
                </div>

                </div>

            </div>

            </div>  
        -->

    </main>

    <!-- FOOTER -->

    <footer>
        <div class="footer-category">
            <div class="container">
                <h2 class="footer-category-title">Brand directory</h2>

                <div class="footer-category-box">
                    <h3 class="category-box-title">Fashion :</h3>

                    <a href="#" class="footer-category-link">T-shirt</a>
                    <a href="#" class="footer-category-link">Shirts</a>
                    <a href="#" class="footer-category-link">shorts & jeans</a>
                    <a href="#" class="footer-category-link">jacket</a>
                    <a href="#" class="footer-category-link">dress & frock</a>
                    <a href="#" class="footer-category-link">innerwear</a>
                    <a href="#" class="footer-category-link">hosiery</a>
                </div>

                <div class="footer-category-box">
                    <h3 class="category-box-title">footwear :</h3>

                    <a href="#" class="footer-category-link">sport</a>
                    <a href="#" class="footer-category-link">formal</a>
                    <a href="#" class="footer-category-link">Boots</a>
                    <a href="#" class="footer-category-link">casual</a>
                    <a href="#" class="footer-category-link">cowboy shoes</a>
                    <a href="#" class="footer-category-link">safety shoes</a>
                    <a href="#" class="footer-category-link">Party wear shoes</a>
                    <a href="#" class="footer-category-link">Branded</a>
                    <a href="#" class="footer-category-link">Firstcopy</a>
                    <a href="#" class="footer-category-link">Long shoes</a>
                </div>

                <div class="footer-category-box">
                    <h3 class="category-box-title">jewellery :</h3>

                    <a href="#" class="footer-category-link">Necklace</a>
                    <a href="#" class="footer-category-link">Earrings</a>
                    <a href="#" class="footer-category-link">Couple rings</a>
                    <a href="#" class="footer-category-link">Pendants</a>
                    <a href="#" class="footer-category-link">Crystal</a>
                    <a href="#" class="footer-category-link">Bangles</a>
                    <a href="#" class="footer-category-link">bracelets</a>
                    <a href="#" class="footer-category-link">nosepin</a>
                    <a href="#" class="footer-category-link">chain</a>
                    <a href="#" class="footer-category-link">Earrings</a>
                    <a href="#" class="footer-category-link">Couple rings</a>
                </div>

                <div class="footer-category-box">
                    <h3 class="category-box-title">cosmetics :</h3>

                    <a href="#" class="footer-category-link">Shampoo</a>
                    <a href="#" class="footer-category-link">Bodywash</a>
                    <a href="#" class="footer-category-link">Facewash</a>
                    <a href="#" class="footer-category-link">makeup kit</a>
                    <a href="#" class="footer-category-link">liner</a>
                    <a href="#" class="footer-category-link">lipstick</a>
                    <a href="#" class="footer-category-link">prefume</a>
                    <a href="#" class="footer-category-link">Body soap</a>
                    <a href="#" class="footer-category-link">scrub</a>
                    <a href="#" class="footer-category-link">hair gel</a>
                    <a href="#" class="footer-category-link">hair colors</a>
                    <a href="#" class="footer-category-link">hair dye</a>
                    <a href="#" class="footer-category-link">sunscreen</a>
                    <a href="#" class="footer-category-link">skin loson</a>
                    <a href="#" class="footer-category-link">liner</a>
                    <a href="#" class="footer-category-link">lipstick</a>
                </div>
            </div>
        </div>

        <div class="footer-nav">
            <div class="container">
                <ul class="footer-nav-list">
                    <li class="footer-nav-item">
                        <h2 class="nav-title">Popular Categories</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Fashion</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Electronic</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Cosmetic</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Health</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Watches</a>
                    </li>
                </ul>

                <ul class="footer-nav-list">
                    <li class="footer-nav-item">
                        <h2 class="nav-title">Products</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Prices drop</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">New products</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Best sales</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Contact us</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Sitemap</a>
                    </li>
                </ul>

                <ul class="footer-nav-list">
                    <li class="footer-nav-item">
                        <h2 class="nav-title">Our Company</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Delivery</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Legal Notice</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Terms and conditions</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">About us</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Secure payment</a>
                    </li>
                </ul>

                <ul class="footer-nav-list">
                    <li class="footer-nav-item">
                        <h2 class="nav-title">Services</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Prices drop</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">New products</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Best sales</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Contact us</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Sitemap</a>
                    </li>
                </ul>

                <ul class="footer-nav-list">
                    <li class="footer-nav-item">
                        <h2 class="nav-title">Contact</h2>
                    </li>

                    <li class="footer-nav-item flex">
                        <div class="icon-box">
                            <ion-icon name="location-outline"></ion-icon>
                        </div>

                        <address class="content">
                            419 State 414 Rte
                            Beaver Dams, New York(NY), 14812, USA
                        </address>
                    </li>

                    <li class="footer-nav-item flex">
                        <div class="icon-box">
                            <ion-icon name="call-outline"></ion-icon>
                        </div>

                        <a href="tel:+607936-8058" class="footer-nav-link">(607) 936-8058</a>
                    </li>

                    <li class="footer-nav-item flex">
                        <div class="icon-box">
                            <ion-icon name="mail-outline"></ion-icon>
                        </div>

                        <a href="mailto:example@gmail.com" class="footer-nav-link">example@gmail.com</a>
                    </li>
                </ul>

                <ul class="footer-nav-list">
                    <li class="footer-nav-item">
                        <h2 class="nav-title">Follow Us</h2>
                    </li>

                    <li>
                        <ul class="social-link">

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </li>

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-twitter"></ion-icon>
                                </a>
                            </li>

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-linkedin"></ion-icon>
                                </a>
                            </li>

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </div>

        </div>

        <div class="footer-bottom">
            <div class="container">
                <img src="../../assets/images/payment.png" alt="payment method" class="payment-img">

                <p class="copyright">
                    Copyright &copy; <a href="#">DÉSHABILLEZ MOI</a> all rights reserved.
                </p>
            </div>
        </div>
    </footer>
</body>

</html>