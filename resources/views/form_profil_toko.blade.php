<x-app-layout>
    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div>
                        <x-jet-application-logo class="block h-12 w-auto" />
                    </div>
                    <div class="mt-8 text-2xl">
                        Profil Toko
                    </div>
                    <form method="POST" action="">
                        @csrf
                        <div>
                            <x-jet-label for="username" value="{{ __('Username') }}" />
                            <x-jet-input id="username" class="block mt-1 w-full" type="username" name="username" :value="old('username')" required autofocus />
                        </div>
                        <div>
                            <x-jet-label for="nama_toko" value="{{ __('Nama Toko') }}" />
                            <x-jet-input id="nama_toko" class="block mt-1 w-full" type="nama_toko" name="nama_toko" :value="old('nama_toko')" required autofocus />
                        </div>
                        <div>
                            <x-jet-label for="alamat" value="{{ __('Alamat') }}" />
                            <x-jet-input id="alamat" class="block mt-1 w-full" type="nama" name="nama" :value="old('nama')" required autofocus />
                        </div>
                        <div>
                            <x-jet-label for="no_hp" value="{{ __('No HP') }}" />
                            <x-jet-input id="no_hp" class="block mt-1 w-full" type="no_hp" name="no_hp" :value="old('no_hp')" required autofocus />
                        </div>
                        <div>
                            <x-jet-label for="provinsi" value="{{ __('Provinsi') }}" />
                            <x-jet-input id="provinsi" class="block mt-1 w-full" type="provinsi" name="provinsi" :value="old('provinsi')" required autofocus />
                        </div>
                        <div>
                            <x-jet-label for="kabupaten" value="{{ __('Kabupaten') }}" />
                            <x-jet-input id="kabupaten" class="block mt-1 w-full" type="kabupaten" name="kabupaten" :value="old('kabupaten')" required autofocus />
                        </div>
                        <div>
                            <x-jet-label for="kecamatan" value="{{ __('Kecamatan') }}" />
                            <x-jet-input id="kecamatan" class="block mt-1 w-full" type="kecamatan" name="kecamatan" :value="old('kecamatan')" required autofocus />
                        </div>
                        <div>
                            <x-jet-label for="kode_pos" value="{{ __('Kode Pos') }}" />
                            <x-jet-input id="kode_pos" class="block mt-1 w-full" type="kode_pos" name="kode_pos" :value="old('kode_pos')" required autofocus />
                        </div>
                        <div>
                            <x-jet-label for="jenis_penjualan" value="{{ __('jenis_penjualan') }}" />
                            <x-jet-input id="jenis_penjualan" class="block mt-1 w-full" type="jenis_penjualan" name="jenis_penjualan" :value="old('jenis_penjualan')" required autofocus />
                        </div>
                        <div>
                            <x-jet-label for="tentang_toko" value="{{ __('Tentang Toko') }}" />
                            <x-textarea id="tentang_toko" class="block mt-1 w-full" type="tentang_toko" name="tentang_toko" :value="old('tentang_toko')" required autofocus />
                        </div>
                        <div>
                            <x-jet-label for="payment_methods" value="{{ __('Metode Pembayaran') }}" />
                            <x-jet-input id="payment_methods" class="block mt-1 w-full" type="payment_methods" name="payment_methods" :value="old('payment_methods')" required autofocus />
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
