@extends('app')
@section('content')
    <h1>文章列表</h1>
        <a href="{{ url('articles/create') }}" class="btn btn-primary btn-xs">简陋的撰写文章</a>
    <hr>
    @foreach($articles as $article)
        {{--<h2><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></h2>--}}
        <h2><a href="{{ url('articles', $article->id) }}">{{ $article->title }}</a></h2>
{{--        <h2><a href="{{ action('ArticleController@show',[$article->id]) }}">{{ $article->title }}</a></h2>--}}
        <article>
            <div class="body">
                {{ $article->content }}
            </div>
        </article>
    @endforeach
@stop