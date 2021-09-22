<?php

namespace App\Services\Site;

use App\Category;
use App\Cord;
use App\Heritage;
use App\Material;
use App\Product;
use App\Wishlist;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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

    public function detail($category_id,$request)
    {
        $data = Category::find($category_id);

        if($data)
        {
            $products = Product::where('category_id',$data->id);

            if($request->sortbytype)
            {
                if($request->sortbytype == 'desc')
                {
                    $products = $products->orderBy('id',$request->sortbytype);
                }
                elseif($request->sortbytype == 'atoz')
                {

                    $products = $products->orderBy('name','asc');


                }
                elseif($request->sortbytype == 'ztoa')
                {

                    $products = $products->orderBy('name','desc');
                }
                elseif($request->sortbytype == 'hightolow')
                {

                    $products = $products->orderBy('price','desc');

                }
                elseif($request->sortbytype == 'lowtohigh')
                {

                    $products = $products->orderBy('price','asc');
                }

            }

            if($request->cord_id)
            {
                $products = $products->whereHas('cord',function (Builder $query) use($request){
                    $query->where('cord_id', $request->cord_id);
                });
            }

            if($request->material_id)
            {
                $products = $products->whereHas('material',function (Builder $query) use($request){
                    $query->where('material_id', $request->material_id);
                });
            }

            $products = $products->get();
            $materials = Material::all();
            $cords = Cord::all();



            return view('site.shop.shop_category',compact('products','data','materials',
                'cords'));
        }
        else{
            return redirect()->route('shop')->with('error','Category Not Found');
        }
    }

    public function wishlist($request)
    {
        $product = Product::find($request->id);

        if($product)
        {
            $wishlist = Wishlist::where('product_id',$request->id)->where('user_id',Auth::user()->id)->first();
            if($wishlist)
            {
                $wishlist->delete();
                return response()->json(['result'=>'success','message'=>'Product Removed From Wishlist']);
            }
            else{
                Wishlist::create(['product_id',$request->id,'user_id'=>Auth::user()->id]);
            }
            return response()->json(['result'=>'success','message'=>'Product Added To Wishlist']);
        }
        else{
            return response()->json(['result'=>'error','message'=>'Record Not Found']);
        }
    }

    public function productDetail($id)
    {
        $data = Product::find($id);

        if($data)
        {
            $materials = $data->material;
            $cords = $data->cord;
            $relatedProducts = Product::where('category_id',$data->category_id)->where('id','!=',$data->id)
                ->limit('4')->inRandomOrder()->get();
            return view('site.shop.detail',compact('data','materials','cords','relatedProducts'));
        }
        else{
            return redirect()->back()->with('error','Record Not Found');
        }
    }
}