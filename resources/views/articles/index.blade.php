@extends('app')
@section('content')
    <h1>
        文章列表:
        @if(isset(\Auth::user()->id))
            {{ \Auth::user()->name }}
        @endif
    </h1>
        <a href="{{ url('articles/create') }}" class="btn btn-primary btn-xs">简陋的撰写文章</a>
    <hr>
    @foreach($articles as $article)
        {{--<h2><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></h2>--}}
        {{--<h2><a href="{{ url('articles', $article->id) }}">{{ $article->title }}</a></h2>--}}
        <h2 class="post-title pad">
            <a href="/articles/{{ $article->id }}"> {{ $article->title }}</a>
        </h2>
        <ul class="post-meta pad group">
            <li><i class="fa fa-clock-o"></i>{{ $article->published_at->diffForHumans() }}</li>
            @if($article->tags)
                @foreach($article->tags as $tag)
                    <li><i class="fa fa-tag"></i>{{ $tag->name }}</li>
                @endforeach
            @endif
        </ul>
        <h4><a href="{{ url('articles/'.$article->id.'/edit') }}">修改</a></h4>
{{--        <h2><a href="{{ action('ArticleController@show',[$article->id]) }}">{{ $article->title }}</a></h2>--}}
        <article>
            <div class="body">
                {{ $article->content }}
            </div>
        </article>

    @endforeach



@stop