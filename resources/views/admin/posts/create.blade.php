@extends('admin.default')

@section('page-header')
	{{ trans('app.post') }} <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'route' => [ ADMIN . '.posts.store' ],
			'files' => true
		])
	!!}

	@include('admin.posts.form')

	<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

	{!! Form::close() !!}

@stop
