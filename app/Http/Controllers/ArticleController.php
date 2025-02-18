<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function create() {
        return view('articles.create-article');
    }

    public function store(Request $request) {
        //dd($request->all());
        $title = $request->title;
        $category = $request->category;
        $description = $request->description;
        $text = $request->text;

        Article::create( [
            'title' => $title,
            'category' => $category,
            'description' => $description,
            'text' => $text
        ]);

        return redirect()->back()->with('message', 'Articolo aggiunto con successo.');
    }

    public function index() {

        $title = "I Nostri Articoli";
        $articles = Article::all();
        return view('articles.index-articles', ['title' => $title, 'articles' => $articles]);
    }

    public function detail($id) {

        $article = Article::find($id);
        
        return view('articles.detail-article', ['article' => $article]);
    }
}
