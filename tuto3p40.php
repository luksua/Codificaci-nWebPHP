<?php
    $ancho = 200;
    $alto = 30;
    $imagen = imageCreate($ancho, $alto);

    $gris = ImageColorAllocate($imagen, 130, 137, 144);
    $morado = ImageColorAllocate($imagen, 87, 35, 112);
    $blanco = ImageColorAllocate($imagen, 255, 255, 255);

    $rectangulo = imagefilledrectangle($imagen,1,1,2,2, $gris);
    $rectangulo2 = imagefilledrectangle($imagen,20,8,180,20, $morado);

    ImageFill($imagen, 0, 0, $gris);

    ImageString($imagen, 5, 25, 5,"Presione aqui", $blanco);

    for ($c = 0; $c <= 5; $c++) {
        $x1 = rand(0, $ancho);
        $y1 = rand(0, $alto);
        $x2 = rand(0, $ancho);
        $y2 = rand(0, $alto);
        ImageLine($imagen, $x1, $y1, $x2, $y2, $blanco);
    }

    Header("Content-type: image/jpeg");
    ImageJPEG($imagen);

    ImageDestroy($imagen);
?>