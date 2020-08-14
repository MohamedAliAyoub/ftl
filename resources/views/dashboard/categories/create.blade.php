@extends('layouts.app')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>@lang('site.categories')</h1>

            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> dashboard</a></li>
                <li><a href="{{ route('categories.index') }}"> category</a></li>
                <li class="active">add</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">add</h3>
                </div><!-- end of box header -->
                <div class="box-body">

                   

                    <form action="{{ route('categories.store') }}" method="post">

                        {{ csrf_field() }}
                        {{ method_field('post') }}

                            <div class="form-group">
                                <label>name</label>
                                <input type="text" name="name" class="form-control" >
                            </div>
                        

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> add </button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
