@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper text-white">

     

        <section class="content">

            <div class="row">

                <div class="col-md-8">

                    <div class="box box-primary">

                        <div class="box-header">

                            <h3 class="box-title" style="margin-bottom: 10px">orders</h3>

                          

                        </div><!-- end of box header -->

                        @if ($orders->count() > 0)

                            <div class="box-body table-responsive  text-white">



                                <table class="table table-hover text-white">
                                    <tr>
                                        <th>client_name</th>
                                        <th>price</th>
{{--                                        <th>status</th>--}}
                                        <th>created_at</th>
                                        <th>action</th>
                                    </tr>

                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>{{ $order->client->name }}</td>
                                            <td>{{ number_format($order->total_price, 2) }}</td>
                                            {{--<td>--}}
                                               {{--<button--}}
                                                    {{--data-status="$order->status"--}}
                                                    {{--data-url="{{ route('orders.update_status', $order->id) }}"--}}
                                                    {{--data-method="put"--}}
                                                    {{--data-available-status='["processing", "finished"]'--}}
                                                    {{--class="order-status-btn btn {{ $order->status == 'processing' ? 'btn-warning' : 'btn-success disabled' }} btn-sm"--}}
                                                {{-->--}}
                                                    {{--@lang('site.' . $order->status)--}}
                                                {{--</button>--}}
                                            {{--</td>--}}
                                            <td>{{ $order->created_at->toFormattedDateString() }}</td>
                                            <td>
                                                <button class="btn btn-primary btn-sm order-products"
                                                        data-url="{{ route('orders.products', $order->id) }}"
                                                        data-method="get"
                                                >
                                                    <i class="fa fa-list"></i>
                                                    show
                                                </button>
                                           
                                                  <!--   <a href="{{ route('clients.orders.edit', ['client' => $order->client->id, 'order' => $order->id]) }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> edit</a> -->
                                             

                                                
                                                 <!--    <form action="{{ route('orders.destroy', $order->id) }}" method="post" style="display: inline-block;">
                                                        {{ csrf_field() }}
                                                        {{ method_field('delete') }}
                                                        <button type="submit" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i> delete</button>
                                                    </form> -->

                                             

                                            </td>

                                        </tr>

                                    @endforeach

                                </table><!-- end of table -->

                                {{ $orders->appends(request()->query())->links() }}

                            </div>

                        @else

                            <div class="box-body">
                                <h3>no_records</h3>
                            </div>

                        @endif

                    </div><!-- end of box -->

                </div><!-- end of col -->

                <div class="col-md-4">

                    <div class="box box-primary">

                        <div class="box-header">
                            <h3 class="box-title" style="margin-bottom: 10px">show_products</h3>
                        </div><!-- end of box header -->

                        <div class="box-body">

                            <div style="display: none; flex-direction: column; align-items: center;" id="loading">
                                <div class="loader"></div>
                                <p style="margin-top: 10px">loading</p>
                            </div>

                            <div id="order-product-list">

                            </div><!-- end of order product list -->

                        </div><!-- end of box body -->

                    </div><!-- end of box -->

                </div><!-- end of col -->

            </div><!-- end of row -->

        </section><!-- end of content section -->

    </div><!-- end of content wrapper -->

@endsection
    <script src="{{ asset('js/app.js') }}" defer></script>

<script type="text/javascript" src="https://raw.githubusercontent.com/flouthoc/minAjax.js/master/index.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function () {
    //add product btn
    $('.add-product-btn').on('click', function (e) {
        e.preventDefault();

        var name = $(this).data('name');

        var id = $(this).data('id');

        var price = $(this).data('price');
    



        $(this).removeClass('btn-success').addClass('btn-default disabled');

        var html =
            `<tr>
                <td>${name}</td>
                <td><input type="number" name="products[${id}][quantity]" data-price="${price}" class="form-control input-sm product-quantity" min="1" value="1"></td>
                <td class="product-price">${price}</td>               
                <td><button class="btn btn-danger btn-sm remove-product-btn" data-id="${id}"><span class="fa fa-trash">delete</span></button></td>
            </tr>`;

        $('.order-list').append(html);

        //to calculate total price
        calculateTotal();
    });

    //disabled btn
    $('body').on('click', '.disabled', function(e) {

        e.preventDefault();

    });//end of disabled

    //remove product btn
    $('body').on('click', '.remove-product-btn', function(e) {

        e.preventDefault();
        var id = $(this).data('id');

        $(this).closest('tr').remove();
        $('#product-' + id).removeClass('btn-default disabled').addClass('btn-success');

        //to calculate total price
        calculateTotal();

    });//end of remove product btn

    //change product quantity
    $('body').on('keyup change', '.product-quantity', function() {

        var quantity = Number($(this).val()); //2
        var unitPrice = $(this).data('price'); //150
        console.log(unitPrice);
        $(this).closest('tr').find('.product-price').html(quantity * unitPrice);
        calculateTotal();

    });//end of product quantity change

    //list all order products
    $('.order-products').on('click', function(e) {

        e.preventDefault();

        $('#loading').css('display', 'flex');
        
        var url = $(this).data('url');
        var method = $(this).data('method');
        $.ajax({
            url: url,
            method: method,
            success: function(data) {

                $('#loading').css('display', 'none');
                $('#order-product-list').empty();
                $('#order-product-list').append(data);

            }
        })

    });//end of order products click

    //print order
    $(document).on('click', '.print-btn', function() {

        $('#print-area').printThis();

    });//end of click function

  });//end of document ready

//calculate the total
function calculateTotal() {

    var price = 0;

    $('.order-list .product-price').each(function(index) {
        
        price += parseFloat($(this).html().replace(/,/g, ''));

    });//end of product price

    $('.total-price').html(price);

    //check if price > 0
    if (price > 0) {

        $('#add-order-form-btn').removeClass('disabled')

    } else {

        $('#add-order-form-btn').addClass('disabled')

    }//end of else

}//end of calculate total

</script>