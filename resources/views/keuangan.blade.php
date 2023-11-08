<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Keuangan') }}
            </h2>
        </div>
    </x-slot>
    <div>
        <label for="bulan" class="mr-2">Pilih Bulan:</label>
        <select id="bulan" class="border rounded px-2 py-1" style="color: black">
            <option value="januari">Januari</option>
            <option value="februari">Februari</option>
            <option value="maret">Maret</option>
            <option value="april">April</option>
            <option value="mei">Mei</option>
            <option value="juni">Juni</option>
            <option value="juli">Juli</option>
            <option value="agustus">Agustus</option>
            <option value="september">September</option>
            <option value="oktober">Oktober</option>
            <option value="november">November</option>
            <option value="desember">Desember</option>
            <!-- Tambahkan opsi bulan lainnya sesuai kebutuhan -->
        </select>
    </div>
    <div class="mt-4">
        <table class="min-w-full table-auto">
            <thead>
                <tr>
                    <th class="border px-4 py-2">Tanggal</th>
                    <th class="border px-4 py-2">Total Kas</th>
                    <th class="border px-4 py-2">Tujuan Pengeluaran</th>
                    <th class="border px-4 py-2">Jumlah Pemasukan</th>
                    <th class="border px-4 py-2">Jumlah Pengeluaran</th>
                    <th class="border px-4 py-2">Sisa Uang Kas</th>
                </tr>
            </thead>
            <tbody id="tabel-keuangan">
                <!-- Data Keuangan akan ditampilkan di sini -->
            </tbody>
        </table>
    </div>

    <script>
        // Contoh data keuangan untuk bulan Januari (anda dapat mengganti data ini dengan data yang sesuai)
        var dataKeuangan = [
            { tanggal: '01-01-2023', totalKas: 1000, tujuanPengeluaran: 'Makanan', jumlahPemasukan: 500, jumlahPengeluaran: 200, sisaUangKas: 1300 },
            { tanggal: '01-02-2023', totalKas: 1000, tujuanPengeluaran: 'Makanan', jumlahPemasukan: 500, jumlahPengeluaran: 200, sisaUangKas: 1300 },
            { tanggal: '01-03-2023', totalKas: 1000, tujuanPengeluaran: 'Makanan', jumlahPemasukan: 500, jumlahPengeluaran: 200, sisaUangKas: 1300 },
            { tanggal: '01-04-2023', totalKas: 1000, tujuanPengeluaran: 'Makanan', jumlahPemasukan: 500, jumlahPengeluaran: 200, sisaUangKas: 1300 },
            // Tambahkan data keuangan lainnya sesuai kebutuhan
        ];

        // Fungsi untuk memperbarui tabel keuangan berdasarkan bulan yang dipilih
        function updateTabelKeuangan(bulan) {
            var tabelKeuangan = document.getElementById('tabel-keuangan');
            tabelKeuangan.innerHTML = ''; // Menghapus data lama pada tabel

            // Menambahkan data keuangan sesuai dengan bulan yang dipilih
            dataKeuangan.forEach(function(data) {
                var row = document.createElement('tr');
                row.innerHTML = `
                    <td class="border px-4 py-2">${data.tanggal}</td>
                    <td class="border px-4 py-2">${data.totalKas}</td>
                    <td class="border px-4 py-2">${data.tujuanPengeluaran}</td>
                    <td class="border px-4 py-2">${data.jumlahPemasukan}</td>
                    <td class="border px-4 py-2">${data.jumlahPengeluaran}</td>
                    <td class="border px-4 py-2">${data.sisaUangKas}</td>
                `;
                tabelKeuangan.appendChild(row);
            });
        }

        // Mendengarkan perubahan pada dropdown bulan
        var selectBulan = document.getElementById('bulan');
        selectBulan.addEventListener('change', function() {
            var bulanTerpilih = selectBulan.value;
            updateTabelKeuangan(bulanTerpilih);
        });

        // Memperbarui tabel keuangan saat halaman dimuat (untuk menampilkan data bulan pertama)
        updateTabelKeuangan(selectBulan.value);
    </script>
</x-app-layout>

