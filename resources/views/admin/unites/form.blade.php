<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">
            {!! Form::myInput('text', 'name', trans('app.name'),[], isset($item) != null ? $item->name:null) !!}
            {!! Form::myInput('text', 'description', trans('app.description'),[], isset($item) != null ? $item->description:null) !!}
			{!! Form::myInput('text', 'address', trans('app.address'),[], isset($item) != null ? $item->address:null) !!}
			{!! Form::myInput('text', 'phone', trans('app.phone'),[], isset($item) != null ? $item->phone:null) !!}
			{!! Form::myInput('text', 'email', trans('app.email'),[], isset($item) != null ? $item->email:null) !!}


		</div>
	</div>
	
</div>
