<?php

namespace App\Traits;

trait GeneralTrait
{
    public function ImageUpload(\Illuminate\Http\Request $request, $name, $dir)
    {
        $file = $request->file($name);

        if ($file) {
            $filename = \Illuminate\Support\Str::random(40).'.'.$file->getClientOriginalExtension();
            $file->move(public_path($dir), $filename);
            return [$name => $filename];
        }

        return null; // Return null if no file is uploaded
    }

}
