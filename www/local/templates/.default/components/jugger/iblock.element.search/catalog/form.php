<?php

$query = $arResult['query'];

?>
<div class="">
<!-- <div class="material-card"> -->
    <form class="element-search-catalog__form" method="get">
        <div class="input-group header-search-form__input">
            <input type="text" name="q" value="<?= $query ?>" class="form-control" autocomplete="off" placeholder="Для поиска введите названия искомого товара">
            <span class="input-group-btn">
                <button class="btn btn-secondary" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </span>
        </div>
    </form>
</div>
<br>
