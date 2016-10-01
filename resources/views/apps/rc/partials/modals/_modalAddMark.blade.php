<div class="modal fade" id="add-marks" tabindex="-1" role="dialog" aria-labeled-by="#add-mark">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="add-mark">Adăugare marcă</h4>
            </div>
            <div class="modal-body">
                {!! Form::open( ['url' => 'api/mark', 'method' => 'POST', 'class' => 'form-horizontal'] ) !!}
                @include('apps.rc.partials.forms._formAddMark')
            </div>
            <div class="modal-footer">
                <button type="button" id="renunta" class="btn btn-warning" data-dismiss="modal">Renunță</button>
                <button type="submit" id="salveaza" class="btn btn-primary" :disabled="!mark.isValid">Salvează</button>
                {!! Form::close() !!}
            </div>
        </div><!-- /.modalAddMark-content -->
    </div><!-- /.modalAddMark-dialog -->
</div><!-- /.modalAddMark -->
