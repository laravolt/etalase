@extends('etalase::layout')
@section('content-inner')
    <?php
    $row = ['name', 'email'];
    ?>
    @etalase('Semantic Form')
    <div class="ui segment">
        {!! form()->open()->id('form') !!}
        {{--    {!! form()->tabular($row) !!}--}}
        @php($definition = config('sample-form'))
        {!! form()->make($definition)->render() !!}
        {!! form()->close() !!}
    </div>
    @endetalase

@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
      var form = new Vue({
        el: '#form',
        data: {
          country: null,
          total:null
        }
      });

      $(function(){
         $('[data-score]').on('change', function(e){
           var score = 0;
           $('[data-score]:checked').each(function(idx, elm){
             score += parseInt($(elm).data('score'));
           });
           form['total'] = score;
           $('[name="total"]').trigger('change')
         });
      });
    </script>
@endpush
