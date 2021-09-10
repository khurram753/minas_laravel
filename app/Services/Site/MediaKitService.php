<?php

namespace App\Services\Site;

use App\Collection;
use App\PressTypeProduct;

class MediaKitService
{
    public function index($request)
    {
        $collection = Collection::find($request->collection_id);
        if($collection)
        {
            $collections = Collection::where('id','!=',$request->collection_id)->get();
            $data = PressTypeProduct::where('collection_id',$request->collection_id)->get();
            return view('site.media_kit.photos',compact('data','collections','collection'));
        }

    }
}
