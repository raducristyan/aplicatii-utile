<!-- forth tab -->
@admin

<div v-show="activeTab==='institution'" id="institution" class="flex flex-col lg:flex-row w-full my-2">
    <div class="w-full lg:w-1/2 bg-white lg:mr-2 px-4 my-4 rounded shadow-md border border-gray-400">
        <h3 class="py-3 border-b border-gray-300 text-indigo-500 font-normal text-xl">Profil instituție</h3>
        <div class="flex flex-col flex-grow py-3">
            <div class="w-full flex-grow">
                <div class="px-4">
                    <div class="my-2">
                        <span class="text-gray-600 font-normal">Denumire:</span>
                        <span class="text-gray-700 font-semibold" name="institution" class="">{{ $institution->name ?? ''}}</span>
                    </div>
                    <div class="my-2">
                        <span class="text-gray-600 font-normal">CIF:</span>
                        <span class="text-gray-700 font-semibold" name="cif">{{ $institution->cif ?? ''}}</span>
                    </div>
                    <div class="my-2">
                        <span class="text-gray-600 font-normal">Email:</span>
                        <span class="text-gray-700 font-semibold" name="institution-email">{{ $institution->email ?? ''}}</span>
                    </div>
                    <div class="my-2">
                        <span class="text-gray-600 font-normal">Telefon:</span>
                        <span class="text-gray-700 font-semibold" name="phone">{{ $institution->phone ?? '' }}</span>
                    </div>
                    <div class="my-2">
                        <span class="text-gray-600 font-normal">Fax:</span>
                        <span class="text-gray-700 font-semibold" name="fax">{{ $institution->fax ?? '' }}</span>
                    </div>
                    <div class="my-2">
                        <span class="text-gray-600 font-normal">Banca:</span>
                        <span class="text-gray-700 font-semibold" name="bank">{{ $institution->bank ?? '' }}</span>
                    </div>
                    <div class="my-2">
                        <span class="text-gray-600 font-normal">IBAN:</span>
                        <span class="text-gray-700 font-semibold" name="iban">{{ $institution->iban ?? '' }}</span>
                    </div>
                </div>
            </div>
            <div class="w-full flex-grow-0">
                <div class="flex justify-center py-3 text-sm">
                    <button class="flex items-center bg-indigo-100 text-indigo-500 font-medium border-b-2 border-indigo-500 px-3 py-2 hover:border-indigo-600 hover:bg-indigo-500 focus:underline-none focus:shadow-outline hover:text-gray-100 rounded-t shadow-md transition duration-300" @click="openModal('edit-institution-profile-modal')">
                        <span>
                            Editează
                        </span>
                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 fill-current ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col w-full lg:w-1/2 bg-white lg:ml-2 px-4 my-4 rounded shadow-md border border-gray-400">
        <h3 class="py-3 border-b border-gray-300 text-indigo-500 font-normal text-xl">Adresă instituție</h3>
        <div class="flex flex-col flex-grow py-3">
            <div class="w-full flex-grow">
                <div class="px-4">
                    <div class="my-2">
                        <span class="text-gray-600 font-normal">Județul:</span>
                        <span class="text-gray-700 font-semibold" name="county">
                            @if ( $institution->address !== null )
                            {{ $institution->address[0]->village->city->county->name ?? ''}}
                            @endif </span>
                    </div>
                    <div class="my-2">
                        <span class="text-gray-600 font-normal">Localitatea:</span>
                        <span class="text-gray-700 font-semibold" name="city">
                            @if ( $institution->address !== null )
                            {{ $institution->address[0]->village->city->name ?? ''}}
                            @endif
                        </span>
                    </div>
                    <div class="my-2">
                        <span class="text-gray-600 font-normal">Localitatea componentă:</span>
                        <span class="text-gray-700 font-semibold" name="village">
                            @if ( $institution->address !== null )
                            {{ $institution->address[0]->village->name ?? ''}}
                            @endif
                        </span>
                    </div>
                    <div class="my-2">
                        <span class="text-gray-600 font-normal">Strada:</span>
                        @if ( $institution->address !== null )
                        <span class="text-gray-700 font-semibold" name="street">{{ $institution->address[0]->street ?? ''}}</span>
                        @endif
                    </div>
                    <div class="my-2">
                        <span class="text-gray-600 font-normal">Număr stradă:</span>
                        @if ( $institution->address !== null )
                        <span class="text-gray-700 font-semibold" name="number">{{ $institution->address[0]->number ?? ''}}</span>
                        @endif
                    </div>
                    <div class="my-2">
                        <span class="text-gray-600 font-normal">Cod poștal:</span>
                        @if ( $institution->address !== null )
                        <span class="text-gray-700 font-semibold" name="postal_code">{{ $institution->address[0]->postal_code ?? ''}}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="w-full flex-grow-0">
                <div class="flex justify-center py-3 text-sm">
                    <button class="flex items-center bg-indigo-100 text-indigo-500 font-medium border-b-2 border-indigo-500 px-3 py-2 hover:border-indigo-600 hover:bg-indigo-500 focus:underline-none focus:shadow-outline hover:text-gray-100 rounded-t shadow-md transition duration-300" @click="openModal('edit-institution-address-modal')">
                        <span>
                            Editează
                        </span>
                        <svg aria-hidden="true" focusable="false" class="w-4 h-4 fill-current ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endadmin