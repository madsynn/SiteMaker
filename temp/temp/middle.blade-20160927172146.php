<?php
/**
 * Created by PhpStorm.
 * User: Phillip
 * Date: 8/30/2016
 * Time: 3:04 PM
 */?>
{{--@inject('product', 'App\Models\Product')--}}
{{-- @inject('price', 'App\Models\Price') --}}
{{--@inject('promos', 'App\Models\Promo')--}}
{{--@foreach ($products as $product)--}}
{{--@foreach ($product->promos as $promos)--}}
    {{--@foreach ($product->prices as $price)--}}
{{--@foreach($products as $product)--}}
{{--@foreach($product->prices as $price)--}}
<div class="col_two_fifth product-desc">
{{--@if($product->prices)--}}
        <h1>{!! $product->name !!}</h1>
    {{--@endif--}}
{{--@foreach($product->prices  as $price)--}}
        {{--<h1>cazy anoying</h1>--}}
    {{--{!! $product->sku !!}--}}
        {{--{!! $product->price !!}--}}
        {{--{!! $product->model !!}--}}
    <!-- Product Single - Price ============================================= -->

{{--@endforeach--}}
    {{--@if($product->promos)--}}
        {{--<div class="product-price" itemprop="price">--}}
            {{--<del>$39.99</del>--}}
            {{--<ins>$24.99</ins>--}}
        {{--</div>--}}
    {{--@endif--}}


    <!-- Product Single - Price End -->
        <div class="product-price" itemprop="price">
            <ins> {!! $product->price !!} </ins>
        </div>

{{--     {!! $product->model !!}
    {!! $product->sku !!}
    {!! $product->upc !!}
    {!! $product->slug !!} --}}

    {{--@each('items.single', $items, 'item')--}}
    @if($product->rating)
    <!-- Product Single - Rating ============================================= -->
        <div class="product-rating">
            <i class="icon-star3"></i>
            <i class="icon-star3"></i>
            <i class="icon-star3"></i>
            <i class="icon-star-half-full"></i>
            <i class="icon-star-empty"></i>
        </div>
        <!-- Product Single - Rating End -->
    @endif
    <div class="clear"></div>
    <div class="line"></div>
    <!-- Product Single - Quantity & Cart Button
        ============================================= -->
    <form action="{{ $product->quantity ? url(getLang(). '/cart/add/'.$product->id) : '' }}" class="cart nobottommargin clearfix" method="post" enctype='multipart/form-data'>
        <div class="add-qty quantity clearfix">
        <i class="fa fa-minus" id="minus-qty"></i>
                            <i class="fa fa-plus" id="plus-qty"></i>
            <input type="button" value="-" class="minus">
            <input type="text" step="1" min="1" name="quantity" value="1" title="Qty" class="qty" size="4"/>
            <input type="button" value="+" class="plus">
        </div>
        <input type="submit" class="add-to-cart button nomargin add-cart {{ $product->quantity ? '' : 'out-of-stock' }}" value="{{ $product->quantity ? 'ADD TO CART' : 'OUT OF STOCK' }}">
        {{--<button type="submit" class="add-to-cart button nomargin">Add to cart</button>--}}
   
    </form><!-- Product Single - Quantity & Cart Button End -->
    <div class="clear"></div>
    <div class="line"></div>


    <!-- Product Single - Short Description ============================================= -->
{!! $product->feature_heading !!}

    @if($product->options)
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <ul>
                    @foreach($product->options as $option)
                        <li>
                            {{ $option->name }} :
                            <select name="options[]" class="form-control">
                                @foreach($option->values as $value)
                                    <option value="{{ $value->id }}">{{ $value->value }}</option>
                                @endforeach
                            </select>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif




    @if($product->details)
    {!! $product->details !!}
    @endif
 
    @if($product->features)
        <ul class="iconlist ">
            @foreach($product->features as $feature)
                <li>
                @if($feature->useicon == true)
                <i class="{!! $feature->icon !!}"></i> &nbsp;
                @endif
                {!! $feature->feature_name !!}
                </li>
            @endforeach
        </ul>
    @endif
 

<!-- Product Single - Meta ============================================= -->
{{-- @include('frontend.shop.partials.single.meta') --}}





<div class="panel panel-default product-meta">
    <div class="panel-body" itemprop="brand" itemscope itemtype="http://schema.org/Organization">
        <span itemprop="name">Brand: <strong>Grace </strong></span>
        <div itemprop="manufacturer" itemscope itemtype="http://schema.org/Organization">
            @if($product->manufacturer)
                Manufactured by: <span
                        itemprop="name"><strong>{!! $product->manufacturer !!}</strong></span>
            @else
                Manufactured by: <strong>The Grace Company</strong>
            @endif
        </div>
        <div>Model: <span itemprop="model"><strong>{!! $product->model !!}</strong></span></div>
        <div>SKU: <span itemprop="model"><strong>{!! $product->sku !!}</strong></span></div>
        <div>Product ID: <span itemprop="productID"><strong>{!! $product->id !!}</strong></span></div>
        <div>
            Condition:
            <link itemprop="itemCondition" href="http://schema.org/NewCondition"/>
            New
        </div>
        {{--   <span itemprop="productID" class="sku_wrapper">SKU: <span class="sku"><strong>{!! $product->sku !!}</strong></span></span> --}}
        {{-- <span itemprop="productUPC" class="sku_wrapper">UPC: <span class="upc"><strong>{!! $product->upc !!}</strong></span></span> --}}
        {{-- <span class="posted_in">Category: <a href="#" rel="tag">{!! $product->category[]->title !!}</a>.</span>  --}}
         <span class="tagged_as">Tags:
 
          {{-- @foreach($product->meta_keywords as $keyword) --}}
                <a href=" "><i class="icon-tags"></i> {!! $product->meta_keywords !!}</a>
          {{-- @endforeach --}}

        </span>
      {{--   @if($product->rating)
            <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                <span itemprop="ratingValue">rating</span> based on <span
                        itemprop="reviewCount">reviewcount</span> reviews
            </div>
            <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                <link itemprop="itemCondition" href="http://schema.org/NewCondition"/>
                New
            </div>
        @endif --}}
    </div>

</div>














<!-- Product Single - Meta End -->
</div>
    {{--@endforeach--}}
{{--@endforeach--}}