<address-view counties="{{$counties}}" county="{{auth()->user()->address[0]->village->city->county->id ?? ''}}" city="{{auth()->user()->address[0]->village->city->id ?? ''}}" village="{{auth()->user()->address[0]->village->id ?? ''}}" street="{{ auth()->user()->address[0]->street ?? ''}}" number="{{ auth()->user()->address[0]->number ?? ''}}" bl="{{ auth()->user()->address[0]->bl ?? ''}}" sc="{{ auth()->user()->address[0]->sc ?? ''}}" ap="{{ auth()->user()->address[0]->ap ?? ''}}" postal_code="{{ auth()->user()->address[0]->postal_code ?? ''}}" url="{{route('apps.user.address')}}" owner="user" modal-id="editUserAddress" v-show="modalIsOpen('edit-user-address-modal')" @close-modal="closeModal('edit-user-address-modal')" :modal-is-open="modalIsOpen('edit-user-address-modal')" inline-template>
    @component('components.modal', ['modal_id' => 'editUserAddress', 'closeModal' => 'edit-user-address-modal'])
    @slot('title')
    <p>Editare adresă utilizator</p>
    @endslot

    @include('apps.partials.forms.address')

    @slot('footer')
    <button type="button" class="bg-green-100 text-green-500 font-medium border-b-2 border-green-500 px-3 py-2 hover:border-green-600 hover:bg-green-500 focus:underline-none focus:shadow-outline hover:text-gray-100 rounded-sm shadow-md mr-4" @click="updateAddress">Salvează</button>
    <button type="button" class="bg-red-100 text-red-500 font-medium border-b-2 border-red-500 px-3 py-2 hover:border-red-600 hover:bg-red-500 focus:underline-none focus:shadow-outline hover:text-gray-100 rounded-sm shadow-md mr-0" @click="closeModal('edit-user-address-modal')">
        Renunță
    </button>
    @endslot
    @endcomponent
</address-view>