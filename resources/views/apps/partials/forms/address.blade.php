<form class="flex flex-col w-5/6 mx-auto">
    <div class="flex flex-col w-full mt-2">
        <label class="block font-semibold text-gray-700" for="county">Județul</label>
        <div class="relative">
            <select class="w-full appearance-none bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded-sm" name="county" v-model="selectedCounty" @change="getCities">
                <option disabled value>Selectați județul</option>
                <option v-for="county in counties" :value="county.id" :selected="county.id == selectedCounty" v-text="county.name"></option>
            </select>
            <div class="pointer-events-none absolute top-0 right-0 bottom-0 flex items-center px-2">
                <svg class="w-4 h-4 fill-current text-gray-800" viewBox="0 0 129 129">
                    <g>
                        <path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z"></path>
                    </g>
                </svg>
            </div>
        </div>
        <small class="w-full font-normal text-sm text-orange-500" v-text="errors.county"></small>
    </div>
    <div class="flex flex-col w-full mt-2">
        <label class="block font-semibold text-gray-700" for="county">Localitatea (UAT)</label>
        <div class="relative">
            <select class="w-full appearance-none bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded-sm" name="city" v-model="selectedCity" @change="getVillages">
                <option v-for="city in countyCities" :value="city.id" :selected="city.id == city" v-text="city.name"></option>
            </select>
            <div class="pointer-events-none absolute top-0 right-0 bottom-0 flex items-center px-2">
                <svg class="w-4 h-4 fill-current text-gray-800" viewBox="0 0 129 129">
                    <g>
                        <path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z"></path>
                    </g>
                </svg>
            </div>
        </div>
        <small class="w-full font-normal text-sm text-orange-500" v-text="errors.county"></small>
    </div>
    <div class="flex flex-col w-full mt-2">
        <label class="block font-semibold text-gray-700" for="county">Localitatea componentă</label>
        <div class="relative">
            <select class="w-full appearance-none bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded-sm" name="village" v-model="address.village_id">
                <option v-for="village in cityVillages" :value="village.id" :selected="village.id == village" v-text="village.name"></option>
            </select>
            <div class="pointer-events-none absolute top-0 right-0 bottom-0 flex items-center px-2">
                <svg class="w-4 h-4 fill-current text-gray-800" viewBox="0 0 129 129">
                    <g>
                        <path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z"></path>
                    </g>
                </svg>
            </div>
        </div>
        <small class="w-full font-normal text-sm text-orange-500" v-text="errors.county"></small>
    </div>
    <div class="flex flex-row">
        <div class="flex flex-col w-3/4 mt-2 mr-1">
            <label class="block font-semibold text-gray-700" for="street">Strada</label>
            <input type="text" name="street" class="w-full bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded-sm" :class="{'border-orange-500': errors.street}" v-model="address.street">
            <small class="w-full font-normal text-sm text-orange-500" v-text="errors.street"></small>
        </div>
        <div class="flex flex-col w-1/4 mt-2 ml-1">
            <label class="block font-semibold text-gray-700" for="number">Număr</label>
            <input type="text" name="number" class="w-full bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded-sm" :class="{'border-orange-500': errors.number}" v-model="address.number">
            <small class="w-full font-normal text-sm text-orange-500" v-text="errors.number"></small>
        </div>
    </div>
    <div class="flex flex-row">
        <div class="flex flex-col w-1/2 mt-2 mr-1">
            <label class="block font-semibold text-gray-700" for="bl">Bloc</label>
            <input type="text" name="bl" class="w-full bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded-sm" :class="{'border-orange-500': errors.bl}" v-model="address.bl">
            <small class="w-full font-normal text-sm text-orange-500" v-text="errors.bl"></small>
        </div>
        <div class="flex flex-col w-1/2 mt-2 ml-1">
            <label class="block font-semibold text-gray-700" for="sc">Scară</label>
            <input type="text" name="sc" class="w-full bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded-sm" :class="{'border-orange-500': errors.sc}" v-model="address.sc">
            <small class="w-full font-normal text-sm text-orange-500" v-text="errors.sc"></small>
        </div>
    </div>
    <div class="flex flex-row">
        <div class="flex flex-col w-1/2 mt-2 mr-1">
            <label class="block font-semibold text-gray-700" for="ap">Apartament</label>
            <input type="text" name="ap" class="w-full bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded-sm" :class="{'border-orange-500': errors.ap}" v-model="address.ap">
            <small class="w-full font-normal text-sm text-orange-500" v-text="errors.ap"></small>
        </div>
        <div class="flex flex-col w-1/2 mt-2 ml-1">
            <label class="block font-semibold text-gray-700" for="postal_code">Cod poștal</label>
            <input type="text" name="postal_code" class="w-full bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded-sm" :class="{'border-orange-500': errors.postal_code}" v-model="address.postal_code">
            <small class="w-full font-normal text-sm text-orange-500" v-text="errors.postal_code"></small>
        </div>
    </div>

</form>