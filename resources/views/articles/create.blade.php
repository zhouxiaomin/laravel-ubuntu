@extends('app')
@section('content')

    <h1>撰写新文章</h1>

    {!! Form::open(['url'=>'/articles']) !!}
        @include('articles.form');
    {!! Form::close() !!}
    @include('errors.list')
    <script type="text/javascript">
        $(function() {
            $(".js-example-basic-multiple").select2({
                placeholder: "添加标签"
            });
        });
    </script>
@endsection
