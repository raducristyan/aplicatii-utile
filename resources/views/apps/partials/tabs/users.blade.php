<div v-show="activeTab === 'users'" class="px-4 pb-6" id="users">
    <div class="flex justify-center py-3">
        <button class="bg-indigo-500 text-gray-100 px-4 py-2 hover:bg-indigo-600 focus:underline-none focus:shadow-outline border-indigo-700 border-b-4 rounded-sm shadow">
            <i class="fal fa-plus"></i> Adaugă utilizator
        </button>
    </div>

    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-gray-100 border-b border-grey-400">
                <th class="py-3 px-3 font-medium text-sm text-gray-700">#</th>
                <th class="py-3 px-3 font-medium text-sm text-gray-700">Nume</th>
                <th class="py-3 px-3 font-medium text-sm text-gray-700">Adresa de email</th>
                <th class="py-3 px-3 font-medium text-sm text-gray-700">Creat la:</th>
                <th class="py-3 px-3 font-medium text-sm text-gray-700">Acțiuni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($institution->admin as $user)
            <tr class="hover:bg-gray-100 border-b border-grey-400">
                <td class="py-3 px-3">{{ $loop->iteration }}</td>
                <td class="py-3 px-3">{{ $user->full_name }}</td>
                <td class="py-3 px-3">
                    <p>{{ $user->email }}</p>
                </td>
                <td class="py-3 px-3">{{ $user->created_at }}</td>
                <td class="py-3 px-3">
                    <a href="#"> <i class="fal fa-pencil text-gray mr-2 hover:text-indigo-600"></i> </a>
                    <a href="#"> <i class="fal fa-user-times text-orange-500 hover:text-orange-600"></i> </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>