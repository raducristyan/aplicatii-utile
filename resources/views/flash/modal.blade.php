<div id="flash-overlay-modal" class="card fade {{ $modalClass or '' }}">
    <div class="card-block">
        <div class="card-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            <h4 class="card-title">{{ $title }}</h4>
        </div>
    </div>

    <div class="card-block">
        <p class="card-text">{!! $body !!}</p>
    </div>

    <div class="card-block">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</div>