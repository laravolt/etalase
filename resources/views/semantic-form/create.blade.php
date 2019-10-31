@extends('etalase::layout')
@section('content-inner')

    @etalase('Semantic Form')
    {!! form()->open(route('etalase::semantic-form.store'))->multipart() !!}
    {!! form()->text('title')->label('Title') !!}
    {!! form()->uploader('attachments')->limit(10)->label('Attachments') !!}
    {!! form()->submit('Submit') !!}
    {!! form()->close() !!}
    @endetalase
@endsection
