<div class="form-group {{ $class ?? '' }}">
    <label for="{{ $name }}">{{ $title }}</label>
    <input id="{{ $name }}" type="{{ $type }}" class="form-control {{ $errors->has($name) ? ' is-invalid' : '' }}" placeholder="{{ $placeholder ?? '' }}" name="{{ $name }}" value="{{ old($name, isset($value) ? $value : '') }}" {{ $required ? 'required' : ''}}>
    @if ($errors->has($name))
        <div class="invalid-feedback">
            {{ $errors->first($name) }}
        </div>
    @endif
</div>
