
    @include('layouts.dashboard.header')

<body style="background: url('dashboard/images/main.png')">

@yield('content')
@if( ! in_array(request()->segment(1) ,['login','register', 'chooseLogin' ]))
    @include('layouts.dashboard.footer')
@endif

<script>
    $(document).ready(function () {
        $("#totalShipmentBtn").click(function () {
            $("#totalShipment").show();
            $("#units").hide();
        });
        $("#unitsBtn").click(function () {
            $("#units").show();
            $("#totalShipment").hide();
        });
    });
</script>
<script>
    $('input:radio[name="calculate"]').change(
        function () {
            if (this.checked && this.value == '1') {

            }
        });
</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="dashboard/js/libs/wow.min.js"></script>
<script src="dashboard/js/main.js"></script>
<script>
    $(function () {
        new WOW().init();
    });
</script>

@push('shopping')
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
            $('body').on('click', '.disabled', function (e) {

                e.preventDefault();

            });//end of disabled

            //remove product btn
            $('body').on('click', '.remove-product-btn', function (e) {

                e.preventDefault();
                var id = $(this).data('id');

                $(this).closest('tr').remove();
                $('#product-' + id).removeClass('btn-default disabled').addClass('btn-success');

                //to calculate total price
                calculateTotal();

            });//end of remove product btn

            //change product quantity
            $('body').on('keyup change', '.product-quantity', function () {

                var quantity = Number($(this).val()); //2
                var unitPrice = $(this).data('price'); //150
                console.log(unitPrice);
                $(this).closest('tr').find('.product-price').html(quantity * unitPrice);
                calculateTotal();

            });//end of product quantity change

            //list all order products
            $('.order-products').on('click', function (e) {

                e.preventDefault();

                $('#loading').css('display', 'flex');

                var url = $(this).data('url');
                var method = $(this).data('method');
                $.ajax({
                    url: url,
                    method: method,
                    success: function (data) {

                        $('#loading').css('display', 'none');
                        $('#order-product-list').empty();
                        $('#order-product-list').append(data);

                    }
                })

            });//end of order products click

            //print order
            $(document).on('click', '.print-btn', function () {

                $('#print-area').printThis();

            });//end of click function

        });//end of document ready

        //calculate the total
        function calculateTotal() {

            var price = 0;

            $('.order-list .product-price').each(function (index) {

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
@endpush
@stack('scripts')
</body>
</html>

