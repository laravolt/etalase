@extends('etalase::layout')

@section('page.title', 'Kitchen Sink')

@section('content-inner')
    <h2 class="ui header">Kitchen Sink</h2>

    {!! form()->open('') !!}
    {!! form()->uploader('file')->label('Uploader') !!}
    {!! form()->datepicker('datepicker')->label('Datepicker') !!}
    {!! form()->close() !!}

    <h3 class="ui header">Regular Form</h3>
    {!! form()->open('') !!}
    {!! form()->text('')->label('one wide')->fieldWidth(1) !!}
    {!! form()->text('')->label('two wide')->fieldWidth(2) !!}
    {!! form()->text('')->label('three wide')->fieldWidth(3) !!}
    {!! form()->text('')->label('four wide')->fieldWidth(4) !!}
    {!! form()->text('')->label('five wide')->fieldWidth(5) !!}
    {!! form()->text('')->label('six wide')->fieldWidth(6) !!}
    {!! form()->text('')->label('seven wide')->fieldWidth(7) !!}
    {!! form()->text('')->label('eight wide')->fieldWidth(8) !!}
    {!! form()->text('')->label('nine wide')->fieldWidth(9) !!}
    {!! form()->text('')->label('ten wide')->fieldWidth(10) !!}
    {!! form()->text('')->label('eleven wide')->fieldWidth(11) !!}
    {!! form()->text('')->label('twelve wide')->fieldWidth(12) !!}
    {!! form()->text('')->label('thirteen wide')->fieldWidth(13) !!}
    {!! form()->text('')->label('fourteen wide')->fieldWidth(14) !!}
    {!! form()->text('')->label('fifteen wide')->fieldWidth(15) !!}
    {!! form()->text('')->label('sixteen wide')->fieldWidth(16) !!}
    {!! form()->checkboxGroup('', ['satu', 'dua', 'tiga', 'empat'])->hint('lorem ipsum')->label('Default Checkbox') !!}
    {!! form()->checkboxGroup('', ['satu', 'dua', 'tiga', 'empat'])->hint('lorem ipsum')->label('Inline checkbox')->inline() !!}
    {!! form()->action(form()->submit('Submit')) !!}
    {!! form()->close() !!}

    <h3 class="ui header">Horizontal Form</h3>
    {!! form()->open('')->horizontal() !!}
    {!! form()->text('')->label('Label') !!}
    {!! form()->checkboxGroup('', ['satu', 'dua', 'tiga', 'empat'])->hint('lorem ipsum')->label('Label') !!}
    {!! form()->radioGroup('', ['satu', 'dua', 'tiga', 'empat'])->hint('lorem ipsum')->label('Label')->inline() !!}
    {!! form()->action(form()->submit('Submit')) !!}
    {!! form()->close() !!}

    <h3 class="ui header">Horizontal Form With Custom Width</h3>
    {!! form()->open('')->horizontal() !!}
    {!! form()->text('')->label('one wide')->fieldWidth(1) !!}
    {!! form()->text('')->label('two wide')->fieldWidth(2) !!}
    {!! form()->text('')->label('three wide')->fieldWidth(3) !!}
    {!! form()->text('')->label('four wide')->fieldWidth(4) !!}
    {!! form()->text('')->label('five wide')->fieldWidth(5) !!}
    {!! form()->text('')->label('six wide')->fieldWidth(6) !!}
    {!! form()->text('')->label('seven wide')->fieldWidth(7) !!}
    {!! form()->text('')->label('eight wide')->fieldWidth(8) !!}
    {!! form()->text('')->label('nine wide')->fieldWidth(9) !!}
    {!! form()->text('')->label('ten wide')->fieldWidth(10) !!}
    {!! form()->text('')->label('eleven wide')->fieldWidth(11) !!}
    {!! form()->text('')->label('twelve wide')->fieldWidth(12) !!}
    {!! form()->text('')->label('thirteen wide')->fieldWidth(13) !!}
    {!! form()->text('')->label('fourteen wide')->fieldWidth(14) !!}
    {!! form()->text('')->label('fifteen wide')->fieldWidth(15) !!}
    {!! form()->text('')->label('sixteen wide')->fieldWidth(16) !!}
    {!! form()->action(form()->submit('Submit')) !!}
    {!! form()->close() !!}

@endsection
