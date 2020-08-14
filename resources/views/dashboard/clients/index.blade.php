@extends('layouts.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>clients</h1>

            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> dashboard</a></li>
                <li class="active">clients</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                    <h3 class="box-title" style="margin-bottom: 15px">clients <small>{{ $clients->total() }}</small></h3>

                    <form action="{{ route('clients.index') }}" method="get">

                        <div class="row">

                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" placeholder="search" value="{{ request()->search }}">
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> search</button>
                                
                                    <a href="{{ route('clients.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> add</a>
                                
                                
                            
                            </div>

                        </div>
                    </form><!-- end of form -->

                </div><!-- end of box header -->

                <div class="box-body">

                    @if ($clients->count() > 0)

                        <table class="table table-hover">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>name</th>
                                <th>phone</th>
                                <th>address</th>
                                <th>add_order</th>
                                <th>action</th>
                            </tr>
                            </thead>
                            
                            <tbody>
                            @foreach ($clients as $index=>$client)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ is_array($client->phone) ? implode($client->phone, '-') : $client->phone }}</td>
                                    <td>{{ $client->address }}</td>
                                    <td>
                                        
                                            <a href="{{ route('clients.orders.create', $client->id) }}" class="btn btn-primary btn-sm">add order</a>
                                     
                                    </td>
                                    <td>
                                        
                                            <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> edit</a>
                                    
                                        
                                            <form action="{{ route('clients.destroy', $client->id) }}" method="post" style="display: inline-block">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> delete</button>
                                            </form><!-- end of form -->
                                       
                                    </td>
                                </tr>
                            
                            @endforeach
                            </tbody>

                        </table><!-- end of table -->
                        
                        {{ $clients->appends(request()->query())->links() }}
                        
                    @else
                        
                        <h2>no data found</h2>
                        
                    @endif

                </div><!-- end of box body -->


            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection
