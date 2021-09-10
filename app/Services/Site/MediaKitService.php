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

            if($request->collection_id != 5)
            {
                $data = PressTypeProduct::where('collection_id',$request->collection_id)->get();

                return view('site.media_kit.photos',compact('data','collections','collection'));
            }
            else{
                $digitalProduct =  PressTypeProduct::where('collection_id',$request->collection_id)->where('type','digital')->get();
                $printedProduct =  PressTypeProduct::where('collection_id',$request->collection_id)->where('type','printed')->get();
                return view('site.media_kit.press_release',compact('digitalProduct','printedProduct','collections','collection'));
            }
        }

    }
}
