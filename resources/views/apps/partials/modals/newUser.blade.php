<new-user-view v-show="modalIsOpen('new-user-modal')" url="{{ route('admin.institution.users.add') }}" @close-modal="closeModal" :modal-is-open="modalIsOpen('new-user-modal')" :close-modal-class="closeModalClass" inline-template>
    @component('components.modal', ['modal_id' => 'newUser', 'closeModal' => 'new-user-modal'])
    @slot('title')
    <p>Adăugare utilizator nou</p>
    @endslot

    @include('apps.partials.forms.newUser')

    @slot('footer')
    <button type="button" class="bg-green-100 text-green-500 font-medium border-b-2 border-green-500 px-5 py-2 hover:border-green-600 hover:bg-green-500 focus:underline-none focus:shadow-outline hover:text-gray-100 rounded-t shadow-md mr-4 transition-4" @click="addUser">Salvează</button>
    <button type="button" class="bg-red-100 text-red-500 font-medium border-b-2 border-red-500 px-5 py-2 hover:border-red-600 hover:bg-red-500 focus:underline-none focus:shadow-outline hover:text-gray-100 rounded-t shadow-md mr-0 transition-4" @click="closeModal('new-user-modal')">
        Renunță
    </button>
    @endslot
    @endcomponent
</new-user-view>