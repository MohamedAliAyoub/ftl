@extends('layouts.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>categories</h1>

            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('sub_categories.index') }}"> categories</a></li>
                <li class="active">edit</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">edit</h3>
                </div><!-- end of box header -->

                <div class="box-body">

                   

                    <form action="{{ route('sub_categories.update', $sub_category->id) }}" method="post">

                        {{ csrf_field() }}
                        {{ method_field('put') }}

                
                            <div class="form-group">
                                <label>name</label>
                                <input type="text" name="name" class="form-control" value="{{ $sub_category->name }}">
                            </div>
                             <div class="row">
                            <div class="col-md-8  my-3 add-page">
                                <label>Category : </label><br>
                                
                                 <select class="form-control user-inp" name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" 

                                        <?php if($sub_category->id== $category->id)echo 'selected' ?>
                                        >{{$category->name}}</option>
                                @endforeach    
                                </select>
                            </div>
                          </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> edit</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
