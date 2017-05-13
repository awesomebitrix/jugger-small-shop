</div>
</div>
</div>
</div>
<div class="go-top">
    <div class="container">
        <button class="go-top__btn">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </button>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="footer__content">
            <div class="row">
                <div class="col-md-4">
                    <h5>
                        Компания
                    </h5>
                    <?php
                    $APPLICATION->IncludeComponent("bitrix:menu", "footer-menu", [
                        "ROOT_MENU_TYPE" => "footercol1",
                        "MAX_LEVEL" => "1",
                        "CHILD_MENU_TYPE" => "footercol1",
                        "USE_EXT" => "Y",
                        "DELAY" => "N",
                        "ALLOW_MULTI_SELECT" => "Y",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "MENU_CACHE_GET_VARS" => "",
                    ]);
                    ?>
                </div>
                <div class="col-md-4">
                    <h5>
                        Покупателям
                    </h5>
                    <?php
                    $APPLICATION->IncludeComponent("bitrix:menu", "footer-menu", [
                        "ROOT_MENU_TYPE" => "footercol2",
                        "MAX_LEVEL" => "1",
                        "CHILD_MENU_TYPE" => "footercol2",
                        "USE_EXT" => "Y",
                        "DELAY" => "N",
                        "ALLOW_MULTI_SELECT" => "Y",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "MENU_CACHE_GET_VARS" => "",
                    ]);
                    ?>
                </div>
                <div class="col-md-4">
                    <h5>
                        Контакты
                    </h5>
                    <div>
                        <?php
                        $APPLICATION->IncludeFile("/local/templates/.default/include/footer-contacts.php");
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-6">
                <div class="footer__copyright">
                    &copy; Все права защищены - 2017
                    <br>
                    Сайт не является публичной офертой
                </div>
            </div>
            <div class="col-6">
                <div class="text-right" style="padding-top:1rem">
                    Разработка <a href='//olof.ru/dev' target="_blank" style="font-weight:700;color:white">Олоф</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
