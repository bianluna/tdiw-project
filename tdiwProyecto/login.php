<?php include __DIR__ . '/views/v_header.php'; ?>
<link rel="stylesheet" type="text/css" href="../css/login.css" />

<body>

	<!--<header>-->
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
	<!--</header>-->


	<div class="container-page" id="signup-container">
		<section class="signup-box">
			<p id="login-text-box">log in</p>
			<h1 id="bienvenido-text">Bienvenido!</h1>
			<p id="instruction-login">Ingresa tu correo para acceder a tu cuenta o crearla.</p>
			<form method="POST">
				<input type="email" class="text-field" placeholder="email" name="email" id="emailInput" required>
				<button class="button" type="button" id="button-login" onclick="checkEmail()">continue</button>
			</form>
		</section>
	</div>
</body>

<footer>
	<section>
		<h1 id="nombreFooter">&lt;\bookend&gt;</h1>
		<p id="pFooter">cada libro, un código para descifrar.</p>
	</section>
</footer>

</html>