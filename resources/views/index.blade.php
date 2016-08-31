@extends('layout')

@section('title')
    Числа Фибоначчи
@stop
@section('content')
    Числа Фибоначчи
    {!! Form::open(['url'=> '/', 'action' => 'FibonachiController@calculator', 'method' => 'post']) !!}
    {!! Form::text('count') !!}
    {!! Form::submit('Считать') !!}
    {!! Form::close() !!}

@stop