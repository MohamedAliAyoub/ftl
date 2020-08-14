
@extends('layouts.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>category</h1>

            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> dashoard</a></li>
                <li class="active">category</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                    <h3 class="box-title" style="margin-bottom: 15px">category </h3>

                    <form action="{{ route('categories.index') }}" method="get">

                        <div class="row">

                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" placeholder="search" value="{{ request()->search }}">
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> search</button>
                               
                                    <a href="{{ route('categories.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> add</a>
                            
                                  
                        
                            </div>

                        </div>
                    </form><!-- end of form -->

                </div><!-- end of box header -->

                <div class="box-body">


                        <table class="table table-hover">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>name</th>
                                <th>action</th>
                            </tr>
                            </thead>
                            
                            <tbody>
                        @if(count($categories)>0)
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>

                                

                                    <td><a href="{{route('category.sub',$category->id)}}" > {{ $category->name }}</a></td>
                                <td>
                                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> edit</a>
                                    
                                          
                                       
                                            <form action="{{ route('categories.destroy', $category->id) }}" method="post" style="display: inline-block">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> delete</button>
                                            </form><!-- end of form -->
                                    
                                            
                                        
                                    </td>
                                </tr>
                            @endforeach


                @else 
                    <div>no data found</div>
                @endif
                            
                            </tbody>

                        </table><!-- end of table -->


                      {{ $categories->links() }}

                        
                       
                        
                    

                </div><!-- end of box body -->


            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection
