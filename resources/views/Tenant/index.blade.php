<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tenants') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <x-btn-link href="{{ route('tenants.create') }}" class="mb-4">Add User</x-btn-link>
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <th class="text-xl text-gray-600 uppercase">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Name</th>
                                    <th scope="col" class="px-6 py-3">Email</th>
                                    <th scope="col" class="px-6 py-3">Domain</th>
                                </tr>
                            </th>
                            <tbody>
                                @foreach ($tenants as $tenant)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $tenant->name }}</th>
                                    <td class="px-6 py-4">{{ $tenant->email }}</td>
                                    <td class="px-6 py-4">
                                      @foreach ($tenant->domains as $domain)
                                          {{ $domain->domain }}{{ $loop->last ?'':',' }}
                                      @endforeach
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                      </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
