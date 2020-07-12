<div>
    <a href="{{ $url ?? '' }}" class="flex items-center bg-{{ $color ?? 'indigo' }}-500 text-gray-200 text-semibold px-4 py-2 cursor-pointer focus:underline-none focus:shadow-outline border-b-2 border-{{ $color }}-700 rounded-md hover:bg-{{ $color ?? 'indigo' }}-700 hover:border-{{ $color }}-800 shadow transition duration-500">
        <span>{{ $text }}</span>
        @include('partials.svg.plus')
    </a>
</div>