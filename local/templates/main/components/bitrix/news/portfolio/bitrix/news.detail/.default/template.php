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


<!-- Контент для детальной страниыцы портфолио -->
<div class="single-portfolio-area pt-90 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="portfolio-details">
                    <h3><?= $arResult['PROPERTIES']['detail_title']['VALUE']?></h3>
                    <?= $arResult["DISPLAY_PROPERTIES"]['description']['DISPLAY_VALUE']?>
                </div>
            </div>
            <div class="col-md-5">
                <div class="portfolio-meta">
                    <ul>
                        <li><span><b><?= $arResult['PROPERTIES']['add_info']['VALUE'][0]?></b> </span><?= $arResult['PROPERTIES']['add_info']['DESCRIPTION'][0]?></li>
                        <li><span><b><?= $arResult['PROPERTIES']['add_info']['VALUE'][1]?></b> </span><?= $arResult['PROPERTIES']['add_info']['DESCRIPTION'][1]?></li>
                        <li><span><b><?= $arResult['PROPERTIES']['add_info']['VALUE'][2]?></b> </span><?= $arResult['PROPERTIES']['add_info']['DESCRIPTION'][2]?></li>
                    </ul>
                    <a href="#" class="btn mt-30">Перейти на сайт</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Фотогалерея -->
<div class="img-gallery-area pt-30 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-4">
                <div class="img-gallery hover-bg-opacity mb-30">
                    <a class="image-link" href="$arResult['DISPLAY_PROPERTIES']['gallery']['FILE_VALUE']['SRC']?>">
                        <img src="<?= $arResult['DISPLAY_PROPERTIES']['gallery']['FILE_VALUE']['SRC']?>" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
</div>