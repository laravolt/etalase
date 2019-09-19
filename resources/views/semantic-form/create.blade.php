@extends('etalase::layout')
@section('content-inner')

    @etalase('Semantic Form')
    {!! form()->open(route('etalase::semantic-form.store')) !!}
    {!! form()->redactor('redactor')->label('Editor') !!}
    {!! form()->submit('Submit') !!}
    {!! form()->close() !!}
    @endetalase
@endsection
