<?php

$query = $arResult['query'];

?>
<form class="header-search-form" action="/catalog/search/" method="get">
    <div class="form-group">
        <div class="input-group header-search-form__input">
            <input type="text" name="q" value="<?= $query ?>" class="form-control" autocomplete="off">
            <span class="input-group-btn">
                <button class="btn btn-secondary" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </span>
        </div>
        <div class="header-search-form__autocomplete">
            <?php
            $APPLICATION->IncludeComponent("jugger:mapper.list.view", "product-autocomplete", [
                'class' => '\Bitrix\Iblock\ElementTable',
                'queryParams' => null,
            ]);
            ?>
        </div>
    </div>
</form>
