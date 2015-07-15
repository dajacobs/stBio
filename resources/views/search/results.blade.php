@extends('app')

@section('content')
  <div class="container-fluid">

    <div class="row">

      <div class="col-md-10">

        <table id="results-table" class="display">

          <thead>
          <tr>
            @foreach ($columns as $column)
              <th>
                {{ $column }}
              </th>
            @endforeach
          </tr>
          </thead>
          <tbody>
          @foreach ($results as $result)
            <tr>
              @foreach ($result as $key => $value)
                <td>
                  {{ str_limit($value, 25, "...") }}
                </td>
              @endforeach
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>

    </div>
  </div>
@endsection

@section('script')
  <style>
    tr.group,
    tr.group:hover {
      background-color: #ddd !important;
    }
  </style>

  {!! HTML::script('/bower/datatables-fixedcolumns/js/dataTables.fixedColumns.js') !!}
  <script>
    table = $(document).ready(function () {
      var table = $('#results-table').DataTable({
        "scrollY": $(window).height() - 260,
        "scrollX": true,
        "scrollCollapse": true,
        "iDisplayLength": 25,
        "jQueryUI": true
      });
      new $.fn.dataTable.FixedColumns(table);
    });

  </script>
@endsection