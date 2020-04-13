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
        <label class="block font-semibold text-gray-700" for="user_email">Adresa de email</label>
        <input type="email" class="w-full bg-gray-100 border border-gray-100 text-gray-800 font-normal p-2 my-2 focus:outline-none rounded-sm shadow" name="user_email" id="user_email" placeholder="Adresa de email al contului dumneavoastră" value="{{ auth()->user()->email ?? ''}}" readonly>
    </div>
    <div class="flex flex-col w-full mt-2">
        <label for="old_password" class="block font-semibold text-gray-700">Parola veche</label>
        <input type="password" id="old_password" class="w-full bg-gray-200 border border-gray-200 text-gray-800 font-normal p-2 my-2 focus:border focus:border-indigo-500 focus:outline-none focus:bg-white rounded-sm shadow-lg" :class="{'border-orange-500': errors.old_password}" v-model="userPassword.old_password" placeholder="Parola actuală a contului dumneavoastră">
        <small class="w-full font-normal text-sm text-orange-500" v-if="errors.old_password" v-text="errors.old_password[0]"></small>
    </div>
    <div class="flex flex-col w-full mt-2">
        <label for="new_password" class="block font-semibold text-gray-700">Parola nouă</label>
        <input type="password" id="new_password" class="w-full bg-gray-200 border border-gray-200 text-gray-800 font-normal p-2 my-2 focus:border focus:border-indigo-500 focus:outline-none focus:bg-white rounded-sm shadow-lg" :class="{'border-orange-500': errors.new_password}" v-model="userPassword.new_password" placeholder="Noua parolă">
        <small class="w-full font-normal text-sm text-orange-500" v-if="errors.new_password" v-text="errors.new_password[0]"></small>
    </div>
    <div class="flex flex-col w-full mt-2">
        <label for="new_password_confirmation" class="block font-semibold text-gray-700">Confirmare parolă</label>
        <input type="password" id="new_password_confirmation" class="w-full bg-gray-200 border border-gray-200 text-gray-800 font-normal p-2 my-2 focus:border focus:border-indigo-500 focus:outline-none focus:bg-white rounded-sm shadow-lg" :class="{'border-orange-500': errors.new_password}" v-model="userPassword.new_password_confirmation" placeholder="Confirmați noua parolă.">
        <small class="w-full font-normal text-sm text-orange-500" v-if="errors.new_password_confirmation" v-text="errors.new_password_confirmation[0]"></small>
    </div>
</form>