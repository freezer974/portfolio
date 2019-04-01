<div class="form-group {{ $class ?? '' }}">
    <label for="{{ $name }}">{{ $title }}</label>
    <textarea class="form-control" id="{{ $name }}" rows="{{ $rows ? $rows : '3' }}" placeholder="{{ $placeholder ? $placeholder : '' }}"></textarea>
    @if ($errors->has($name))
        <div class="invalid-feedback">
            {{ $errors->first($name) }}
        </div>
    @endif
</div>

