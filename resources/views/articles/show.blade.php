@extends('app')
@section('content')
    <h1>{{ $article->title }}</h1>
    <div>发布于 {{ $published_at }}</div>
    <hr>
        <article>
            <div class="body">
                {{ $article->content }}
            </div>
        </article>
@stop