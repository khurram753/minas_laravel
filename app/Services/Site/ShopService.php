<?php

namespace App\Services\Site;

use App\Category;
use App\Heritage;
use App\Product;

class ShopService
{
    public function index()
    {
        $categories = Category::all();

        $heritageImages = Heritage::select('image')->get();

        $pendant_category = Category::where('name','Pendent')->first();

        if($pendant_category)
        {
            $pendants = Product::where('category_id',$pendant_category->id)->inRandomOrder()->limit('3')->get();
        }
        else{
            $pendants = array();
        }


        $mensCategory = Category::where('name','Mens Accessory')->first();

        if($mensCategory)
        {
            $mensCollection = Product::where('category_id',$mensCategory->id)->inRandomOrder()->limit('4')->get();
        }
        else{
            $mensCollection = array();
        }

        $earingCategory = Category::where('name','Earing')->first();

        if($earingCategory)
        {
            $earings = Product::where('category_id',$earingCategory->id)->inRandomOrder()->limit('3')->get();
        }
        else{
            $earings = array();
        }


        return view('site.shop.shop',compact('heritageImages','earings','mensCollection',
            'pendants','categories'));
    }
}
