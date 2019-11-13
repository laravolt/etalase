@extends('etalase::layout')
@section('content-inner')
    @etalase('Semantic Form')
    {!! form()->open() !!}


    @php($definition = config('sample-form'))
    {!! form()->make($definition) !!}
    {!! form()->close() !!}
    @endetalase
@endsection
