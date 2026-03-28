<?php $pageTitle = "Contact Us"; ?>
<!DOCTYPE html>
<html>
<head>
<?php include('include/head.php'); ?>
</head>

<body>

<?php include('include/header.php'); ?>


<!-- CONTACT HERO -->

<section class="contact-hero">

<h1>Contact Us</h1>

<p>We are here to help you with your water needs</p>

</section>


<!-- CONTACT DETAILS -->

<section class="contact-section">

<div class="contact-grid">

<div class="contact-card">

<h3>📍 Address</h3>

<p>Daulatabad, Haryana</p>
<p>India</p>

</div>


<div class="contact-card">

<h3>📞 Phone</h3>

<p>+91 98XXXXXXXX</p>

</div>


<div class="contact-card">

<h3>✉ Email</h3>

<p>info@watercompany.com</p>

</div>

</div>

</section>


<!-- CONTACT FORM -->

<section class="contact-form-section">

<h2>Send Us a Message</h2>

<form class="contact-form" onsubmit="sendWhatsApp(); return false;">

<input type="text" id="name" placeholder="Your Name" required>

<input type="email" id="email" placeholder="Your Email" required>

<textarea id="message" placeholder="Your Message" rows="5"></textarea>

<button type="submit" class="btn">Send Message</button>

</form>

</section>


<?php include('include/footer.php'); ?>


<script>

function sendWhatsApp(){

var name = document.getElementById("name").value;
var email = document.getElementById("email").value;
var message = document.getElementById("message").value;

var phone = "9898989898"; 

var url = "https://wa.me/" + phone + "?text="
+ "*New Enquiry from Website* %0a%0a"
+ "*Name:* " + name + "%0a"
+ "*Email:* " + email + "%0a"
+ "*Message:* " + message;

window.open(url, "_blank");

}

</script>

</body>

</html>