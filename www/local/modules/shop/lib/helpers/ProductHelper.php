<?php

namespace shop\helpers;

use jugger\bitrix\iblock\Element;

class ProductHelper
{
    public static function getPreviewByProduct(array $product)
    {
        $props = Element::getProperties($product['ID'], ['images']);
        $img = $product['PREVIEW_PICTURE'] ?? $props['images'][0] ?? null;
        if ($img) {
            $sizes = [
                'width' => 250,
                'height' => 250,
            ];
            $thumb = \CFile::ResizeImageGet(
                $img,
                $sizes,
                BX_RESIZE_IMAGE_EXACT,
                false,
                false,
                false,
                50
            );
            $img = $thumb['src'] ?? null;
        }
        return $img;
    }
}
