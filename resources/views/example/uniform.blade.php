@extends('etalase::layout')
@section('content-inner')

    <div class="ui grid">
        <div class="row">
            <div class="ten wide column">
                <div id="preview" class="ui form">
                    {!! form()->text('text')->label('Text') !!}
                </div>
            </div>
            <div class="six wide column">
                <div id="components" class="ui vertical fluid menu">
                    <div class="item"><i class="icon coffee"></i> Text</div>
                    <div class="item"><i class="icon coffee"></i> Textarea</div>
                    <div class="item"><i class="icon coffee"></i> Checkbox</div>
                    <div class="item"><i class="icon coffee"></i> Dropdown</div>
                    <div class="item"><i class="icon coffee"></i> Radio Group</div>
                    <div class="item"><i class="icon coffee"></i> Checkbox Group</div>
                    <div class="item"><i class="icon coffee"></i> File</div>
                    <div class="item"><i class="icon coffee"></i> Image Editor</div>
                    <div class="item"><i class="icon coffee"></i> WYSIWYG</div>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('script')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.min.js"></script>

    <script>
      $(function () {
        let preview = document.querySelector('#preview');
        let components = document.querySelector('#components');
        let drake = dragula(
          [preview, components],
          {
            copy: function (el, source) {
              return source === components;
            },
            accepts: function (el, target) {
              return target !== components;
            },
            removeOnSpill: true
          }
        );

        drake.on('drop', function (el, target, source, sibling) {
            $(el).replaceWith('<div class="field"><label>Label</label><input/></div>');
        });
      });
    </script>
@endpush
