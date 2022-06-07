<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">

            {!! Form::mySelect('user_id', trans('app.user'), $users, isset($item) != null ? $item->user_id:null , ['class' => 'form-control select2']) !!}

            {!! Form::mySelect('post_id', trans('app.post'), $posts, isset($item) != null ? $item->post_id:null , ['class' => 'form-control select2']) !!}

            {!! Form::myInput('text', 'amount', trans('app.quantity'),[], isset($item) != null ? $item->amount:null) !!}

		</div>
	</div>

</div>
