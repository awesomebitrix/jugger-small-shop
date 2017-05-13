<?php

use jugger\bitrix\iblock\Url;

$items = $arParams['items'];

?>
<div class="catalog-section-childs">
    <?php
    foreach ($items as $item) {
        $link = Url::getSectionUrl($item);
        $text = $item['NAME'];

        echo "<a class='catalog-section-childs__item' href='{$link}'>{$text}</a>";
    }
    ?>
</div>
