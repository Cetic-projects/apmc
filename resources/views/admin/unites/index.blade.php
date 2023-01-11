@extends('admin.default')
@section('page-header')
{{trans('app.unites')}} <small>{{ trans('app.manage') }}</small>
@endsection

@section('content')
<div class="mB-20">
    <div class="row mB-40">
            <div class="mB-20">
                <a href="{{ route(ADMIN . '.unites.create') }}" class="btn btn-info">
                    {{ trans('app.add_button') }}
                </a>
            </div>
            <div class="col-sm-8">
                {!! Form::open([
                    'id' => 'groupedAction',
                    'class' => 'form-inline',
                    'route' => ADMIN . '.unites.grouped-action'
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
                        <th>{{ trans('app.name') }}</th>
                        <th>{{ trans('app.description') }}</th>
                        <th>{{ trans('app.address') }}</th>
                        <th>{{ trans('app.phone') }}</th>
                        <th>{{ trans('app.email') }}</th>


                    </tr>
                </thead>

                <tfoot>
                    <tr>
                        <th>
                        </th>
                        <th>{{ trans('app.name') }}</th>
                        <th>{{ trans('app.description') }}</th>
                        <th>{{ trans('app.address') }}</th>
                        <th>{{ trans('app.phone') }}</th>
                        <th>{{ trans('app.email') }}</th>

                    </tr>
                </tfoot>

                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td>

                                <div class="form-check">
                                    <input type="checkbox" form="groupedAction" name="ids[]" value="{{ $item->id }}" class="form-check-input checkBoxClass">
                                </div>

                            </td>
                            
                            <td>{{ $item->name}}</td>
                            <td >{{ $item->address }}</td>
                            <td>{{ $item->description}}</td>
                            <td>{{ $item->phone}}</td>
                            <td>{{ $item->email}}</td>


                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="{{ route(ADMIN . '.unites.edit', $item->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-sm"><span class="ti-pencil"></span></a>
                                        
                                    </li>
                                    <li class="list-inline-item">
                                        {!! Form::open([
                                            'class'=>'delete',
                                            'url'  => route(ADMIN . '.unites.destroy', $item->id),
                                            'method' => 'DELETE',
                                            ])
                                        !!}
                                        <button class="btn btn-danger btn-sm" title="{{ trans('app.delete_title') }}"><i class="ti-trash"></i></button>
                                        {!! Form::close() !!}
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

@endsection
