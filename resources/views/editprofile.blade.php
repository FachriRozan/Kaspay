<style>
    button:focus {
        outline: black;
    }
    
</style>
<x-app-layout>
    {{-- {{dd($user);}} --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg dark:bg-gray-800">
        <div class="max-w-xl">
            <form action="/afteredit" method="post">
                @csrf
                <label for="password_lama">Password Lama:</label>
                <input type="password" id="password_lama" name="password_lama" required><br><br>
                <label for="password_baru">Password Baru:</label>
                <input type="password" id="password_baru" name="password_baru" required><br><br>
                <label for="konfirmasi_password">Konfirmasi Password Baru:</label>
                <input type="password" id="konfirmasi_password" name="konfirmasi_password" required><br><br>
                <button type="submit" name="ubah_password" style="outline: none;">Ubah Password</button>
            </form>
        </div>
    </div>
</x-app-layout>