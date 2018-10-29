<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function saveImage(Request $request, $imageName, $url)
    {
        $fileNameToStore = 'noimage.jpg';
        if ($request->hasfile($imageName)) {
            $fileNameWithExt = $request->file($imageName)->getClientOriginalName();
            $fileName = pathinfo( $fileNameWithExt, PATHINFO_FILENAME);
            if (strlen($fileName) > 10) {
                $fileName = substr($fileName,0,10);
            }
            $extension = $request->file($imageName)->getClientOriginalExtension();
            $fileNameToStore = $fileName.''.time().''.$extension;
            $path = $request->file($imageName)->storeAs('public/storage/images/'.$url, $fileNameToStore);
        }

        return $fileNameToStore;
    }
}
