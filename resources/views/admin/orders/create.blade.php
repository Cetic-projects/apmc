@extends('admin.default')

@section('page-header')
	{{ trans('app.order') }} <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'route' => [ ADMIN . '.orders.store' ],
			'files' => true
		])
	!!}

	@include('admin.orders.form')

	<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

	{!! Form::close() !!}

@stop
