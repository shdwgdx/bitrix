<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>

<?php //echo "<pre>"?>
<?php //print_r($arResult) ?>
<?php //echo "</pre"?>

<?php foreach ($arResult as $arItem): ?>
    <?php if (!empty($arItem["LOGO"]["SRC"])): ?>
        <img src="<?= $arItem["LOGO"]["SRC"] ?>" alt="<?= $arItem["NAME"] ?>" width="<?= $arItem["LOGO"]["width"] ?>" height="<?= $arItem["LOGO"]["height"] ?>">
    <?php endif; ?>

    <h2><a href="/"><?= $arItem["NAME"] ?></a></h2>

<!--    <h2><a href="--><?php //= $arItem["DETAIL_PAGE_URL"] ?><!--">--><?php //= $arItem["NAME"] ?><!--</a></h2>-->

    <p><?= $arItem["PREVIEW_TEXT"] ?></p>
<?php endforeach; ?>