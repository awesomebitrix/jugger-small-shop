<?php

CModule::includeModule('basket');

$basket = (new basket\repos\SessionBasketRepo())->getById("");

?>
<div class="header">
    <div class="header__top-menu">
        <div class="container">
            <?php
            $APPLICATION->IncludeComponent("bitrix:menu", "header-top-menu", [
                "ROOT_MENU_TYPE" => "topmenu",
                "MAX_LEVEL" => "1",
                "CHILD_MENU_TYPE" => "topmenu",
                "USE_EXT" => "Y",
                "DELAY" => "N",
                "ALLOW_MULTI_SELECT" => "Y",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS" => "",
            ])
            ?>
        </div>
    </div>
    <div class="header__content">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php
                    $APPLICATION->IncludeFile("/local/templates/.default/include/header-logo.php");
                    ?>
                </div>
                <div class="col-md-5">
                    <?php
                    $APPLICATION->IncludeComponent("jugger:iblock.element.search", "header-search", [
                        'iblockId' => CATALOG_ID,
                    ]);
                    ?>
                </div>
                <div class="col-md-3">
                    <?php
                    $APPLICATION->IncludeComponent("jugger:basket.view", "header", [
                        'basket' => $basket,
                    ])
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="header__catalog-menu">
        <div class="container">
            <?php
            $APPLICATION->IncludeComponent("jugger:mapper.list.view", "header-catalog-menu", [
                'isCached' => false,
                'class' => '\Bitrix\Iblock\SectionTable',
                'queryParams' => [
                    'filter' => [
                        'IBLOCK_ID' => CATALOG_ID,
                        'IBLOCK_SECTION_ID' => null,
                    ],
                ],
            ])
            ?>
        </div>
    </div>
</div>
