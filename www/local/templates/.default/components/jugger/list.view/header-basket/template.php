<div class="header-basket-items">
    <?php
    foreach ($arParams['items'] as $item) {
        $productId = (int) $item;
        if ($productId < 1) {
            continue;
        }

        $APPLICATION->IncludeComponent("jugger:iblock.element.view", "header-basket", [
            'id' => $productId,
        ]);
    }
    ?>
</div>
