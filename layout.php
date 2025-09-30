<?php 
function template_header() { ?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<title><?php print constant('PAGE_TITLE');?></title>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
		rel="stylesheet" 
		integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
		crossorigin="anonymous">
</head>
<body>
	<header class="bg-dark text-white text-center p-3">
		<h1>My Website</h1>
	</header>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link <?php if(constant('PAGE_TITLE')=="About us") echo 'active'; ?>" href="about_us.php">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php if(constant('PAGE_TITLE')=="Contact us") echo 'active'; ?>" href="contact_us.php">Contact Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php if(constant('PAGE_TITLE')=="Form Doanh thu") echo 'active'; ?>" href="form.php">Form</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php if(constant('PAGE_TITLE')=="Registration Form") echo 'active'; ?>" href="registration_form.php">Registration</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container mt-4">
<?php } ?>

<?php 
function template_footer() { ?>
	</div> <!-- Đóng container -->

	<footer class="bg-dark text-white text-center p-3 mt-4">
		&copy; 2025 - Copyright Info
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
		integrity="sha384-p43nPbRvQ/hF2pD20X0a/sC5jC0CQeOFpD4POZlWqPzFWcMZ1YJfdfnH3tBAvP6N" 
		crossorigin="anonymous"></script>
</body>
</html>
<?php } ?>