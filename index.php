<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php
	include 'header.php';
	?>

<body>
	<div class="wrapper">
		<?php include 'menu.php' ?>

		<div class="main">
			<?php include 'topo.php' ?>

			<?php include 'corpo.php' ?>

			<footer class="footer">
				<?php include 'footer.php' ?>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>


	<head>
		<style>
			body {
				transition: background-color 0.5s ease;
			}

			.dark-mode {
				background-color: black;
				color: white;
			}
		</style>
	</head>

	<body>
		<button onclick="toggleDarkMode()">Mudar para o modo escuro</button>
		<script>
			function toggleDarkMode() {
				var element = document.body;
				element.classList.toggle("dark-mode");
			}
		</script>
	</body>

</body>

</html>