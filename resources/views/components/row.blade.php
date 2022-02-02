@switch($cols)
    @case(2)
    <div class="w-full grid grid-cols-1 xl:grid-cols-2 gap-4 @if($padding) my-4 @endif">
        {{ $slot }}
    </div>
    @break

    @case(3)
    <div class="w-full grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-4 @if($padding) my-4 @endif">
        {{ $slot }}
    </div>
    @break

    @default
    <div class="w-full grid grid-cols-1 gap-4 my-4 @if($padding) my-4 @endif">
        {{ $slot }}
    </div>
@endswitch
