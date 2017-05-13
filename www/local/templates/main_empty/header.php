<?php

// example: http://www.newsmartwave.net/magento/porto/select.html

use Bitrix\Main\Page\Asset;

\CModule::includeModule('iblock');

Asset::getInstance()->addJs("https://code.jquery.com/jquery-3.2.1.min.js");
Asset::getInstance()->addJs("https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js");
Asset::getInstance()->addJs("https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js");
Asset::getInstance()->addJs("/local/templates/main/script.js");

Asset::getInstance()->addCss("https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css");
Asset::getInstance()->addCss("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
Asset::getInstance()->addCss("/local/templates/main/template_styles.css");

?>
<!DOCTYPE html>
<html>
    <head>
        <title><?= $APPLICATION->ShowTitle() ?></title>
        <?= $APPLICATION->ShowHead() ?>
    </head>
    <body>
        <?php
        $APPLICATION->ShowPanel();
        ?>
        <?php
        $APPLICATION->IncludeFile("/local/templates/.default/include/header.php");
        ?>
        <div class="main">
            <div class="main__content">
                <div class="container">
                    <div class="">
