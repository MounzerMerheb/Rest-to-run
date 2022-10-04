<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact us</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/0ae0a4495c.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="./css/contactus.css">
	<link rel="shortcut icon" href="./img/pict/icon.png">
</head>
<body>
	<!-- Start Header -->

	<header>
		<a href="index.php">
			<div class="back"><span class="roof1"></span><span class="roof2"></span><span class="wall1"></span><span class="wall2"></span></div>
		</a>
		<div class="img-holder">
			<a href="#contact-us"><h1>Contact-us</h1></a>
		</div>
	</header>

	<!-- End Header -->

	<!-- Start Contact Info -->

	<div class="contact-info">
		<div class="container">
			<div class="title"><h1>Get in touch with us ! </h1></div>
			<div class="contact">
				<div class="phone">
					<i class="fa-solid fa-2x fa-phone"></i>
					<h3>Phone</h3>
					<p>+961 79 323 421</p>
					<p>+961 71 795 480</p>
					<p>+961 71 728 243</p>
				</div>
				<div class="vline"></div>
				<div class="location">
					<a href="#location-section"><i class="fa-solid fa-2x fa-location-dot"></i></a>
					<h3><a href="#location-section">Location</a></h3>
					<p>Akkar / Lebanon</p>
					<p>Lorem ipsum dolor sit amet.</p>
				</div>
				<div class="vline"></div>
				<div class="email">
					<i class="fa-solid fa-2x fa-envelope"></i>
					<h3>email</h3>
					<p>mokanj_04@gmail.com  </p>
					<p>Mmerheb_19@gmail.com</p> 
					<p> mosayur_39@gmail.com</p>
				</div>
			</div>
		</div>
	</div>

	<!-- End Contact Info -->

	<!-- Start Contact Us Form Section -->

	<div class="contact-us" id="contact-us">
		<div class="container">
			
			<div class="title"><h1>Contact us</h1></div>
			<div class="forms-container">
				<div class="send-email-form">
					<form action="./includes/action.inc.php" class="sign-in-form" method="POST">
						<div class="name-container">
							<div class="input-field">
								<i class="fas fa-user"></i>
								<input type="text" name="first-name" placeholder="First name" required />
							</div>
							<div class="input-field">
								<i class="fas fa-user"></i>
								<input type="text" name="last-name" placeholder="Last name" required/>
							</div>
						</div>
						<div class="input-field">
							<i class="fa-solid fa-at"></i>
							<input type="email" name="email" placeholder="Email address" required />
						</div>
						<div class=" text-area">
							<textarea required name="text" placeholder="Enter your message"></textarea>
						</div>
						
						<input type="submit" value="Send" class="btn solid" />
						
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- End Contact Us Form Section -->

	<!-- Start Location -->

	<div id="location-section">
		<div class="container">
			<div class="title">
				<h1>Location</h1>
			</div>
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11354.407955875025!2d35.985238326466785!3d34.49897127192085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15222183767d45bf%3A0x209fae3615216b76!2sBebnine!5e1!3m2!1sen!2slb!4v1651159130681!5m2!1sen!2slb" style="border:0;" width="80%" height="400px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>

	<!-- End Location -->

	<!-- Start Social media -->

	<div class="social-media">
		<div class="container">
			<div class="links">
				<a href="https://www.facebook.com/"><i class="fa-brands fa-2x fa-facebook-square"></i></a>
				<a href="https://www.instagram.com/?hl=en"><i class="fa-brands fa-2x fa-instagram-square"></i></a>
				<a href="https://www.linkedin.com/"><i class="fa-brands fa-2x fa-linkedin"></i></a>
			</div>
		</div>
	</div>

	<!-- End Social media -->

	<!-- Start copy right -->

	<div class="copy-right">
		<div class="container">
			<div class="text">
				<h4>&copy; Copyright 2021-2022 Protect My Work Limited. All Rights Reserved.</h4>
			</div>
		</div>
	</div>

	<!-- End copy right -->

</body>
</html>