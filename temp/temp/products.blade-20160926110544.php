@extends('backend/layout/clip')
@section('pagetitle')
    <div class="row">
        <div class="col-sm-12">
            <!-- start: PAGE TITLE & BREADCRUMB -->
            <ol class="breadcrumb">
                <li><a href="{!! url(getLang() . '/admin') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Product</li>
            </ol>
            <div class="page-header">
                <h1> Products <small> | Control Panel</small> </h1>
            </div>
            <!-- end: PAGE TITLE & BREADCRUMB -->
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="clip-stats"></i>
                    Panel Data
                    <div class="panel-tools">
                        <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                        <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> </a>
                        <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                        <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
                    </div>
                </div>
                <div class="panel-body">
                    @include('flash::message')
                    <div class="space12">
                        <div class="btn-group btn-group-lg">
                            <a class="btn btn-default active" href="javascript:;">
                                Products
                            </a>
                            <a class="btn btn-default hidden-xs" href="{!!  route('admin.product.create') !!}">
                                <i class="fa fa-plus"></i>   Add Product
                            </a>
                            {{--         <a target="_blank" class="btn btn-default" href="">
                            Add Category
                            </a> --}}
                        </div>
                    </div>

                    {{--@if(!Sentinel::guest())--}}
                        {{--@if(Sentinel::inRole('superadmin'))--}}
                            {{--<ul class="nav navbar-nav navbar-right">--}}
                                {{--<li><a href="logout">super admin logout</a></li>--}}
                            {{--</ul>--}}
                        {{--@endif--}}
                    {{--@endif--}}
                    {{--@if(!Sentinel::guest())--}}
                        {{--@if(Sentinel::inRole('admin'))--}}
                            {{--<ul class="nav navbar-nav navbar-right">--}}
                                {{--<li><a href="logout">admin logout</a></li>--}}
                            {{--</ul>--}}
                        {{--@endif--}}
                    {{--@endif--}}


                    <table class="table">
                        <tr id="table-header">
                            <td><a href="{{ url(Request::url().'?sort=id&orderby=') }}{{ Request::get('orderby') == 'asc' ? 'desc' : 'asc'}}"># {!! Request::get('sort') == 'id' ? ( Request::get('orderby') == 'desc' ? '<i class="fa fa-angle-down"></i>' : '<i class="fa fa-angle-up"></i>' ) : '' !!}</a></td>
                            <td><a href="{{ url(Request::url().'?sort=name&orderby=') }}{{ Request::get('orderby') == 'asc' ? 'desc' : 'asc'}}">Name {!! Request::get('sort') == 'name' ? ( Request::get('orderby') == 'desc' ? '<i class="fa fa-angle-down"></i>' : '<i class="fa fa-angle-up"></i>' ) : '' !!}</a></td>
                            <td><a href="{{ url(Request::url().'?sort=status&orderby=') }}{{ Request::get('orderby') == 'asc' ? 'desc' : 'asc'}}">Status {!! Request::get('sort') == 'status' ? ( Request::get('orderby') == 'desc' ? '<i class="fa fa-angle-down"></i>' : '<i class="fa fa-angle-up"></i>' ) : '' !!}</a></td>
                            <td><a href="{{ url(Request::url().'?sort=price&orderby=') }}{{ Request::get('orderby') == 'asc' ? 'desc' : 'asc'}}">Price {!! Request::get('sort') == 'price' ? ( Request::get('orderby') == 'desc' ? '<i class="fa fa-angle-down"></i>' : '<i class="fa fa-angle-up"></i>' ) : '' !!}</a></td>
                            <td><a href="{{ url(Request::url().'?sort=quantity&orderby=') }}{{ Request::get('orderby') == 'asc' ? 'desc' : 'asc'}}">Qty {!! Request::get('sort') == 'quantity' ? ( Request::get('orderby') == 'desc' ? '<i class="fa fa-angle-down"></i>' : '<i class="fa fa-angle-up"></i>' ) : '' !!}</a></td>
                            <td>Categories</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                        @foreach($products as $product)
                            <tr>
                                <td><a href="{{ url('/product/'.$product->id.'-'.Str::slug($product->name).'/show') }}">{{ $product->id }}</a></td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->status }}</td>
                                <td>${{ $product->price }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>
                                    <?php
                                    $categories = [];
                                    foreach ($product->categories as $category) {
                                        $categories[] = $category->name;
                                    }
                                    ?>
                                    {{ count($categories) == 1 ? $categories[0] :  str_limit(implode(' | ', $categories),30,' ...') }}
                                </td>
                                <td><a href="{{ url('/admin/product/'.$product->id.'/edit') }}" class="fa fa-pencil-square-o"></a></td>
                                <td><a href="{{ url('/product/'.$product->id.'/delete') }}" class="fa fa-times"></a></td>
                            </tr>
                        @endforeach
                    </table>
                    {!! $products->appends([
                    'sort' => Request::get('sort'),
                    'orderby' => Request::get('orderby')
                    ])->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('bottomscripts')
    <script>
        $(document).ready(function(){
            $('.sidebar #products').addClass('active-section');
        });
    </script>
@endsection

@section('clipinline')
    TableData.init();
@endsection