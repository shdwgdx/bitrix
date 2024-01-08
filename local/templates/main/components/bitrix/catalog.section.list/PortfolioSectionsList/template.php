<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>



<?php if ($arResult['SECTIONS']):?>
<div class="col-lg-12">
    <div class="portfolio-menu brand-filter text-center mb-70">
        <div class="filter" data-filter="all">Все</div>
    <?php foreach ($arResult['SECTIONS'] as $arItem): ?>
        <div class="filter" data-filter=".landing"><?=$arItem['NAME'] ?></div>
    <?php endforeach; ?>
    </div>
</div>
<?php endif;?>




