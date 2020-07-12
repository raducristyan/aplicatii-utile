<div class="flex flex-col w-full">
    <form method="POST" action="{{ $url ?? '' }}" id="{{ $id ?? '' }}">
        @csrf
        <input type="hidden" name="_method" value="{{ $method ?? 'POST'}}">
        {{ $slot }}
    </form>
</div>