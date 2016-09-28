<?php
/**
 * Created by PhpStorm.
 * User: Phillip
 * Date: 8/30/2016
 * Time: 2:39 PM
 */ ?>

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
        <div>Model: <span itemprop="model"><strong>{!! $product->prices->model !!}</strong></span></div>
        <div>SKU: <span itemprop="model"><strong>{!! $product->prices->sku !!}</strong></span></div>
        <div>Product ID: <span itemprop="productID"><strong>{!! $product->id !!}</strong></span></div>
        <div>
            Condition:
            <link itemprop="itemCondition" href="http://schema.org/NewCondition"/>
            New
        </div>
        {{--   <span itemprop="productID" class="sku_wrapper">SKU: <span class="sku"><strong>{!! $product->sku !!}</strong></span></span> --}}
        <span itemprop="productUPC" class="sku_wrapper">UPC: <span
                    class="upc"><strong>{!! $product->upc !!}</strong></span></span>
        {{-- <span class="posted_in">Category: <a href="#" rel="tag">{!! $product->category[]->title !!}</a>.</span>  --}}
        {{--  <span class="tagged_as">Tags:
        <a href="#" rel="tag">Pink</a>,
        <a href="#" rel="tag">Short</a>,
        <a href="#" rel="tag">Dress</a>,
        <a href="#" rel="tag">Printed</a>.
        </span> --}}
        @if($product->rating)
            <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                <span itemprop="ratingValue">rating</span> based on <span
                        itemprop="reviewCount">reviewcount</span> reviews
            </div>
            <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                <link itemprop="itemCondition" href="http://schema.org/NewCondition"/>
                New
            </div>
        @endif
    </div>

</div>
