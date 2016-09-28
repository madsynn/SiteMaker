<hr />
<div class="row">
    <div class="form-group col-md-12">


        <!-- Status Field -->
        <div class="form-group col-sm-3">
            {!! Form::label('status', 'Status:') !!}
            {!! Form::select('status', [ 'online' => 'Online', 'offline' => 'Offline', 'Removed' => 'Removed', 'Archived' => 'Archived', 'Discontinued' => 'Discontinued'], null, ['class' => 'form-control']) !!}
        </div>

        <!-- Manufacturer Field -->
        <div class="form-group col-md-3">
            {!! Form::label('manufacturer', 'Manufacturer:') !!}
            {!! Form::select('manufacturer', ['The Grace Company' => 'The Grace Company'], null, ['class' => 'form-control']) !!}
        </div>

        <!-- Status Field -->
        <div class="form-group col-md-3">
            {!! Form::label('availability', 'Availability:') !!}
            {!! Form::select('status', ['available' => 'Available', 'InStock' => 'InStock',  'OnHold' => 'OnHold', 'OnBackorder' => 'OnBackorder', 'PreOrders' => 'PreOrders', 'PromoActive' => 'PromoActive', 'SoldOut' => 'SoldOut', 'Discontinued' => 'Discontinued'], null, ['class' => 'form-control']) !!}
        </div>

        <!-- Office Status Field -->
        <div class="form-group col-md-3">
            {!! Form::label('office_status', 'InOffice Status:') !!}
            {!! Form::select('office_status', ['Draft' => 'Draft', 'Review' => 'Review', 'inDesign' => 'inDesign', 'inProof' => 'inProof', 'inProcess' => 'inProcess', 'Hidden' => 'Hidden', 'Deleted' => 'Deleted', 'Online' => 'Online', 'Offline' => 'Offline', 'Removed' => 'Removed', 'Archived' => 'Archived'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<hr />





<div class="row">
    <div class="col-md-12">
        <!-- Name Field -->
        <div class="form-group col-sm-8">
            {!! Form::label('name', 'Product Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Is Published Field -->
        <div class="form-group col-sm-2">
            {!! Form::label('is_published', 'Is Published:') !!}
            <label class="checkbox ">
                {!! Form::checkbox('is_published', 1, null,['data-toggle' => 'toggle', 'data-on' => 'Published', 'data-off'=>'NotPublished','data-onstyle' => 'success', 'data-offstyle' => 'danger', 'value'=>Input::old('is_published') ]) !!}
            </label>
        </div>
        <!-- Ispromo Field -->
        <div class="form-group col-sm-2">
            {!! Form::label('ispromo', 'Is On Promotion:') !!}
            <label class="checkbox">
                {!! Form::checkbox('ispromo', 0, null,['data-toggle' => 'toggle', 'data-on' => 'Enabled', 'data-off'=>'Disabled', 'data-onstyle' => 'success', 'data-offstyle' => 'danger', 'value'=>Input::old('ispromo') ]) !!}
            </label>
        </div>

        <!-- Subtitle Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('subtitle', 'Subtitle:') !!}
            {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Category Field -->
        <div class="form-group col-md-2">
            {!! Form::label('category', 'Category:') !!}
            <select class="form-control" name="categories[]" id="categories">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>


    </div>
</div>


<div class="row">
    <div class="col-md-12">

        <div class="col-md-8">
            <!-- Description Field -->
            <div class="form-group">
                {!! Form::label('details', 'Short Details:') !!}
                {!! Form::textarea('details', null, ['class' => 'form-control summernote' ]) !!}
            </div>


        </div>
        <div class="col-md-4">



          @include('backend.ecom.products.partials.productfeatures')

        </div>

    </div>
</div>


<div class="row">
    <div class="col-md-12">




        <div class="form-group col-sm-12 col-lg-12">

            {!! Form::label('description', 'Description:') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control summernote' ]) !!}
        </div>


        <!-- Video Url Field -->
        <div class="form-group col-md-8">
            {!! Form::label('video_url', 'Video Url:') !!}
            {!! Form::text('video_url', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Slug Field -->
        <div class="form-group col-md-4">
            {!! Form::label('slug', 'Slug:') !!}
            {!! Form::text('slug', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>













{{-- <div class="col-sm-1"></div> --}}





