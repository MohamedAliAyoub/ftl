@extends('layouts.dashboard.app')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content container ">

        <form method="post" action="/step3" style="margin-top: 10px;">
            @csrf()
            <input type="hidden" name="from_country_id" value="{{$from_country['country']->id}}"/>
               <h4 class="wow fadeInUp" data-wow-duration="2s"  >
                            <strong class="text-center mt-4 text-white">
                                From Country: {{$from_country['country']->title}}
                            </strong>
                </h4> 

            @foreach($from_country['ports'] as $port)
                <input type="hidden" name="from_port_id[]" value="{{$port->id}}"/>
                <span class="wow fadeInUp text-white" data-wow-duration="2s">From port {{$loop->index+1}}: {{$port->title}}</span><br>
            @endforeach

            <br><br>
            @foreach($to_country as $item)
               <h4 class="wow fadeInUp" data-wow-duration="2s"  >

                <span class="wow fadeInUp text-white" data-wow-duration="2s">To Country {{$loop->index+1}}: {{$item['country']->title}}</span>
               </h4><br>
                <input type="hidden" name="to_country_id[{{$loop->index}}]" value="{{$item['country']->id}}"/>
                @foreach($item['ports'] as $port)
                    <input type="hidden" name="to_port_id[{{$loop->parent->index}}][{{$loop->index}}]" value="{{$port->id}}"/>
                    <span class="wow fadeInUp text-white" data-wow-duration="2s">to port {{$loop->index+1}}: {{$port->title}}</span><br>
                  <div class="col-lg-12 mb-3">
                    <div class="box-content">    
                        <table class="table table-borderless text-white">
                            <tr>
                                <th>#</th>
                                <th>الكمية</th>
                                <th>السعر</th>
                                <th>السعر القديم</th>
                            </tr>
                            <tr>
                                <td>20D</td>
                                <td><input type="text" name="to_port_data[{{$loop->parent->index}}][{{$loop->index}}][20D][quantity]" value="{{rand(2, 111)}}" placeholder="20D quantity"  class="form-control"></td>
                                <td><input type="text" name="to_port_data[{{$loop->parent->index}}][{{$loop->index}}][20D][price]" value="{{rand(2, 111)}}" placeholder="20D Price"  class="form-control"></td>
                                <td><input type="text" class="form-control" name="to_port_data[{{$loop->parent->index}}][{{$loop->index}}][20D][old_price]" value="{{rand(2, 111)}}" placeholder="20D Old Price" ></td>
                            </tr>
                            <tr>
                                <td>40HD</td>
                                <td><input type="text" class="form-control" name="to_port_data[{{$loop->parent->index}}][{{$loop->index}}][40HD][quantity]" value="{{rand(2, 111)}}" placeholder="40HD quantity"></td>
                                <td><input type="text" class="form-control"  name="to_port_data[{{$loop->parent->index}}][{{$loop->index}}][40HD][price]" value="{{rand(2, 111)}}" placeholder="40HD Price"></td>
                                <td><input type="text" class="form-control" name="to_port_data[{{$loop->parent->index}}][{{$loop->index}}][40HD][old_price]" value="{{rand(2, 111)}}" placeholder="40HD Old Price"></td>
                            </tr>
                            <tr>
                                <td>20RF</td>
                                <td><input type="text" class="form-control" name="to_port_data[{{$loop->parent->index}}][{{$loop->index}}][20RF][quantity]" value="{{rand(2, 111)}}" placeholder="20RF quantity"></td>
                                <td><input type="text" class="form-control" name="to_port_data[{{$loop->parent->index}}][{{$loop->index}}][20RF][price]" value="{{rand(2, 111)}}" placeholder="20RF Price"></td>
                                <td><input type="text" class="form-control" name="to_port_data[{{$loop->parent->index}}][{{$loop->index}}][20RF][old_price]" value="{{rand(2, 111)}}" placeholder="20RF Old Price"></td>
                            </tr>
                            <tr>
                                <td>40RF</td>
                                <td><input type="text" class="form-control" name="to_port_data[{{$loop->parent->index}}][{{$loop->index}}][40RF][quantity]" value="{{rand(2, 111)}}" placeholder="40RF quantity"></td>
                                <td><input type="text" class="form-control" name="to_port_data[{{$loop->parent->index}}][{{$loop->index}}][40RF][price]" value="{{rand(2, 111)}}" placeholder="40RF Price"></td>
                                <td><input type="text" class="form-control" name="to_port_data[{{$loop->parent->index}}][{{$loop->index}}][40RF][old_price]" value="{{rand(2, 111)}}" placeholder="40RF Old Price"></td>
                            </tr>

                        </table>
                    </div>
                </div>
                    @if(!$loop->last)
                        <hr>
                    @endif
                @endforeach
                <br><br>
            @endforeach
            <br>
                <div class="row">
                    <div class="form-group col-12 mt-5 mb-5 buttons">
                        <button class="hvr-float-shadow mb-5 next-button">Submit</button>
                    </div>
                </div>
        </form>
    </div>
</div>
@endsection

