@extends('frontend/layout/layout')

@section('seo')@endsection
@section('jsonschema')@endsection
@section('title')@endsection
@section('bodyschema')@endsection

@section('header_styles')@endsection

@section('scripts')@endsection

@section('ppscripts')
<script type="text/javascript">
    $(document).ready(function () {

        $('#notification').show().delay(4000).fadeOut(700);
    });
</script>
@endsection

@section('page-title')
<!-- Page Title ============================================= -->
        <section id="page-title">
            <div class="container clearfix">
                <h1 itemprop="headline" >Contact Us</h1>
                <span>Contact Us Adn Let Us Know How We Can Help</span>
                @yield('partial/breadcrumbs', Breadcrumbs::render('contact'))
            </div>
        </section><!-- #page-title end -->
@endsection

@section('submenu')
{{-- @include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_contact->roots()]) --}}
@endsection



@section('content')
   <section id="content">

            <div class="content-wrap">

            <div class="container clearfix">

                    <div class="heading-block center">

                         <img src="{!! asset('frontend/images/grace-logo.png') !!}" alt="" class="grace-logo"  itemprop="image" />

                        <h1>Contact Us Anytime</h1>
                        <span>Simply Fill Out The Form Below</span>

                    </div>



    <div class="row">
        <div class="col-sm-8">
            <h4>{!! trans('fully.contact_form') !!}</h4>

            @if(Session::has('notification'))
            <div class="alert alert-success" id="notification">
                {!! Session::get('notification') !!}
            </div>
            @endif
            <div class="status alert alert-success" style="display: none"></div>
            {!! Form::open(array('action' => 'FormPostController@postContact')) !!}
            <div class="row">
                <div class="col-sm-5">

                    <!-- Sender Name Surname -->
                    <div class="control-group {!! $errors->has('sender_name_surname') ? 'has-error' : '' !!}">

                        <div class="form-group">
                            {!! Form::text('sender_name_surname', null, array('class'=>'form-control', 'id' => 'sender_name_surname', 'placeholder'=>trans('fully.name_and_surname'), 'value'=>Input::old('sender_name_surname'))) !!}
                            @if ($errors->first('sender_name_surname'))
                            <span class="help-block">{!! $errors->first('sender_name_surname') !!}</span>
                            @endif
                        </div>
                    </div>

                    <!-- Sender Email -->
                    <div class="control-group {!! $errors->has('sender_email') ? 'has-error' : '' !!}">

                        <div class="form-group">
                            {!! Form::text('sender_email', null, array('class'=>'form-control', 'id' => 'sender_email', 'placeholder'=>trans('fully.email'), 'value'=>Input::old('sender_email'))) !!}
                            @if ($errors->first('sender_email'))
                            <span class="help-block">{!! $errors->first('sender_email') !!}</span>
                            @endif
                        </div>
                    </div>

                    <!-- Sender Phone -->
                    <div class="control-group {!! $errors->has('sender_phone_number') ? 'has-error' : '' !!}">

                        <div class="form-group">
                            {!! Form::text('sender_phone_number', null, array('class'=>'form-control', 'id' => 'sender_phone_number', 'placeholder'=>trans('fully.phone_number'), 'value'=>Input::old('sender_phone_number'))) !!}
                            @if ($errors->first('sender_phone_number'))
                            <span class="help-block">{!! $errors->first('sender_phone_number') !!}</span>
                            @endif
                        </div>
                    </div>

                    <!-- Subject -->
                    <div class="control-group {!! $errors->has('subject') ? 'has-error' : '' !!}">

                        <div class="form-group">
                            {!! Form::text('subject', null, array('class'=>'form-control', 'id' => 'subject', 'placeholder'=>trans('fully.subject'), 'value'=>Input::old('subject'))) !!}
                            @if ($errors->first('subject'))
                            <span class="help-block">{!! $errors->first('subject') !!}</span>
                            @endif
                        </div>
                    </div>

                    {!! Form::submit(trans('fully.button_send'), array('class' => 'btn btn-info')) !!}
                </div>

                <!-- Message -->
                <div class="col-sm-7">
                    <div class="control-group {!! $errors->has('post') ? 'has-error' : '' !!}">

                        <div class="form-group">
                            {!! Form::textarea('message', null, array('class'=>'form-control', 'id' => 'message-content', 'placeholder'=>trans('fully.message'), 'value'=>Input::old('message'), 'rows'=>8)) !!}

                            @if ($errors->first('post'))
                            <span class="help-block">{!! $errors->first('post') !!}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Form actions -->
            </div>
            {!! Form::close() !!}

        </div>
        <!--/.col-sm-8-->
        <div class="col-sm-4">
            <h4 style="margin-bottom:10px;">{!! trans('fully.our_location') !!}</h4>






<div class="" itemscope itemtype="http://schema.org/Corporation http://schema.org/LocalBusiness">
    <meta itemprop="description" content="Grace Frames, manufacturer of fine quality machine and hand quilting frames as well as quilting frame accessories and notions.">
    <div class="widget clearfix">


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
        <!--/.col-sm-4-->
        <div class="col-sm-12">
   {{-- <iframe width="100%" height="215" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src=""></iframe> --}}
        </div>
    </div>
        </div>
            </div>
</section><!--/#blog-->
@endsection