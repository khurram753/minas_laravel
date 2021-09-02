<?php

namespace App\Services\Site;

use App\CMS;
use App\Heritage;
use App\News;
use App\Product;
use App\Project;

class HomeService
{
    public function index()
    {
        $home = CMS::where('page_name','banner')->first();
        $heritageImages = Heritage::select('image')->get();
        $products = Product::inRandomOrder()->limit(3)->get();
        $biggerProducts = Product::inRandomOrder()->limit(2)->get();
        $project = Project::inRandomOrder()->first();
        $news = News::inRandomOrder()->limit(2)->get();
        return view('site.home.home',compact('home','heritageImages','products',
            'biggerProducts', 'project','news'));
    }
}
