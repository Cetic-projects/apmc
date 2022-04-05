@extends('admin.default')

@section('page-header')
{{trans('app.category')}}  <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($item, [
			'action' => ['CategoryController@update', $item->id],
			'method' => 'put',
			'files' => true
		])
	!!}

	@include('admin.categories.form')

	<button dusk="button-update-element" type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>

	{!! Form::close() !!}

@stop
