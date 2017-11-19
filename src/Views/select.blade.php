<div class="form-group">
    <label for="field-{{ $field->id }}">
        {{ $field->label }}
    </label>

    <select class="form-control" id="field-{{ $field->id }}">
        @foreach ($field->options->choices as $choice)
            <option value="{{ $choice->value }}">
                {{ $choice->label }}
            </option>
        @endforeach
    </select>
</div>

