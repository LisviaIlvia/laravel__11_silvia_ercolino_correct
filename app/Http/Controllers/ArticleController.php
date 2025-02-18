<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    public function create()
    {
        return view('articles.create-article');
    }

    public function store(ArticleRequest $request)
    {
        //dd($request->all());
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = null;
        }

        Article::create([
            'title' => $request->title,
            'category' => $request->category,
            'description' => $request->description,
            'text' => $request->text,
            'image' => $imagePath
        ]);

        return redirect()->back()->with('message', 'Articolo aggiunto con successo.');
    }

    public function index()
    {

        $title = "I Nostri Articoli";
        $articles = Article::all();
        return view('articles.index-articles', ['title' => $title, 'articles' => $articles]);
    }

    public function detail($id)
    {

        $article = Article::find($id);

        return view('articles.detail-article', ['article' => $article]);
    }
}
