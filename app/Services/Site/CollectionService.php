<?php

namespace App\Services\Site;
use App\Product;
use App\Material;
use App\ProductCollection;
use Illuminate\Database\Eloquent\Builder;
use App\Category;

class CollectionService
{
    public function index($collection_id,$request)
    {
        $data = ProductCollection::find($collection_id);

        if($data) {
            $products = Product::where('collection_id', $collection_id);

            if ($request->sortbytype) {
                if ($request->sortbytype == 'desc') {
                    $products = $products->orderBy('id', $request->sortbytype);
                } elseif ($request->sortbytype == 'atoz') {

                    $products = $products->orderBy('name', 'asc');


                } elseif ($request->sortbytype == 'ztoa') {

                    $products = $products->orderBy('name', 'desc');
                } elseif ($request->sortbytype == 'hightolow') {

                    $products = $products->orderBy('price', 'desc');

                } elseif ($request->sortbytype == 'lowtohigh') {

                    $products = $products->orderBy('price', 'asc');
                }

            }

            if ($request->collection_id) {
//                $products = $products->whereHas('cord',function (Builder $query) use($request){
//                    $query->where('cord_id', $request->cord_id);
//                });
                $products = $products->where('category_id', $request->category_id);
            }

            if ($request->material_id) {
                $products = $products->whereHas('material', function (Builder $query) use ($request) {
                    $query->where('material_id', $request->material_id);
                });
            }

            $products = $products->get();


            $materials = Material::all();
            $cords = Category::all();

            return view('site.shop.collection', compact('materials', 'data', 'products', 'cords'));
        }
        else{
            return redirect()->route('shop')->with('error','Category Not Found');

        }
    }
}
