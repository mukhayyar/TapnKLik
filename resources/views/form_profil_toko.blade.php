<x-app-layout>
    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div>
                        <x-jet-application-logo class="block h-12 w-auto" />
                    </div>
                    <div class="mt-8 mb-2 text-2xl">
                        Lengkapi Profil Toko Kamu Terlebih Dahulu
                    </div>
                    <form method="POST" action="">
                        @csrf
                        <div>
                            <x-jet-label for="username" value="{{ __('Username') }}" />
                            <x-jet-input id="username" class="block mt-1 w-full" type="text" name="username" placeholder="Contoh: pentolenakjombang *tanpa spasi" :value="old('username')" required autofocus />
                        </div>
                        <div>
                            <x-jet-label for="nama_toko" value="{{ __('Nama Toko') }}" />
                            <x-jet-input id="nama_toko" class="block mt-1 w-full" type="text" placeholder="Contoh: Pentol Enak Jombang" name="nama_toko" :value="old('nama_toko')" required autofocus />
                        </div>
                        <div>
                            <x-jet-label for="alamat" value="{{ __('Alamat') }}" />
                            <x-jet-input id="alamat" class="block mt-1 w-full" type="text" placeholder="Contoh: Komplek Pondok Pesantren Darul Ulum, Depan Al Husna" name="nama" :value="old('nama')" required autofocus />
                        </div>
                        <div>
                            <x-jet-label for="no_hp" value="{{ __('No HP') }}" />
                            <x-jet-input id="no_hp" class="block mt-1 w-full" type="number" placeholder="Contoh: 082131313123" name="no_hp" :value="old('no_hp')" required autofocus />
                        </div>
                        <div>
                            <x-jet-label for="tentang_toko" value="{{ __('Tentang Toko') }}" />
                            <x-textarea id="tentang_toko" class="block mt-1 w-full" type="text" placeholder="Contoh: Saya menjual pentol yang enak di daerah jombang" name="tentang_toko" :value="old('tentang_toko')" required autofocus />
                        </div>
                        <div>
                            <x-jet-label for="payment_methods" value="{{ __('Metode Pembayaran') }}" /> *Sementara ini hanya memiliki sistem COD
                            <select name="payment_methods" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="-">-</option>
                                <option value="COD">COD</option>
                            </select>
                        </div>
                        <div>
                            <x-jet-label for="toko_menjual" value="{{ __('Saya Menjual') }}" />
                            <x-jet-input id="toko_menjual" class="block mt-1 w-full" type="text" placeholder="Contoh: Pentol" name="toko_menjual" :value="old('toko_menjual')" required autofocus />
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
