@extends('app')
@section('content')
    {!! Form::open(array('route' => 'fieldsSubmit')) !!}
    <div class="col-sm-4">
        <table id="search_field_table" class="display" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th></th>
                <th>category</th>
            </tr>
            </thead>
            <tbody>

    @foreach ($queryFields as $f)
        <tr>
        <td>
        {!! Form::checkboxField($f->text_id, $f->display_name, 1, in_array($f->text_id, $userSettings)) !!}
        </td>
            <td>{!! $f->category !!}</td>
            </tr>
    @endforeach
    </tbody>
            </table>
    {!! Form::submit('Save Selections') !!}

    </div>
    {!! Form::close() !!}
@endsection

@section('script')
    {!! HTML::script('bower/datatables/media/js/jquery.js') !!}
    <style>
        tr.group,
        tr.group:hover {
            background-color: #ddd !important;
        }
    </style>
    <script>
        $(document).ready(function() {
        var table = $('#search_field_table').DataTable({
            "paging": false,
            "bFilter": false,
            "bInfo" : false,
            "columnDefs": [
                { "visible": false, "targets": 1 }
            ],
            "order": [[ 1, 'asc' ]],
            "displayLength": 25,
            "drawCallback": function ( settings ) {
                var api = this.api();
                var rows = api.rows( {page:'current'} ).nodes();
                var last=null;

                api.column(1, {page:'current'} ).data().each( function ( group, i ) {
                    if ( last !== group ) {
                        $(rows).eq( i ).before(
                                '<tr class="group"><td colspan="5">'+group+'</td></tr>'
                        );

                        last = group;
                    }
                } );
            }
        } );
            $('#search_field_table tbody').on( 'click', 'tr.group', function () {
                var currentOrder = table.order()[0];
                if ( currentOrder[0] === 1 && currentOrder[1] === 'asc' ) {
                    table.order( [ 1, 'desc' ] ).draw();
                }
                else {
                    table.order( [ 1, 'asc' ] ).draw();
                }
            } );
        } );
    </script>