@extends('frontend/layout/shop')

@section('goodrelations')@endsection

@section('seo')@endsection

@section('json-ld-OFF')

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "ItemList",
  "url": "{{ url() }}",
  "numberOfItems": "{!! App\Models\Product::count() !!}",
  "itemListElement": [
   @foreach($new_products as $product)
        {
            "@context": "http://schema.org/",
            "@type": "Product",
            "name": "{!! $product->name !!}",
            "image": "{!! url() !!}{!! $product->thumbnail !!}",
            "url": "{!! url(getLang().'/product/'. $product->slug) !!}",
            "description": "{!! $product->meta_description !!}",
            "sku": "{!! $product->sku !!}",
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4",
                "reviewCount": "1,987"
            },
            "offers": {
                "@type": "Offer",
                "priceCurrency": "USD",
                "price": "{!! $product->price !!}",
                "availability": "http://schema.org/InStock"
            }
        },
        @endforeach
        ]
    }
</script>
@endsection

@section('title')@endsection
@section('bodyschema')@endsection



@section('shop-analytics-off')

    {{-- <script type="text/javascript"> --}}
     var orderlayout = 0;
    @foreach($new_products as $product)
        orderlayout++;
        ga('ec:addImpression', {
          'id': '{!! $product->sku !!}',
          'name': '{!! $product->name !!}',
          'category': 'Quilting',
          'brand': 'Grace',
          'variant': 'Normal',
          'list': 'Shop Listing',
          'position': ''+ orderlayout +''
        });
        ga('ec:setAction', 'detail');
        ga('send', 'event', 'catalog', 'impression', {'nonInteraction': true});
    @endforeach
    {{-- </script> --}}

@endsection




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
        <span>Start Buying your Favorite Grace Products</span>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Shop</li>
        </ol>
    </div>
</section><!-- #page-title end -->
@endsection


@section('sidebar')
@endsection

@section('filter')



@endsection

@section('content')
<!-- Content  ============================================= -->

<style>
    /*.product-desc, .product {  border: 1px solid black; }*/
</style>

<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">
{{-- <h4 class="section-name row">New Arrivals</h4> --}}


                    <!-- Product Filter ============================================= -->
                    <ul id="portfolio-filter" class="portfolio-filter clearfix">

                        <li ><a href="#" data-filter="*">Show All</a></li>
                        <li class="activeFilter"><a href="#" data-filter=".pf-new">New Arrivals</a></li>
                        <li><a href="#" data-filter=".pf-qn">Qnique</a></li>
                        <li><a href="#" data-filter=".pf-mq">Machine Quilting</a></li>
                        <li><a href="#" data-filter=".pf-hq">Hand Quilting</a></li>
                        <li><a href="#" data-filter=".pf-hoop">Lap Hoops</a></li>
                        <li><a href="#" data-filter=".pf-acc">Accessories</a></li>

                    </ul><!-- #portfolio-filter end -->

                    <div style="float:right; width:280px;">
                        {{-- <input class="range_23" /> --}}
                    </div>

                    <div class="clear"></div>





            <!-- Shop ============================================= -->
            <div id="shop" class="shop grid-container clearfix" data-layout="fitRows">




                @foreach($new_products as $product)





                        <div class="product clearfix {!! $product->created_at >= Carbon\Carbon::now()->subweek() ? 'pf-new' : '' !!} {{$product->filter_class}}" data-product-id="product-{{$product->id}}">
                            <div class="product-image slide flex-active-slide">
                                {{--<a href="#"><img src="https://placehold.it/800x480/B91106/FFFFFF?text=doh!!" alt="Checked Short Dress"></a>--}}
                                {{--<a href="#"><img src="https://placehold.it/800x480/1A5276/FFFFFF?text=doh!!" alt="Checked Short Dress"></a>--}}
                                @if($product->thumbnail)
                                <a href="#"><img class="img-responsive" src="{{ $product->thumbnail }}" alt="{!! $product->slug !!}"></a>
                                {{-- @else --}}
                                    {{-- <img class="img-responsive" src="https://placehold.it/800x480/B91106/FFFFFF?text=doh!!" alt="image"> --}}
                                @endif

                                {{-- @if($product->thumbnail2) --}}
                                        {{-- <a href="#"><img class="img-responsive" src="{{ $product->thumbnail2 }}" alt="{{ $product->slug }} image 2"></a> --}}
                                {{-- @else --}}
                                    {{-- <img class="img-responsive" src="https://placehold.it/800x480/1A5276/FFFFFF?text=doh!!" alt="image 2"> --}}
                                {{-- @endif --}}

                                {{-- @if($product->thumbnail3) --}}
                                        {{-- <a href="#"><img class="img-responsive" src="{{ $product->thumbnail3 }}" alt="{{ $product->slug }} image 3"></a> --}}
                                {{-- @else --}}
                                    {{-- <img class="img-responsive" src="https://placehold.it/800x480/1A5276/FFFFFF?text=doh!!" alt="image 2"> --}}
                                {{-- @endif --}}

                                {!! $product->created_at >= Carbon\Carbon::now()->subweek() ? '<span class="sale-flash">NEW</span>' : '' !!}
                                {!! $product->ispromo ? '<span class="sale-flash">PROMO</span>' : '' !!}

                                @if($product->promo)
                                <div class="sale-flash">50% Off*</div>
                                @endif

                                <div class="product-overlay">
                                    <a href="{{ $product->options->count() ? url(getLang().'/product/'.$product->id.'-'. Str::slug($product->name) .'/show') : url(getLang().'/cart/add/'.$product->id.'/?qty=1') }}" class="add-to-cart">
                                        <i class="icon-shopping-cart"></i><span> Add to Cart</span>
                                    </a>
                                     {{-- <a href="" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a> --}}
                                </div>
                            </div>

                            {{--@include('frontend.shop.partials.shop.slidegrid')--}}

                             <br>

                            <div class="product-desc">
                                <div class="product-title">
                                    <h3>
                                        <a href="{!! url(getLang().'/product/'. $product->slug .'/') !!}">    {{ str_limit($product->name,30,' ...') }} </a>
                                    </h3>
                                </div>
                                @if($product->promo)
                                    @foreach($product->promos as $promo)
                                        <div class="product-price"><del>${!! $product->price !!}</del> <ins>${!! $promo->price !!}</ins></div>
                                    @endforeach
                                @else
                                <div class="product-price">{!! $product->price !!}</div>
                                @endif

                                {{-- {{ str_limit(htmlspecialchars_decode(strip_tags($product->details)),130,' ...') }} --}}

                                @if($product->rating)
                                <div class="product-rating">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
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

<div class="clear"></div>
<div class="line"></div>


{{--@include('frontend.shop.partials.shop.bestsellers')--}}


@endsection

@section('footer_scripts')@endsection

@section('pp_footer_scripts')
<script type="text/javascript">

 (function($) {
        $('div.product').equalHeights();
        $('div.product-image').equalHeights();
    console.log( "ready!" );
    })(jQuery);



        var  $container = null;

    (function($) {
        // jQuery(window).load(function($){

            $container = $('#shop');

            $container.isotope({ transitionDuration: '0.65s' });

            $('#portfolio-filter a').click(function(){
                $('#portfolio-filter li').removeClass('activeFilter');
                $(this).parent('li').addClass('activeFilter');
                var selector = $(this).attr('data-filter');
                $container.isotope({ filter: selector });
                return false;
            });

            $(window).resize(function() {
                $container.isotope('layout');
            });

        })(jQuery);


</script>

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
