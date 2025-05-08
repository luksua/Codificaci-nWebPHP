<?php
    $ancho = 200;
    $alto = 50;
    $imagen = imagecreate($ancho, $alto);
    
    $gris = ImageColorAllocate($imagen, 130, 137, 144);
    $morado = ImageColorAllocate($imagen, 87, 35, 112);
    
    imagefilledrectangle($imagen, 1, 1, $ancho - 2, $alto - 2, $morado);
    
    for ($i = 1; $i <= $_REQUEST['puntos']; $i++) {
        $x = rand(10, $ancho - 10);
        $y = rand(10, $alto - 10);  
        imagefilledellipse($imagen, $x, $y, 10, 10, $gris);
    }
    
    imagestring($imagen, 5, 40, 5, "Puntuacion: $_REQUEST[puntos]", $gris);
    
    header("Content-type: image/jpeg");
    imagejpeg($imagen);
    imagedestroy($imagen);
?>
