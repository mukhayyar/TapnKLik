<x-app-layout>
    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div>
                        <x-jet-application-logo class="block h-12 w-auto" />
                    </div>
                    <div class="mt-8 mb-2 text-2xl">
                        Masukkan No Hp untuk memulai menjadi Referral
                    </div>
                    <form method="POST" action="">
                        @csrf
                        <div>
                            <x-jet-label for="no_hp" value="{{ __('No Hp') }}" />
                            <x-jet-input id="no_hp" class="block mt-1 w-full" type="text" name="no_hp" placeholder="Contoh: 08211231231" :value="old('no_hp')" required autofocus />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-jet-button class="ml-4">
                                {{ __('Submit') }}
                            </x-jet-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
