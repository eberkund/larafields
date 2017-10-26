<fieldset class="form-group">
    <legend class="col-form-legend">{{ $field->label }}</legend>

    @foreach ($field->options->choices as $choice)
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio"
                       class="form-check-input"
                       name="{{ $field->name }}"
                       value="{{ $choice->value }}">
                {{ $choice->label }}
            </label>
        </div>
    @endforeach
</fieldset>
