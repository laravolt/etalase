@extends('etalase::layout')
@section('content-inner')
    <h2 class="ui header">Upload</h2>
    {!! form()->open()->post('etalase::upload')->multipart()->horizontal() !!}
    {!! form()->uploader('files')->value(auth()->user()->getMedia())->label('CV')->limit(2)->extensions(['jpg', 'png']) !!}
    {!! form()->submit() !!}
    {!! form()->close() !!}
@endsection
