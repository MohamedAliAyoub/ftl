@extends('layouts.app')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>clients</h1>

            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('clients.index') }}"> clients</a></li>
                <li class="active">add</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">add</h3>
                </div><!-- end of box header -->
                <div class="box-body">

                    @include('partials._errors')

                    <form action="{{ route('clients.store') }}"  method="post">

                        {{ csrf_field() }}
                        {{ method_field('post') }}
                        
                        <div class="form-group">
                            <label>name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        </div>

                       @for ($i = 0; $i < 2; $i++)
                            <div class="form-group">
                                <label>phone</label>
                                <input type="text" name="phone[]" class="form-control">
                            </div>
                       @endfor

                        <div class="form-group">
                            <label>address</label>
                            <textarea name="address" class="form-control">{{ old('address') }}</textarea>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> add</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
