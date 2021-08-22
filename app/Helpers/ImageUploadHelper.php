<?php


namespace App\Helpers;


use Illuminate\Support\Facades\Input;
use Image;

class ImageUploadHelper
{

    public static function saveImage($image,$fileNameUpload,$path)
    {
        Image::make($image)->save($path . $fileNameUpload);

        return $path.$fileNameUpload;
    }

    public static function uploadFile($folderName , $file , $fileName)
    {
        $filename = $fileName;
        $destinationPath = public_path($folderName);
        $file->move($destinationPath,$filename);

        return $folderName.$fileName;

    }


}
