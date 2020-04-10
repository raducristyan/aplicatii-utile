<user-password-view user_email="{{ auth()->user()->email ?? ''}}" v-show="modalIsOpen('update-user-password-modal')" @close-modal="closeModal" :modal-is-open="modalIsOpen('update-user-password-modal')" :close-modal-class="closeModalClass" inline-template>
    @component('components.modal', ['modal_id' => 'updateUserPassword', 'closeModal' => 'update-user-password-modal'])
    @slot('title')
    <p>Editare profil utilizator</p>
    @endslot

    @include('apps.partials.forms.userPassword')

    @slot('footer')
    <button type="button" class="bg-green-100 text-green-500 font-medium border-b-2 border-green-500 px-3 py-2 hover:border-green-600 hover:bg-green-500 focus:underline-none focus:shadow-outline hover:text-gray-100 rounded-sm shadow-md mr-4 transition-4" @click="updatePassword">Salvează</button>
    <button type="button" class="bg-red-100 text-red-500 font-medium border-b-2 border-red-500 px-3 py-2 hover:border-red-600 hover:bg-red-500 focus:underline-none focus:shadow-outline hover:text-gray-100 rounded-sm shadow-md mr-0 transition-4" @click="closeModal('update-user-password-modal')">
        Renunță
    </button>
    @endslot
    @endcomponent
</user-password-view>