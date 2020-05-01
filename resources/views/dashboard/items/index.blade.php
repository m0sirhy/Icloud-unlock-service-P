@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.items')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li class="active">@lang('site.items')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                    <h3 class="box-title" style="margin-bottom: 15px">@lang('site.items') <small></small></h3>

                    <form action="{{ route('dashboard.items.index') }}" method="get">

                        <div class="row">

                           
                            
                            <div class="col-md-4">
                                    <a href="{{ route('dashboard.items.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</a>
                               
                            </div>

                        </div>
                    </form><!-- end of form -->

                </div><!-- end of box header -->

                <div class="box-body">

                    @if ($items->count() > 0)

                        <table class="table table-hover">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>@lang('site.name')</th>
                                <th>@lang('site.description')</th>
                                <th>@lang('site.category')</th>
                                <th>@lang('site.image')</th>
                                <th>@lang('site.price')</th>
                                <th>@lang('site.time')</th>
                                <th>@lang('site.action')</th>
                            </tr>
                            </thead>
                            
                            <tbody>
                            @foreach ($items as $index=>$item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{!! $item->desc !!}</td>
                                    <td>{{ $item->category->name }}</td>
                                    <td><img src="{{ $item->image_path }}" style="width: 100px"  class="img-thumbnail" alt=""></td>
                                    <td>{{ $item->price }}</td>
                                   
                                    <td>{{ $item->time }}</td>
                                    <td>
                                            <a href="{{ route('dashboard.items.edit', $item->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('site.edit')</a>
                                      
                                            <form action="{{ route('dashboard.items.destroy', $item->id) }}" method="post" style="display: inline-block">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> @lang('site.delete')</button>
                                            </form><!-- end of form -->
                                       
                                    </td>
                                </tr>
                            
                            @endforeach
                            </tbody>

                        </table><!-- end of table -->
                        
                        {{ $items->appends(request()->query())->links() }}
                        
                    @else
                        
                        <h2>@lang('site.no_data_found')</h2>
                        
                    @endif

                </div><!-- end of box body -->


            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection
