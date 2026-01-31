<?php


namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Menampilkan daftar artikel yang dipublish
     */
    public function index()
    {
        $articles = Article::where('is_published', true)
            ->latest()
            ->get();

        return response()->json([
            'status' => 'success',
            'data' => $articles
        ]);
    }

    /**
     * Menampilkan detail artikel
     */
    public function show($id)
    {
        $article = Article::where('is_published', true)
            ->findOrFail($id);

        return response()->json([
            'status' => 'success',
            'data' => $article
        ]);
    }
}
