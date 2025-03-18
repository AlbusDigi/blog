<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleResource;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       
        //$articles = Article::with('commentaires')->get();

        $articles = ArticleResource::collection(Article::paginate(15));


        return $articles;
        

    }
    
    /**
    * Show the form for creating a new resource.
    */
    public function create()
    {
        //
    }
    


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $article = new Article();
        $article->title = $request->title;
        $article->content = $request->content;
        $article->slug = $request->slug;
        $article->photo = $request->photo;
        $article->auteur = $request->auteur;
        $article->save();
        return $article;
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return new ArticleResource($article);
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
