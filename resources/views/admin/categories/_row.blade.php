@foreach ($items as $item)
    <tr>
        <td>
            <div class="form-check">
                <input type="checkbox" form="groupedAction" name="ids[]" value="{{ $item->id }}" class="form-check-input checkBoxClass">
            </div>
        </td>
        <td>
                <a href="{{ route(ADMIN . '.categories.edit', $item->id) }}">
                    {!! $prefix !!} {{ $item->name }}
                </a>


        </td>

        <td>{{ $item->description }}</td>
        <td>{{ config('variables.categories_type')[$item->type] }}</td>




            <td>
                <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="{{ route(ADMIN . '.categories.edit', $item->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-sm update-{{$item->id}}">
                                <span class="ti-pencil"></span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            {!! Form::open([
                                'class'=>'delete',
                                'url'  => route(ADMIN . '.categories.destroy', $item->id),
                                'method' => 'DELETE',
                                ])
                            !!}

                            <button dusk="delete" class="btn btn-danger btn-sm" title="{{ trans('app.delete_title') }}"><i class="ti-trash"></i></button>

                            {!! Form::close() !!}
                        </li>
                </ul>
            </td>
    </tr>
    @include('admin.categories._row', ['items' => $item->children, 'prefix' => $prefix . '__'])
@endforeach
