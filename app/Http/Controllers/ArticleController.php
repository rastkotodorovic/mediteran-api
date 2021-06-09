<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('admin.articles.index', [
            'articles' => Article::all()
        ]);
    }

    public function show()
    {

    }

    public function create()
    {
        return view ('admin.articles.create');
    }

    public function store(ArticleRequest $request)
    {
        Article::create($request->validated());

        return redirect(route('articles.index'));
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
