<delete-user-view v-show="modalIsOpen('delete-user-modal')" @open-modal="openModal" @close-modal="closeModal" :modal-is-open="modalIsOpen('delete-user-modal')" :close-modal-class="closeModalClass" :deleted-user="userToDelete" inline-template>
    @component('components.modal', ['modal_id' => 'deleteUser', 'closeModal' => 'delete-user-modal'])
    @slot('title')
    <p>Șterge utilizator</p>
    @endslot

    <p>
        Sigur ștergeți utilizatorul @{{ deletedUser.full_name }}?
    </p>

    @slot('footer')
    <button type="button" class="bg-green-100 text-green-500 font-medium border-b-2 border-green-500 px-3 py-2 hover:border-green-600 hover:bg-green-500 focus:underline-none focus:shadow-outline hover:text-gray-100 rounded-sm shadow-md mr-4 transition-4" @click="confirmDeletion">Confirmă</button>
    <button type="button" class="bg-red-100 text-red-500 font-medium border-b-2 border-red-500 px-3 py-2 hover:border-red-600 hover:bg-red-500 focus:underline-none focus:shadow-outline hover:text-gray-100 rounded-sm shadow-md mr-0 transition-4" @click="closeModal('delete-user-modal')">
        Renunță
    </button>
    @endslot
    @endcomponent
</delete-user-view>