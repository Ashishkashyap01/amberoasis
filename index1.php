<?php $pageTitle = "Home"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php echo $pageTitle; ?></title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{
background:#0f172a;
color:white;
overflow-x:hidden;
}

/* NAVBAR */

nav{
position:fixed;
width:100%;
top:0;
left:0;
padding:20px 80px;
display:flex;
justify-content:space-between;
align-items:center;
background:rgba(0,0,0,0.3);
backdrop-filter:blur(10px);
z-index:1000;
}

nav h2{
font-weight:700;
}

nav ul{
display:flex;
gap:30px;
list-style:none;
}

nav a{
color:white;
text-decoration:none;
font-size:14px;
}

/* HERO */

.hero{
height:100vh;
display:flex;
align-items:center;
justify-content:center;
text-align:center;
padding:0 20px;
position:relative;
}

.hero h1{
font-size:70px;
line-height:80px;
font-weight:700;
}

.hero p{
margin-top:20px;
font-size:18px;
color:#cbd5e1;
}

.hero button{
margin-top:40px;
padding:15px 40px;
border:none;
background:#3b82f6;
color:white;
font-size:16px;
border-radius:40px;
cursor:pointer;
transition:.3s;
}

.hero button:hover{
background:#2563eb;
}

/* FLOATING SHAPES */

.shape{
position:absolute;
border-radius:50%;
filter:blur(80px);
opacity:.5;
}

.shape1{
width:400px;
height:400px;
background:#3b82f6;
top:-100px;
left:-100px;
}

.shape2{
width:400px;
height:400px;
background:#9333ea;
bottom:-100px;
right:-100px;
}

/* FEATURES */

.features{
padding:120px 80px;
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:40px;
}

.card{
background:rgba(255,255,255,0.05);
border:1px solid rgba(255,255,255,0.1);
border-radius:20px;
padding:40px;
transition:.4s;
}

.card:hover{
transform:translateY(-10px);
background:rgba(255,255,255,0.08);
}

.card h3{
margin-bottom:15px;
}

.card p{
color:#cbd5e1;
font-size:14px;
}

/* SECTION TITLE */

.title{
text-align:center;
font-size:40px;
margin-bottom:60px;
}

/* CTA */

.cta{
padding:150px 20px;
text-align:center;
}

.cta h2{
font-size:50px;
margin-bottom:20px;
}

.cta button{
padding:15px 50px;
border:none;
background:#9333ea;
color:white;
font-size:16px;
border-radius:40px;
cursor:pointer;
}

/* FOOTER */

footer{
padding:40px;
text-align:center;
border-top:1px solid rgba(255,255,255,0.1);
color:#94a3b8;
font-size:14px;
}

/* RESPONSIVE */

@media(max-width:768px){

.hero h1{
font-size:40px;
line-height:50px;
}

nav{
padding:20px;
}

.features{
padding:80px 20px;
}

}

</style>
</head>


<body>


<!-- NAVBAR -->

<nav>

<h2>Brand</h2>

<ul>
<li><a href="#">Home</a></li>
<li><a href="#">Features</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Contact</a></li>
</ul>

</nav>



<!-- HERO -->

<section class="hero">

<div class="shape shape1"></div>
<div class="shape shape2"></div>

<div>

<h1>Future Ready Website</h1>

<p>
Modern animated website design with smooth UI and premium experience.
</p>

<button>Get Started</button>

</div>

</section>



<!-- FEATURES -->

<section>

<h2 class="title">Our Features</h2>

<div class="features">

<div class="card">
<h3>Fast Performance</h3>
<p>Ultra fast loading website optimized for modern users.</p>
</div>

<div class="card">
<h3>Modern Design</h3>
<p>Premium UI design inspired by modern tech companies.</p>
</div>

<div class="card">
<h3>Secure System</h3>
<p>High security structure and optimized architecture.</p>
</div>

<div class="card">
<h3>Easy Integration</h3>
<p>Compatible with all modern platforms and APIs.</p>
</div>

</div>

</section>



<!-- CTA -->

<section class="cta">

<h2>Build Something Amazing</h2>

<button>Start Now</button>

</section>



<footer>

© <?php echo date("Y"); ?> Your Company. All rights reserved.

</footer>


</body>
</html>