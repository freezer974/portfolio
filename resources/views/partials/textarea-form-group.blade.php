<div class="form-group {{ $class ?? '' }}">
    <label for="{{ $name }}">{{ $title }}</label>
    <textarea class="form-control {{ $errors->has($name) ? ' is-invalid' : '' }}" id="{{ $name }}" rows="{{ $rows ? $rows : '3' }}" placeholder="{{ $placeholder ? $placeholder : '' }}" name="{{ $name }}" min="3" max="1000" >{{ old($name, isset($value) ? $value : '') }}</textarea>
    @if ($errors->has($name))
        <div class="invalid-feedback">
            {{ $errors->first($name) }}
        </div>
    @endif
</div>

