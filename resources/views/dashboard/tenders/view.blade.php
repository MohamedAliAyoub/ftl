@extends('layouts.dashboard.app')
@section('content')
<body>
<div class="flex-center position-ref full-height">
    <div class="content container text-white ">
        <span>total: {{$Tender->total}}</span><br>
        <span>From Country: {{$Tender->country->title}}</span><br>
        @foreach($Tender->ports as $tenderPort)
            <span>From port {{$loop->index+1}}: {{$tenderPort->port->title}}</span><br>
        @endforeach

        <br><br>
        @foreach($Tender->countries as $tenderDestinationCountry)
            <span>To Country {{$loop->index+1}}: {{$tenderDestinationCountry->country->title}}</span><br>
            @foreach($tenderDestinationCountry->ports as $tenderPort)
                <span>to port {{$loop->index+1}}: {{$tenderPort->port->title}}</span><br>
                
                <table class=" table-borderless text-white">
                    <tr>
                        <th>#</th>
                        <th>الكمية</th>
                        <th>السعر</th>
                        <th>السعر القديم</th>
                    </tr>
                    <tr>
                        <td>20D</td>
                        <td><input type="text"
                                   name="to_port_data[{{$loop->parent->index}}][{{$loop->index}}][20D][quantity]"
                                   value="{{ $tenderPort->getAttribute('20D_quantity') }}" placeholder="20D quantity"class="form-control" >
                        </td>
                        <td><input type="text"
                                   name="to_port_data[{{$loop->parent->index}}][{{$loop->index}}][20D][price]" class="form-control"
                                   value="{{ $tenderPort->getAttribute('20D_price') }}" placeholder="20D Price"></td>
                        <td><input type="text"
                                   name="to_port_data[{{$loop->parent->index}}][{{$loop->index}}][20D][old_price]"
                                   value="{{ $tenderPort->getAttribute('20D_old_price') }}"
                                   placeholder="20D Old Price" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>40HD</td>
                        <td><input type="text"
                                   name="to_port_data[{{$loop->parent->index}}][{{$loop->index}}][40HD][quantity]"
                                   value="{{ $tenderPort->getAttribute('40HD_quantity')  }}"
                                   placeholder="40HD quantity" class="form-control"></td>
                        <td><input type="text"
                                   name="to_port_data[{{$loop->parent->index}}][{{$loop->index}}][40HD][price]"
                                   value="{{ $tenderPort->getAttribute('40HD_price')  }}" placeholder="40HD Price" class="form-control"></td>
                        <td><input type="text"
                                   name="to_port_data[{{$loop->parent->index}}][{{$loop->index}}][40HD][old_price]"
                                   value="{{ $tenderPort->getAttribute('40HD_old_price')  }}"
                                   placeholder="40HD Old Price" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>20RF</td>
                        <td><input type="text"
                                   name="to_port_data[{{$loop->parent->index}}][{{$loop->index}}][20RF][quantity]"
                                   value="{{ $tenderPort->getAttribute('20RF_quantity')  }}"
                                   placeholder="20RF quantity" class="form-control"></td>
                        <td><input type="text"
                                   name="to_port_data[{{$loop->parent->index}}][{{$loop->index}}][20RF][price]"
                                   value="{{ $tenderPort->getAttribute('20RF_price')  }}" placeholder="20RF Price" class="form-control"></td>
                        <td><input type="text"
                                   name="to_port_data[{{$loop->parent->index}}][{{$loop->index}}][20RF][old_price]"
                                   value="{{ $tenderPort->getAttribute('20RF_old_price')  }}"
                                   placeholder="20RF Old Price" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>40RF</td>
                        <td><input type="text"
                                   name="to_port_data[{{$loop->parent->index}}][{{$loop->index}}][40RF][quantity]"
                                   value="{{ $tenderPort->getAttribute('40RF_quantity')  }}"
                                   placeholder="40RF quantity" class="form-control"></td>
                        <td><input type="text"
                                   name="to_port_data[{{$loop->parent->index}}][{{$loop->index}}][40RF][price]"
                                   value="{{ $tenderPort->getAttribute('40RF_price')  }}" placeholder="40RF Price" class="form-control"></td>
                        <td><input type="text"
                                   name="to_port_data[{{$loop->parent->index}}][{{$loop->index}}][40RF][old_price]"
                                   value="{{ $tenderPort->getAttribute('40RF_old_price')  }}"
                                   placeholder="40RF Old Price" class="form-control"></td>
                    </tr>

                </table>
                @if(!$loop->last)
                    <hr>
                @endif
            @endforeach
            <br><br>
        @endforeach
        <br>
    </div>
</div>
@endsection
