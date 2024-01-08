<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('linux-soft');
?>
<?php
$APPLICATION->IncludeComponent(
    "custom:linuxsoft.list",
    "",
    array(),
    false
);?>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>

