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
        <label class="block font-semibold text-gray-700" for="profile_email">Adresa de email</label>
        <input type="email" class="w-full bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded" :class="{'border-orange-500': errors.email}" v-model="profile.email" id="profile_email" placeholder="Adresa de email">
        <small class="w-full font-normal text-sm text-orange-500" v-if="errors.email" v-text="errors.email[0]"></small>
    </div>
    <div class="flex flex-col w-full mt-2">
        <label for="profile_first_name" class="block font-semibold text-gray-700">Prenume</label>
        <input type="text" id="profile_first_name" class="w-full bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded" :class="{'border-orange-500': errors.first_name}" v-model="profile.first_name" placeholder="Prenumele utilizatorului">
        <small class="w-full font-normal text-sm text-orange-500" v-if="errors.first_name" v-text="errors.first_name[0]"></small>
    </div>
    <div class="flex flex-col w-full mt-2">
        <label for="profile_last_name" class="block font-semibold text-gray-700">Nume</label>
        <input type="text" id="profile_last_name" class="w-full bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded" :class="{'border-orange-500': errors.last_name}" v-model="profile.last_name" placeholder="Numele utilizatorului">
        <small class="w-full font-normal text-sm text-orange-500" v-if="errors.last_name" v-text="errors.last_name[0]"></small>
    </div>
    <div class="flex flex-col w-full mt-2">
        <label class="block font-semibold text-gray-700">Compartiment</label>
        <div class="relative">
            <select class="w-full appearance-none bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded-sm" name="compartment">
                <option></option>
            </select>
            <div class="pointer-events-none absolute top-0 right-0 bottom-0 flex items-center px-2">
                <svg class="w-4 h-4 fill-current text-gray-800" viewBox="0 0 129 129">
                    <g>
                        <path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z"></path>
                    </g>
                </svg>
            </div>
        </div>
        <small class="w-full font-normal text-sm text-orange-500" v-if="errors.compartment" v-text="errors.compartment[0]"></small>
    </div>
    <div class="flex flex-col w-full mt-2">
        <label for="profile_job" class="block font-semibold text-gray-700">Funcție</label>
        <input type="text" id="profile_job" class="w-full bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded" :class="{'border-orange-500': errors.job}" v-model="profile.job" placeholder="Funcția utilizatorului">
        <small class="w-full font-normal text-sm text-orange-500" v-if="errors.job" v-text="errors.job[0]"></small>
    </div>
</form>