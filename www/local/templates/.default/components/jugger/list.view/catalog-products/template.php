<?php

$items = $arParams['items'];

?>
<div class="catalog-products">
    <div class="row">
        <?php
        foreach ($items as $product) {
            echo "<div class='col-12 col-md-4 col-lg-3'>";
            $APPLICATION->IncludeComponent("jugger:iblock.element.view", "catalog-list-item", [
                'isCached' => false,
                'model' => $product,
            ]);
            echo "</div>";
        }
        ?>
    </div>
</div>
