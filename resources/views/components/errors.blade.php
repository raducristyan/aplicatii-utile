@if ($errors->has( $field ))
    <span class="form-text text-muted">
        {{ $errors->first($field) }}
    </span>
@endif
