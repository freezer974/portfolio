<div class="card text-white bg-dark mb-3 {{ isset($center) ? $center : '' }}">
    <h4 class="card-header">
        {{ $title }}
    </h4>
    <div class="card-body">
        {{ $slot }}
    </div>
</div>
