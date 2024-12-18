<?php if (!empty($recommended_list)): ?>
    <?php foreach ($recommended_list as $recommendation): ?>
        <div class="card">
            <div class="container-image"><img src="<?= htmlspecialchars($recommendation['image']) ?>" class="card-image">
            </div>
            <div class="card-bottom">
                <a href="#" onclick="getBook(event)" class="card-title" id="<?= htmlspecialchars($recommendation['product_id']) ?>"
                    book-id="<?= htmlspecialchars($recommendation['product_id']) ?>"><?= htmlspecialchars($recommendation['title']) ?></a>
                <p class="card-price">Є<?= htmlspecialchars($recommendation['cost']) ?></p>
            </div>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p>No s'han trobat llibres per aquesta categoria.</p>
<?php endif; ?>
</div>