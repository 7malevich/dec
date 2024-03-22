<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?foreach($arResult['ITEMS'] as $n=>$item){ ?>

        <a class="link-with-lines border-top-bottom" href="<?= $item["PROPERTIES"]["LINK_SECTION"]["VALUE"] ?>/">
            <?=$item['NAME']?>
            <div class="link-with-lines_arrow">
            </div>
        </a>
    
        <?php  
            /* echo "<pre>";
            print_r( $arResult["ITEMS"] );    
            echo "</pre>";     */
        ?>

<?}?>

    




