<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Ошибка 404 - страница не найдена");
?>
<style>
    .page-404 {
        margin-top: 3rem;
        /*position: fixed;*/
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 70%;
    }
    .page-404__content {
        max-width: 764px;
        padding: 0 40px;
        font-family: 'Avenir Next Cyr';
        text-align: center;
        overflow: auto;
    }
    @media (max-width: 480px) {
        .page-404__content {
            padding: 0 16px;
        }
    }
    .page-404__title {
        width: 100%;
        max-width: 558px;
        margin: 0 auto;
        transition: max-width 0.2s ease 0s;
    }
    @media (max-width: 1024px) {
        .page-404__title {
            max-width: 387px;
        }
    }
    @media (max-width: 480px) {
        .page-404__title {
            max-width: 225px;
        }
    }
    .page-404__subtitle {
        margin: 0;
        margin-top: 64px;
        color: #005D9F;
        font-size: 40px;
        font-weight: 650;
        line-height: 48px;
        text-transform: uppercase;
        transition: font-size 0.2s ease 0s;
    }
    @media (max-width: 1024px) {
        .page-404__subtitle {
            margin-top: 52px;
            font-size: 32px;
            line-height: 40px;
        }
    }
    @media (max-width: 480px) {
        .page-404__subtitle {
            margin-top: 40px;
            font-size: 28px;
            line-height: 36px;
        }
    }
    .page-404__text {
        margin: 0;
        margin-top: 24px;
        color: #2C3148;
        font-size: 20px;
        font-weight: 400;
        line-height: 32px;
        transition: font-size 0.2s ease 0s;
    }
    @media (max-width: 1024px) {
        .page-404__text {
            margin-top: 20px;
            font-size: 18px;
            line-height: 28px;
        }
    }
    @media (max-width: 480px) {
        .page-404__text {
            margin-top: 16px;
            font-size: 16px;
            line-height: 24px;
        }
    }
    .page-404__text a {
        position: relative;
        color: #005D9F;
        text-decoration: none;
        transition: color 0.2s ease 0s;
    }
    .page-404__text a:hover {
        color: #2C3148;
    }
    .page-404__text a::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 1px;
        background: #005D9F;
        opacity: 1;
        transition: opacity 0.2s ease 0s;
    }
    .page-404__text a:hover::before {
        opacity: 0;
    }
</style>

<div class="page-404">
    <div class="page-404__content">
        <img class="page-404__title" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/404.png">
        <h3 class="page-404__subtitle">Страница не найдена</h3>
        <p class="page-404__text">
            Вы ввели неверный адрес, или такой страницы на сайте больше не существует. Попробуйте перейти на
            <a href="/">главную страницу</a>.
        </p>
    </div>
</div>

<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>