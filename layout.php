<?php 
function template_header() { ?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<title><?php print constant('PAGE_TITLE');?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
		rel="stylesheet" 
		integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
		crossorigin="anonymous">
</head>
<body>
	<header class="bg-dark text-white text-center p-3">
		<h1>My Header - Tai Nguyen</h1>
	</header>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="about_us.php">About Us</a>
			<a class="navbar-brand" href="contact_us.php">Contact Us</a>
			<a class="navbar-brand" href="form.php">Form</a>
		</div>
	</nav>

	<div class="container mt-4">
<?php } ?>

<?php 
function template_footer() { ?>
	</div> 

	<footer class="bg-dark text-white text-center p-3 mt-4">
		&copy; 2025 - Copyright Info
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
		integrity="sha384-p43nPbRvQ/hF2pD20X0a/sC5jC0CQeOFpD4POZlWqPzFWcMZ1YJfdfnH3tBAvP6N" 
		crossorigin="anonymous"></script>
</body>
</html>
<?php } ?>
