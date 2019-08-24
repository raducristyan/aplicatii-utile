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
                    <button class="px-3 py-2 text-indigo-500 font-bold border-indigo-700 border border-b-4 hover:text-gray-100 hover:bg-indigo-600 focus:underline-none focus:shadow-outline inline-flex items-center rounded-sm shadow">
                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z"></path>
                        </svg>
                        <span>
                            Editează
                        </span>
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