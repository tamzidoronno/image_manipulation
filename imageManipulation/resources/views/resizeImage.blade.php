@extends('welcome')

@section('content')
@if (count($errors) > 0)
	<div class="alert alert-danger">
		<strong>Whoops!</strong> There were some problems with your input.<br><br>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif


@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
    <strong>{{ $message }}</strong>
</div>
<div class="row" style="max-width: 390px;">
	<div class="col-sm">
		<strong>MDPI</strong>
		<br/>
		<img src="/thumbnail/{{ Session::get('imageName') }}" />
	</div>
	<div class="col-sm">
		<strong>HDPI</strong>
		<br/>
		<img src="/thumbnail/{{ Session::get('imageName') }}" />
	</div>
	</div>
	<div class="row" style="max-width: 390px;">
	<div class="col-sm">
		<strong>XHDPI</strong>
		<br/>
		<img src="/thumbnail/{{ Session::get('imageName') }}" />
	</div>
	<div class="col-sm">
		<strong>XXHDPI</strong>
		<br/>
		<img src="/thumbnail/{{ Session::get('imageName') }}" />
	</div>
	</div>
	<div class="row" style="max-width: 390px;">
	<div class="col-sm">
		<strong>XXXHDPI</strong>
		<br/>
		<img src="/thumbnail/{{ Session::get('imageName') }}" />
	</div>
	<div class="col-sm">
		<strong>Google Play Store</strong>
		<br/>
		<img src="/thumbnail/{{ Session::get('imageName') }}" />
	</div>
	</div>
@endif


{!! Form::open(array('route' => 'resizeImagePost','enctype' => 'multipart/form-data')) !!}
	<div class="row">
		<div class="col-md-12">
			<br/>
			{!! Form::file('image', array('class' => 'image')) !!}
		</div>
		<div class="col-md-12">
			<br/>
			<button type="submit" class="btn btn-deep-orange">Upload Image</button>
		</div>
	</div>
{!! Form::close() !!}
</div>
@endsection