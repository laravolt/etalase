@extends('etalase::layout')
@section('content-inner')

    @etalase('Semantic Form')
    {!! form()->open(route('etalase::semantic-form.store')) !!}
    {!! form()->redactor('redactor')->label('Editor')->required() !!}
    {!! form()->coordinate('coordinate1')->label('Coordinate')->required() !!}
    {!! form()->coordinate('coordinate2')->label('Coordinate')->disabled() !!}
    {!! form()->submit('Submit') !!}
    {!! form()->close() !!}
    @endetalase
@endsection
