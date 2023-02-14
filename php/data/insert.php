<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="./assets/css/style.css">
		<title>php</title>
	</head>
<!-- ----------php------------------------->
<?php 

$navLinks = ['home','about','contact'];
$navOptions = ['hidden','tectnologies','uml','ux/ui'];
?>




<!-- ----------php----------------------- -->




	<body id="body">

		<header>
			<nav>
				<div class="logo"><a href="#index.php">sayHello</a></div>
				<div class="nav-links">
					<ul>
						<?php 
							foreach ($navLinks as $link) {
								echo "<li><a class='link' href='#$link'>$link</a></li>";
						}?>

					</ul>
				</div>
			</nav>
		</header>
<?php 

for ($num = 1; $num <= 10; $num+=1) {
	// append into the empty list
	echo "bcict20$num <br>";
}
?>


		<script src="./assets/js/script.js"></script>
	</body>

</html>
