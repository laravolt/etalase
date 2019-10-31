@extends('etalase::layout')
@section('content-inner')

    {!! form()->open(route('etalase::jexcel.store'))->id('myForm') !!}
    <input type="hidden" name="data" id="data">
    <h2 class="ui header">Daftar Mobil</h2>
    <div id="spreadsheet"></div>
    <div class="ui divider hidden"></div>
    {!! form()->submit('Submit') !!}
    {!! form()->close() !!}


@endsection

@push('script')
    <script src="https://bossanova.uk/jexcel/v3/jexcel.js"></script>
    <link rel="stylesheet" href="https://bossanova.uk/jexcel/v3/jexcel.css" type="text/css"/>
    <script src="https://bossanova.uk/jsuites/v2/jsuites.js"></script>
    <link rel="stylesheet" href="https://bossanova.uk/jsuites/v2/jsuites.css" type="text/css"/>

    <script>

      $(function () {
        $('#myForm').submit(function (event) {
          var data = $('#spreadsheet').jexcel('getData');
          var form = $(this);

          jQuery.each(data, function (rowNumber, row) {
            jQuery.each(row, function (colNumber, value) {
              var input = $("<input>").attr("type", "hidden").attr("name", "row[" + rowNumber + "]" + "[" + colNumber + "]").val(value);
              form.append(input);
            });
          })

          $('#data').val(JSON.stringify(data));
        });
      });


      var data = [
        ['Jazz', 'Honda', 200000000],
        ['Civic', 'Honda', 300000000],
      ];

      $('#spreadsheet').jexcel({
        data: data,
        columns: [
          {type: 'text', title: 'Mobil', width: 120},
          {type: 'dropdown', title: 'Pabrikan', width: 200, source: ["Alfa Romeo", "Audi", "Bmw", 'Honda']},
          {type: 'numeric', title: 'Harga', width: 100, mask: 'Rp#.##,00', decimal: ','},
        ]
      });
    </script>
@endpush
