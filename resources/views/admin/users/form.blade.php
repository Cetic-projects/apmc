<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">
			{!! Form::myInput('text', 'first_name', 'First_name') !!}

			{!! Form::myInput('text', 'last_name', 'Last_name') !!}
		
			{!! Form::myInput('email', 'email', 'Email') !!}
	
			{!! Form::myInput('password', 'password', 'Password') !!}
	
			{!! Form::myInput('password', 'password_confirmation', 'Password again') !!}

			{!! Form::myInput('text', 'address', 'Address') !!}

			{!! Form::myInput('text', 'phone', 'Phone') !!}

			</div>  
	</div>
	@if (isset($item) && $item->avatar)
		<div class="col-sm-4">
			<div class="bgc-white p-20 bd">
				<img src="{{ $item->avatar }}" alt="">
			</div>
		</div>
	@endif
</div>