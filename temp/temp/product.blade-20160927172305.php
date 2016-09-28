@extends('frontend/layout/product')
{{--@inject('product', 'App\Models\Product')--}}
{{--@inject('promos', 'App\Models\Promo')--}}
{{--@inject('prices', 'App\Models\Price')--}}
{{--@inject('options', 'App\Models\Option')--}}
@section('content')
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                @include('frontend.shop.partials.single.single-product')

            </div>
            <div class="clear"></div>
            <div class="line"></div>
            @include('frontend.shop.partials.single.related')

        </div>
        </div>
    </section>
    <!-- #content end -->
@endsection

@section('footer_scripts')
@endsection

@section('pp_footer_scripts')
@endsection

@section('inlinejs')
@endsection