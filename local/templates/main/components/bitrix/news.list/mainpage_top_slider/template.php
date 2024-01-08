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
<?php //= "<pre>"; print_r($arResult) ; echo "</pre>"?>

<?php if (!empty($arResult)):?>
    <section class="slider-area">
        <div class="slider-active">
            <?php foreach ($arResult["ITEMS"] as $item):?>
                <?php
                $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="single-slider" id="<?=$this->GetEditAreaId($item['ID']);?>">
                    <div class="slider-img parallax-bg bg-opacity-black-60" style="background:url(<?= $item['PREVIEW_PICTURE']['SRC']  ?>)"></div>
                    <div class="slider-content slider-style-2 slider-style-4 text-center z-index-5">
                        <span><?= $item['NAME'] ?></span>
                        <h2><?= $item['PREVIEW_TEXT'] ?></h2>
                        <?php if ($item['PROPERTIES']['LINK']['VALUE']):?>
                            <a class="my-button" href="<?= $item['PROPERTIES']['LINK']['VALUE']  ?>"><?= $item['DETAIL_TEXT']  ?></a>
                        <?endif;?>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </section>
<?php endif?>



