<institution-profile-view :institution="{{ $institution ?? ''}}" url="{{ route('admin.institution.profile') }}" v-show="modalIsOpen('edit-institution-profile-modal')" @close-modal="closeModal" :modal-is-open="modalIsOpen('edit-institution-profile-modal')" :close-modal-class="closeModalClass" inline-template>
    @component('components.modal', ['modal_id' => 'editInstitutionProfile', 'closeModal' => 'edit-institution-profile-modal'])
    @slot('title')
    <p>Editare profil instituție</p>
    @endslot

    @include('partials.forms.institutionProfile')

    @slot('footer')
    <button type="button" class="bg-green-100 text-green-500 font-medium border-b-2 border-green-500 px-5 py-2 hover:border-green-600 hover:bg-green-500 focus:underline-none focus:shadow-outline hover:text-gray-100 rounded-t shadow-md mr-4 transition duration-500" @click="updateProfile">Salvează</button>
    <button type="button" class="bg-red-100 text-red-500 font-medium border-b-2 border-red-500 px-5 py-2 hover:border-red-600 hover:bg-red-500 focus:underline-none focus:shadow-outline hover:text-gray-100 rounded-t shadow-md mr-0 transition duration-500" @click="closeModal('edit-institution-profile-modal')">
        Renunță
    </button>
    @endslot
    @endcomponent
</institution-profile-view>