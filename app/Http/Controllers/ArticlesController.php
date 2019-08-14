<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Tag;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        dd(\Auth::user());
        $articles = Article::latest()->published()->get();
        return view('articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (isset(\Auth::user()->id)) {
            $tags = Tag::lists('name', 'id');
            //为了在界面中显示标签name，id为了在保存文章的时候使用。
            return view('articles.create',compact('tags'));
//            return view('articles.create');
        } else {
            return redirect('/auth/login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Request $request)
    public function store(Requests\CreateArticleRequest $request)
    {
//        dd($request->all());
//        $this->validate($request,['title'=>'required','content'=>'required']);
//        dd(\Auth::user()->id);
//        Article::create(array_merge(['user_id'=>\Auth::user()->id], $request->all()));
//        return redirect('/articles');

        $input = $request->all();
        $input['intro'] = mb_substr($request->get('content'),0,64);
        $article = Article::create(array_merge(['user_id'=>\Auth::user()->id], $input));
        $article->tags()->attach($request->input('tag_list'));
        return redirect('/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
//        dd($article);
//        if (is_null($article)) {
//            abort(404);
//        }
//        dd($article->created_at->diffForHumans());
//        dd($article->published_at->diffForHumans());
        $published_at = $article->published_at->diffForHumans();
        return view('articles.show',compact('article','published_at'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (isset(\Auth::user()->id)) {
            $article = Article::findOrFail($id);
            return view('articles.edit',compact('article'));
        } else {
            return redirect('/auth/login');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\CreateArticleRequest $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());

        return redirect('/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
