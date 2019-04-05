<input id="{{ $name }}" type="hidden" class="form-control {{ $errors->has($name) ? ' is-invalid' : '' }}" name="{{ $name }}" {{ $required ? 'required' : ''}}>
@if ($errors->has($name))
    <div class="invalid-feedback mb-3">
        {{ $errors->first($name) }}
    </div>
@endif
