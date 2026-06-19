<main>
    <div class="p-6 bg-gray-50 dark:bg-gray-900 min-h-screen">

        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <div>
                <h2 class="text-title-md2 font-bold text-dark dark:text-white">Dashboard</h2>
                <p class="text-sm text-gray-500">
                    Selamat datang, <?= $this->session->userdata('nama'); ?>
                </p>
            </div>
        </div>

        <!-- Row 1: Cards + Grafik -->
        <div style="display:flex; gap:20px; align-items:flex-start;">

            <!--Cards -->
           <div style="width:35%;">
                <div style="display:grid; grid-template-columns:1fr 1fr; gap:20px;">
           
                    <!-- Total Produk -->
                    <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-theme-sm dark:border-gray-800 dark:bg-white/[0.03]">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-gray-100 dark:bg-gray-800">
                            <svg class="h-6 w-6 text-gray-700 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7L12 3L4 7L12 11L20 7ZM4 7V17L12 21M20 7V17L12 21"></path>
                            </svg>
                        </div>
                        <p class="mt-6 text-sm text-gray-500">Total Produk</p>
                        <div class="mt-3 flex items-end justify-between">
                            <h3 class="mt-2 text-4xl font-bold text-gray-950 dark:text-white">
                                <?= number_format($total_produk) ?>
                            </h3>
                        </div>
                    </div>

                    <!-- Total Pelanggan -->
                    <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-theme-sm dark:border-gray-800 dark:bg-white/[0.03]">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-gray-100 dark:bg-gray-800">
                            <svg class="h-6 w-6 text-gray-700 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 21V19C17 17.9 16.1 17 15 17H5C3.9 17 3 17.9 3 19V21"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <p class="mt-6 text-sm text-gray-500">Total Pelanggan</p>
                        <div class="mt-3 flex items-end justify-between">
                            <h3 class="text-4xl font-bold text-gray-900 dark:text-white">
                                <?= number_format($total_pelanggan) ?>
                            </h3>
                        </div>
                    </div>

                    <!-- Total Sales -->
                    <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-theme-sm dark:border-gray-800 dark:bg-white/[0.03]">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-gray-100 dark:bg-gray-800">
                            <svg class="h-6 w-6 text-gray-700 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <circle cx="12" cy="7" r="4"></circle>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 22C4 17.5 7.5 14 12 14C16.5 14 20 17.5 20 22"></path>
                            </svg>
                        </div>
                        <p class="mt-6 text-sm text-gray-500">Total Sales</p>
                        <div class="mt-3 flex items-end justify-between">
                            <h3 class="text-4xl font-bold text-gray-900 dark:text-white">
                                <?= number_format($total_sales) ?>
                            </h3>
                        </div>
                    </div>

                    <!-- Total Sales Order -->
                    <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-theme-sm dark:border-gray-800 dark:bg-white/[0.03]">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-gray-100 dark:bg-gray-800">
                            <svg class="h-6 w-6 text-gray-700 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <circle cx="9" cy="20" r="1"></circle>
                                <circle cx="18" cy="20" r="1"></circle>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1H5L7.5 13H18L21 5H6"></path>
                            </svg>
                        </div>
                        <p class="mt-6 text-sm text-gray-500">Total Sales Order</p>
                        <div class="mt-3 flex items-end justify-between">
                            <h3 class="text-4xl font-bold text-gray-900 dark:text-white">
                                <?= number_format($total_order) ?>
                            </h3>
                        </div>
                    </div>

                </div>
            </div>

            <!--Grafik Sales Order -->
             <div style="width:65%;">

                <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-theme-sm dark:border-gray-800 dark:bg-white/[0.03]">

                    <!-- Header -->
                    <div class="mb-5">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Grafik Sales Order</h3>
                        <p class="mt-1 text-sm text-gray-500">
                            <?= date('d M Y', strtotime($tanggal_awal)) ?>
                            -
                            <?= date('d M Y', strtotime($tanggal_akhir)) ?>
                        </p>
                    </div>

                    <!-- Filter -->
                    <form method="get" id="filterForm" class="dark:text-white">
                        <input type="text" id="rangeTanggal" class="rounded-lg border px-4 py-2" placeholder="Pilih tanggal">
                        <input type="hidden" name="tanggal_awal" id="tanggal_awal" value="<?= $tanggal_awal ?>">
                        <input type="hidden" name="tanggal_akhir" id="tanggal_akhir" value="<?= $tanggal_akhir ?>">
                        <button type="submit" class="rounded-lg bg-brand-500 px-4 py-2 dark:text-white">Filter</button>
                    </form>

                    <!-- Grafik -->
                    <div id="chartOrder" style="height:300px;"></div>
                </div>
            </div>

        </div><br>

        <!-- Row 2: Tabel Sales Order Terbaru -->
        <div class="grid grid-cols-12 gap-5">
    <div class="col-span-12">

        <div class="overflow-hidden rounded-2xl border border-gray-200">

            <!-- Header -->
            <div class="flex items-center justify-between px-6 py-5">

                <h3 class="text-lg font-semibold dark:text-white">
                    Sales Order Terbaru
                </h3>

                <a href="<?= base_url('sales_order') ?>"
                   class="rounded-lg border px-4 py-2 text-sm font-medium dark:text-white">
                    Lihat Semua
                </a>

            </div>

            <!-- Table -->
            <div class="overflow-x-auto dark:text-white">

                <table class="min-w-full">

                    <thead>
                        <tr class="border-t border-b border-gray-200">

                            <th class="px-6 py-4 text-left text-sm font-medium dark:text-white">
                                Produk
                            </th>

                            <th class="px-6 py-4 text-left text-sm font-medium dark:text-white">
                                Pelanggan
                            </th>

                            <th class="px-6 py-4 text-left text-sm font-medium dark:text-white">
                                Sales
                            </th>

                            <th class="px-6 py-4 text-left text-sm font-medium dark:text-white">
                                Total
                            </th>

                            <th class="px-6 py-4 text-left text-sm font-medium dark:text-white">
                                Status
                            </th>

                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach($order_terbaru as $row): ?>

                        <tr class="border-b border-gray-100 hover:bg-slate-900">

                            <!-- FOTO + NAMA PRODUK -->
                            <td class="px-6 py-4">

                                <div class="flex items-center gap-3">
                                    

                                    <img
                                        src="http://localhost/sales_order/assets/src/images/product/<?= $row->foto_produk ?>"
                                        class="h-12 w-12 rounded-lg object-cover border">

                                    <div>

                                        <p class="font-medium dark:text-white">
                                            <?= $row->nama_produk ?>
                                        </p>

                                        <p class="text-sm dark:text-white">
                                            <?= $row->no_order ?>
                                        </p>

                                    </div>

                                </div>

                            </td>

                            <td class="px-6 py-4">
                                <?= $row->nama_pelanggan ?>
                            </td>

                            <td class="px-6 py-4">
                                <?= $row->nama_sales ?>
                            </td>

                            <td class="px-6 py-4 font-medium">
                                Rp <?= number_format($row->total_harga,0,',','.') ?>
                            </td>

                            <td class="px-6 py-4">

                                <?php if($row->status == 'Selesai'): ?>

                                    <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-600">
                                        Selesai
                                    </span>

                                <?php elseif($row->status == 'Pending'): ?>

                                    <span class="rounded-full bg-yellow-100 px-3 py-1 text-xs font-medium text-yellow-600">
                                        Pending
                                    </span>

                                <?php else: ?>

                                    <span class="rounded-full bg-red-100 px-3 py-1 text-xs font-medium text-red-600">
                                        Batal
                                    </span>

                                <?php endif; ?>

                            </td>

                        </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>
</div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var options = {
            series: [{ name: 'Total Order', data: <?= json_encode($chart_data) ?> }],
            chart: { type: 'bar', height: 300 },
            xaxis: { categories: <?= json_encode($chart_label) ?> }
        };
        var chart = new ApexCharts(document.querySelector("#chartOrder"), options);
        chart.render();
    </script>
    <script>
        flatpickr("#rangeTanggal", {
            mode: "range",
            dateFormat: "Y-m-d",
            defaultDate: ["<?= $tanggal_awal ?>", "<?= $tanggal_akhir ?>"],
            onChange: function(selectedDates) {
                if (selectedDates.length == 2) {
                    document.getElementById('tanggal_awal').value = flatpickr.formatDate(selectedDates[0], "Y-m-d");
                    document.getElementById('tanggal_akhir').value = flatpickr.formatDate(selectedDates[1], "Y-m-d");
                }
            }
        });
    </script>

</main>