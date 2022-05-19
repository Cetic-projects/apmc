<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">
            {!! Form::myInput('text', 'name', trans('app.name'),[], isset($item) != null ? $item->name:null) !!}
            {!! Form::myInput('text', 'code', trans('app.code'),[], isset($item) != null ? $item->code:null) !!}
            {!! Form::myInput('text', 'description', trans('app.description'),[], isset($item) != null ? $item->description:null) !!}
		</div>
	</div>
	
</div>
