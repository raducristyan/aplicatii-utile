<form class="flex flex-col w-5/6 mx-auto">
    <div class="flex flex-col w-full mt-2">
        <label class="block font-semibold text-gray-700" for="institution_email">Email</label>
        <input type="email" class="w-full bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded" :class="{'border-orange-500': errors.email}" id="institution_email" v-model="profile.email" placeholder="Adresa de email">
        <small id="institutionEmailHelp" class="w-full font-normal text-sm text-orange-500" v-text="errors.email"></small>
    </div>

    <div class="flex flex-col w-full mt-2">
        <label class="block font-semibold text-gray-700" for="institution_name">Denumire</label>
        <input type="text" class="w-full bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded-sm" :class="{'is-invalid': errors.name}" id="institution_name" aria-describedby="institutionNameHelp" v-model="profile.name">
        <small id="institutionNameHelp" class="w-full font-normal text-sm text-orange-500" v-text="errors.name"></small>
    </div>
    <div class="flex flex-col w-full mt-2">
        <label class="block font-semibold text-gray-700" for="cif">Codul fiscal</label>
        <input type="text" class="w-full bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded-sm" :class="{'is-invalid': errors.cif}" id="cif" aria-describedby="institutionCifHelp" v-model="profile.cif" disabled>
        <small id="institutionCifHelp" class="w-full font-normal text-sm text-orange-500"  v-text="errors.cif"></small>
    </div>
    <div class="flex flex-row">
        <div class="flex flex-col w-full mt-2 mr-1">
            <label class="block font-semibold text-gray-700" for="institution_phone">Telefon</label>
            <input type="text" class="w-full bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded-sm" :class="{'is-invalid': errors.phone}" id="institution_phone" aria-describedby="institutionPhoneHelp" v-model="profile.phone">
            <small id="institutionPhonelHelp" class="w-full font-normal text-sm text-orange-500" v-text="errors.phone"></small>
        </div>
        <div class="flex flex-col w-full mt-2 ml-1">
            <label class="block font-semibold text-gray-700" for="institutionFax">Fax</label>
            <input type="text" class="w-full bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded-sm" :class="{'is-invalid': errors.fax}" id="institution_fax" aria-describedby="institutionFaxHelp" v-model="profile.fax">
            <small id="institutionFaxlHelp" class="w-full font-normal text-sm text-orange-500"  v-text="errors.fax"></small>
        </div>
    </div>
    <div class="flex flex-col w-full mt-2">
        <label class="block font-semibold text-gray-700" for="institution_bank">Banca</label>
        <input type="text" class="w-full bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded-sm" :class="{'is-invalid': errors.bank}" id="institution_bank" aria-describedby="institutionBankHelp" v-model="profile.bank">
        <small id="institutionBankHelp" class="w-full font-normal text-sm text-orange-500" v-text="errors.bank"></small>
    </div>
    <div class="flex flex-col w-full mt-2">
        <label class="block font-semibold text-gray-700" for="institution_iban">Contul IBAN</label>
        <input type="text" class="w-full bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded-sm" :class="{'is-invalid': errors.iban}" id="institution_iban" aria-describedby="institutionIbanHelp" v-model="profile.iban">
        <small id="institutionIbanlHelp" class="w-full font-normal text-sm text-orange-500" v-text="errors.iban"></small>
    </div>

    <div class="flex flex-col w-full mt-2">
        <label class="block font-semibold text-gray-700" for="institution_email">Email</label>
        <input type="email" class="w-full bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded-sm" :class="{'border-orange-500': errors.email}" id="institution_email" v-model="profile.email" placeholder="Adresa de email">
        <small id="institutionEmailHelp" class="w-full font-normal text-sm text-orange-500" v-text="errors.email"></small>
    </div>

    <div class="flex flex-col w-full mt-2">
        <label class="block font-semibold text-gray-700" for="institution_name">Denumire</label>
        <input type="text" class="w-full bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded-sm" :class="{'is-invalid': errors.name}" id="institution_name" aria-describedby="institutionNameHelp" v-model="profile.name">
        <small id="institutionNameHelp" class="w-full font-normal text-sm text-orange-500" v-text="errors.name"></small>
    </div>
    <div class="flex flex-col w-full mt-2">
        <label class="block font-semibold text-gray-700" for="cif">Codul fiscal</label>
        <input type="text" class="w-full bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded-sm" :class="{'is-invalid': errors.cif}" id="cif" aria-describedby="institutionCifHelp" v-model="profile.cif" disabled>
        <small id="institutionCifHelp" class="w-full font-normal text-sm text-orange-500"  v-text="errors.cif"></small>
    </div>
    <div class="flex flex-row">
        <div class="flex flex-col w-full mt-2 mr-1">
            <label class="block font-semibold text-gray-700" for="institution_phone">Telefon</label>
            <input type="text" class="w-full bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded-sm" :class="{'is-invalid': errors.phone}" id="institution_phone" aria-describedby="institutionPhoneHelp" v-model="profile.phone">
            <small id="institutionPhonelHelp" class="w-full font-normal text-sm text-orange-500" v-text="errors.phone"></small>
        </div>
        <div class="flex flex-col w-full mt-2 ml-1">
            <label class="block font-semibold text-gray-700" for="institutionFax">Fax</label>
            <input type="text" class="w-full bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded-sm" :class="{'is-invalid': errors.fax}" id="institution_fax" aria-describedby="institutionFaxHelp" v-model="profile.fax">
            <small id="institutionFaxlHelp" class="w-full font-normal text-sm text-orange-500"  v-text="errors.fax"></small>
        </div>
    </div>
    <div class="flex flex-col w-full mt-2">
        <label class="block font-semibold text-gray-700" for="institution_bank">Banca</label>
        <input type="text" class="w-full bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded-sm" :class="{'is-invalid': errors.bank}" id="institution_bank" aria-describedby="institutionBankHelp" v-model="profile.bank">
        <small id="institutionBankHelp" class="w-full font-normal text-sm text-orange-500" v-text="errors.bank"></small>
    </div>
    <div class="flex flex-col w-full mt-2">
        <label class="block font-semibold text-gray-700" for="institution_iban">Contul IBAN</label>
        <input type="text" class="w-full bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded-sm" :class="{'is-invalid': errors.iban}" id="institution_iban" aria-describedby="institutionIbanHelp" v-model="profile.iban">
        <small id="institutionIbanlHelp" class="w-full font-normal text-sm text-orange-500" v-text="errors.iban"></small>
    </div>
</form>