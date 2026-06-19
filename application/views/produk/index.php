<main>
    <div class="p-6 bg-gray-50 dark:bg-gray-900 min-h-screen">

        <!-- Header -->
        <div class="flex items-center justify-between mb-6">

            <div>
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white">
                    Master Produk
                </h2>

                <p class="text-gray-500">
                    Data Produk Sales Order
                </p>
            </div>

            <a href="<?= site_url('produk/tambah') ?>"
               class="inline-flex items-center justify-center rounded-lg bg-brand-500 px-5 py-3 text-sm font-medium text-white hover:bg-brand-600">

                + Tambah Produk

            </a>

        </div>

        <!-- TABLE -->
        <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-theme-sm dark:border-gray-800 dark:bg-white/[0.03]">

            <!-- Search -->
            <div class="flex items-center justify-between p-5 border-b border-gray-200 dark:border-gray-800">

                <div class="flex items-center gap-3">

                    <span class="text-sm dark:text-white">
                        Show
                    </span>

                    <select id="showEntries"
                        class="rounded-lg border border-gray-300 px-3 py-2 text-sm dark:text-white">

                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>

                    </select>

                    <span class="text-sm dark:text-white">
                        entries
                    </span>

                </div>

                <div>

                    <form method="get">
                        <input
                            type="text"
                            name="keyword"
                            value="<?= $this->input->get('keyword') ?>"
                            placeholder="Search..."
                            class="h-11 rounded-lg border border-gray-300 px-4 text-sm dark:text-white">

                        <button type="submit">
                            Search
                        </button>
                    </form>

                </div>

            </div>

            <!-- Table -->
            <div class="max-w-full overflow-x-auto">

                <table class="w-full">

                    <thead>

                        <tr class="border-b border-gray-200 dark:border-gray-800">

                            <th class="px-5 py-4 text-left text-sm font-medium dark:text-white">
                                Produk
                            </th>

                            <th class="px-5 py-4 text-left text-sm font-medium dark:text-white">
                                Harga
                            </th>

                            <th class="px-5 py-4 text-left text-sm font-medium dark:text-white">
                                Stok
                            </th>

                            <th class="px-5 py-4 text-left text-sm font-medium dark:text-white">
                                Satuan
                            </th>

                            <th class="px-5 py-4 text-center text-sm font-medium dark:text-white">
                                Status
                            </th>

                            <th class="px-5 py-4 text-center text-sm font-medium dark:text-white">
                                Action
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                    <?php if(!empty($produk)): ?>

                        <?php foreach($produk as $row): ?>

                        <tr class="border-b border-gray-100 dark:border-gray-800">

                            <td class="px-5 py-4">

                            <div class="flex items-center gap-4">

                                <img
                                    src="http://localhost/sales_order/assets/src/images/product/<?= $row->foto_produk ?>"
                                    class="h-14 w-14 rounded-xl object-cover border border-gray-200 dark:border-gray-700">

                                <div>

                                    <p class="font-semibold text-gray-800 dark:text-white">
                                        <?= $row->nama_produk ?>
                                    </p>

                                    <p class="text-sm text-gray-500">
                                        <?= $row->kode_produk ?>
                                    </p>

                                </div>

                            </div>

                        </td>

                            <td class="px-5 py-4 text-gray-700 dark:text-white">
                                Rp <?= number_format($row->harga,0,',','.') ?>
                            </td>

                            <td class="px-5 py-4 text-gray-700 dark:text-white">
                                <?= $row->stok ?>
                            </td>

                            <td class="px-5 py-4 text-gray-700 dark:text-white">
                                <?= $row->satuan ?>
                            </td>

                            <td class="px-5 py-4 text-center ">

                                <?php if($row->status == 1): ?>

                                    <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700 dark:text-white">
                                        Aktif
                                    </span>

                                <?php else: ?>

                                    <span class="rounded-full bg-red-100 px-3 py-1 text-xs font-medium text-red-700 dark:text-white">
                                        Nonaktif
                                    </span>

                                <?php endif; ?>

                            </td>

                            <td class="px-5 py-4">

                                <div class="flex items-center justify-center gap-3">

                                    <a href="<?= site_url('produk/edit/'.$row->id) ?>"
                                       class="text-blue-600 hover:text-blue-800">

                                        ✏️

                                    </a>

                                    <a href="<?= site_url('produk/hapus/'.$row->id) ?>"
                                       onclick="return confirm('Hapus data ini?')"
                                       class="text-red-600 hover:text-red-800">

                                        🗑️

                                    </a>

                                </div>

                            </td>

                        </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>

                            <td colspan="7"
                                class="px-5 py-6 text-center text-gray-500 dark:text-gray-400">

                                Belum ada data produk

                            </td>

                        </tr>

                    <?php endif; ?>

                    </tbody>

                </table>

                <script>
                    const showEntries = document.getElementById('showEntries');
                    const rows = document.querySelectorAll('tbody tr');

                    function tampilkanData() {

                        let jumlah = parseInt(showEntries.value);

                        rows.forEach((row, index) => {

                            if(index < jumlah) {
                                row.style.display = '';
                            } else {
                                row.style.display = 'none';
                            }

                        });
                    }

                    showEntries.addEventListener('change', tampilkanData);

                    tampilkanData();
                    </script>

            </div>

        </div>

    </div>
</main>