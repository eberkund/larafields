<div class="form-check">
    <label class="form-check-label">
        <input type="checkbox"
               id="field-{{ $field->id }}"
               name="fields[{{ $field->name }}]"
               class="form-check-input">
        {{ $field->label }}
    </label>
</div>
