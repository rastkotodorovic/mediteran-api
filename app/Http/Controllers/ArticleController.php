<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use Yajra\DataTables\Facades\DataTables;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::eloquent(
                Article::query()
            )
                ->addColumn('action', function ($article) {
                    return view('admin.articles.action', compact('article'));
                })
                ->make();
        };

        return view('admin.articles.index');
    }

    public function create()
    {
        return view('admin.articles.form');
    }

    public function store(ArticleRequest $request)
    {
        Article::create($request->validated());

        return redirect(route('articles.index'));
    }

    public function edit(Article $article)
    {
        return view('admin.articles.form', [
            'article' => $article
        ]);
    }

    public function update(ArticleRequest $request, Article $article)
    {
        $article->update($request->validated());

        return redirect(route('articles.index'));
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return back();
    }
}
