<?php

namespace App\Services;

class ProductServices
{
    public function checkVendor($request)
    {
        $user = auth()->user();
        if ($user->vendor_id == null) {
            $vendor_id = $request->vendor_id;
        } else {
            $vendor_id = $user->vendor_id;
        }

        return $vendor_id;
    }

    public function save($request, $product)
    {
        $product->sub_category_id = $request->sub_category_id;
        $product->title = $request->title;
        $product->description = $request->description;
        if ($product->exists == true) {
            $product->updated_by = 1;
            $product->update();
        } else {
            $product->created_by = 1;
            $product->save();
        }
    }
}
