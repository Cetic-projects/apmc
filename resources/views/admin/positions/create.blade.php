@extends('admin.default')

@section('page-header')
{{trans('app.positions')}} <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'route' => [ ADMIN . '.positions.store' ],
			'files' => true
		])
	!!}

	@include('admin.positions.form')

	<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

	{!! Form::close() !!}

@stop
