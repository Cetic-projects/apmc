@extends('admin.default')

@section('page-header')
{{ trans('app.post') }}  <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($item, [
			'route'  => [ ADMIN . '.posts.update', $item->id ],
			'method' => 'put',
			'files'  => true
		])
	!!}

	@include('admin.posts.form')

	<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>

	{!! Form::close() !!}


@stop
