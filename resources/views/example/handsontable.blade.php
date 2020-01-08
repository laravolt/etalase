@extends('etalase::layout')

@section('page.title', 'Handsontable')

@section('content-inner')
    {!! form()->open(url('etalase/semantic-form')) !!}
    <div id="example1" class="hot handsontable htColumnHeaders"></div>
    {!! form()->submit('Simpan') !!}
    {!! form()->close() !!}

    <iframe height="260" title="Embedded Wufoo Form" allowtransparency="true" frameborder="0" scrolling="no"
            style="width:100%;border:none" src="https://uyab.wufoo.com/embed/z1p86k1t1elfd2b/"><a
                href="https://uyab.wufoo.com/forms/z1p86k1t1elfd2b/">Fill out my Wufoo form!</a></iframe>

@endsection

@push('script')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/handsontable/7.2.2/handsontable.full.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handsontable/7.2.2/handsontable.full.min.js"></script>
    <script>
      function getCarData() {
        return [
          ["Tesla", 2017, "black", "black"],
          ["Nissan", 2018, "blue", "blue"],
          ["Chrysler", 2019, "yellow", "black"],
          ["Volvo", 2020, "white", "gray"]
        ];
      }

      var
        container = document.getElementById('example1'),
        hot;

      hot = new Handsontable(container, {
        data: getCarData(),
        nestedHeaders: [
          [{label: 'Car', rowspan: 2}, {label: 'Year', colspan: 2}, 'Chassis color', 'Bumper color'],
          ['Chassis color', 'Bumper color'],
        ],
        columns: [
          {},
          {type: 'numeric'},
          {
            type: 'dropdown',
            source: ['yellow', 'red', 'orange', 'green', 'blue', 'gray', 'black', 'white']
          },
          {
            type: 'dropdown',
            source: ['yellow', 'red', 'orange', 'green', 'blue', 'gray', 'black', 'white']
          }
        ]
      });

    </script>
@endpush
