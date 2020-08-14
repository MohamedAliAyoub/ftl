@extends('layouts.dashboard.app')
@section('content')
    <!-- Start The "Tender Steps" Page -->
    <section class="tender-step container mt-4 mb-5">
        <header>
            <h3>
                <strong>
                    TENDER REQUEST
                </strong>
            </h3>
        </header>
        <article>
            <!-- Start The Form -->
            <section>
                <form method="post" action="{{url('/step2')}}">
                    @csrf()
                    @if(session()->has('error'))
                        <span style="color: red;">{{session('error')}}</span><br><br>
                    @endif
                    <div class="mt-4">
                        <div class="w-100">
                            <div class="row">
                                <div class="col">
                                    <p class="lead d-inline text-white ml-3" style="font-size: 21px;font-weight: bold;">
                                        from country</p>
                                    <select placeholder="Product name" name="from_country_id"
                                            class="form-control">
                                        <option value="-1">From country id</option>
                                        @foreach($countries as $country)
                                            <option value="{{$country->id}}">{{$country->title}}</option>
                                        @endforeach
                                    </select>
                                    @error('from_country_id')
                                    <span style="color: red;">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-auto add-btn mt-2" id="fromPortAddBtn">
                                    <button type="button" class="new-from-port mt-4">+</button>
                                </div>
                                <div class="col-12"></div>

                                <div class="col-md-4 mt-2 row text-white">
                                    <div class="col">
                                        From port
                                        <select placeholder="port name" name="from_port_id[]"
                                                class="form-control from-port-id">
                                            <option value="-1">From port id</option>
                                        </select>
                                        @error('from_port_id.0')
                                        <span style="color: red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col-auto add-btn">
                                        <button type="button" class="cancel-btn mt-4">X</button>
                                    </div>
                                </div>
                            </div>
                            <!-- form acoutry 1 -->

                            <br>
                            <hr>
                            <br>
                            @php($rnd = \Illuminate\Support\Str::random(32))

                            <div class="row">
                                <div class="col">
                                    <p class="lead d-inline text-white ml-3" style="font-size: 21px;font-weight: bold;">
                                        to country</p>
                                    <select placeholder="Product name" name="to_country_id[{{$rnd}}]"
                                            class="form-control to-country-id" data-rnd="{{$rnd}}">
                                        <option value="-1">to country id</option>
                                        @foreach($countries as $country)
                                            <option value="{{$country->id}}">{{$country->title}}</option>
                                        @endforeach
                                    </select>
                                    {{--@error('from_country_id')
                                    <span style="color: red;">{{$message}}</span>
                                    @enderror--}}
                                </div>
                                <div class="col-auto add-btn mt-2">
                                    <button type="button" class="to-port-add-btn mt-4" data-rnd="{{$rnd}}">+</button>
                                </div>
                                <div class="col-auto add-btn mt-2">
                                    <button type="button" class="cancel-btn mt-4">X</button>
                                </div>

                                <div class="col-12"></div>

                                <div class="col-md-4 mt-2 row text-white">
                                    <div class="col"> to port
                                        <select placeholder="port name" name="to_port_id[{{$rnd}}][]"
                                                class="form-control to-port-id">
                                            <option value="-1">to port id</option>
                                        </select>
                                        {{--@error('to_port_id.0')
                                        <span style="color: red;">{{$message}}</span>
                                        @enderror--}}
                                    </div>
                                    <div class="col-auto add-btn">
                                        <button type="button" class="cancel-btn mt-4">X</button>
                                    </div>
                                </div>
                            </div>


                            <!-- country to 2 -->
                            {{--<section id="contry-region" class="text-white">
                                <section id="contry-region-content">
                                    <div class="row mt-4">
                                        <div class="col-md-4 mt-3">
                                            Destination country id
                                            <select placeholder="Product name" name="to_country_id[0]"
                                                    class="form-control">

                                                <option value="">From country id</option>
                                                @foreach($countries as $country)
                                                    <option value="{{$country->id}}">{{$country->title}}</option>
                                                @endforeach
                                            </select>
                                            @error('to_country_id.0')
                                            <span style="color: red;">{{$message}}</span>
                                            @enderror
                                            <button type="button" class="close-btn"
                                                    onclick="removeSec(this) ;return false;">X
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-2 add-btn">
                                            <button type="button" onclick="countryAdd() ; return false;">+</button>
                                        </div>
                                    </div>

                                    <!-- end country to 2 -->
                                    <!--  country to 2.2 -->

                                    <div class="row mt-2" id="place-charge">
                                        <div class="col-md-4 mt-3" id="place-charge-content">
                                            Destination port id
                                            <select placeholder="Product name" name="to_port_id[0][0]"
                                                    class="form-control">

                                                <option value="">From port id</option>
                                                @foreach($ports as $port)
                                                    <option value="{{$port->id}}">{{$port->title}}</option>
                                                @endforeach
                                            </select>
                                            @error('to_country_id.0.0')
                                            <span style="color: red;">{{$message}}</span>
                                            @enderror
                                            <button class="close-btn" onClick="removeDiv(this)">X</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-2 add-btn">
                                            <button type="button" onclick="PlaceCharge(); return false;">+</button>
                                        </div>
                                    </div>


                                    <!-- end country to 2.2 -->
                                </section>
                            </section>--}}


                            <div class="buttons row mt-4">
                                <button type="button" class="col-auto next-button" id="newCountry">Add Destination
                                    country
                                </button>
                            </div>

                            <div class="row">
                                <div class="form-group col-12 mt-5 mb-5 buttons">
                                    <button class="hvr-float-shadow mb-5 next-button">NEXT</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- End The Form -->
            </section>
        </article>
    </section>
    <!-- End The "Tender Steps" Page -->
