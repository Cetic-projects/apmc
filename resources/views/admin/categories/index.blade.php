@extends('admin.default')

@section('page-header')
{{trans('app.categories')}}  <small>{{ trans('app.manage') }}</small>
@endsection

@section('content')

<div class="mB-20">
    <div class="row mB-40">
        <div class="mB-20">
            <a href="{{ route(ADMIN . '.categories.create') }}" class="btn btn-info">
                {{ trans('app.add_button') }}
            </a>
        </div>

        <div class="col-sm-8">
            {!! Form::open([
                'id' => 'groupedAction',
                'class' => 'form-inline',
                'route' => ADMIN . '.categories.grouped-action'
            ]) !!}
                <button class="btn btn-danger">Delete Selected</button>
            {!! Form::close() !!}
        </div>
    </div>
</div>


<div class="bgc-white bd bdrs-3 p-20 mB-20">
    <div class="table-responsive">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>
                        <input type="checkbox" id="CheckAll">
                    </th>
                    <th>{{trans('app.name')}}</th>
                    <th>{{trans('app.description')}}</th>
                    <th>{{trans('app.type')}}</th>
                    <th>{{trans('app.actions')}}</th>
                </tr>
            </thead>

            <tfoot>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>description</th>
                    <th>{{trans('app.type')}}</th>
                    <th>Actions</th>
                </tr>
            </tfoot>

            <tbody>
            @include('admin.categories._row', ['items' => $items, 'prefix' => ''])
            </tbody>

        </table>
    </div>
</div>

@endsection
