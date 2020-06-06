<address-view :counties='@json($counties)' county="{{$institution->address[0]->village->city->county->id ?? ''}}" city="{{$institution->address[0]->village->city->id ?? ''}}" village="{{$institution->address[0]->village->id ?? ''}}" :address-data="{{ $institution->address[0] ?? '1'}}" url="{{route('admin.institution.address')}}" owner="institution" modal-id="editInstitutionAddress" v-show="modalIsOpen('edit-institution-address-modal')" @close-modal="closeModal('edit-institution-address-modal')" :modal-is-open="modalIsOpen('edit-institution-address-modal')" :close-modal-class="closeModalClass" inline-template>
    @component('components.modal', ['modal_id' => 'editInstitutionAddress', 'closeModal' => 'edit-institution-address-modal'])
    @slot('title')
    <p>Editare adresă instituție</p>
    @endslot

    @include('apps.partials.forms.address')

    @slot('footer')
    <button type="button" class="bg-green-100 text-green-500 font-medium border-b-2 border-green-500 px-5 py-2 hover:border-green-600 hover:bg-green-500 focus:underline-none focus:shadow-outline hover:text-gray-100 rounded-t shadow-md mr-4 transition-4" @click="updateAddress">Salvează</button>
    <button type="button" class="bg-red-100 text-red-500 font-medium border-b-2 border-red-500 px-5 py-2 hover:border-red-600 hover:bg-red-500 focus:underline-none focus:shadow-outline hover:text-gray-100 rounded-t shadow-md mr-0 transition-4" @click="closeModal('edit-institution-address-modal')">
        Renunță
    </button>
    @endslot
    @endcomponent
</address-view>