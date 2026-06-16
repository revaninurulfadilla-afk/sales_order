
<main>
    <div class="p-6 bg-gray-50 dark:bg-gray-900 min-h-screen">

        <div class="mb-6">
            <h2 class="text-title-md2 font-bold text-dark dark:text-white">
                Dashboard
            </h2>

            <p class="text-sm text-gray-500">
                Selamat datang, <?= $this->session->userdata('nama'); ?>
            </p>
        </div>

        <div class="grid grid-cols-12 gap-4 md:gap-6">

            <!-- Metric Group -->
            <div class="col-span-12 space-y-6">

                <!-- Cards -->
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4 md:gap-6">

                    <!-- Produk -->
                    <div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-theme-sm dark:border-gray-800 dark:bg-white/[0.03]">

                        <div class="flex items-center justify-between">

                            <div>
                                <span class="text-sm text-gray-500">
                                    Total Produk
                                </span>

                                <h4 class="mt-2 text-2xl font-bold text-gray-800 dark:text-white">
                                    <?= $total_produk ?>
                                </h4>
                            </div>

                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50">
                                📦
                            </div>

                        </div>

                    </div>

                    <!-- Pelanggan -->
                    <div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-theme-sm dark:border-gray-800 dark:bg-white/[0.03]">

                        <div class="flex items-center justify-between">

                            <div>
                                <span class="text-sm text-gray-500">
                                    Total Pelanggan
                                </span>

                                <h4 class="mt-2 text-2xl font-bold text-gray-800 dark:text-white">
                                    <?= $total_pelanggan ?>
                                </h4>
                            </div>

                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-50">
                                👥
                            </div>

                        </div>

                    </div>

                    <!-- Sales -->
                    <div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-theme-sm dark:border-gray-800 dark:bg-white/[0.03]">

                        <div class="flex items-center justify-between">

                            <div>
                                <span class="text-sm text-gray-500">
                                    Total Sales
                                </span>

                                <h4 class="mt-2 text-2xl font-bold text-gray-800 dark:text-white">
                                    <?= $total_sales ?>
                                </h4>
                            </div>

                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-yellow-50">
                                👨‍💼
                            </div>

                        </div>

                    </div>

                    <!-- Order -->
                    <div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-theme-sm dark:border-gray-800 dark:bg-white/[0.03]">

                        <div class="flex items-center justify-between">

                            <div>
                                <span class="text-sm text-gray-500">
                                    Total Sales Order
                                </span>

                                <h4 class="mt-2 text-2xl font-bold text-gray-800 dark:text-white">
                                    <?= $total_order ?>
                                </h4>
                            </div>

                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-red-50">
                                🛒
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Table -->
            <div class="col-span-12">

                <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-theme-sm dark:border-gray-800 dark:bg-white/[0.03]">

                    <div class="px-6 py-4 text-gray-700 dark:text-gray-300">

                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">
                            Sales Order Terbaru
                        </h3>

                    </div>

                    <div class="overflow-x-auto">

                        <table class="min-w-full">

                            <thead>

                                <tr class="border-b border-gray-200">

                                    <th class="px-6 py-4 text-left text-gray-700 dark:text-white">
                                        No Order
                                    </th>

                                    <th class="px-6 py-4 text-left text-gray-700 dark:text-white">
                                        Pelanggan
                                    </th>

                                    <th class="px-6 py-4 text-left text-gray-700 dark:text-white">
                                        Sales
                                    </th>

                                    <th class="px-6 py-4 text-left text-gray-700 dark:text-white">
                                        Total
                                    </th>

                                    <th class="px-6 py-4 text-left text-gray-700 dark:text-white">
                                        Status
                                    </th>

                                </tr>

                            </thead>

                            <tbody>

                            <?php if(!empty($order_terbaru)): ?>

                                <?php foreach($order_terbaru as $row): ?>

                                <tr class="border-b border-gray-100">

                                    <td class="px-6 py-4">
                                        <?= $row->no_order ?>
                                    </td>

                                    <td class="px-6 py-4">
                                        <?= $row->nama_pelanggan ?>
                                    </td>

                                    <td class="px-6 py-4">
                                        <?= $row->nama_sales ?>
                                    </td>

                                    <td class="px-6 py-4">
                                        Rp <?= number_format($row->grand_total,0,',','.') ?>
                                    </td>

                                    <td class="px-6 py-4">
                                        <?= $row->status ?>
                                    </td>

                                </tr>

                                <?php endforeach; ?>

                            <?php else: ?>

                                <tr>

                                    <td colspan="5"
                                        class="px-6 py-6 text-center text-gray-700 dark:text-white">

                                        Belum ada data

                                    </td>

                                </tr>

                            <?php endif; ?>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>
</main>