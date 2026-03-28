<?php $pageTitle = "Home"; ?>
<!DOCTYPE html>
<html>

<head>
<?php include('include/head.php'); ?>
</head>

<body>

<?php include('include/header.php'); ?>

<!-- HERO VIDEO -->

<section class="hero-video">

<video autoplay muted loop playsinline class="hero-bg-video">
<source src="assets/video/water-hero.mp4" type="video/mp4">
</video>

<div class="hero-overlay">

<div class="hero-content">

<h1>Amber Oasis</h1>
<p>Pure • Fresh • Natural Drinking Water</p>

<a href="products.php" class="btn">Explore Products</a>

</div>

</div>

</section>


<!-- ABOUT STYLE SECTION -->

<section class="about-home">

<div class="about-container">

<div class="about-text">

<h2>Pure Water You Can Trust</h2>

<p>
We provide high-quality purified drinking water
for homes, offices and businesses.
</p>

</div>

<div class="about-img">

<img src="assets/img/water_bottle.png">

</div>

</div>

</section>


<!-- PRODUCTS -->

<section class="products-home">

<h2>Our Products</h2>

<div class="product-grid">

<div class="product-card">
<img src="assets/img/jar20.png">
<h3>20L Jar</h3>
<p>₹50</p>
</div>

<div class="product-card">
<img src="assets/img/bottle2l.png">
<h3>2L Bottle</h3>
<p>₹30</p>
</div>

<div class="product-card">
<img src="assets/img/bottle1l.png">
<h3>1L Bottle</h3>
<p>₹20</p>
</div>

</div>

</section>


<!-- WHY -->

<section class="why">

<h2>Why Choose Us</h2>

<div class="why-grid">

<div class="why-box">💧 100% Pure</div>
<div class="why-box">🚚 Fast Delivery</div>
<div class="why-box">💰 Affordable</div>

</div>

</section>


<!-- CTA -->

<section class="cta">

<h2>Get Fresh Water Delivered</h2>

<a href="contact.php" class="btn">Contact Now</a>

</section>


<?php include('include/footer.php'); ?>

</body>
</html>