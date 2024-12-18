<!DOCTYPE html>
<html lang="es">
<head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsividad -->
        <title>&lt;\bookend&gt;</title>
        <link rel="icon" href="../media/brand/faviconPage.png" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/home.css" />
		<link rel="stylesheet" type="text/css" href="css/productPage.css" />
		<link rel="stylesheet" type="text/css" href="../css/login.css" />
		<link rel="stylesheet" type="text/css" href="..\css\signup.css" />
        <script src="../js/funciones.js"> </script>
</head>

<body>

	<!-- Navbar -->
	<nav class="navbar">
		<div class="navbar-content">
			<!-- Logo Navbar -->
			<div class="logo" id="logo">
				<a href="../index.php">
					<img src="../media/brand/logoBrand.png" alt="Bookend Logo" width="135px" />
				</a>
			</div>

			<!-- Search Bar -->
			<div class="search-bar">
				<input type="text" placeholder="¿ qué libro buscas ?" />
			</div>

			<!-- Navigation Links -->
			<div class="nav-links" id="links">
				<div class="dropdown">
					<a href="#" onclick="listCategories(event)">categorías</a>
					<div class="dropdown-content">
						<?php
						$isNavbar = true;
						require __DIR__ . '/controller/c_categories.php';
						?>
					</div>
				</div>
			</div>

			<!-- Icons -->
			<div class="nav-icons" id="icons">
				<a href="login.php">
					<img src="../resources/icon/user.png" alt="User Icon" width="20px" />
				</a>
				<a href="home.php">
					<img src="../resources/icon/cart.png" alt="Cart Icon" width="20px" />
				</a>
			</div>
		</div>
	</nav>

	<!-- Main Content -->
	<section class="container-page" id="home">
		<section class="container">
			<section class="textbox">
				<h1>¿Qué vas a leer hoy?</h1>
				<p>Tu próximo libro favorito te espera en esta colección hecha para sorprenderte</p>
				<button class="button">Descúbrela</button> <!--onclick="goToSection('header_bos')"-->
			</section>
		</section>

		<!-- Recomendaciones -->
		<section class="container" id="destacados">
			<h1>Nuestras Recomendaciones</h1>
			<p>Encuentra ese título que necesitabas pero no lo sabías</p>
			<section class="grid-container">
				<?php
				$isNavbar = true;
				require __DIR__ . '/controller/c_recommendedProducts.php';
				?>
			</section>
		</section>

		<section class="container" id="bos">
			<section id="text_bos">
				<section id="header_bos">
					<h1 id="title_bos">El libro del otoño</h1>
					<p id="subtitle_bos">una manta y este libro es todo lo que vas a necesitar</p>
				</section>
				<p>El autor de la serie de libros Before the Coffee Gets Cold, vuelve con nuevos relatos dentro de la
					misteriosa cafeteria de Tokio donde estos
					giran entorno a las relaciones y la empatia que requieren.</p>
				<button class="button" id="button_bos" onclick="">Ver más</button>
			</section>
			<section id="cover_bos">
				<img src="../media/books/bosPic.jpg" alt="" id="img_bos">
			</section>

		</section>
		<section class="container" id="rox-bestsellers">
			<h1>Populares entre los lectores</h1>
			<p>Si muchos los leyeron por algo es... no?</p>
			<section class="grid-container">
				<?php
				$isNavbar = true;
				require __DIR__ . '/controller/c_popularProducts.php';
				?>
			</section>
		</section>
	</section>

	<div id="book-display">
		<div class="container-page" id="luna">
			<section class="container-category">
				<section class="grid-container">
				</section>
			</section>
		</div>
	</div>

	<!-- Footer -->
	<footer>
		<section>
			<h1 id="nombreFooter">&lt;\bookend&gt;</h1>
			<p id="pFooter">Cada libro, un código para descifrar.</p>
		</section>
	</footer>

</body>

</html>