@extends('layouts.dashboard.app')
@section('content')
    <body style="background: url('dashboard/images/main.png')">

    <!-- quotes.like.request -->
    <form method="post" action="{{route('request_quote.storeFcl')}}" enctype="multipart/form-data">
        <div class="container">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="container RequestPage">
                <header>
                    <h2 class="mt-5 text-white" style="font-size: 30px;">
                        SHIPMENT REQUEST FCL
                    </h2>
                </header>
                <div class="row text-white mt-5">
                     <div class="col-12 borderCustom">
                    <label>About the shipment</label>
                    <form method="post" action="{{route('quotes.like.request')}}"  enctype="multipart/form-data" >
                    @csrf()
                    <input type="hidden" name="type" value="FCL">

                    <div class="row">
                        <div class="col-lg-4 col-md-6 mt-3">
                            <select name="country_loading"  data-target="select[name=port_loading]" value="{{ old('country_loading') }}" style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Product name" class="form-control">
                                <option value="">Place of Loading</option>
                                  @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{$country->title}}</option>
                                  @endforeach
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-3">
                             <select name="country_discharge" value="{{ old('country_discharge') }}" data-target="select[name=port_discharge]" style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Product name" class="form-control">
                                <option value="">Place of Discharge</option>
                                  @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{$country->title}}</option>
                                  @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mt-3">
                            <select name="port_loading" value="{{ old('port_loading') }}" style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Product name" class="form-control">
                                <option value="">Port (optional)</option>
                                @foreach($ports as $port)
                                    <option value="{{$port->id}}">{{$port->title}}</option>
                                  @endforeach

                            </select>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-3">
                            <select name="port_discharge" style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="port_discharge" value="{{ old('port_discharge') }}" class="form-control">
                                <option value="">Port (optional)</option>
                                 @foreach($ports as $port)
                                    <option value="{{$port->id}}">{{$port->title}}</option>
                                  @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                    <div class="col-12 borderCustom">
                        <label>COMMODITY</label>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mt-3">
                                <select name="category_id" value="{{ old('category_id') }}"
                                        style="background-color: #003d72; color:#cccccc; border-color: #003d72;"
                                        type="text"
                                        placeholder="category_id" class="form-control">
                                    <option>Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-3">
                                <select name="product" value="{{ old('product') }}"
                                        style="background-color: #003d72; color:#cccccc; border-color: #003d72;"
                                        type="text"
                                        placeholder="Product name" class="form-control">
                                    <option>Product</option>
                                    @foreach($products as $product)
                                        <option value="{{$product->id}}">{{$product->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12 first-check">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input name="imo" type="checkbox" value="{{ old('imo') }}"
                                           class="custom-control-input"
                                           id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing"
                                           style="font-size: 18px; color: #969292;">Dangerous cargo</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 borderCustom">
                        @php($rnd = \Illuminate\Support\Str::random(32))
                        <label>CONTAINER</label>
                        <div class="AboutContainerSec">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 mt-3">
                                    <select name="container_type[{{$rnd}}]" type="text" placeholder="countainer name"
                                            class="form-control">
                                        <option value="">Container Type</option>
                                        <option value="20D">20D</option>
                                        <option value="40HD">40HD</option>
                                        <option value="20RF">20RF</option>
                                        <option value="40RF">40RF</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 col-md-6 col-xs-10 mt-3 NumberQuantity">
                                    <input name="container_quantity[{{$rnd}}]" type="text" placeholder="Container QTY"
                                           class="form-control">
                                </div>
                                <div class="col-lg-1 col-md-1 col-xs-2 mt-3 no-padding">
                                    <button onclick="Plus(this)" type="button" class="QuntBtn"><i
                                            class="fas fa-plus"></i>
                                    </button>
                                    <button onclick="minum(this)" type="button" class="QuntBtn"><i
                                            class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 mt-3">
                                    <div class="form-control">
                                        <input name="cross_weight[{{$rnd}}]" type="text" placeholder="Gross Weight.."
                                               class="form-control">
                                        <span>CM</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="AddContianerBtn" onclick="AddContianer()"><i class="fas fa-plus-square"></i> ADD
                            ADDITIONAL CONTAINER</p>
                    </div>
                    <div class="col-12 borderCustom">
                        <label>Date</label>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mt-3">
                                <div class="">
                                    <input name="request_date" value="{{ old('request_date') }}" type="date"
                                           placeholder="Volume..." class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if(! isset(auth()->guard('client_web')->user()->id) )
                <div class="row text-white">
                    <div class="col-12  no-padding">
                        <label style="font-size:18px;">About You</label>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mt-3">
                                <input name="name" value="{{ old('name') }}" type="text" placeholder="Name"
                                       class="form-control">
                            </div>
                            <div class="col-lg-4 col-md-6 mt-3">
                                <input name="phone" type="text" value="{{ old('phone') }}" placeholder="Mobile number"
                                       class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 no-padding">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mt-3">
                                <input name="company_name" type="text" placeholder="Company Name"
                                       value="{{ old('company_name') }}" class="form-control">
                            </div>
                            <div class="col-lg-4 col-md-6 mt-3">
                                <input name="email" value="{{ old('email') }}"
                                       style="background-color: #003d72; color:#fff; border-color: #003d72;"
                                       type="email"
                                       placeholder="Email" class="form-control">
                            </div>
                            <div class="col-lg-8 col-md-6 mt-3">
                                <input name="note" value="{{ old('note') }}" type="text" placeholder="Write a Note"
                                       class="form-control">
                            </div>

                             <div class="col-lg-8 col-md-6 mt-3">
                                <div class='file-input'>
                                    <input name="file" type="file" placeholder="Write a file" class="form-control">
                                    <span class='button'>
                                    <img src="{{asset('dashboard/images/uploadic.svg')}} " alt="">
                                    UPLOAD FILE
                                </span>
                                    <span class='label' data-js-label></span>
                                </div>
                            </div>

                            <div class="col-lg-2 offset-md-2 col-md-6 mt-3">
                                <button type="Submit" class="SubmitBtn"> Submit</button>
                            </div>
                @else

                            <div class="col-lg-8 col-md-6 mt-3">
                                <div class='file-input'>
                                    <input name="file" type="file" placeholder="Write a file" class="form-control">
                                    <span class='button'>
                                    <img src="{{asset('dashboard/images/uploadic.svg')}} " alt="">
                                    UPLOAD FILE
                                </span>
                                    <span class='label' data-js-label></span>
                                </div>
                            </div>

                            <div class="col-lg-2 offset-md-2 col-md-6 mt-3">
                                <button type="Submit" class="SubmitBtn"> Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                    <input type="hidden" name="client_id" value="{{auth()->guard('client_web')->user()->id}}">
                @endif


            </div>
        </div>
    </form>
@endsection
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

    function AddContianer() {
        let $rnd = Math.random().toString(36).substring(2);
        $(".AboutContainerSec").append(`
                <div class="row">
                    <div class="col-lg-4 col-md-6 mt-3">
                        <select name="container_type[${$rnd}]" type="text" placeholder="Product name" class="form-control">
                            <option value="">Container Type </option>
                            <option value="20D">20D</option>
                            <option value="40HD">40HD</option>
                            <option value="20RF">20RF</option>
                            <option value="40RF">40RF</option>
                        </select>
                    </div>
                    <div class="col-lg-2 col-md-6 col-xs-10 mt-3 NumberQuantity">
                        <input name="container_quantity[${$rnd}]" type="number" value="1" class="form-control" placeholder="Container QTY" />
                    </div>
                    <div class="col-lg-1 col-md-1 col-xs-2 mt-3 no-padding">
                        <button onclick="Plus(this)" type="button" class="QuntBtn"><i class="fas fa-plus"></i></button>
                        <button onclick="minum(this)" type="button" class="QuntBtn"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mt-3">
                            <div class="form-control">
                                <input name="cross_weight[${$rnd}]" type="text" placeholder="Weight - cargo only (Kg)" />
                                <span>CM</span>
                            </div>
                        </div>
                    </div> `)
    }

    function minum(e) {
        let elm = $('input', e.parentElement.previousElementSibling);
        var quint = $(elm).val();
        quint = parseInt(quint);
        if (!(quint > 0))
            quint = 1;

        if (quint <= 1) {
            return;
        } else {
            quint--;
            $(elm).val(quint);
        }
    }

    function Plus(e) {
        let elm = $('input', e.parentElement.previousElementSibling);
        var quint = $(elm).val();
        quint = parseInt(quint);
        quint++;
        if (!(quint > 0))
            quint = 1;
        $(elm).val(quint);
    }
</script>
<script>
    $('input:radio[name="calculate"]').change(
        function () {
            if (this.checked && this.value == '1') {

            }
        });
</script>

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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    $(document).ready(function(){

        let ports = JSON.parse('{!! $ports->toJson() !!}');
        $('select[name=country_loading],select[name=country_discharge]').change(function () {
            let elm = this;
            let options = '<option value="-1">Port (optional)</option>';
            if (parseInt(elm.value) > 0)
                options += (ports.filter(function (x) {
                    return parseInt(x.country_id) === parseInt(elm.value);
                }).map(function (x) {
                    return `<option value="${x.id}">${x.title}</option>`;
                }).join(''));
            $($(elm).data('target')).html(options);
        }).trigger('change');

        $("#pills-tab li").on("click", function(){
            var dataId = $(this).attr("data-id");

        });
    });
    </script>


<script>
    $('input:radio[name="calculate"]').change(
    function(){
        if (this.checked && this.value == '1') {
           
        }
    });
    </script>

