<div v-show="activeTab === 'users'" class="px-4 pb-6" id="users">
    <div class="flex justify-center py-3">
        <button class="flex items-center bg-indigo-500 text-gray-200 text-semibold px-4 py-2 hover:bg-indigo-600 focus:underline-none focus:shadow-outline border-indigo-700 border-b-4 rounded-sm shadow">
            <svg aria-hidden="true" focusable="false" data-icon="plus" class="w-4 h-4 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <path fill="currentColor" d="M376 232H216V72c0-4.42-3.58-8-8-8h-32c-4.42 0-8 3.58-8 8v160H8c-4.42 0-8 3.58-8 8v32c0 4.42 3.58 8 8 8h160v160c0 4.42 3.58 8 8 8h32c4.42 0 8-3.58 8-8V280h160c4.42 0 8-3.58 8-8v-32c0-4.42-3.58-8-8-8z"></path>
            </svg>
            Adaugă utilizator
        </button>
    </div>

    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-gray-200 border-b border-grey-400">
                <th class="py-3 px-3 font-medium text-sm text-gray-700">#</th>
                <th class="py-3 px-3 font-medium text-sm text-gray-700">Nume</th>
                <th class="py-3 px-3 font-medium text-sm text-gray-700">Adresa de email</th>
                <th class="py-3 px-3 font-medium text-sm text-gray-700">Creat la:</th>
                <th class="py-3 px-3 font-medium text-sm text-gray-700">Acțiuni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($institution->admin as $user)
            <tr class="items-center hover:bg-gray-100 border-b border-grey-400">
                <td class="py-3 px-3">{{ $loop->iteration }}</td>
                <td class="py-3 px-3">{{ $user->full_name }}</td>
                <td class="py-3 px-3">
                    <p>{{ $user->email }}</p>
                </td>
                <td class="py-3 px-3">{{ $user->created_at }}</td>
                <td class="py-3 px-3 align-middle">
                    <svg aria-hidden="true" focusable="false" class="w-4 h-4 fill-current text-gray-700 mr-2 hover:text-indigo-600 mr-2 cursor-pointer inline-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M491.609 73.625l-53.861-53.839c-26.378-26.379-69.076-26.383-95.46-.001L24.91 335.089.329 484.085c-2.675 16.215 11.368 30.261 27.587 27.587l148.995-24.582 315.326-317.378c26.33-26.331 26.581-68.879-.628-96.087zM120.644 302l170.259-169.155 88.251 88.251L210 391.355V350h-48v-48h-41.356zM82.132 458.132l-28.263-28.263 12.14-73.587L84.409 338H126v48h48v41.59l-18.282 18.401-73.586 12.141zm378.985-319.533l-.051.051-.051.051-48.03 48.344-88.03-88.03 48.344-48.03.05-.05.05-.05c9.147-9.146 23.978-9.259 33.236-.001l53.854 53.854c9.878 9.877 9.939 24.549.628 33.861z"></path>
                    </svg>
                    <svg aria-hidden="true" focusable="false" class="w-4 h-4 fill-current text-gray-700 hover:text-orange-600 cursor-pointer inline-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                        <path d="M593.9 240l41.4-41.4c6.2-6.2 6.2-16.4 0-22.6L624 164.7c-6.2-6.2-16.4-6.2-22.6 0L560 206.1l-41.4-41.4c-6.2-6.2-16.4-6.2-22.6 0L484.7 176c-6.2 6.2-6.2 16.4 0 22.6l41.4 41.4-41.4 41.4c-6.2 6.2-6.2 16.4 0 22.6l11.3 11.3c6.2 6.2 16.4 6.2 22.6 0l41.4-41.4 41.4 41.4c6.2 6.2 16.4 6.2 22.6 0l11.3-11.3c6.2-6.2 6.2-16.4 0-22.6L593.9 240zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96zm89.6 256c-28.8 0-42.4 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464z"></path>
                    </svg>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>