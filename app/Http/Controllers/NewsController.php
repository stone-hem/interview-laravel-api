<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoriesWithNews = Category::with('news')->get();
        return response()->json(['categoriesWithNews' => $categoriesWithNews]);
    }

    /**
     * Display the specified resource.
     */
    public function showNews(string $id)
    {
        // Get the category of a specific news article
        $newsArticle = News::find($id)->category;
        return response()->json(['newsArticles'=>$newsArticle]);
    }
}
