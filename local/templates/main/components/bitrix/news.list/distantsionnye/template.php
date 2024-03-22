<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?foreach($arResult['ITEMS'] as $n=>$item){ ?>

    <?php if ( $item["NAME"] == 'Личный кабинет' ) { ?>
        <div class="bloks-with-img__item bloks-with-img__big">
            <h5 class="h5"><?=$item['NAME']?></h5>
            <div class="bloks-with-img__img" style="background-image: url('<?= $item["PREVIEW_PICTURE"]["SRC"] ?>');"></div>
            <a href="<?= $item["PROPERTIES"]["LINK_SECTION"]["VALUE"] ?>/"></a>
        </div>
    <? } ?>

<?}?>


<div class="bloks-with-img__wrapper">
    <div class="bloks-with-img__row">
        <?foreach($arResult['ITEMS'] as $n=>$item){ ?>

            <?php if ( $item["NAME"] == 'Подача заявлений Онлайн' || $item["NAME"] == 'Электронный документооборот' || $item["NAME"] == 'Поиск входящего документа' || $item["NAME"] == 'Заказ обратного звонка' ) { ?>
                <div class="bloks-with-img__item bloks-with-img__small">
                    <h5 class="h5"><?=$item['NAME']?></h5>
                    <div class="bloks-with-img__img" style="background-image: url('<?= $item["PREVIEW_PICTURE"]["SRC"] ?>');"></div>
                    <a href="<?= $item["PROPERTIES"]["LINK_SECTION"]["VALUE"] ?>/"></a>
                </div>
            <? } ?>
            
        <?}?>
    </div> 
</div>
    




