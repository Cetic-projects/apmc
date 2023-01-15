@extends('admin.default')

@section('page-header')
{{trans('app.poles')}} <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'route' => [ ADMIN . '.poles.store' ],
			'files' => true
		])
	!!}

	@include('admin.poles.form')

	<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

	{!! Form::close() !!}

@stop
