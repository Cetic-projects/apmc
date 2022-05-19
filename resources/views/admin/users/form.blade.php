<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">
			{!! Form::myInput('text', 'first_name', 'First_name') !!}

			{!! Form::myInput('text', 'last_name', 'Last_name') !!}

			{!! Form::myInput('email', 'email', 'Email') !!}

			{!! Form::myInput('password', 'password', 'Password') !!}

			{!! Form::myInput('password', 'password_confirmation', 'Password again') !!}

            {!! Form::mySelect('roles[]', 'Role', Spatie\Permission\Models\Role::pluck('name', 'id'), null, ['class' => 'form-control select2', 'multiple']) !!}

			{!! Form::myInput('text', 'address', 'Address') !!}

			{!! Form::myInput('text', 'phone', 'Phone') !!}

            {!! Form::myFile('image', trans('app.image')) !!}



			</div>
	</div>
    @if (isset($item) && $item->image)
        <div class="col-sm-4">
            <h4>Image</h4>
            <div class="bgc-white p-20 bd">
                <img src="{{ $item->image }}" alt=""><br><br>
            </div>
        </div>

    @endif
</div>
