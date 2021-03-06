<div class="form-group">
    {!! Form::label('title', '标题:') !!}
    {!! Form::text('title',null,['class'=>'form-control','id'=>'title']) !!}
</div>
{{--Contet Field--}}
<div class="form-group">
    {!! Form::label('content', '内容:') !!}
    {!! Form::textarea('content',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('published_at', '发表时间:') !!}
    {!! Form::input('date', 'published_at',date('Y-m-d'),['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('tag_list','选择标签') !!}
    {!! Form::select('tag_list[]',$tags,null,['class'=>'form-control js-example-basic-multiple','multiple'=>'multiple']) !!}
</div>
{!! Form::submit('发表文章',['class'=>'btn btn-primary form-control']) !!}