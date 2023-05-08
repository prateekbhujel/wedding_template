<?php

/**
 * Imgae Manupulation class
 */

 class Image 
 {

    public function resize($filename, $max = 1000)
    {
        if(file_exists($filename))
        {

            $mime_type = mime_content_type($filename);

            switch ($mime_type) {
                
                case 'image/jpeg':
                    $image = imagecreatefromjpeg($filename);
                    break;
                
                case 'image/png':
                    $image = imagecreatefrompng($filename);
                    break;

                case 'image/gif':
                    $image = imagecreatefromgif($filename);
                    break;

                case 'image/webp':
                    $image = imagecreatefromwebp($filename);
                    break;

                default: 
                    return;
                    break;
            }

            $src_w = imagesx($image);
            $src_h = imagesy($image);

            if($src_w > $src_h)
            {
                if($src_w < $max)
                    $max = $src_w;

                $dst_w = $max;
                $dst_h = ($src_h / $src_w) * $max;

            }else
            {

                    if($src_h < $max)
                        $max = $src_h;

                    $dst_h = $max;
                    $dst_w = ($src_w / $src_h) * $max;
                
            }
            $dst_image = imagecreatetruecolor($dst_w, $dst_h);
            imagecopyresampled($dst_image, $image, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);

            imagedestroy($image);

            switch ($mime_type) {
                
                case 'image/jpeg':
                    imagejpeg($dst_image, $filename, 90);
                    break;
                
                case 'image/png':
                    imagepng($dst_image, $filename, 90);
                    break;

                case 'image/gif':
                    imagegif($dst_image, $filename);
                    break;

                case 'image/webp':
                    imagewebp($dst_image, $filename);
                    break;

                default: 
                    imagejpeg($dst_image, $filename, 90);
                    break;
            }
        }

    }
 }
