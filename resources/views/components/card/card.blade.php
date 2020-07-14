<div class="flex bg-white border border-gray-100 shadow-md rounded-md {{ $class ?? '' }}">
    {{-- Title --}}
    @if ($title)
    <div class="w-full px-8 border-b border-gray-200">{{ $title }}</div>
    @endif
    {{-- Body --}}
    <div class="w-full px-8">{{ $slot }}</div>
    {{-- Footer --}}
    @if ($footer)
    <div class="w-full px-8 border-t border-gray-200">{{ $footer }}</div>
    @endif
</div>