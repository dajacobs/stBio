@extends('app')

@section('title', 'Search - biostats')

@section('style')


  div.panel-heading {
  padding-bottom: 30px;
  }

  .search-title {
  font-size: 2.5em;
  }
@endsection

@section('content')
  {!! Form::open(array('method' =>'POST', 'url'=>action('SearchController@results'), 'class' => 'form-horizontal')) !!}

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="col-md-12  search-header"
             style="background-color: #337ab7; color: #ffffff; padding-bottom: 15px">
          <h1 align="center">Search Fields</h1>

          <div class="row clearfix">
            <div class="col-md-3 column">
              <label class="control-label add-fields-label" style="text-align: right; width: 100%">Additional
                Fields:</label>
            </div>
            <div class="col-md-3 column">
              @if (count($selectFields) > 0)
                <div class="btn-group btn-input clearfix add-group">
                  <button type="button" class="btn btn-default dropdown-toggle form-control"
                          data-toggle="dropdown">
                    <span data-bind="label">Select One</span>&nbsp;<span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu" id="add-values">
                    @foreach ($selectFields as $f)
                      <li data-value="{{$f->text_id}}"><a href="#">{{ $f->display_name }}</a>
                      </li>
                    @endforeach
                  </ul>
                </div>
                <label class="control-label no-fields-label"
                       style="text-align: left; width: 100%; display: none">None</label>
              @else
                <label class="control-label no-fields-label"
                       style="text-align: left; width: 100%">None</label>
              @endif
            </div>
            <div class="col-md-6 column text-center">
              {!! Form::submit('Search', ['class' => 'btn btn-lg btn-info']) !!}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="searchForm panel panel-primary" style="border-radius: 0">
          <div class="panel-body">
            <table id="search_field_table" class="display" cellspacing="0" width="100%">
              <thead>
              <tr>
                <th></th>
                <th>category</th>
              </tr>
              </thead>

              <tbody>

              @foreach ($userFields as $f)
                <tr>
                  <td>{!! Form::searchField($f) !!}</td>
                  <td>{!! $f->category !!}</td>
                </tr>
              @endforeach


              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>
  {!! Form::close() !!}
@endsection

@section('script')

  <style>
    tr.group,
    tr.group:hover {
      background-color: #ddd !important;
    }
  </style>
  <script>
    $(document.body).on('focus', '[id$=Picker]', function (event) {
      $(event.target).datepicker({
        changeYear: true
      });
    });
    $(document.body).on('change', '[name$=Select]', function (event) {
      var $target = $(event.currentTarget);
      if (this.options[this.selectedIndex].text == 'Between') {
        $(this).siblings('.betweenToggle').css("display", "inline");
      } else {
        $(this).siblings('.betweenToggle').css("display", "none");
      }
    });

    $(".add-group").on('click', '.dropdown-menu li', function (event) {
      var $target = $(event.currentTarget);
      var $selectedVal = $target.attr('data-value');
      $target.closest('.btn-group').children('.dropdown-toggle').dropdown('toggle');

      //hide dropdown if empty
      if ($target.siblings().length == 0) {
        $(this).closest('.add-group').css("display", "none");
        $(".no-fields-label").css("display", "");
      }

      $target.remove();


      $.get('fieldinfo', {
        fieldId: $selectedVal
      }).done(function (data) {
        var table = $('#search_field_table').DataTable();
        var rowNode = table
            .row.add(JSON.parse(data))
            .draw(false)
            .node();
        console.log($(rowNode).offsetParent().top);


          $('.dataTables_scrollBody').animate({
            scrollTop:  $(rowNode).offset().top - $(".dataTables_scrollBody").height()
          }, 1000);


        $(rowNode)
            .css('color', 'red')
            .animate({
              color: 'black'
            }, 2000);
      });
      return false;

    });

    $(document).ready(function () {
      var table = $('#search_field_table').DataTable({
        "scrollY": $(window).height() - 260,
        "scrollCollapse": false,
        "paging": false,
        "bFilter": false,
        "bInfo": false,
        "columnDefs": [{
          "visible": false,
          "targets": 1
        }],
        "order": [
          [1, 'asc']
        ],
        "displayLength": 25,
        "drawCallback": function (settings) {
          var api = this.api();
          var rows = api.rows({
            page: 'current'
          }).nodes();
          var last = null;

          api.column(1, {
            page: 'current'
          }).data().each(function (group, i) {
            if (last !== group) {
              $(rows).eq(i).before(
                  '<tr class="group"><td colspan="5">' + group + '</td></tr>'
              );

              last = group;
            }
          });
        }
      });


      $('#search_field_table').find('tbody').on('click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if (currentOrder[0] === 1 && currentOrder[1] === 'asc') {
          table.order([1, 'desc']).draw();
        } else {
          table.order([1, 'asc']).draw();
        }
      });

    });

    function isElementInViewport(el) {

      //special bonus for those using jQuery
      if (typeof jQuery === "function" && el instanceof jQuery) {
        el = el[0];
      }

      var rect = el.getBoundingClientRect();

      return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /*or $(window).height() */
      rect.right <= (window.innerWidth || document.documentElement.clientWidth) /*or $(window).width() */
      );
    }
  </script>
@endsection
