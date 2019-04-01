<button type="submit" class="btn @isset($color){{ ' btn-' . $color }}@else btn-primary @endisset
    {{ $right ?? ''}} {{ $col ?? ''}} ">
    {{ $slot }}
</button>
