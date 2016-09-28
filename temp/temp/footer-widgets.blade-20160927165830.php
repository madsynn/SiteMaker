<div class="footer-widgets-wrap clearfix">
    <div class="col_two_third">
        <div class="col_one_third" itemscope itemtype="http://schema.org/Corporation http://schema.org/LocalBusiness">
        <meta itemprop="description" content="Grace Frames, manufacturer of fine quality machine and hand quilting frames as well as quilting frame accessories and notions.">
            <div class="widget clearfix">
                <img src="{!! asset('frontend/images/footer-widget-logo.png') !!}" alt="" class="footer-logo"  itemprop="image" />
                <p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Manufacturing Standards.</p>
                <div style="background: url('{!! asset('frontend/images/world-map.png') !!}') no-repeat center center; background-size: 100%;">
                <link itemprop="url" href="http://www.graceframe.com" rel="author"/>
                    <address>
                                         <a itemprop="url" href="http://www.graceframe.com"><strong itemprop="name" >The Grace Company:</strong></a><br>
                                         <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                            <span itemprop="streetAddress" style="display:block;">2225 South 3200 West </span><div>
                                            <div>
                                            <span itemprop="addressLocality" style="display:inline">West Valley City</span>, <span itemprop="addressRegion" style="display:inline">UT</span></div>
                                        <span itemprop="postalCode"style="display:inline">84119</span> <span itemprop="addressCountry"style="display:inline">United States</span>
                    </address>
                    <i class="fa fa-refresh fa-spin"></i> &nbsp;<abbr title="Phone Number"><strong class="indent">Phone:</strong></abbr> +1(800) 264-0644<br>
                    <i class="icon-phone-sign"></i>&nbsp; <abbr title="Fax"><strong class="indent">Fax:</strong></abbr> +1 (800) 264-0644<br>
                    <i class="icon-envelope2"></i>&nbsp; <abbr title="Email Address"><strong class="indent">Email:</strong></abbr> contact@graceframe.com
                </div>
            </div>
        </div>
        <div class="col_one_third">
            <div class="widget widget_links clearfix">
                <h4>Popular</h4>

                {!! $menu_popular->asUl() !!}

            </div>
        </div>




        <div class="col_one_third col_last">
            <div class="widget clearfix">
                <h4>Recent Posts</h4>





                    @foreach($articles as $article)
                    <div class="media">
                        <div class="pull-left">
                            @if($article->path && $article->file_name)
                                <a href="{!! URL::route('dashboard.article.show', array('slug'=>$article->slug)) !!}"><img src="{!! url($article->path . 'thumb_' . $article->file_name) !!}" style="border: 2px solid;" alt=""></a>
                            @else
                                <a href="{!! URL::route('dashboard.article.show', array('slug'=>$article->slug)) !!}"><img src="{!! url('assets/images/blog_s.png') !!}" alt="" style="border: 2px solid;"></a>
                            @endif
                        </div>
                        <div class="media-body">
                            <span class="media-heading"><a href="{!! URL::route('dashboard.article.show', array('slug'=>$article->slug)) !!}">{!! $article->title !!}</a></span>
                            <small class="muted">{!! $article->created_at !!}</small>
                        </div>
                    </div>
                    @endforeach





            </div>
        </div>
    </div>


    <div class="col_one_third col_last">



        <div class="widget clearfix" style="margin-bottom: -20px;">
            <div class="row">
                <div class="col-md-6 bottommargin-sm">
               {{--      <div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
                    <h5 class="nobottommargin">Customers</h5> --}}
                </div>
                <div class="col-md-6 bottommargin-sm">
      {{--               <div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
                    <h5 class="nobottommargin">Clients</h5> --}}
                </div>
            </div>
        </div>
        <div class="widget subscribe-widget clearfix">
            <h5><strong>Subscribe</strong> to Our {!!  trans('fully.newsletter') !!} to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
            <div id="widget-subscribe-form-result" data-notify-type="success" data-notify-msg=""></div>


            {!! Form::open(array('route' => 'frontend.maillist.post', 'id'=>'widget-subscribe-form', 'novalidate'=>'novalidate', 'class' => '')) !!}
                <div class="input-group divcenter">
                    <span class="input-group-addon"><i class="icon-email2"></i></span>
                    <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="{!!  trans('fully.enter_your_email') !!}">
                    <span class="input-group-btn">
                        <button class="btn btn-success" type="submit">{!!  trans('fully.button_save') !!} </button>
                    </span>
                </div>
             {!! Form::close() !!}
            <script type="text/javascript">
             jQuery(window).load(function($){
                 $("#widget-subscribe-form").validate({
                     submitHandler: function(form) {
                         $(form).find('.input-group-addon').find('.icon-email2').removeClass('icon-email2').addClass('icon-line-loader icon-spin');
                         $(form).ajaxSubmit({
                             target: '#widget-subscribe-form-result',
                             success: function() {
                                 $(form).find('.input-group-addon').find('.icon-line-loader').removeClass('icon-line-loader icon-spin').addClass('icon-email2');
                                 $('#widget-subscribe-form').find('.form-control').val('');
                                 $('#widget-subscribe-form-result').attr('data-notify-msg', $('#widget-subscribe-form-result').html()).html('');
                                 SEMICOLON.widget.notifications($('#widget-subscribe-form-result'));
                             }
                         });
                     }
                 });
            });
            </script>
        </div>


        <div class="widget clearfix" style="margin-bottom: -20px;">
            <div class="row">
                <div class="col-md-6 clearfix bottommargin-sm">
                    <a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>
                    <a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
                </div>
                <div class="col-md-6 clearfix">
                    <a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
                        <i class="icon-rss"></i>
                        <i class="icon-rss"></i>
                    </a>
                    <a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
                </div>
            </div>
        </div>
    </div>
</div><!-- .footer-widgets-wrap end -->
