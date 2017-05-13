<?php

namespace itemview\headerbasket;

use jugger\bitrix\iblock\Element;

function getPreviewSrcProduct(array $product) {
    $img = $product['PREVIEW_PICTURE'];
    if ($img) {
        return \CFile::GetFileArray($img)['SRC'];
    }

    $props = Element::getProperties($product['ID'], ['images']);
    if (!$props['images']) {
        return null;
    }

    $img = $props['images'][0];
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
    return $thumb['src'] ?? null;
}
