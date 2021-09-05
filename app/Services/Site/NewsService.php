<?php

namespace App\Services\Site;

use App\News;
use App\NewsCategory;

class NewsService
{
    public function index($request)
    {
        $newsCategories = NewsCategory::all();
        $newsYear = News::select('year')->orderBy('year', 'desc')->distinct('year')->get();
        $singleNews = News::orderBy('year', 'desc')->first();
        $news = News::orderBy('year', 'desc')->where('id','!=',$singleNews->id);

        if ($request->category_id) {
            $news = $news->where('category_id', $request->category_id);
        }

        if ($request->year) {
            $news = $news->where('category_id', $request->year);
        }

        $news = $news->get();

        return view('site.news.news', compact('newsCategories', 'newsYear','news','singleNews'));
    }

    public function detail($id)
    {
        $data = News::find($id);

        if($data)
        {
            $relatedProjects = News::where('category_id',$data->category_id)->inRandomOrder()->limit('2')->get();
            return view('site.news.news_detail',compact('data','relatedProjects'));
        }
        else{
            return redirect()->route('newsUpdate')->with('error','Record Not Found');
        }
    }
}
