<form class="flex flex-col w-5/6 mx-auto">
    <div class="flex flex-col w-full mt-2">
        <label class="block font-semibold text-gray-700" for="user_email">Adresa de email</label>
        <input type="email" class="w-full bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:outline-none rounded" value="{{ auth()->user()->email ?? ''}}" readonly>
    </div>
    <div class="flex flex-col w-full mt-2">
        <label class="block font-semibold text-gray-700" for="first_name">Prenume</label>
        <input type="text" id="first_name" class="w-full bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded" :class="{'border-orange-500': errors.first_name}" v-model="profile.first_name">
        <small class="w-full font-normal text-sm text-orange-500" v-text="errors.first_name"></small>
    </div>
    <div class="flex flex-col w-full mt-2">
        <label class="block font-semibold text-gray-700" for="last_name">Nume</label>
        <input type="text" id="last_name" class="w-full bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded" :class="{'border-orange-500': errors.last_name}" v-model="profile.last_name">
        <small class="w-full font-normal text-sm text-orange-500" v-text="errors.last_name"></small>
    </div>
    <div class="flex flex-col w-full mt-2">
        <label class="block font-semibold text-gray-700" for="user_job">Funcție</label>
        <input type="text" id="user_job" class="w-full bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded" :class="{'border-orange-500': errors.job}" v-model="profile.job">
        <small class="w-full font-normal text-sm text-orange-500" v-text="errors.job"></small>
    </div>
    <div class="flex flex-col w-full mt-2">
        <label class="block font-semibold text-gray-700" for="user_mobile">Telefon mobil</label>
        <input type="text" id="user_mobile" class="w-full bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded" :class="{'border-orange-500': errors.mobile}" v-model="profile.mobile">
        <small class="w-full font-normal text-sm text-orange-500" v-text="errors.mobile"></small>
    </div>
    <div class="flex flex-col w-full mt-2">
        <label class="block font-semibold text-gray-700" for="user_phone">Telefon</label>
        <input type="text" id="user_phone" class="w-full bg-gray-100 text-gray-800 font-normal p-2 my-2 border border-transparent focus:border focus:border-indigo-500 focus:outline-none rounded" :class="{'border-orange-500': errors.phone}" placeholder="Introduceți numărul telefonului" v-model="profile.phone">
        <small class="w-full font-normal text-sm text-orange-500" v-text="errors.phone"></small>
    </div>
</form>