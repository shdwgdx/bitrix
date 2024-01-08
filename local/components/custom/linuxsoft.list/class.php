<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Loader;
use Bitrix\Iblock\ElementTable;

class LinuxSoftListComponent extends CBitrixComponent
{
    public function executeComponent()
    {
            if (Loader::includeModule('iblock')) {
                $this->arResult = $this->getItems();
            }
            $this->includeComponentTemplate();
    }

    private function getItems()
    {
        $result = [];
        $filter = [
            'IBLOCK_ID' => "5", // Замените на ID своего инфоблока
            'ACTIVE' => 'Y',
        ];
        $select = [
            'ID',
            'NAME',
            'PREVIEW_TEXT',
        ];
        $res = ElementTable::getList([
            'filter' => $filter,
            'select' => $select,
        ]);

        while ($item = $res->fetch()) {
            $logoProperty = CIBlockElement::GetProperty(
                5,
                $item['ID'],
                array(),
                array('CODE' => 'LOGO')
            )->Fetch();
            $logoProperty['SRC'] = $this->getResizedImage($logoProperty['VALUE'], 200, 200);

            $result[] = [
                'ID' => $item['ID'],
                'NAME' => $item['NAME'],
                'PREVIEW_TEXT' => $item['PREVIEW_TEXT'],
                'LOGO' => $logoProperty,
            ];

        }
        return $result;
    }



    private function getResizedImage($fileId, $width, $height)
    {
        if ($fileId > 0) {
            $file = CFile::ResizeImageGet($fileId, array('width' => $width, 'height' => $height));
            return $file['src'];
        }
        return '';
    }

}
