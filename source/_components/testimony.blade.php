<figure class="mb-10" role="group">
    <div>
        {{ $slot }}
    </div>
    <figcaption class="text-center">
        <div class="text-lg font-bold">{{ $name }}</div>
        @if($title)
        <div class="text-lg">{{ $title }}</div>
        @endif
        @if($subtitle)
        <div class="text-lg">{{ $subtitle }}</div>
        @endif
    </figcaption>
</figure>