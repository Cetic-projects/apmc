<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">
            {!! Form::myInput('text', 'title',trans('app.title'),[], isset($item) != null ? $item->title:null) !!}
            {!! Form::myTextArea('description', trans('app.about'),[], isset($item) != null ? $item->description:null) !!}
            {!! Form::mySelect('category_id', trans('app.category'),$categories, isset($item) != null ? $item->category_id:null , ['class' => 'form-control select2']) !!}
            {!! Form::myInput('text', 'price', trans('app.price'),[], isset($item) != null ? $item->price:null) !!}
            @if(isset($item))
                {!! Form::myInput('text', 'tags', 'Tags',[],isset($item) != null ? $item->tags:null) !!}
                {!! Form::myInput('text', 'nb_stars', 'nb_stars',[],isset($item) != null ? $item->nb_stars:null) !!}
                {!! Form::myInput('text', 'export_price', trans('app.export_price'),[],isset($item) != null ? $item->export_price:null) !!}
                {!! Form::myInput('text', 'promotional_price', trans('app.promotional_price'),[],isset($item) != null ? $item->promotional_price:null) !!}
                {!! Form::myInput('text', 'video_url',  trans('app.video_url'),[],isset($item) != null ? $item->tags:null) !!}
                {!! Form::myDatePicker('text', 'begin_promotional_date', trans('app.begin_promotional_date'),[],isset($item) != null ? $item->begin_promotional_date :null) !!}
                {!! Form::myDatePicker('text', 'end_promotional_date',  trans('app.end_promotional_date'),[],isset($item) != null ? $item->end_promotional_date :null) !!}
            @endif
			{!! Form::myFile('avatar', trans('app.avatar')) !!}
		</div>
	</div>
	@if (isset($item))
		<div class="col-sm-4">
			<div class="bgc-white p-20 bd">
				<img src="{{$item->getFirstMediaUrl('posts', 'thumb')==null ? App\Enums\Picture::post :$item->getFirstMediaUrl('posts', 'thumb')}}" /  width="320px">
			</div>
		</div>
	@endif
</div>
