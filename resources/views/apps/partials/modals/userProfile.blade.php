<user-profile-view email="{{ auth()->user()->email ?? ''}}" first_name="{{ auth()->user()->first_name ?? ''}}" last_name="{{ auth()->user()->last_name ?? ''}}" job="{{ auth()->user()->job ?? ''}}" mobile="{{ auth()->user()->mobile ?? ''}}" phone="{{ auth()->user()->phone ?? ''}}" user_id="{{ auth()->user()->id ?? ''}}" url="{{ route('apps.user.profile') }}" v-show="modalIsOpen('edit-user-profile-modal')" @close-modal="closeModal" :modal-is-open="modalIsOpen('edit-user-profile-modal')" inline-template>
    @component('components.modal', ['modal_id' => 'editUserProfile', 'closeModal' => 'edit-user-profile-modal'])
    @slot('title')
    <p>Editare profil utilizator</p>
    @endslot

    @include('apps.partials.forms.userProfile')

    @slot('footer')
    <button type="button" class="bg-green-100 text-green-500 font-medium border-b-2 border-green-500 px-3 py-2 hover:border-green-600 hover:bg-green-500 focus:underline-none focus:shadow-outline hover:text-gray-100 rounded-sm shadow-md mr-4" @click="updateProfile">Salvează</button>
    <button type="button" class="bg-red-100 text-red-500 font-medium border-b-2 border-red-500 px-3 py-2 hover:border-red-600 hover:bg-red-500 focus:underline-none focus:shadow-outline hover:text-gray-100 rounded-sm shadow-md mr-0" @click="closeModal('edit-user-profile-modal')">
        Renunță
    </button>
    @endslot
    @endcomponent
</user-profile-view>