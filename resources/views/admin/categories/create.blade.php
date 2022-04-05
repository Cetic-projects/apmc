@extends('admin.default')

@section('page-header')
{{trans('app.category')}} <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'action' => ['CategoryController@store'],
			'files' => true
		])
	!!}
@include('admin.categories.form')


	<button dusk="button-ad-element" type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

	{!! Form::close() !!}

@stop
