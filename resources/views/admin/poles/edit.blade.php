@extends('admin.default')

@section('page-header')
{{trans('app.poles')}} <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($item, [
			'route'  => [ ADMIN . '.poles.update', $item->id ],
			'method' => 'put',
			'files'  => true
		])
	!!}

	@include('admin.poles.form')

	<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>

	{!! Form::close() !!}



@stop
