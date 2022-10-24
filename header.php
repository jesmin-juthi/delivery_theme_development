<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
<!--=============== HEADER ===============-->
<header class="header" id="header">
    <nav class="nav container">
        <a href="#" class="nav__logo">Delivery</a>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="#home" class="nav__link active-link">Home</a>
                </li>
                <li class="nav__item">
                    <a href="#about" class="nav__link">About us</a>
                </li>
                <li class="nav__item">
                    <a href="#services" class="nav__link">Services</a>
                </li>
                <li class="nav__item">
                    <a href="#contact" class="nav__link">Contact us</a>
                </li>

                <i class='bx bx-toggle-left change-theme' id="theme-button"></i>
            </ul>
        </div>

        <div class="nav__toggle" id="nav-toggle">
            <i class='bx bx-grid-alt'></i>
        </div>

        <a href="#" class="button button__header">Order Now!</a>
    </nav>
</header>