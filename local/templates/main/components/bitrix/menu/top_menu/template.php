<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?//if (!empty($arResult)):?>
<!--<ul class="left-menu">-->
<!---->
<?//
//foreach($arResult as $arItem):
//	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
//		continue;
//?>
<!--	--><?//if($arItem["SELECTED"]):?>
<!--		<li><a href="--><?php //=$arItem["LINK"]?><!--" class="selected">--><?php //=$arItem["TEXT"]?><!--</a></li>-->
<!--	--><?//else:?>
<!--		<li><a href="--><?php //=$arItem["LINK"]?><!--">--><?php //=$arItem["TEXT"]?><!--</a></li>-->
<!--	--><?//endif?>
<!--	-->
<?//endforeach?>
<!---->
<!--</ul>-->
<?//endif?>

<?php
//echo "<pre>";
//print_r($arResult);
//echo "</pre>";
//?>

<?php if (!empty($arResult)): ?>


<div class="header-main-menu hidden-xs">
    <nav id="primary-menu">
        <ul class="main-menu text-right">
<?php foreach ($arResult as $item): ?>
<?php if ($item["SELECTED"]):  ?>
        <li>
            <a style="color: #ff00ff" href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
        </li>
            <?php else:?>
        <li>
            <a href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
        </li>
            <?php endif;?>

<?php endforeach;?>
        </ul>
    </nav>
</div>
<?php endif;?>

<!--            <li>-->
<!--                <a href="services.html"> Услуги-->
<!--                    <span class="indicator"><i class="fa fa-angle-down"></i></span></a>-->
<!--                <ul class="dropdown">-->
<!--                    <li>-->
<!--                        <a href="services_landing.html">Лендинг</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="services_online_shop.html">Интернет-магазин</a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </li>-->
<!---->


