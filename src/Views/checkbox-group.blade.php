@foreach ($field->options->choices as $choice)
    <div class="form-check">
        <label class="form-check-label">
            <input type="checkbox"
                   name="fields[{{ $field->name }}][{{ $choice->value }}]"
                   class="form-check-input">
            {{ $choice->label }}
        </label>
    </div>
@endforeach
