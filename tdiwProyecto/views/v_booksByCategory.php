    <h1>Libros de la categoría: <?= htmlspecialchars($category_name['tipo']) ?></h1><br/>
    <div class="grid-container">
        <?php if (!empty($products_list)): ?>
            <?php foreach ($products_list as $popular): ?>
                <div class="card">
                    <div class="container-image"><img src="<?= htmlspecialchars($popular['image']) ?>" class="card-image"> 
                        </div>
                    <div class="card-bottom">
                        <a href="#" onclick="getBook(event)" class="card-title" id="<?= htmlspecialchars($popular['product_id']) ?>" 
                        book-id="<?= htmlspecialchars($popular['product_id']) ?>"><?= htmlspecialchars($popular['title']) ?></a>
                        <p class="card-price">Є<?= htmlspecialchars($popular['cost']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No s'han trobat llibres per aquesta categoria.</p>
        <?php endif; ?>
    </div>

