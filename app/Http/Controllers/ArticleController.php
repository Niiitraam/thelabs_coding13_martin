<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Tag;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Article::all();
        return view('article-admin', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = Article::all();
        return view('article-admin-edit', compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Article;

        $store->date = $request->date;
        $store->titre = $request->titre;
        $store->auteur = $request->auteur;
        $store->texte = $request->texte;
        $store->image = $request->file('image')->hashName();

        $store->save();
        $request->file('image')->storePublicly('images', 'public');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($article)
    {
        $show = Article::find($article);
        $categorie = Categorie::all();
        $tags = Tag::all();
        return view('blog-post', compact('show', 'categorie' , 'tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($article)
    {
        $edit = Article::find($article);
        return view('article-admin-edit-article',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $article)
    {
        $update = Article::find($article);

        $update->date = $request->date;
        $update->titre = $request->titre;
        $update->auteur = $request->auteur;
        $update->texte = $request->texte;
        $update->image = $request->file('image')->hashName();

        $update->save();
        $request->file('image')->storePublicly('images', 'public');
        return redirect()->back();
    }

    public function update2(Request $request, $id){
        $newArticle = Article::find($id);
        $newArticle->check = $request->check;
        $newArticle->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($article)
    {
        $destroy = Article::find($article);

        $destroy->delete();
        return redirect()->back();
    }
}
