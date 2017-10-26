<div class="form-group">
    <label for="field-{{ $field->id }}">
        {{ $field->label }}
    </label>

    <input type="{{ $field->type }}"
           id="field-{{ $field->id }}"
           name="fields[{{ $field->name }}]"
           class="form-control">
</div>
