<?php

use jugger\bitrix\iblock\Url;
use jugger\bitrix\iblock\Element;

$items = $arParams['items'];

?>
<div class="product-autocomplete">
    <?php foreach ($items as $product):
        $props = Element::getProperties($product['ID'], ['images']);
        $img = $product['PREVIEW_PICTURE'] ?? $props['images'][0] ?? null;
        if ($img) {
            $sizes = [
                'width' => 250,
                'height' => 250,
            ];
            $thumb = CFile::ResizeImageGet(
                $img,
                $sizes,
                BX_RESIZE_IMAGE_EXACT,
                false,
                false,
                false,
                50
            );
            $img = $thumb['src'] ?? null;
        }

        $link = Url::getElementUrl($product);
    ?>
    <a href="<?= $link ?>" class="product-autocomplete-item">
        <div class="product-autocomplete-item__image" style="background-image: url('<?= $img ?>')"></div>
        <div class="product-autocomplete-item__name">
            <?= $product['NAME'] ?>
        </div>
        <div class="clearfix"></div>
    </a>
    <?php endforeach; ?>
</div>
