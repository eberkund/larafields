<div class="form-group">
    <label for="field-{{ $field->id }}">
        {{ $field->label }}
    </label>

    <input type="range"
           id="field-{{ $field->id }}"
           name="fields[{{ $field->name }}]"
           min="{{ $field->options->min }}"
           max="{{ $field->options->max }}"
           class="form-control">
</div>
