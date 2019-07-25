@extends('layouts.master')

@section('content')

<div class="content">
    <div class="block block-fx-shadow">
        <div class="block">
            <div class="block-header block-header-default bg-primary-lighter">
                <h3 class="block-title text-uppercase">Transaction</h3>
                <div class="block-options">
                </div>
            </div>
            <div class="block-content block-content-full">
                <form method="GET">
                    <div class="form-group row">
                        <div class="col-4"></div>
                        <div class="col-2">
                            <input type="hidden" name="id" value="{{Auth::user()->id}}">
                        </div>
                        <div class="col-2"></div>
                        <div class="col-2">
                            <input class="form-control" type="text" name="text-name" placeholder="Partner Name">
                        </div>
                        <div class="col-1">
                            <input type="submit" class="btn btn-primary" value="Search" formaction="{{ route('dashboard.agent_quota') }}"/>
                        </div>
                    </div>
                </form>
                <form method="POST">
                    @csrf
                    @include('agent.quotaTable')
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('')

    <script type="text/javascript">

        // function ajaxLoad(column, typeOfSort, sortInURL, page) {
        //     $("#tableAjax").empty();
        //     $(".paginate").empty();
        //     $(".page-info").empty();

        //     $.ajax({
        //         type: "GET",
        //         url: "{{ route('dashboard.index') }}",
        //         dataType: "json",
        //         data: {
        //             column: column,
        //             typeOfSort: typeOfSort,
        //             page: page
        //         },
        //         success: function (json) {

        //             $("#tableAjax").html(json.success);
        //             $(".paginate").append(json.pagi);
        //             $(".page-info").append(json.info);

        //             window.history.pushState("", "Title", "/dashboard?sort_by=" + column + "&order_by=" + typeOfSort);

        //             //Change the icon referencing the data in URL.
        //             if (typeOfSort == 'ASC') {
        //                 $('.'+ column +'').addClass("fa-sort-up").removeClass("fa-sort").removeClass("fa-sort-down");
        //                 $('#'+ column +'').addClass("table-th-active");
        //             } else if (typeOfSort == 'DESC') {
        //                 $('.'+ column +'').addClass("fa-sort-down").removeClass("fa-sort").removeClass("fa-sort-up");
        //                 $('#'+ column +'').addClass("table-th-active");
        //             }

        //             //Reset if another column has been clicked.
        //             if (column != sortInURL){
        //                 $('.'+ sortInURL +'').addClass("fa-sort").removeClass("fa-sort-up").removeClass("fa-sort-down");
        //                 $('#'+ sortInURL +'').removeClass("table-th-active");
        //             }
        //         },
        //         error: function (xhr, status, error) {
        //             alert(xhr.responseText);
        //         }
        //     });
        // }

        // function ajaxPaginate(column, typeOfSort, sortInURL, page) {
        //     $("#tableAjax").empty();
        //     $(".paginate").empty();
        //     $(".page-info").empty();

        //     $.ajax({
        //         type: "GET",
        //         url: "{{ route('dashboard.index') }}",
        //         dataType: "json",
        //         data: {
        //             column: column,
        //             typeOfSort: typeOfSort,
        //             page: page
        //         },
        //         success: function (json) {

        //             $("#tableAjax").html(json.success);
        //             $(".paginate").append(json.pagi);
        //             $(".page-info").append(json.info);

        //             window.history.pushState("", "Title", "/dashboard?sort_by=" + column + "&order_by=" + typeOfSort + "&page=" + page);

        //             //Change the icon referencing the data in URL.
        //             if (typeOfSort == 'ASC') {
        //                 $('.'+ column +'').addClass("fa-sort-up").removeClass("fa-sort").removeClass("fa-sort-down");
        //                 $('#'+ column +'').addClass("table-th-active");
        //             } else if (typeOfSort == 'DESC') {
        //                 $('.'+ column +'').addClass("fa-sort-down").removeClass("fa-sort").removeClass("fa-sort-up");
        //                 $('#'+ column +'').addClass("table-th-active");
        //             }

        //             //Reset if another column has been clicked.
        //             if (column != sortInURL){
        //                 $('.'+ sortInURL +'').addClass("fa-sort").removeClass("fa-sort-up").removeClass("fa-sort-down");
        //                 $('#'+ sortInURL +'').removeClass("table-th-active");
        //             }
        //         },
        //         error: function (xhr, status, error) {
        //             alert(xhr.responseText);
        //         }
        //     });
        // }

        $(document).ready(function()
        {

            // $(".session-head").click(function(e){

            //     e.preventDefault();
            //     const searchParams = new URLSearchParams(window.location.search);
            //     var sort = $(this).data("sort");
            //     var order = 'DESC';
            //     let sortInURL = '';
            //     let page = 1;
            //     let orderInURL = searchParams.get('order_by');
            //     URL = document.URL;

            //     //Condition to check if Ascending/Descending already been clicked.
            //     if (orderInURL == 'ASC') {
            //         order = 'DESC';
            //     } else if (orderInURL == 'DESC') {
            //         order = 'ASC';
            //     }

            //     sortInURL = searchParams.get('sort_by');

            //     //Reset orderBy when clicked on another column.
            //     if (sort != sortInURL) {
            //         order = 'DESC';
            //     }

            //     //Populate table using Ajax.
            //     ajaxLoad(sort, order, sortInURL);

            // });

            // $('.paginate').delegate('.pagination a','click',function(event){

            //     event.preventDefault();

            //     var pagiurl = $(this).attr('href');

            //     const searchParams = new URLSearchParams(pagiurl);
            //     const searchSort = new URLSearchParams(window.location.search);
            //     var sort = searchSort.get('sort_by');
            //     var order = 'DESC';
            //     let sortInURL = searchSort.get('sort_by');
            //     let pageInURL = searchParams.get('page');
            //     let orderInURL = searchSort.get('order_by');

            //     //Reset orderBy when clicked on another column.
            //     if (sort != sortInURL) {
            //         order = 'DESC';
            //     }

            //     //When there is no sort_by in the URL, will set to default.
            //     if (sortInURL == null) {
            //         sort = 'created_at';
            //         order = 'DESC';
            //     }

            //     //Populate table using Ajax.
            //     ajaxPaginate(sort, order, sortInURL, pageInURL);

            // });

        });

    </script>

@endpush

