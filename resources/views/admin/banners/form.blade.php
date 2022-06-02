<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">
            {!! Form::myInput('text', 'name', trans('app.name'),[], isset($item) != null ? $item->name:null) !!}
            {!! Form::myInput('text', 'link', 'URL',[], isset($item) != null ? $item->link:null) !!}
			{!! Form::mySelect('position', trans('app.position'), $positions, isset($item) != null ? $item->position:null , ['class' => 'form-control select2']) !!}
            {!! Form::mySelect('is_active', trans('app.is_active'),config('variables.boolean')) !!}
            {!! Form::myInput('datetime-local', 'start_date', 'Start date', ['class' => 'form-control']) !!}
            {!! Form::myInput('datetime-local', 'end_date', 'End date', ['class' => 'form-control']) !!}
            {!! Form::myFile('image', trans('app.image')) !!}
		</div>
	</div>
	@if (isset($item) && $item->getFirstMediaUrl('banners', 'thumb')!=null)
		<div class="col-sm-4">
			<div class="bgc-white p-20 bd">
				<img src="{{$item->getFirstMediaUrl('banners', 'thumb')}}" /  width="320px">
			</div>
		</div>
	@endif
</div>
