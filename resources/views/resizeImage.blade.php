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

@if(isset($success))

<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $success }}</strong>
</div>
<div class="row" style="max-width: 390px;">
    @for($index=0;$index<6;$index++)
    <div class="col-sm">
		<strong>{{ $sizenames[$index] }}</strong>
		<br/>
		<img src="{{ $imageName[$index] }}" />
	</div>
    @endfor
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