@extends('frontend/layout/shop')

@section('goodrelations')@endsection

@section('seo')@endsection
@section('jsonschema')@endsection
@section('title')@endsection
@section('bodyschema')@endsection

@section('header_styles')
<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="{!! asset('/frontend/include/rs-plugin/css/settings.css') !!}" media="screen" />
<link rel="stylesheet" type="text/css" href="{!! asset('/frontend/include/rs-plugin/css/layers.css') !!}">
<link rel="stylesheet" type="text/css" href="{!! asset('/frontend/include/rs-plugin/css/navigation.css') !!}">

<style>
    .revo-slider-emphasis-text{font-size:58px;font-weight:700;letter-spacing:1px;font-family:'Raleway',sans-serif;padding:15px 20px;border-top:2px solid #FFF;border-bottom:2px solid #FFF;}
    .revo-slider-desc-text{font-size:20px;font-family:'Lato',sans-serif;width:650px;text-align:center;line-height:1.5;}
    .revo-slider-caps-text{font-size:16px;font-weight:400;letter-spacing:3px;font-family:'Raleway',sans-serif;}
    .tp-video-play-button{display:none!important;}
    .tp-caption{white-space:nowrap;}
</style>

@endsection

@section('submenu')@endsection

@section('slider-off')
@include('frontend.shop.partials.layout.slider')
@endsection


@section('intro')@endsection



@section('page-title-off')
<!-- Page Title ============================================= -->
<section id="page-title">
    <div class="container clearfix">
        <h1>Shop</h1>
        <span>Start Buying your Favourite Theme</span>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Shop</li>
        </ol>
    </div>
</section><!-- #page-title end -->
@endsection


@section('sidebar')@endsection

@section('content')
<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <!-- Shop
            ============================================= -->
            <div id="shop" class="shop grid-container clearfix" data-layout="fitRows">
                @foreach($new_products as $product)
                <div class="product clearfix">
                    <div class="product-image">
                        <a href="#"><img src="{{ $product->thumbnail }}" alt="{!! $product->name !!}">
                            {!! $product->created_at >= Carbon\Carbon::now()->subweek() ? '<span class="sale-flash">NEW</span>' : '' !!}
                        </a>
                        <!--<a href="#"><img src="{{ $product->thumbnail2 }}" alt="Checked Short Dress"></a>-->
                        @if($product->sale_price)
                        <div class="sale-flash">50% Off*</div>
                        @endif
                        <div class="product-overlay">
                            <a href="{{ $product->options->count() ? url('/product/'.$product->id.'-'.Str::slug($product->name).'/show') : url('/cart/add/'.$product->id.'/?qty=1') }}" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                          {{--   <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a> --}}
                        </div>
                    </div>
                    <div class="product-desc">
                        <div class="product-title"><h3><a href="{!! url('/product/'. Str::slug($product->name).'/show') !!}">{{ str_limit($product->name,30,' ...') }}</a></h3></div>
                        @if($product->sale_price)
                        <div class="product-price"><del>${!! $product->price !!}</del> <ins>${!! $product->sale_price !!}</ins></div>
                        @else
                        <div class="product-price"> ${!! $product->price !!} </div>
                        @endif
                        @if(!$product->rating)
                        <div class="product-rating">
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star-half-full"></i>
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div><!-- #shop end -->

        </div>

    </div>

</section><!-- #content end -->
@endsection

@section('footer_scripts')@endsection
@section('pp_footer_scripts')


<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
<script type="text/javascript" src="{!! asset('/frontend/include/rs-plugin/js/jquery.themepunch.tools.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('/frontend/include/rs-plugin/js/jquery.themepunch.revolution.min.js') !!}"></script>

<script type="text/javascript" src="{!! asset('/frontend/include/rs-plugin/js/extensions/revolution.extension.video.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('/frontend/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('/frontend/include/rs-plugin/js/extensions/revolution.extension.actions.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('/frontend/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('/frontend/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('/frontend/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('/frontend/include/rs-plugin/js/extensions/revolution.extension.migration.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('/frontend/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js') !!}"></script>

<script type="text/javascript">

var tpj = jQuery;
tpj.noConflict();
tpj(document).ready(function() {

var apiRevoSlider = tpj('.tp-banner').show().revolution(
{
sliderType:"standard",
        jsFileLocation:"{!! asset('/frontend/include/rs-plugin/js/') !!}",
        sliderLayout:"fullwidth",
        dottedOverlay:"none",
        delay:9000,
        navigation: {},
        responsiveLevels:[1200, 992, 768, 480, 320],
        gridwidth:1140,
        gridheight:500,
        lazyType:"none",
        shadow:0,
        spinner:"off",
        autoHeight:"off",
        disableProgressBar:"on",
        hideThumbsOnMobile:"off",
        hideSliderAtLimit:0,
        hideCaptionAtLimit:0,
        hideAllCaptionAtLilmit:0,
        debugMode:false,
        fallbacks: {
        simplifyAll:"off",
                disableFocusListener:false,
        },
        navigation: {
        keyboardNavigation:"off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation:"off",
                onHoverStop:"off",
                touch:{
                touchenabled:"on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                },
                arrows: {
                style: "ares",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '<div class="tp-title-wrap">   <span class="tp-arr-titleholder"> </span> </div>',
                        left: {
                        h_align: "left",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                        },
                        right: {
                        h_align: "right",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                        }
                }
        }
});
apiRevoSlider.bind("revolution.slide.onloaded", function (e) {
SEMICOLON.slider.sliderParallaxDimensions();
});
}); //ready



</script>

@endsection
