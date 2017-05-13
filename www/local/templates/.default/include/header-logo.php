<div class="header-logo">
    <a href="/">
        <img src="/local/templates/main/img/logo.png" alt="">
    </a>
    <div class="header-logo__bullet">
        <div class="header-logo__desc">
            <a href="/">
                Текстильная компания
            </a>
        </div>
        <div class="header-logo__phones">
            <?php
            $APPLICATION->IncludeFile("/local/templates/.default/include/header-phones.php");
            ?>
        </div>
    </div>
</div>
<style>
    .header-logo {
        display: block;
    }
    .header-logo img {
        height: 50px;
    }
    .header-logo__bullet {
        display: inline-block;
        vertical-align: middle;
        margin-left: 0.5rem;
    }
    .header-logo__desc {
        font-size: 1rem;
        font-weight: 700;
        text-transform: uppercase;
        color: #008dd2;
    }
    .header-logo__desc a {
        color: inherit;
    }
</style>
