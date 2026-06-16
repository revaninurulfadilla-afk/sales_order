<main>
    <div class="p-6 bg-gray-50 dark:bg-gray-900 min-h-screen">

        <!-- Header -->
        <div class="flex items-center justify-between mb-6">

            <div>
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white">
                    Master Sales
                </h2>

                <p class="text-gray-500 dark:text-gray-400">
                    Data Sales Sales Order
                </p>
            </div>

            <a href="<?= site_url('sales/tambah') ?>"
               class="rounded-lg bg-brand-500 px-5 py-3 text-white hover:bg-brand-600">

                + Tambah Sales

            </a>

        </div>

        <!-- Table -->
        <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-theme-sm dark:border-gray-800 dark:bg-white/[0.03]">

            <div class="overflow-x-auto">

                <table class="min-w-full">

                    <thead>

                        <tr class="border-b border-gray-200  dark:text-white">

                            <th class="px-6 py-4 text-left text-gray-700 dark:text-white">
                                Kode
                            </th>

                            <th class="px-6 py-4 text-left text-gray-700 dark:text-white">
                                Sales
                            </th>

                            <th class="px-6 py-4 text-left text-gray-700 dark:text-white">
                                Telepon
                            </th>

                            <th class="px-6 py-4 text-left text-gray-700 dark:text-white">
                                Email
                            </th>

                            <th class="px-6 py-4 text-left text-gray-700 dark:text-white">
                                Status
                            </th>

                            <th class="px-6 py-4 text-center text-gray-700 dark:text-white">
                                Action
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php if(!empty($sales)): ?>

                            <?php foreach($sales as $row): ?>

                            <tr class="border-b border-gray-100  dark:text-white">

                                <td class="px-6 py-4 text-gray-700  dark:text-white">
                                    <?= $row->kode_sales ?>
                                </td>

                                <td class="px-6 py-4">

                                    <div class="flex items-center gap-3">

                                        <div class="h-12 w-12 overflow-hidden rounded-full">

                                            <img
                                                src="<?= base_url('assets/images/sales/'.($row->foto ?: 'default.png')) ?>"
                                                alt=""
                                                class="h-full w-full object-cover">

                                        </div>

                                        <div>

                                            <p class="font-medium text-gray-800 dark:text-white">
                                                <?= $row->nama_sales ?>
                                            </p>

                                            <small class="text-gray-500 dark:text-gray-400">
                                                <?= $row->kode_sales ?>
                                            </small>

                                        </div>

                                    </div>

                                </td>

                                <td class="px-6 py-4 text-gray-700  dark:text-white">
                                    <?= $row->telepon ?>
                                </td>

                                <td class="px-6 py-4 text-gray-700  dark:text-white">
                                    <?= $row->email ?>
                                </td>

                                <td class="px-6 py-4">

                                    <?php if($row->status == 1): ?>

                                        <span class="rounded-full bg-green-100 px-3 py-1 text-xs text-green-600">
                                            Aktif
                                        </span>

                                    <?php else: ?>

                                        <span class="rounded-full bg-red-100 px-3 py-1 text-xs text-red-600">
                                            Nonaktif
                                        </span>

                                    <?php endif; ?>

                                </td>

                                <td class="px-6 py-4">

                                    <div class="flex justify-center gap-3">

                                        <a href="<?= site_url('sales/edit/'.$row->id) ?>"
                                           class="text-orange-500">
                                            ✏️
                                        </a>

                                        <a href="<?= site_url('sales/hapus/'.$row->id) ?>"
                                           onclick="return confirm('Hapus data?')"
                                           class="text-red-500">
                                            🗑️
                                        </a>

                                    </div>

                                </td>

                            </tr>

                            <?php endforeach; ?>

                        <?php else: ?>

                            <tr>

                                <td colspan="6"
                                    class="px-6 py-6 text-center text-gray-500 dark:text-gray-400">

                                    Belum ada data sales

                                </td>

                            </tr>

                        <?php endif; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>
</main>