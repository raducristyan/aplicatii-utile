<form class="flex flex-col w-5/6 mx-auto">
    <div class="flex flex-row items-center w-full mt-2 bg-orange-100 px-4 py-3" v-if="Object.keys(errors).length > 0">
        <svg aria-hidden="true" focusable="false" class="w-5 h-5 fill-current text-orange-500" viewBox="0 0 576 512">
            <path fill="currentColor" d="M248.747 204.705l6.588 112c.373 6.343 5.626 11.295 11.979 11.295h41.37a12 12 0 0 0 11.979-11.295l6.588-112c.405-6.893-5.075-12.705-11.979-12.705h-54.547c-6.903 0-12.383 5.812-11.978 12.705zM330 384c0 23.196-18.804 42-42 42s-42-18.804-42-42 18.804-42 42-42 42 18.804 42 42zm-.423-360.015c-18.433-31.951-64.687-32.009-83.154 0L6.477 440.013C-11.945 471.946 11.118 512 48.054 512H527.94c36.865 0 60.035-39.993 41.577-71.987L329.577 23.985zM53.191 455.002L282.803 57.008c2.309-4.002 8.085-4.002 10.394 0l229.612 397.993c2.308 4-.579 8.998-5.197 8.998H58.388c-4.617.001-7.504-4.997-5.197-8.997z"></path>
        </svg>
        <span class="text-orange-500 font-medium ml-2">
            Formularul nu este valid!
        </span>
    </div>

    <div class="flex flex-col w-full mt-2">
        <label class="block font-semibold text-gray-700">Județul</label>
        <div class="relative">
            <select class="w-full bg-gray-100 border-b-2 border-gray-400 text-gray-800 font-normal p-2 my-2 focus:border-b-2 focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-t shadow-md transition duration-300" name="county" v-model="selectedCounty" @change="getCities">
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
        <small class="w-full font-normal text-sm text-orange-500" v-if="errors.county" v-text="errors.county[0]"></small>
    </div>
    <div class="flex flex-col w-full mt-2">
        <label class="block font-semibold text-gray-700">Localitatea (UAT)</label>
        <div class="relative">
            <select class="w-full bg-gray-100 border-b-2 border-gray-400 text-gray-800 font-normal p-2 my-2 focus:border-b-2 focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-t shadow-md transition duration-300" name="city" v-model="selectedCity" @change="getVillages">
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
        <small class="w-full font-normal text-sm text-orange-500" v-if="errors.city" v-text="errors.city[0]"></small>
    </div>
    <div class="flex flex-col w-full mt-2">
        <label class="block font-semibold text-gray-700">Localitatea componentă</label>
        <div class="relative">
            <select class="w-full bg-gray-100 border-b-2 border-gray-400 text-gray-800 font-normal p-2 my-2 focus:border-b-2 focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-t shadow-md transition duration-300" name="village" v-model="address.village_id">
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
        <small class="w-full font-normal text-sm text-orange-500" v-if="errors.village" v-text="errors.village[0]"></small>
    </div>
    <div class="flex flex-row">
        <div class="flex flex-col w-3/4 mt-2 mr-1">
            <label class="block font-semibold text-gray-700" for="street">Strada</label>
            <input type="text" name="street" class="w-full bg-gray-100 border-b-2 border-gray-400 text-gray-800 font-normal p-2 my-2 focus:border-b-2 focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-t shadow-md transition duration-300" :class="{'border-orange-500': errors.street}" v-model="address.data.street">
            <small class="w-full font-normal text-sm text-orange-500" v-if="errors.street" v-text="errors.street[0]"></small>
        </div>
        <div class="flex flex-col w-1/4 mt-2 ml-1">
            <label class="block font-semibold text-gray-700" for="number">Număr</label>
            <input type="text" name="number" class="w-full bg-gray-100 border-b-2 border-gray-400 text-gray-800 font-normal p-2 my-2 focus:border-b-2 focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-t shadow-md transition duration-300" :class="{'border-orange-500': errors.number}" v-model="address.data.number">
            <small class="w-full font-normal text-sm text-orange-500" v-if="errors.number" v-text="errors.number[0]"></small>
        </div>
    </div>
    <div class="flex flex-row">
        <div class="flex flex-col w-1/2 mt-2 mr-1">
            <label class="block font-semibold text-gray-700" for="bl">Bloc</label>
            <input type="text" name="bl" class="w-full bg-gray-100 border-b-2 border-gray-400 text-gray-800 font-normal p-2 my-2 focus:border-b-2 focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-t shadow-md transition duration-300" :class="{'border-orange-500': errors.bl}" v-model="address.data.bl">
            <small class="w-full font-normal text-sm text-orange-500" v-if="errors.bl" v-text="errors.bl[0]"></small>
        </div>
        <div class="flex flex-col w-1/2 mt-2 ml-1">
            <label class="block font-semibold text-gray-700" for="sc">Scară</label>
            <input type="text" name="sc" class="w-full bg-gray-100 border-b-2 border-gray-400 text-gray-800 font-normal p-2 my-2 focus:border-b-2 focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-t shadow-md transition duration-300" :class="{'border-orange-500': errors.sc}" v-model="address.data.sc">
            <small class="w-full font-normal text-sm text-orange-500" v-if="errors.sc" v-text="errors.sc[0]"></small>
        </div>
    </div>
    <div class="flex flex-row">
        <div class="flex flex-col w-1/2 mt-2 mr-1">
            <label class="block font-semibold text-gray-700" for="ap">Apartament</label>
            <input type="text" name="ap" class="w-full bg-gray-100 border-b-2 border-gray-400 text-gray-800 font-normal p-2 my-2 focus:border-b-2 focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-t shadow-md transition duration-300" :class="{'border-orange-500': errors.ap}" v-model="address.data.ap">
            <small class="w-full font-normal text-sm text-orange-500" v-if="errors.ap" v-text="errors.ap[0]"></small>
        </div>
        <div class="flex flex-col w-1/2 mt-2 ml-1">
            <label class="block font-semibold text-gray-700" for="postal_code">Cod poștal</label>
            <input type="text" name="postal_code" class="w-full bg-gray-100 border-b-2 border-gray-400 text-gray-800 font-normal p-2 my-2 focus:border-b-2 focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-t shadow-md transition duration-300" :class="{'border-orange-500': errors.postal_code}" v-model="address.data.postal_code">
            <small class="w-full font-normal text-sm text-orange-500" v-if="errors.postal_code" v-text="errors.postal_code[0]"></small>
        </div>
    </div>
</form>