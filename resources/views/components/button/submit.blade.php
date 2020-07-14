<div class="{{ $class ?? '' }}">
    <button type="submit" form="{{ $for ?? '' }}" class="flex items-center bg-{{ $color ?? 'indigo' }}-500 text-gray-200 text-semibold px-4 py-2 cursor-pointer hover:bg-{{ $color ?? 'indigo' }}-700 focus:underline-none focus:shadow-outline border-{{ $color }}-700 border-b-2 hover:border-{{ $color }}-800 rounded-md shadow transition duration-500">
        <span>{{ $text }}</span>
        @include('partials.svg.plus')
    </button>
</div>