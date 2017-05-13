<?php

use jugger\bitrix\iblock\Url;

?>
<div class="iblock-view-section-childs">
    <?php
    foreach ($childs as $item) {
        $link = Url::getSectionUrl($item);
        $text = $item['NAME'];

        echo "<a class='iblock-view-section-childs__item' href='{$link}'>{$text}</a>";
    }
    ?>
</div>
