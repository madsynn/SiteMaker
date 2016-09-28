<?php
/**
 * Created by PhpStorm.
 * User: Phillip
 * Date: 8/30/2016
 * Time: 2:59 PM
 */
?>
 
@if($similair->count())
<div class="col_full nobottommargin">
    <h4>Similar Products</h4>
    <div id="oc-product" class="owl-carousel product-carousel carousel-widget" data-margin="30" data-pagi="false" data-autoplay="5000" data-items-xxs="1" data-items-sm="2" data-items-md="3" data-items-lg="4">
        @foreach($similair as $product)
        <div class="oc-item">
            <div class="product iproduct clearfix item clickable">
                <div>
                @if($product->thumbnail )
                    <a href="#"><img src="{{ $product->thumbnail }}" alt=" "></a>
                @endif
                @if( $product->thumbnail2)
                    <a href="#"><img src="{{ $product->thumbnail2}}" alt=" "></a>
                @endif
                            
              
                            {!! $product->created_at >= Carbon\Carbon::now()->subweek() ? '<span class="sale-flash">NEW</span>' : '' !!}
                            {!! $product->ispromo ? '<span class="sale-flash">PROMO</span>' : '' !!}

                    <div class="product-overlay">
                        <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                        {{--<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>--}}
                    </div>
                </div>
                <div class="product-desc center">
                    <div class="product-title">
                        <h3><a href="#">{{ $product->name }}</a></h3>
                    </div>
                    {{-- {{ str_limit(htmlspecialchars_decode(strip_tags($product->details)),250,' ...') }} --}}
                    <div class="product-price"> <ins>{{ $product->price }}</ins></div>
                    <div class="product-rating">
                        <i class="icon-star3"></i>
                        <i class="icon-star3"></i>
                        <i class="icon-star3"></i>
                        <i class="icon-star3"></i>
                        <i class="icon-star-half-full"></i>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif