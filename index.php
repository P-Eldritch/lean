<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="a landing page">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lean Technologies</title>
	<link rel="icon" href="icon.jpg">
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<header>
		<div class="sticky-menu">
		<a class="home-logo" href="index.php"><img src="Logo.jpg" alt="company logo"></a>
		<nav class="main-nav">
			<div class="burger"></div>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="#products">Products</a></li>
				<li><a href="#case">Case</a></li>
				<li><a href="#contact" class="popup-button">Contact</a></li> 
	
			</ul>
		</nav>
		</div>
		<div class="header-img">
		<img src="hero.jpg">
			<div class="text-box">
				<h1>Welcome to Leantech</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco do eiusmod tempor incididunt.</p>
				<button class="popup-button">Get in touch</button>
			</div>	
		</div>
			<div class="popup-box">
				<div class="popup-content">
					<span class="x-button">&times;</span>
   					 <h2>Your details here</h2>
   					 <form class="contact-form" name="contact-form" action="" method="post" enctype="application/x-www-form-urlencoded">
   					 	<div class="flex">
   					 		<div>
   					 		<label for="fullname">Full name *</label>
	   					 	<input type="text" name="fullname" id="fullname" required="required">	
   					 		</div>

   					 		<div>
	   					 	<label for="phone">Phone</label>
	   					 	<input type="tel" name="phone" id="phone">
	   					 	</div>

	   					 	<div>
	   					 	<label for="email">Email *</label>
	   					 	<input type="email" name="email" id="email" required="required">
	   					 	</div>
	   					 </div>
   					 	<div class="message-div">
   					 	<label for="message">Your message</label>
   					 	<textarea name="message" id="message"></textarea>
   					 	</div>

   					 	<p>* Required</p>
   						<div class="check-box">
   					 	<input type="checkbox" name="checkbox" value="check" id="agree" required="required">

   					 	<label for="agree">Agree on terms</label>
   					 	</div>
   					 	<div class="submit-div">
   					 	<button class="submit-button" type="submit">Get in touch</button></div>
   					 	<a href="https://en.wikipedia.org/wiki/Terms_of_service" target="_blank" title="click to learn more">Terms and conditions</a>
   					 </form>
				</div>
				<div class="popup-content-2">
					<h2>Thank you for your inquiry</h2>
					<p>We will contact you within 24h.</p>
					<div class="ok-button">
					<button class="ok">OK</button></div>
				</div>
			</div>
	</header>

	<section class="products-section" id="products">
		<h2>Products</h2>
		<div class="figure-container">
			<figure>
				<img src="3Products.jpg" alt="a representative picture for full-stack consultancy">
				<figcaption>Full-stack consultancy</figcaption>
			</figure>
			<figure>
				<img src="2Products.jpg" alt="a representative picture for market analysis">
				<figcaption>Market analysis</figcaption>
			</figure>
			<figure>
				<img src="1Products.jpg" alt="a representative picture for design">
				<figcaption>Design</figcaption>
			</figure>
		</div>
	</section>

	<section class="case-section" id="case">
		<div class="column">
			<h2>Success case</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.</p>
			<a href="https://www.leantech.pro/" target="_blank" title="Go to https://www.leantech.pro/">Learn more</a>
		</div>
		<img src="Case.jpg" alt="a picture proving how much we care">
	</section>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="main.js"></script>
</body>
</html>