@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>@lang('site.products')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.items.index') }}"> @lang('site.products')</a></li>
                <li class="active">@lang('site.add')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">@lang('site.add')</h3>
                </div><!-- end of box header -->
                <div class="box-body">

                    @include('partials._errors')

                    <form action="{{ route('dashboard.items.store') }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('post') }}

                        
                        <div class="form-group">
                            <label>@lang('site.name')</label>
                            <input type="text" name="name"class="form-control" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.description')</label>
                            <input type="text" name="desc"  class="form-control" value="{{ old('desc') }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.categories')</label>
                            <select name="category_id" class="form-control">
                                <option value="">@lang('site.all_categories')</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}, {{ $category->section }}</option>
                                @endforeach
                            </select>
                        </div>
                        

                     

                        <div class="form-group">
                            <label>@lang('site.image')</label>
                            <input type="file" name="image" class="form-control image">
                        </div>

                        <div class="form-group">
                            <img src="{{ asset('uploads/product_images/default.png') }}" style="width: 100px" class="img-thumbnail image-preview" alt="">
                        </div>

                        <div class="form-group">
                            <label>@lang('site.price')</label>
                            <input type="number" name="price" step="0.01" class="form-control" value="{{ old('price') }}">
                        </div>

                      

                        <div class="form-group">
                            <label>المدة بالايام</label>
                            <input type="number" name="time" class="form-control" value="{{ old('time') }}">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
