<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">

                <x-category-select name="parent_id" label="Parent" :parent-id="$item->parent_id ?? 0" />

                {!! Form::myInput('text', 'name', trans('app.name')) !!}


                @if (isset($item))
                    {!! Form::myInput('text', 'slug','Slug', ['disabled']) !!}
                @endif

                {!! Form::myTextArea('description',trans('app.about')) !!}


		</div>
	</div>
</div>
