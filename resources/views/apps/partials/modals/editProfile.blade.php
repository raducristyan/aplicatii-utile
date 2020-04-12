<edit-profile-view :edit-profile="{{ auth()->user() }}" url="{{ route('apps.user.profile') }}" v-show="modalIsOpen('edit-profile-modal')" @close-modal="closeModal" :modal-is-open="modalIsOpen('edit-profile-modal')" :close-modal-class="closeModalClass" inline-template>
    @component('components.modal', ['modal_id' => 'editProfile', 'closeModal' => 'edit-profile-modal'])
    @slot('title')
    <p>Editare profil</p>
    @endslot

    @include('apps.partials.forms.editProfile')

    @slot('footer')
    <button type="button" class="bg-green-100 text-green-500 font-medium border-b-2 border-green-500 px-3 py-2 hover:border-green-600 hover:bg-green-500 focus:underline-none focus:shadow-outline hover:text-gray-100 rounded-sm shadow-md mr-4 transition-4" @click="updateProfile">Salvează</button>
    <button type="button" class="bg-red-100 text-red-500 font-medium border-b-2 border-red-500 px-3 py-2 hover:border-red-600 hover:bg-red-500 focus:underline-none focus:shadow-outline hover:text-gray-100 rounded-sm shadow-md mr-0 transition-4" @click="closeModal('edit-profile-modal')">
        Renunță
    </button>
    @endslot
    @endcomponent
</edit-profile-view>