@foreach (session('flash_notification', collect())->toArray() as $message)
@if ($message['overlay'])
@include('vendor.flash.modal', [
'modalClass' => 'flash-modal',
'title' => $message['title'],
'body' => $message['message']
])
@else
<div class="flex
                    d-flex
                    message
                    animated
                    fadeInDown
                    text-center
                    alert
                    alert-{{ $message['level'] }}
                    {{ $message['important'] ? 'alert-important' : '' }}" role="alert">
    <div class="msg">
        {!! $message['message'] !!}
    </div>
    @if ($message['important'])
    <div class="close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    @endif
</div>
@endif
@endforeach

{{ session()->forget('flash_notification') }}