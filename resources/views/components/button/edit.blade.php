<div class="flex items-center">
    <a class="flex items-center" href="{{ $url ?? '' }}" text="{{ $text ?? ''}}">
        @include('partials.svg.user-edit-solid', ['class' => 'h-5 m-1 fill-current text-gray-500 hover:text-blue-600 cursor-pointer'])
    </a>
</div>