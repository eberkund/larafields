<div class="form-group">
    <label for="field-{{ $field->id }}">
        {{ $field->label }}
    </label>

    <input type="number"
           id="field-{{ $field->id }}"
           name="fields[{{ $field->name }}]"
           min="{{ $field->options->min }}"
           max="{{ $field->options->max }}"
           step="{{ $field->options->step }}"
           class="form-control">
</div>
