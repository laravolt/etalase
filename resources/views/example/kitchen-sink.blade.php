@extends('etalase::layout')

@section('page.title', 'Kitchen Sink')

@section('content-inner')
    <h2 class="ui header">Kitchen Sink</h2>

    <h3 class="ui header">Regular Form</h3>
    {!! form()->open('') !!}
    {!! form()->text('one wide')->label('Name')->fieldWidth(1) !!}
    {!! form()->text('two wide')->label('Password')->fieldWidth(2) !!}
    {!! form()->text('three wide')->label('Password')->fieldWidth(3) !!}
    {!! form()->text('four wide')->label('Password')->fieldWidth(4) !!}
    {!! form()->text('five wide')->label('Password')->fieldWidth(5) !!}
    {!! form()->text('six wide')->label('Password')->fieldWidth(6) !!}
    {!! form()->text('seven wide')->label('Password')->fieldWidth(7) !!}
    {!! form()->text('eight wide')->label('Password')->fieldWidth(8) !!}
    {!! form()->text('nine wide')->label('Password')->fieldWidth(9) !!}
    {!! form()->text('ten wide')->label('Password')->fieldWidth(10) !!}
    {!! form()->text('eleven wide')->label('Password')->fieldWidth(11) !!}
    {!! form()->text('twelve wide')->label('Password')->fieldWidth(12) !!}
    {!! form()->text('thirteen wide')->label('Password')->fieldWidth(13) !!}
    {!! form()->text('fourteen wide')->label('Password')->fieldWidth(14) !!}
    {!! form()->text('fiveteen wide')->label('Password')->fieldWidth(15) !!}
    {!! form()->text('sixteen wide')->label('Password')->fieldWidth(16) !!}
    {!! form()->action(form()->submit('Submit')) !!}
    {!! form()->close() !!}

    <h3 class="ui header">Horizontal Form</h3>
    {!! form()->open('')->horizontal() !!}
    {!! form()->text('one wide')->label('Name')->fieldWidth(1) !!}
    {!! form()->text('two wide')->label('Password')->fieldWidth(2) !!}
    {!! form()->text('three wide')->label('Password')->fieldWidth(3) !!}
    {!! form()->text('four wide')->label('Password')->fieldWidth(4) !!}
    {!! form()->text('five wide')->label('Password')->fieldWidth(5) !!}
    {!! form()->text('six wide')->label('Password')->fieldWidth(6) !!}
    {!! form()->text('seven wide')->label('Password')->fieldWidth(7) !!}
    {!! form()->text('eight wide')->label('Password')->fieldWidth(8) !!}
    {!! form()->text('nine wide')->label('Password')->fieldWidth(9) !!}
    {!! form()->text('ten wide')->label('Password')->fieldWidth(10) !!}
    {!! form()->text('eleven wide')->label('Password')->fieldWidth(11) !!}
    {!! form()->text('twelve wide')->label('Password')->fieldWidth(12) !!}
    {!! form()->text('thirteen wide')->label('Password')->fieldWidth(13) !!}
    {!! form()->text('fourteen wide')->label('Password')->fieldWidth(14) !!}
    {!! form()->text('fiveteen wide')->label('Password')->fieldWidth(15) !!}
    {!! form()->text('sixteen wide')->label('Password')->fieldWidth(16) !!}
    {!! form()->action(form()->submit('Submit')) !!}
    {!! form()->close() !!}

    <h3 class="ui header">Horizontal Form With Hint</h3>
    {!! form()->open('')->horizontal() !!}
    {!! form()->text('one wide')->label('Name')->hint('lorem ipsum')->fieldWidth(1) !!}
    {!! form()->text('eight wide')->label('Password')->hint('lorem ipsum')->fieldWidth(8) !!}
    {!! form()->text('sixteen wide')->label('Password')->hint('lorem ipsum')->fieldWidth(16) !!}
    {!! form()->action(form()->submit('Submit')) !!}
    {!! form()->close() !!}
@endsection
