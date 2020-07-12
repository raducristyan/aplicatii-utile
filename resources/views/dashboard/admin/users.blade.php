@extends('layouts.apps.default')

@admin

@section('page-name')
Utilizatori aplicație
@endsection

@section('breadcrumbs-links')
@each('partials.breadcrumbsLinks', [['name' => 'Acasă', 'url' => route('dashboard.')]], 'link')
@endsection

@section('last-link')
Utilizatori
@endsection

@section('buttons')
<x-button.link text="Adaugă utilizator" url="{{ route('dashboard.admin.user.create') }}" />
@endsection

@section('content')


<x-section.title text="Conturi utilizatori" />

<div class="flex flex-col">
    <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded border-b border-gray-200">
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">#</th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">NUME</th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">FUNCȚIE</th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">EMAIL</th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">CREAT LA:</th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">ȘTERS LA:</th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">ACȚIUNI</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($institution->users as $user)
                    <tr class="hover:bg-gray-200 transition duration-300 @if ($user->trashed()) bg-red-100 hover:bg-red-200 @endif">
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="flex flex-col flex-shrink">{{ $loop->iteration }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="flex flex-col flex-initial">{{ $user->full_name }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="flex flex-col flex-initial">{{ $user->job }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="flex flex-col flex-1">
                                <p class="break-words">{{ $user->email }}</p>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="flex flex-col flex-initial">{{ $user->created_at }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="flex flex-col flex-initial">{{ $user->deleted_at }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="flex flex-col flex-initial items-center md:flex-row">
                                <x-button.edit url="{{ route('dashboard.user.edit', $user) }}" color='green' text>

                                </x-button.edit>
                                @if (!$user->trashed())
                                <x-button.delete url="{{ route('dashboard.admin.user.delete', $user) }}" ask="Doriți să ștergeți acest utilizator" />
                                @else
                                <x-button.destroy url="{{ route('dashboard.admin.user.destroy', $user) }}" ask="Acțiunea este ireversibilă. Sigur doriți să ștergeți acest utilizator" />
                                <x-button.restore url="{{ route('dashboard.admin.user.restore', $user) }}" ask="Doriți să restaurați acest utilizator" />
                                @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @if (!$institution->users->count())
    <div class="w-full my-32 flex items-center justify-center">
        <p class="text-gray-800 text-4xl">Nu aveți utilizatori înregistrați. Înregistrați unul chiar acum.</p>
    </div>
    @endif
</div>
@endsection
@endadmin