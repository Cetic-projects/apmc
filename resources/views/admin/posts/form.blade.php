<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">
            {!! Form::myInput('text', 'title',trans('app.title'),[], isset($item) != null ? $item->title:null) !!}
            {!! Form::myTextArea('description', trans('app.about'),[], isset($item) != null ? $item->description:null) !!}
            {!! Form::mySelect('category_id', trans('app.category'),$categories, isset($item) != null ? $item->category_id:null , ['class' => 'form-control select2']) !!}
            {!! Form::myInput('number', 'price', trans('app.price'),[], isset($item) != null ? $item->price:null) !!}
            {!! Form::myInput('text', 'tags', 'Tags',[],isset($item) != null ? $item->tags:null) !!}
            {!! Form::myInput('number', 'nb_stars', 'nb_stars',[],isset($item) != null ? $item->nb_stars:null) !!}
            {!! Form::myInput('number', 'export_price', trans('app.export_price'),[],isset($item) != null ? $item->export_price:null) !!}
            {!! Form::myInput('number', 'promotional_price', trans('app.promotional_price'),[],isset($item) != null ? $item->promotional_price:null) !!}
            {!! Form::myInput('text', 'video_url',  trans('app.video_url'),[],isset($item) != null ? $item->video_url:null) !!}
            {!! Form::myInput('datetime-local', 'begin_promotional_date', 'Begin promotional date', ['class' => 'form-control']) !!}
            {!! Form::myInput('datetime-local', 'end_promotional_date', 'End promotional date', ['class' => 'form-control']) !!}
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
