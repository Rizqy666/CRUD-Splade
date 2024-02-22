<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Halaman Edit Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-splade-form class="space-y-4" action="{{ route('users.update', $user) }}" :default="$user"
                        method="PUT">
                        <x-splade-input name="name" placeholder="Your name" label="Username" />
                        <x-splade-input name="email" type="email" placeholder="Your Email Address" label="Email" />
                        <x-splade-select name="gender" label="Gender" :options="$user">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </x-splade-select>
                        <x-splade-input name="password" type="password" placeholder="Password" label="Password" />
                        <div class="flex justify-between">
                            <Link href="{{ route('users.index') }}"
                                class="inline-block bg-gray-200 hover:bg-gray-300 focus:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                            Back
                            </Link>
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-600 focus:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                                Simpan
                            </button>
                        </div>



                    </x-splade-form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
