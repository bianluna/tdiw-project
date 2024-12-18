<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<title> &lt;\bookend&gt;</title>
	<link rel="stylesheet" type="text/css" href="..\css\style.css" />
	<script src="js/funciones.js"> </script>


</head>

<body>

	<!--<header>-->
	<nav class="navbar">
		<div class="navbar-content">
			<!--logo navbar-->
			<div class="logo">
				<a href="../index.php">
					<img src="../resources/img/bookend_logo.png" width="200px" />
				</a>
			</div>

			<!--search bar-->
			<div class="search-bar">
				<input type="text" placeholder="¿Que libro buscas?" />
			</div>

			<!--navlinks-->
			<div class="nav-links">
				<div class="dropdown">
					<a href="#">Categorias</a>
					<div class="dropdown-content">
						<?php $isNavbar = true;
							require __DIR__ . '/controller/c_categories.php';
						?>
					</div>
				</div>
				<a href="selection.php">Nuestros Elegidos</a></li>
			</div>
			<!-- Icons -->
			<div class="nav-icons">
				<a href="login.php">
					<img src="../resources/icon/user.png" width="20px" />
				</a>
				<a href="home.php">
					<img src="../resources/icon/cart.png" width="20px" />
				</a>
			</div>
		</div>
	</nav>
	<!--</header>-->


	<div class="container-page">
		<section class="container-category" id="category">
			<h1>Category</h1>
			<p>subtitle category</p>
			<section class="grid-container">
				
				<?php $isNavbar = false;
					require __DIR__ . '/controller/c_categories.php';
				?>
				
			</section>
		</section>
	</div>
</body>
<footer>
	<section>
		<hr>
		<h1 id="nombreFooter">&lt;\bookend&gt;</h1>
		<p id="pFooter">cada libro, un código para descifrar.</p>
	</section>
</footer>

</html>