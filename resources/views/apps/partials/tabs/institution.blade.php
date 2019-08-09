<!-- forth tab -->
@admin

<div v-show="activeTab==='institution'" id="institution" class="px-4 pb-6">
    <div class="">
        <h3 class="py-3 border-b border-gray-300 text-gray-700 font-normal">Profil instituție</h3>
        <div class="flex flex-wrap py-3">
            <div class="w-full md:w-4/6">
                <div class="px-4">
                    <div class="">
                        <span class="font-light">Denumire:</span>
                        <span class="text-gray-700 font-normal" name="institution" class="">{{ $institution->name ?? ''}}</span>
                    </div>
                    <div class="">
                        <span class="font-light">CIF:</span>
                        <span class="text-gray-700 font-normal" name="cif">{{ $institution->cif ?? ''}}</span>
                    </div>
                    <div class="">
                        <span class="font-light">Email:</span>
                        <span class="text-gray-700 font-normal" name="institution-email">{{ $institution->email ?? ''}}</span>
                    </div>
                    <div class="">
                        <span class="font-light">Telefon:</span>
                        <span class="text-gray-700 font-normal" name="phone">{{ $institution->phone ?? '' }}</span>
                    </div>
                    <div class="">
                        <span class="font-light">Fax:</span>
                        <span class="text-gray-700 font-normal" name="fax">{{ $institution->fax ?? '' }}</span>
                    </div>
                    <div class="">
                        <span class="font-light">Banca:</span>
                        <span class="text-gray-700 font-normal" name="bank">{{ $institution->bank ?? '' }}</span>
                    </div>
                    <div class="">
                        <span class="font-light">IBAN:</span>
                        <span class="text-gray-700 font-normal" name="iban">{{ $institution->iban ?? '' }}</span>
                    </div>
                </div>
            </div>
            <div class="w-full flex-grow md:w-2/6">
                <div class="flex justify-center md:justify-end py-3 md:py-0 text-sm">
                    <button class="px-3 py-2 text-indigo-500 border-indigo-700 border border-b-4 hover:text-gray-100 hover:bg-indigo-600 focus:underline-none focus:shadow-outline  rounded-sm shadow">
                        <i class="fal fa-edit"></i> Editează
                    </button>
                </div>
            </div>
        </div>
        <h3 class="py-3 border-b border-gray-400 text-gray-700 font-normal">Adresă instituție</h3>
        <div class="flex flex-wrap py-3">
            <div class="w-full md:w-4/6">
                <div class="px-4">
                    <div class="">
                        <span class="">Județul:</span>
                        <span class="text-gray-700 font-normal" name="county">
                            @if ( $institution->address !== null )
                            {{ $institution->address[0]->village->city->county->name ?? ''}}
                            @endif </span>
                    </div>
                    <div class="">
                        <span class="">Localitatea:</span>
                        <span class="text-gray-700 font-normal" name="city">
                            @if ( $institution->address !== null )
                            {{ $institution->address[0]->village->city->name ?? ''}}
                            @endif
                        </span>
                    </div>
                    <div class="">
                        <span class="">Localitatea componentă:</span>
                        <span class="text-gray-700 font-normal" name="village">
                            @if ( $institution->address !== null )
                            {{ $institution->address[0]->village->name ?? ''}}
                            @endif
                        </span>
                    </div>
                    <div class="">
                        <span class="">Strada:</span>
                        @if ( $institution->address !== null )
                        <span class="text-gray-700 font-normal" name="street">{{ $institution->address[0]->street ?? ''}}</span>
                        @endif
                    </div>
                    <div class="">
                        <span class="">Număr stradă:</span>
                        @if ( $institution->address !== null )
                        <span class="text-gray-700 font-normal" name="number">{{ $institution->address[0]->number ?? ''}}</span>
                        @endif
                    </div>
                    <div class="">
                        <span class="">Cod poștal:</span>
                        @if ( $institution->address !== null )
                        <span class="text-gray-700 font-normal" name="postal_code">{{ $institution->address[0]->postal_code ?? ''}}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="w-full flex-grow md:w-2/6">
                <div class="flex justify-center md:justify-end py-3 md:py-0 text-sm">
                    <button class="bg-gray-200 text-gray-800 border-gray-400 px-3 py-2 hover:bg-gray-300 focus:underline-none focus:shadow-outline hover:border-indigo-800 hover:text-indigo-700 border-b-4 rounded-sm shadow">
                        <i class="fal fa-edit"></i> Editează
                    </button>
                </div>
                <div class="flex justify-center md:justify-end py-3 md:py-0 text-sm ml-2">
                    <button class="bg-gray-300 text-gray-800 border-gray-500 px-3 py-2 hover:bg-gray-400 focus:underline-none focus:shadow-outline hover:border-indigo-800 hover:text-indigo-700 border-b-4 rounded-sm shadow">
                        <i class="fal fa-edit"></i> Editează
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endadmin