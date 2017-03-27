<div class="modal fade" id="add-categories" tabindex="-1" role="dialog" aria-labeled-by="#add-category">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="add-category">Adăugare categorie vehicole</h4>
            </div>
            <div class="modal-body">
                {!! Form::open( ['url' => 'api/category', 'method' => 'POST', 'class' => 'form-horizontal'] ) !!}
                @include('apps.vehicles.partials.forms._formAddCategory')
            </div>
            <div class="modal-footer">
                <button type="button" id="renunta" class="btn btn-warning" data-dismiss="modal">Renunță</button>
                <button type="submit" id="salveaza" class="btn btn-primary" :disabled="!category.isValid">Salvează</button>
                {!! Form::close() !!}
            </div>
        </div><!-- /.modalAddCategory-content -->
    </div><!-- /.modalAddCategory-dialog -->
</div><!-- /.modalAddCategory -->
