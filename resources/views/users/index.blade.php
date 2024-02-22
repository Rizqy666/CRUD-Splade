<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Halaman Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-splade-link href="{{ route('users.create') }}"
                        class="mb-9 bg-blue-500 hover:bg-blue-600 focus:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                        Insert User
                    </x-splade-link>
                    <x-splade-table :for="$users" pagination-scroll="preserve">
                        <x-splade-cell actions as="$users">
                            <Link href="{{ route('users.edit', $users) }}"
                                class="bg-yellow-500 hover:bg-yellow-600 focus:bg-yellow-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                            Edit </Link>
                            <x-splade-form action="{{ route('users.destroy', $users) }}" method="delete"
                                confirm="Delete User" confirm-text="Are you sure you want to delete your User?"
                                confirm-button="Yes, delete everything!" cancel-button="No, I want to stay!">
                                <x-splade-button
                                    class="bg-red-500 hover:bg-red-600 focus:bg-red-500 text-white font-semibold py-2 px-4 shadow-md transition duration-300 case-in-out transform hover:-translate-y-1 hover:scale-105">Delete</x-splade-button>
                            </x-splade-form>
                        </x-splade-cell>
                    </x-splade-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
