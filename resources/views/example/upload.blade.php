@extends('etalase::layout')
@section('content-inner')
    <h2 class="ui header">Upload</h2>
    {!! form()->open()->post('etalase::upload')->multipart()->horizontal() !!}
    {!!
        form()->uploader('attachments')->value(auth()->user()->getMedia())->label('CV')
            ->limit(99)
            ->extensions(['jpg', 'png'])
            ->ajax(true)
     !!}
    {{--    {!! form()->redactor('redactor')->mediaUrl(route('media::store', ['handler' => 'redactor']))->label('Redactor') !!}--}}
    {!! form()->submit() !!}
    {!! form()->close() !!}
@endsection
