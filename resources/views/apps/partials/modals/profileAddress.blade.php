<address-view :counties='@json($counties)' county="{{auth()->user()->address[0]->village->city->county->id ?? ''}}" city="{{auth()->user()->address[0]->village->city->id ?? ''}}" village="{{auth()->user()->address[0]->village->id ?? ''}}" :address-data="{{ auth()->user()->address[0] ?? '1'}}" url="{{route('apps.user.address')}}" owner="user" modal-id="editUserAddress" v-show="modalIsOpen('edit-user-address-modal')" @close-modal="closeModal('edit-user-address-modal')" :modal-is-open="modalIsOpen('edit-user-address-modal')" :close-modal-class="closeModalClass" inline-template>
    @component('components.modal', ['modal_id' => 'editUserAddress', 'closeModal' => 'edit-user-address-modal'])
    @slot('title')
    <p>Editare adresă utilizator</p>
    @endslot

    @include('apps.partials.forms.address')

    @slot('footer')
    <button type="button" class="bg-green-100 text-green-500 font-medium border-b-2 border-green-500 px-5 py-2 hover:border-green-600 hover:bg-green-500 focus:underline-none focus:shadow-outline hover:text-gray-100 rounded-t shadow-md mr-4 transition duration-300" @click="updateAddress">Salvează</button>
    <button type="button" class="bg-red-100 text-red-500 font-medium border-b-2 border-red-500 px-5 py-2 hover:border-red-600 hover:bg-red-500 focus:underline-none focus:shadow-outline hover:text-gray-100 rounded-t shadow-md mr-0 transition duration-300" @click="closeModal('edit-user-address-modal')">
        Renunță
    </button>
    @endslot
    @endcomponent
</address-view>