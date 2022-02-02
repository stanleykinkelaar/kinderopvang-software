@switch($width)
    @case(1)
    @php($widthClass="2xl:col-span-1")
    @break

    @case(2)
    @php($widthClass="2xl:col-span-2")
    @break

    @default
    @php($widthClass="2xl:col-span-3")
@endswitch

<div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 {{ $widthClass }}">
    {{ $slot }}
</div>
