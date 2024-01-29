<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $newsWithCategories = News::query()
            ->join('categories', 'categories.id', '=', 'news.category_id')
            ->select('categories.id as category_id', 'categories.name', 'news.*')
            ->limit(5)
            ->get();
        return response()->json($newsWithCategories);
    }
    
    public function categoryWithNews(String $id)
    {
       $news = News::where('category_id',$id)->get();
        return response()->json($news);
    }

    public function categories()
    {
        $categories = Category::all();
        return response()->json($categories);
    }
    public function showNews(string $id)
    {
        $newsArticle = News::find($id)->category;
        return response()->json(['newsArticles' => $newsArticle]);
    }
}
