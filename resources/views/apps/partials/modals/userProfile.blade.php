<user-profile-view email="{{ auth()->user()->email ?? ''}}" first_name="{{ auth()->user()->first_name ?? ''}}" last_name="{{ auth()->user()->last_name ?? ''}}" job="{{ auth()->user()->job ?? ''}}" mobile="{{ auth()->user()->mobile ?? ''}}" phone="{{ auth()->user()->phone ?? ''}}" user_id="{{ auth()->user()->id ?? ''}}" url="{{ route('apps.user.profile') }}" inline-template>
    <div class="modal fade" id="editUserProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLabel">Editare profil utilizator</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('apps.partials.forms.userProfile')
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" @click="updateProfile">Salvează</button>
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Renunță</button>
                </div>
            </div>
        </div>
    </div>
</user-profile-view>