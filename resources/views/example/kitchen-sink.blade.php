@extends('etalase::layout')

@section('page.title', 'Kitchen Sink')

@section('content-inner')
    <h2 class="ui header">Kitchen Sink</h2>

    <div>
        <div class="ui label red ">red</div>
        <div class="ui label orange ">orange</div>
        <div class="ui label yellow ">yellow</div>
        <div class="ui label olive ">olive</div>
        <div class="ui label green ">olive</div>
        <div class="ui label teal ">olive</div>
        <div class="ui label blue ">olive</div>
        <div class="ui label violet ">olive</div>
        <div class="ui label purple ">olive</div>
        <div class="ui label pink ">olive</div>
        <div class="ui label brown ">olive</div>
        <div class="ui label grey ">olive</div>
        <div class="ui label black ">olive</div>
    </div>

    <div>
        <div class="ui label red basic">red</div>
        <div class="ui label orange basic">orange</div>
        <div class="ui label yellow basic">yellow</div>
        <div class="ui label olive basic">olive</div>
        <div class="ui label green basic">olive</div>
        <div class="ui label teal basic">olive</div>
        <div class="ui label blue basic">olive</div>
        <div class="ui label violet basic">olive</div>
        <div class="ui label purple basic">olive</div>
        <div class="ui label pink basic">olive</div>
        <div class="ui label brown basic">olive</div>
        <div class="ui label grey basic">olive</div>
        <div class="ui label black basic">olive</div>
    </div>

    <div>
        <div class="ui label red basic">red</div>
        <div class="ui label orange basic">orange</div>
        <div class="ui label yellow basic">yellow</div>
        <div class="ui label olive basic">olive</div>
        <div class="ui label green basic">olive</div>
        <div class="ui label teal basic">olive</div>
        <div class="ui label blue basic">olive</div>
        <div class="ui label violet basic">olive</div>
        <div class="ui label purple basic">olive</div>
        <div class="ui label pink basic">olive</div>
        <div class="ui label brown basic">olive</div>
        <div class="ui label grey basic">olive</div>
        <div class="ui label black basic">olive</div>
    </div>

    {!! form()->open('') !!}
    {!! form()->uploader('file')->label('Uploader') !!}
    {!! form()->datepicker('datepicker')->label('Datepicker') !!}
    {!! form()->rupiah('harga_1')->label('Rupiah') !!}
    {!! form()->rupiah('harga_2')->label('Rupiah') !!}
    {!! form()->selectMultiple('tags', ['satu', 'dua'], [1])->label('Tags') !!}
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
