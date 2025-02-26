<?php

namespace App\Services;

use Illuminate\Support\Facades\File;

class ImageServices
{
    public function storeImage($request, $queryName, $folderName)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/'.$folderName.'/', $filename);
            $queryName->image = $filename;
        }
    }

    public function updateImage($request, $queryName, $folderName)
    {
        if ($request->hasFile('image')) {
            $path = 'uploads/'.$folderName.'/'.$queryName->logo;

            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/'.$folderName.'/', $filename);
            $queryName->logo = $filename;
        }
    }
}
