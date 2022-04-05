<div class="form-group">

    <label for="{{ $name }}">{{ $label }}</label>

    <select name="{{ $name }}" id="{{ $name }}" class="form-control select2">

        <option value="">Root</option>

        @foreach ($categories as $category)

            <option value="{{ $category->id }}" {{ $parentId == $category->id ? 'selected' : '' }}>

                {{ str_repeat('-', $category->depth) }} {{ $category->name }}

            </option>

        @endforeach

    </select>

</div>