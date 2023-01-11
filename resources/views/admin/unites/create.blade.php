@extends('admin.default')

@section('page-header')
{{trans('app.unites')}} <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'route' => [ ADMIN . '.unites.store' ],
			'files' => true
		])
	!!}

	@include('admin.unites.form')

	<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

	{!! Form::close() !!}

@stop
