@foreach ($field->fields as $field)
    @include($field->view(), compact('field'))
@endforeach
