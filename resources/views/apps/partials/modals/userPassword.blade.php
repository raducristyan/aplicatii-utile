<user-password-view user_email="{{ auth()->user()->email ?? ''}}" old_password="" new_password="" new_password_confirmation="" inline-template>
  <div class="modal fade" id="editUserPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark" id="editUserPasswordLabel">Schimbă parola</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          @include('apps.partials.forms.userPassword')
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success" @click="changePassword">Salvează</button>
          <button type="submit" class="btn btn-secondary" data-dismiss="modal">Renunță</button>
        </div>
      </div>
    </div>
  </div>
</user-password-view>