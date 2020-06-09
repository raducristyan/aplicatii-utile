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
        <label class="block font-semibold text-gray-700" for="institution_email">Email</label>
        <input type="email" class="w-full bg-gray-100 border-b-2 border-gray-400 text-gray-800 font-normal p-2 my-2 focus:border-b-2 focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-t shadow-md transition duration-300" :class="{'border-orange-500': errors.email}" id="institution_email" v-model="profile.email">
        <small class="w-full font-normal text-sm text-orange-500" v-if="errors.email" v-text="errors.email[0]"></small>
    </div>

    <div class="flex flex-col w-full mt-2">
        <label class="block font-semibold text-gray-700" for="cif">Codul fiscal</label>
        <input type="text" class="w-full bg-gray-200 text-gray-800 font-normal p-2 my-2 focus:outline-none rounded-t shadow transition duration-300" :class="{'border-orange-500': errors.cif}" id="cif" aria-describedby="institutionCifHelp" v-model="profile.cif" readonly>
        <small class="w-full font-normal text-sm text-orange-500" v-if="errors.cif" v-text="errors.cif[0]"></small>
    </div>

    <div class="flex flex-col w-full mt-2">
        <label class="block font-semibold text-gray-700" for="institution_name">Denumire</label>
        <input type="text" class="w-full bg-gray-100 border-b-2 border-gray-400 text-gray-800 font-normal p-2 my-2 focus:border-b-2 focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-t shadow-md transition duration-300" :class="{'border-orange-500': errors.name}" id="institution_name" aria-describedby="institutionNameHelp" v-model="profile.name">
        <small class="w-full font-normal text-sm text-orange-500" v-if="errors.name" v-text="errors.name[0]"></small>
    </div>

    <div class="flex flex-row">
        <div class="flex flex-col w-full mt-2 mr-1">
            <label class="block font-semibold text-gray-700" for="institution_phone">Telefon</label>
            <input type="text" class="w-full bg-gray-100 border-b-2 border-gray-400 text-gray-800 font-normal p-2 my-2 focus:border-b-2 focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-t shadow-md transition duration-300" :class="{'border-orange-500': errors.phone}" id="institution_phone" aria-describedby="institutionPhoneHelp" v-model="profile.phone">
            <small class="w-full font-normal text-sm text-orange-500" v-if="errors.phone" v-text="errors.phone[0]"></small>
        </div>
        <div class="flex flex-col w-full mt-2 ml-1">
            <label class="block font-semibold text-gray-700" for="institutionFax">Fax</label>
            <input type="text" class="w-full bg-gray-100 border-b-2 border-gray-400 text-gray-800 font-normal p-2 my-2 focus:border-b-2 focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-t shadow-md transition duration-300" :class="{'border-orange-500': errors.fax}" id="institution_fax" aria-describedby="institutionFaxHelp" v-model="profile.fax">
            <small class="w-full font-normal text-sm text-orange-500" v-if="errors.fax" v-text="errors.fax[0]"></small>
        </div>
    </div>
    <div class="flex flex-col w-full mt-2">
        <label class="block font-semibold text-gray-700" for="institution_bank">Banca</label>
        <input type="text" class="w-full bg-gray-100 border-b-2 border-gray-400 text-gray-800 font-normal p-2 my-2 focus:border-b-2 focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-t shadow-md transition duration-300" :class="{'border-orange-500': errors.bank}" id="institution_bank" aria-describedby="institutionBankHelp" v-model="profile.bank">
        <small class="w-full font-normal text-sm text-orange-500" v-if="errors.bank" v-text="errors.bank[0]"></small>
    </div>
    <div class="flex flex-col w-full mt-2">
        <label class="block font-semibold text-gray-700" for="institution_iban">Contul IBAN</label>
        <input type="text" class="w-full bg-gray-100 border-b-2 border-gray-400 text-gray-800 font-normal p-2 my-2 focus:border-b-2 focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-t shadow-md transition duration-300" :class="{'border-orange-500': errors.iban}" id="institution_iban" aria-describedby="institutionIbanHelp" v-model="profile.iban">
        <small class="w-full font-normal text-sm text-orange-500" v-if="errors.iban" v-text="errors.iban[0]"></small>
    </div>
</form>