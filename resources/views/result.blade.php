@extends('layout')

@section('title')
    Числа Фибоначчи
@stop
@section('content')
    {!! Form::open(['url'=> '/', 'action' => 'FibonachiController@calculator', 'method' => 'post']) !!}
    {!! Form::text('count') !!}
    {!! Form::submit('Считать') !!}
    {!! Form::close() !!}

    Результат
{{ $data }}
@stop