
@extends('layout')
@section('content')

<h1>Are you selling</h1>
<hr>

<form method="Post" action="/flyers" enctype="multipart/form-data">

@include('flyers.form')

</form>

@if ($errors->any())
	<ul class="alert alert-danger">
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>

		@endforeach
	</ul>
@endif

@stop