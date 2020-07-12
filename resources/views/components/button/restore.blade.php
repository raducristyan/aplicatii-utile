<div class="flex items-center">
    <form class="flex items-center" method="POST" action="{{ $url ?? '' }}" text="{{ $text ?? '' }}">
        @csrf
        <input type="hidden" name="_method" value="{{ $method }}">
        <button type="submit" class="outline-none" onclick="return confirm(' {{ $ask }}?')">
            @include('partials.svg.trash-undo-alt-solid', ['class' => 'h-5 mx-1 fill-current text-gray-500 hover:text-indigo-600 cursor-pointer'])
        </button>
    </form>
</div>