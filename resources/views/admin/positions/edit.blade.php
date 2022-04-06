@extends('admin.default')

@section('page-header')
{{trans('app.positions')}} <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($Position, [
			'route'  => [ ADMIN . '.positions.update', $Position->id ],
			'method' => 'put',
			'files'  => true
		])
	!!}

	@include('admin.positions.form')

	<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>

	{!! Form::close() !!}



@stop
