<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Pembayaran') }}
            </h2>
        </div>
    </x-slot>

    <div class="mt-4">
        <h3 class="text-lg font-semibold mb-2">Tabel Pembayaran Fachri Rozan</h3>
        <table class="min-w-full table-auto">
            <thead>
                <tr>
                    <th class="border px-4 py-2">Nomor</th>
                    <th class="border px-4 py-2">Bulan</th>
                    <th class="border px-4 py-2">Jumlah Uang Kas</th>
                    <th class="border px-4 py-2">Status Pembayaran</th>
                </tr>
            </thead>
            <tbody id="tabel-pembayaran">
                <!-- Data Pembayaran akan ditampilkan di sini -->
            </tbody>
        </table>
    </div>

    <script>
        // Contoh data pembayaran (gantilah dengan data yang sesuai dengan kebutuhan Anda)
        var dataPembayaran = [
            { nomor: 1, bulan: 'Januari', jumlahUangKas: 1000, statusPembayaran: 'Lunas' },
            { nomor: 2, bulan: 'Februari', jumlahUangKas: 1000, statusPembayaran: 'Belum Lunas' },
            // Tambahkan data pembayaran lainnya sesuai kebutuhan
        ];

        // Fungsi untuk memperbarui tabel pembayaran
        function updateTabelPembayaran() {
            var tabelPembayaran = document.getElementById('tabel-pembayaran');
            tabelPembayaran.innerHTML = ''; // Menghapus data lama pada tabel

            // Menambahkan data pembayaran ke tabel
            dataPembayaran.forEach(function(data) {
                var row = document.createElement('tr');
                row.innerHTML = `
                    <td class="border px-4 py-2">${data.nomor}</td>
                    <td class="border px-4 py-2">${data.bulan}</td>
                    <td class="border px-4 py-2">${data.jumlahUangKas}</td>
                    <td class="border px-4 py-2">${data.statusPembayaran}</td>
                `;
                tabelPembayaran.appendChild(row);
            });
        }

        // Memperbarui tabel pembayaran saat halaman dimuat
        updateTabelPembayaran();
    </script>
</x-app-layout>
