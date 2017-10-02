@if($message = session()->get('message'))
    <div id="app-msg" class="d-flex message animated fadeInDown text-center alert alert-{{session()->get('type')?:'info'}}"> 
        <div class="msg">
            @if (session()->get('type') == 'info')
                <i class="fa fa-info-circle"></i> 
            @elseif (session()->get('type') == 'success')
                <i class="fa fa-check-circle"></i> 
            @elseif (session()->get('type') == 'warning')
                <i class="fa fa-exclamation-triangle"></i> 
            @else (session()->get('type') == 'danger')
                <i class="fa fa-close"></i>
            @endif

            @if(session()->get('html'))
                {!! $message !!}
            @else
                {{ $message }}
            @endif
        </div>
        <div class="close">
            @if(session()->get('closable'))
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
            @endif
        </div>
    </div>
@endif