@endsection
@push('scripts')
    <script>
        $(function () {
            let makeid = function (length) {
                var result = '';
                var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
                var charactersLength = characters.length;
                for (var i = 0; i < length; i++) {
                    result += characters.charAt(Math.floor(Math.random() * charactersLength));
                }
                return result;
            }

            let ports = JSON.parse('{!! $ports->toJson() !!}');

            $('select[name=from_country_id]').change(function () {
                let elm = this;
                let options = '<option value="-1">From port id</option>';
                if (parseInt(elm.value) > 0)
                    options += (ports.filter(function (x) {
                        return parseInt(x.country_id) === parseInt(elm.value);
                    }).map(function (x) {
                        return `<option value="${x.id}">${x.title}</option>`;
                    }).join(''));
                $('select.from-port-id').html(options);
            });
            $('button.new-from-port').click(function () {
                let $html = $('<div class="col-md-4 mt-2 row text-white"><div class="col">From port <select placeholder="port name" name="from_port_id[]" class="form-control from-port-id"><option value="-1">From port id</option></select></div><div class="col-auto add-btn"><button type="button" class="cancel-btn mt-4">X</button></div></div>');
                let options = '<option value="-1">From port id</option>';
                if (parseInt($('select[name=from_country_id]').val()) > 0)
                    options += (ports.filter(function (x) {
                        return parseInt(x.country_id) === parseInt($('select[name=from_country_id]').val());
                    }).map(function (x) {
                        return `<option value="${x.id}">${x.title}</option>`;
                    }).join(''));
                $('select.from-port-id', $html).html(options);
                $(this.parentElement.parentElement).append($html);
            });

            $(document).on('change', 'select.to-country-id', function () {
                let elm = this;
                let $rnd = $(this).data('rnd');

                let options = '<option value="-1">to port id</option>';
                if (parseInt(elm.value) > 0)
                    options += (ports.filter(function (x) {
                        return parseInt(x.country_id) === parseInt(elm.value);
                    }).map(function (x) {
                        return `<option value="${x.id}">${x.title}</option>`;
                    }).join(''));
                $(`select[name="to_port_id[${$rnd}][]"]`).html(options);
            });
            $(document).on('click', 'button.to-port-add-btn', function () {
                let $rnd = $(this).data('rnd');
                console.log($rnd);
                let $html = $(`<div class="col-md-4 mt-2 row text-white"><div class="col">to port <select placeholder="port name" name="to_port_id[${$rnd}][]" class="form-control to-port-id"></select></div><div class="col-auto add-btn"><button type="button" class="cancel-btn mt-4">X</button></div></div>`);
                let options = '<option value="-1">to port id</option>';
                if (parseInt($(`select[name="to_country_id[${$rnd}]"]`).val()) > 0)
                    options += (ports.filter(function (x) {
                        return parseInt(x.country_id) === parseInt($(`select[name="to_country_id[${$rnd}]"]`).val());
                    }).map(function (x) {
                        return `<option value="${x.id}">${x.title}</option>`;
                    }).join(''));
                $(`select[name="to_port_id[${$rnd}][]"]`, $html).html(options);
                $(this.parentElement.parentElement).append($html);
            });

            $(document).on('click', 'button.cancel-btn', function () {
                this.parentElement.parentElement.remove();
            });

            $('#newCountry').click(function () {
                let rnd = makeid(32);
                let $html = [
                    `<div class="row mt-4">`,
                    `<div class="col">`,
                    `<p class="lead d-inline text-white ml-3" style="font-size: 21px;font-weight: bold;">to country</p>`,
                    `<select placeholder="Product name" name="to_country_id[${rnd}]" class="form-control to-country-id"  data-rnd="${rnd}">`,
                    `<option value="-1">to country id</option>`,
                    @foreach($countries as $country)
                        `<option value="{{$country->id}}">{{$country->title}}</option>`,
                    @endforeach
                        `</select>`,
                    `</div>`,
                    `<div class="col-auto add-btn mt-2">`,
                    `<button type="button" class="to-port-add-btn mt-4" data-rnd="${rnd}">+</button>`,
                    `</div>`,

                    `<div class="col-auto add-btn mt-2">`,
                    `<button type="button" class="cancel-btn mt-4">X</button>`,
                    `</div>`,
                    `<div class="col-12"></div>`,

                    `<div class="col-md-4 mt-2 row text-white">`,
                    `<div class="col"> to port`,
                    `<select placeholder="port name" name="to_port_id[${rnd}][]" class="form-control to-port-id">`,
                    `<option value="-1">to port id</option>`,
                    `</select>`,
                    `</div>`,
                    `<div class="col-auto add-btn">`,
                    `<button type="button" class="cancel-btn mt-4">X</button>`,
                    `</div>`,
                    `</div>`,
                    `</div>`,
                ].join("\r\n");
                $($html).insertBefore(this.parentElement)
            });
        });
    </script>
    <!-- Optional JavaScript -->
@endpush
