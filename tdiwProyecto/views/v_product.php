<div class="container-page">
	<section class="container">
		<section class="product">
			<img src="<?php echo htmlspecialchars($product['image']); ?>" alt="" id="productPicture">
			<section id="productSpecs">
				<h1 id="title"><?php echo htmlspecialchars($product['title']); ?></h1>
				<h2 id="price">Є<?php echo htmlspecialchars($product['cost']); ?></h2>
				<section id="productDescription-box">
					<p id="description"><?php echo htmlspecialchars($product['description']); ?></p>
				</section>

				<section id="bottom-section">
					<section id="productDescription-list">
						<ul>
							<li>Editorial: <?php echo htmlspecialchars($product['editorial']); ?></li>
							<li>Autor: <?php echo htmlspecialchars($product['author']); ?></li>
							<li>ISBN: <?php echo htmlspecialchars($product['isbn']); ?></li>
							<li>Idioma: <?php echo htmlspecialchars($product['language'] ?? 'N/A'); ?></li>
						</ul>
					</section>
					<section id="buttonArea">
						<h3 id="textAdd">Agregar al carrito</h3>
						<button class="button" onclick="addToCart()" id="addToCart">
							<img src="../resources/icon/addCart.png" alt="" width="18px">
						</button>
					</section>
				</section>
			</section>
		</section>
	</section>
</div>