<div class="flex items-center">
    <form class="flex items-center" method="POST" action="{{ $url ?? '' }}" text="{{ $text ?? ''}}">
        @csrf
        @method('DELETE')
        <button type="submit" class="outline-none" onclick="return confirm(' {{ $ask }}?')">
            @include('partials.svg.user-times-regular', ['class' => 'h-5 m-1 fill-current text-gray-500 hover:text-orange-600 cursor-pointer'])
        </button>
    </form>
</div>