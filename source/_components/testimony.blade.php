<figure class="mb-10" role="group">
    <div class="@isset($img) grid grid-cols-3 gap-5 @endisset">
        @isset($img)
        <img class="rounded-lg shadow-xl" src="{{ $img ?? '' }}" alt="{{ $alt ?? '' }}">
        @endisset
        <div class="col-span-2">
            <div>
                {{ $slot }}
            </div>
            <figcaption class="text-center">
                <div class="text-lg font-bold">{{ $name }}</div>
                @if($title ?? '')
                <div class="text-lg">{{ $title }}</div>
                @endif
                @if($subtitle ?? '')
                <div class="text-lg leading-5">{{ $subtitle ?? '' }}</div>
                @endif
            </figcaption>
        </div>
    </div>
</figure>