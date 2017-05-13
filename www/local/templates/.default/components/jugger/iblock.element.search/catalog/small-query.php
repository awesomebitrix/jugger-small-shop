<?php

$query = $arResult['query'];

?>
<div class="element-search-catalog">

    <?php include __DIR__.'/form.php' ?>

    <div class="element-search-catalog__result material-card">
        <?php if (strlen($query) < 3): ?>
            Длина запроса, должна быть не менее 3-ех символов
        <?php else: ?>
            Ничего не найдено
        <?php endif; ?>
    </div>
</div>
