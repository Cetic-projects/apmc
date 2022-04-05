@extends('admin.default')

@section('page-header')
{{trans('app.banner')}} <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'route' => [ ADMIN . '.banners.store' ],
			'files' => true
		])
	!!}

	@include('admin.banners.form')

	<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

	{!! Form::close() !!}

@stop
