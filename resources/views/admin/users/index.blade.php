<x-admin-layout>

    <x-slot name="header">
        Users <small>{{ trans('app.manage') }}</small>

        <div class="mB-20">
        <a href="{{ route(ADMIN . '.users.create') }}" class="btn btn-info">
            {{ trans('app.add_button') }}
        </a>
    </div>
    </x-slot>

    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <div class="table-responsive">
            <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" id="CheckAll">
                        </th>
                        <th>Name</th>
                        <th>{{ trans('app.role') }}</th>
                        <th>Email</th>
                        <th>Phone number</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tfoot>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>{{ trans('app.role') }}</th>
                        <th>Email</th>
                        <th>Phone number</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>

                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td>
                                @if($item->RolesStr !== App\Enums\UserRoles::SuperAdmin)
                                        <div class="form-check">
                                            <input type="checkbox" form="groupedAction" name="ids[]" value="{{ $item->id }}" class="form-check-input checkBoxClass">
                                        </div>
                                    @else
                                            <i class="fa fa-ban text-danger" aria-hidden="true"></i>
                                @endif
                            </td>
                            <td><a href="{{ route(ADMIN . '.users.edit', $item->id) }}">{{ $item->name }}</a></td>
                            <td>

                                @foreach ($item->RolesStr as $roleName )
                                    <label class="badge badge-success">{{$roleName }}</label>
                                @endforeach


                            </td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->address }}</td>

                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="{{ route(ADMIN . '.users.edit', $item->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-sm"><span class="ti-pencil"></span></a></li>
                                    @if($item->RolesStr !== App\Enums\UserRoles::SuperAdmin)

                                        <li class="list-inline-item">
                                            {!! Form::open([
                                                'class'=>'delete',
                                                'url'  => route(ADMIN . '.users.destroy', $item->id),
                                                'method' => 'DELETE',
                                                ])
                                            !!}

                                                <button class="btn btn-danger btn-sm" title="{{ trans('app.delete_title') }}"><i class="ti-trash"></i></button>

                                            {!! Form::close() !!}
                                        </li>
                                    @endif

                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>


</x-admin-layout>