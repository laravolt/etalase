@extends('etalase::layout')
@section('content-inner')

    @etalase('Text Color')
        @foreach(['red', 'orange', 'yellow', 'olive', 'green', 'teal', 'blue', 'violet', 'purple', 'pink', 'brown', 'grey', 'black'] as $color)
            <div><span class="ui {{ $color }} text">{{ $color }}</span></div>
        @endforeach
    @endetalase

@endsection
