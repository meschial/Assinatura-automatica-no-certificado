<?php
    if($_POST){

        foreach ($_POST as $key => $value) {
            $$key = trim ( $value );
        }
        
        $hex = $color;
        list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");

        header('content-type:image/jpeg');
        $font="assets/fonts/".$font.".ttf";

        $imgBlob = file_get_contents("assets/img/certificado.png");
        $image=imagecreatefromstring($imgBlob);

        $color=imagecolorallocate($image, $r,$g,$b);

        imagettftext($image, $fontSize, 0, $width, $height, $color, $font, $name);
        
        imagejpeg($image);
        imagedestroy($image);
    }
?>