@extends('etalase::layout')
@section('content-inner')
    <h2 class="ui header">Upload</h2>
    {!! form()->open()->post('etalase::upload')->multipart()->horizontal() !!}
    {!! form()->text('')->label('Nama') !!}
    {!! form()->textarea('')->label('Bio') !!}
    {!! form()->uploader('avatar')->label('CV') !!}
    {!! form()->close() !!}
@endsection
