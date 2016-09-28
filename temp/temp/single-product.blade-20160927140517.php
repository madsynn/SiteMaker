<?php
/**
 * Created by PhpStorm.
 * User: Phillip
 * Date: 8/30/2016
 * Time: 2:32 PM
 */ ?>
{{--@inject('product', 'App\Models\Product')--}}
{{--@inject('prices', 'App\Models\Price')--}}
<div class="single-product">
    <div class="product">
        @include('frontend.shop.partials.single.image-section')

        {{--@include('frontend.shop.partials.single.left')--}}
        @include('frontend.shop.partials.single.middle')

        {{--@include('frontend.shop.partials.single.share')--}}
    </div>
    {{--@include('frontend.shop.partials.single.right')--}}

    {{--@include('frontend.shop.partials.single.full')--}}

</div>