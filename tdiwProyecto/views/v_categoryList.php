<?php

$isNavbar = isset($isNavbar) && $isNavbar;

foreach ($resultado_categorias as $categoria) {
    if ($isNavbar) {
        // Render for the navbar dropdown
        echo '<a href="#" class="dropdown-item" onClick="booksByCategory(event)"
        data-category-id="' . htmlspecialchars($categoria['id_categoria']) . '">'  . htmlspecialchars($categoria['tipo']) . '</a>';
    } else {
        // Render for the grid cards
        echo ' 
              
                <div class="card">
                    <a href="#" onClick="booksByCategory(event)" data-category-id="' . htmlspecialchars($categoria['id_categoria']) . '"> 
                        ' . htmlspecialchars($categoria['tipo']) . '
                    </a>
                </div> 
              ';
    }
}

?>
