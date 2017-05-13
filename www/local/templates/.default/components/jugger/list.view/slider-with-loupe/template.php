<?php

$items = $arParams['items'];
$firstSrc = $items[0];

\Bitrix\Main\Page\Asset::getInstance()->addJs("https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.19/jquery.zoom.min.js");

?>
<div class="slider-with-loupe">
    <div class="slider-with-loupe__main">
        <div class="slider-with-loupe__image">
            <img src="<?= $firstSrc ?>">
        </div>
        <div class="slider-with-loupe__previews">
            <?php
            foreach ($items as $src) {
                echo "
                <div class='slider-with-loupe__previews-item'>
                <img src='{$src}'>
                </div>
                ";
            }
            ?>
        </div>
    </div>
</div>
<div class="slider-with-loupe__back"></div>
