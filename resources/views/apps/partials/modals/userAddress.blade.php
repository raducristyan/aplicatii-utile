<div class="modal fade" id="editUserAddress" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="exampleModalLabel">Editează adresa utilizatorului</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @include('apps.partials.forms.userAddress')
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-success">Salvează</button>
    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Renunță</button>
      </div>
    </div>
  </div>
</div>