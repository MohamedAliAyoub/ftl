@extends('layouts.app')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>products</h1>

            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> dashboard</a></li>
                <li><a href="{{ route('products.index') }}"> products</a></li>
                <li class="active">add</li>
            </ol>
        </section>
        @include('partials._errors')

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">add</h3>
                </div><!-- end of box header -->
                <div class="box-body">

                    

                    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('post') }}

                        <div class="form-group">
                            <label>categories</label>
                            <select name="sub_category_id" class="form-control">
                                <option value="">categouries</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        

                            <div class="form-group">
                                <label>name</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                            </div>

                            <div class="form-group">
                                <label>description</label>
                                <textarea name="description" class="form-control ckeditor">{{ old('description') }}</textarea>
                            </div>

                       

                        <div class="form-group">
                            <label>image</label>
                            <input type="file" name="image" class="form-control image">
                        </div>

                        <div class="form-group">
                            <img src="{{ asset('uploads/product_images/default.png') }}" style="width: 100px" class="img-thumbnail image-preview" alt="">
                        </div>

                        <div class="form-group">
                            <label>price</label>
                            <input type="number" name="price" step="0.01" class="form-control" value="{{ old('price') }}">
                        </div>

                      

                        <div class="form-group">
                            <label>stock</label>
                            <input type="number" name="stock" class="form-control" value="{{ old('stock') }}">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>add</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
