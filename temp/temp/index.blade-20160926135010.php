@extends('frontend/layout/leftside')

@section('htmlschema')
itemscope itemtype="http://schema.org/Blog"
@endsection

@section('seo')

@endsection

@section('jsonschema')

@endsection

@section('title')
Blog Inside Updates and News
@endsection

@section('bodyschema')
@endsection

@section('bodytag')
rows
@endsection

@section('header_styles')
@endsection

@section('scripts')
@endsection

@section('ppscripts')

@endsection

@section('submenu-off')
@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_blog->roots()])
@endsection


@section('slider-off')

<section id="slider" class="slider-parallax swiper_wrapper clearfix">

    <div class="swiper-container swiper-parent">
        <div class="swiper-wrapper">
            <div class="swiper-slide dark" style="background-image: url('{!! asset('/frontend/images/slider/swiper/1.jpg') !!}');">
                <div class="container clearfix">
                    <div class="slider-caption slider-caption-center">
                        <h2 data-caption-animate="fadeInUp">Welcome to The Grace Company</h2>
                        <p data-caption-animate="fadeInUp" data-caption-delay="200">Create just what you need for your Perfect Anytime you choose. Choose from a wide range of Quilting Products &amp; simply put them into your Canvas.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide dark">
                <div class="container clearfix">
                    <div class="slider-caption slider-caption-center">
                        <h2 data-caption-animate="fadeInUp">The Qnique Quilter 14+</h2>
                        <p data-caption-animate="fadeInUp" data-caption-delay="200">Looks beautiful &amp; ultra-sharp. Powerful Options and Layouts with the functionality that is only created by The Grace Company.</p>
                    </div>
                </div>
                <div class="video-wrap">
                    <video poster="{!! asset('/frontend/images/videos/explore.jpg') !!}" preload="auto" loop autoplay muted>
                        <source src='{!! asset('/frontend/images/videos/explore.mp4') !!}' type='video/mp4' />
                        <source src='{!! asset('/frontend/images/videos/explore.webm') !!}' type='video/webm' />
                    </video>
                    <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url('{!! asset('/frontend/images/slider/swiper/3.jpg') !!}'); background-position: center top;">
                <div class="container clearfix">
                    <div class="slider-caption">
                        <h2 data-caption-animate="fadeInUp">Great Performance</h2>
                        <p data-caption-animate="fadeInUp" data-caption-delay="200">You&#39;ll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
        <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
        <div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>
    </div>

</section>

@endsection

@section('intro')@endsection

@section('content')
<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <a class="button button-full button-purple center tright header-stick bottommargin-lg">
            <div class="container clearfix">
                Our Products come with Various Customizations &amp; Options. <strong>Check Them Out</strong> <i class="icon-caret-right" style="top:4px;"></i>
            </div>
        </a>
        <div class="heading-block center">
            <h1>Recent Articles</h1>
            <span>We almost blog regularly about this &amp; that.</span>
        </div>
        <div class="container clearfix">
            <!-- Post Content
            ============================================= -->
	        <div class="postcontent nobottommargin col_last clearfix">
                @foreach($articles as $article)
                <!-- Posts
                ============================================= -->
                <div id="posts" itemscope="" itemtype="http://schema.org/BlogPosting">
                    <div class="entry clearfix">
                        <div class="entry-image">
                            @if($article->path)
                            <a href="{!! url($article->path . $article->file_name) !!}" data-lightbox="image" itemprop="url" >
                            <img class="image_fade" src="{!! url($article->path . $article->file_name) !!}" style="border: 1px solid #bdc3c7;" alt="{!! $article->title !!} image" itemprop="image" />
                            </a>
                            @else

                            <img class="image_fade" src="http://lorempixel.com/800/350/abstract/" style="border: 1px solid #bdc3c7;" alt="{!! $article->title !!} image" itemprop="image" />

                            @endif
                        </div>
                        <div class="entry-title">
                            <a href="{!! URL::route('dashboard.article.show', array('slug' => $article->slug)) !!}" itemprop="url" >
                                <h1 itemprop="name headline">{!! $article->title !!}</h1>
                            </a>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li>
                                <i class="icon-calendar3"></i>
                                {{-- <span datetime="{!! date('F d, Y', strtotime($article->created_at)) !!}" class="time"></span>  --}}
                                </li>
                            <li>
                                <span class="byline"><i class="icon-user"></i>
                                @if(isset($user->profile->google_plus_url)):
                                <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                                    <span itemprop="name">
                                        <a href="{!! $user->profile->google_plus_url !!}" itemprop="url" rel="author">
                                        {!! $user->profile->username !!}
                                        </a>
                                    </span>
                                </span>
                                @else
                                <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                                    <span itemprop="name">
                                        <a href="https://plus.google.com/+TheGraceCompany" itemprop="url" rel="author">
                                        The Grace Company
                                        </a>
                                    </span>
                                </span>
                                @endif
                                </span>
                            </li>
                            {{-- <li><i class="icon-folder-open"></i> {!! $article->category[0]->title !!}   </li> --}}

                        </ul>
                        <div class="entry-content content" itemprop="articleBody">
                            {!! $article->excerpt !!}
                            <br />
                            <br />
                            <a href="{!! URL::route('dashboard.article.show', ['slug' => $article->slug ]) !!}" class="more-link" itemprop="url">Read More</a>
                            <br />
                            <br />
                        </div>
                    </div>
                </div>
                <!-- .posts end -->
                @endforeach
                <!-- Pagination
                    ============================================= -->
                <ul class="pager nomargin">
                    {{-- {!! $articles->render() !!} --}}
                </ul>
            </div>
            <!-- .postcontent end -->
            <!-- Sidebar
            ============================================= -->
            <div class="sidebar nobottommargin clearfix">
            @include('frontend/article/sidebar', array($tags, $categories))
             </div>
            <!-- .sidebar end -->
        </div>
    </div>
</section>
@endsection



@section('footer_scripts')


@endsection

@section('pp_footer_scripts')
@endsection

@section('inlinejs')

@endsection
