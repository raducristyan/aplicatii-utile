@admin
<div v-show="activeTab === 'settings'" class="px-4 py-3 my-6 bg-white" id="settings">
    <div class="flex justify-center py-3">
        <button class="flex items-center bg-indigo-500 text-gray-200 text-semibold px-4 py-2 hover:bg-indigo-700 focus:underline-none focus:shadow-outline border-indigo-800 border-b-4 rounded-sm shadow transition-4" @click="openModal('new-user-modal')">
            <span>Adaugă utilizator</span>
            <svg aria-hidden="true" focusable="false" data-icon="plus" class="w-4 h-4 ml-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <path fill="currentColor" d="M376 232H216V72c0-4.42-3.58-8-8-8h-32c-4.42 0-8 3.58-8 8v160H8c-4.42 0-8 3.58-8 8v32c0 4.42 3.58 8 8 8h160v160c0 4.42 3.58 8 8 8h32c4.42 0 8-3.58 8-8V280h160c4.42 0 8-3.58 8-8v-32c0-4.42-3.58-8-8-8z"></path>
            </svg>
        </button>
    </div>

    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-gray-200 border-b border-grey-400">
                <th class="py-3 px-3 font-medium text-sm text-gray-700">#</th>
                <th class="py-3 px-3 font-medium text-sm text-gray-700">Nume</th>
                <th class="py-3 px-3 font-medium text-sm text-gray-700">Funție</th>
                <th class="py-3 px-3 font-medium text-sm text-gray-700">Adresa de email</th>
                <th class="py-3 px-3 font-medium text-sm text-gray-700">Creat la:</th>
                <th class="py-3 px-3 font-medium text-sm text-gray-700">Acțiuni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($institution->users as $user)
            <tr class="items-center hover:bg-gray-100 border-b border-grey-400">
                <td class="py-3 px-3">{{ $loop->iteration }}</td>
                <td class="py-3 px-3">{{ $user->full_name }}</td>
                <td class="py-3 px-3">{{ $user->job }}</td>
                <td class="py-3 px-3">
                    <p>{{ $user->email }}</p>
                </td>
                <td class="py-3 px-3">{{ $user->created_at }}</td>
                <td class="py-3 px-3 align-middle">
                    <svg aria-hidden="true" focusable="false" @click="openModal('edit-user-modal')" class="w-5 h-5 fill-current text-gray-500 mr-2 hover:text-teal-600 mr-2 cursor-pointer inline-block" viewBox="0 0 640 512">
                        <path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h274.9c-2.4-6.8-3.4-14-2.6-21.3l6.8-60.9 1.2-11.1 7.9-7.9 77.3-77.3c-24.5-27.7-60-45.5-99.9-45.5zm45.3 145.3l-6.8 61c-1.1 10.2 7.5 18.8 17.6 17.6l60.9-6.8 137.9-137.9-71.7-71.7-137.9 137.8zM633 268.9L595.1 231c-9.3-9.3-24.5-9.3-33.8 0l-37.8 37.8-4.1 4.1 71.8 71.7 41.8-41.8c9.3-9.4 9.3-24.5 0-33.9z"></path>
                    </svg>
                    <svg aria-hidden="true" focusable="false" @click="openModal('view-user-modal')" class="w-5 h-5 fill-current text-gray-500 mr-2 hover:text-blue-600 mr-2 cursor-pointer inline-block" viewBox="0 0 576 512">
                        <path fill="currentColor" d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"></path>
                    </svg>
                    <svg aria-hidden="true" focusable="false" v-on:click="getUserToDelete({{ $user }})" @click="openModal('delete-user-modal')" class="w-5 h-5 fill-current text-gray-500 hover:text-orange-600 cursor-pointer inline-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                        <path d="M593.9 240l41.4-41.4c6.2-6.2 6.2-16.4 0-22.6L624 164.7c-6.2-6.2-16.4-6.2-22.6 0L560 206.1l-41.4-41.4c-6.2-6.2-16.4-6.2-22.6 0L484.7 176c-6.2 6.2-6.2 16.4 0 22.6l41.4 41.4-41.4 41.4c-6.2 6.2-6.2 16.4 0 22.6l11.3 11.3c6.2 6.2 16.4 6.2 22.6 0l41.4-41.4 41.4 41.4c6.2 6.2 16.4 6.2 22.6 0l11.3-11.3c6.2-6.2 6.2-16.4 0-22.6L593.9 240zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96zm89.6 256c-28.8 0-42.4 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464z"></path>
                    </svg>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endadmin