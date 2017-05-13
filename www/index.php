<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Текстильная компания \"Опт-тт\"");
?>
<div class="main-slider" style="background-image:url('/local/templates/main/img/slider.jpg')">
    <div class="main-slider__desc">
        <h1>
            Заголовок
        </h1>
        <p>
            Описание и большие сомнения зачем вообще это надо...
        </p>
    </div>
</div>

Пустая страница. <a href="/bitrix/admin/">Перейти в Панель Управления</a>.

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<style>
    .main-slider {
        position: relative;
        height: 500px;
        width: 100%;
        background-position: center 10%;
        background-size: cover;
    }
    .main-slider__desc {
        width: 300px;
        height: 400px;
        background: rgba(255, 255, 255, 0.69);
        padding: 1rem;
        position: relative;
        top: 2rem;
        left: 2rem;
    }
</style>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
