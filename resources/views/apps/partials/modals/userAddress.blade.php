<address-view counties="{{$counties}}" county="{{auth()->user()->address[0]->village->city->county->id ?? ''}}" city="{{auth()->user()->address[0]->village->city->id ?? ''}}" village="{{auth()->user()->address[0]->village->id ?? ''}}" street="{{ auth()->user()->address[0]->street ?? ''}}" number="{{ auth()->user()->address[0]->number ?? ''}}" bl="{{ auth()->user()->address[0]->bl ?? ''}}" sc="{{ auth()->user()->address[0]->sc ?? ''}}" ap="{{ auth()->user()->address[0]->ap ?? ''}}" postal_code="{{ auth()->user()->address[0]->postal_code ?? ''}}" url="{{route('apps.user.address')}}" owner="user" modal-id="editUserAddress">

</address-view>