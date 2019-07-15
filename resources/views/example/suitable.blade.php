@extends('etalase::layout')
@section('content-inner')
        {!! $table !!}

{{--    {!!--}}
{{--    Suitable::source($users)--}}
{{--        ->columns([--}}
{{--           'id',--}}
{{--            ['header' => 'Nama', 'field' => 'name', 'sortable' => true],--}}
{{--            ['header' => 'Surel', 'field' => 'email', 'sortable' => 'email_address'],--}}
{{--        ])--}}
{{--        ->render()--}}
{{--    !!}--}}
@endsection
