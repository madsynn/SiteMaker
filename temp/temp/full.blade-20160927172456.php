<?php
/**
 * Created by PhpStorm.
 * User: Phillip
 * Date: 8/30/2016
 * Time: 3:04 PM
 */?>


<div class="col_full nobottommargin">
    <div class="tabs clearfix nobottommargin" id="tab-1">
        <ul class="tab-nav clearfix">
            <li><a href="#tabs-1"><i class="icon-align-justify2"></i><span class="hidden-xs"> Description</span></a>
            </li>
            <li><a href="#tabs-2"><i class="icon-info-sign"></i><span
                            class="hidden-xs"> Additional Information</span></a></li>
            @if($product->reviews)
                <li><a href="#tabs-3"><i class="icon-star3"></i><span class="hidden-xs"> Reviews (2)</span></a></li>
            @endif
        </ul>
        <div class="tab-container">
            <div class="tab-content clearfix" id="tabs-1">
                {!! $product->description !!}
            </div>
            @if(isset($product) && $product->variants->count()>0)
                <br style="clear:both"/>
                <div class="tab-content clearfix" id="tabs-2">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <table class="table table-striped table-bordered">
                            <tbody>
                            @foreach($product->variants as $variant)
                                <tr>
                                    <td>{!! $variant->attribute_name !!}</td>
                                    <td>{!! $variant->product_attribute_value !!}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            @endif
            @if($product->reviews)
                @include('frontend.shop.partials.reviews')
            @endif
        </div>
    </div>
</div>