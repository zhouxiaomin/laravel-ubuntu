@extends('app')
@section('content')
    <div class="col-md-4 col-md-offset-4">
        {!! Form::open(['url'=>'/auth/register']) !!}
        {{--Name Field--}}
        <div class="form-group">
            {!! Form::label('name', '用户名:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        {{--Email Field--}}
        <div class="form-group">
            {!! Form::label('email', '邮箱:') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>
        {{--Password Field--}}
        <div class="form-group">
            {!! Form::label('password', '密码:') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
        {{--Password_confirmation Field--}}
        <div class="form-group">
            {!! Form::label('password_confirmation', '确认密码:') !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('注册', ['class' => 'btn btn-primary form-control']) !!}
        {!! Form::close() !!}

        @include('errors.list')
    </div>
@stop
