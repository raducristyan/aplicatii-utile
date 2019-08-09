<institution-profile-view email="{{ $institution->email ?? ''}}" name="{{ $institution->name ?? ''}}" cif="{{ $institution->cif ?? ''}}" bank="{{ $institution->bank ?? ''}}" iban="{{ $institution->iban ?? ''}}" phone="{{ $institution->phone ?? ''}}" fax="{{ $institution->fax ?? ''}}" institution_id="{{ $institution->id ?? ''}}" url="{{ route('admin.institution.profile') }}" inline-template>
    <div class="modal fade" id="editInstitutionProfile" tabindex="-1" role="dialog" aria-labelledby="institutionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="institutionModalLabel">Editare profil instituție</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('apps.partials.forms.institutionProfile')
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" @click="updateProfile">Salvează</button>
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Renunță</button>
                </div>
            </div>
        </div>
    </div>
</institution-profile-view>