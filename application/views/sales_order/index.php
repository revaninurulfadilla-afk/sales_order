<main>
    <div class="p-6 bg-gray-50 dark:bg-gray-900 min-h-screen">

        <!-- Header -->
        <div class="flex items-center justify-between mb-6">

            <div>

                <h2 class="text-3xl font-bold text-gray-800 dark:text-white">
                    Sales Order
                </h2>

                <p class="text-gray-500 dark:text-gray-400">
                    Data Transaksi Sales Order
                </p>

            </div>

            <a href="<?= site_url('sales_order/tambah') ?>"
               class="rounded-lg bg-brand-500 px-5 py-3 text-white hover:bg-brand-600">

                + Buat Order

            </a>

        </div>

        <!-- Table -->
        <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-theme-sm dark:border-gray-800 dark:bg-white/[0.03]">

            <div class="overflow-x-auto">

                <table class="min-w-full">

                    <thead>

                        <tr class="border-b border-gray-200 dark:border-gray-800">

                            <th class="px-6 py-4 text-left text-gray-700 dark:text-white">
                                No Order
                            </th>

                            <th class="px-6 py-4 text-left text-gray-700 dark:text-white">
                                Tanggal
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

                            <th class="px-6 py-4 text-center text-gray-700 dark:text-white">
                                Action
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                    <?php if(!empty($order)): ?>

                        <?php foreach($order as $row): ?>

                        <tr class="border-b border-gray-100 dark:border-gray-800">

                            <td class="px-6 py-4 text-gray-700 dark:text-white ">
                                <?= $row->no_order ?>
                            </td>

                            <td class="px-6 py-4 text-gray-700 dark:text-white">
                                <?= date('d-m-Y', strtotime($row->tanggal_order)) ?>
                            </td>

                            <td class="px-6 py-4 text-gray-700 dark:text-white">
                                <?= $row->nama_pelanggan ?>
                            </td>

                            <td class="px-6 py-4 text-gray-700 dark:text-white">
                                <?= $row->nama_sales ?>
                            </td>

                            <td class="px-6 py-4 font-semibold text-gray-700 dark:text-white">
                                Rp <?= number_format($row->total_harga,0,',','.') ?>
                            </td>

                            <td class="px-6 py-4 dark:text-white">

                                <?php if($row->status == 'draft'): ?>

                                    <span class="rounded-full bg-yellow-100 px-3 py-1 text-xs text-yellow-600">
                                        Draft
                                    </span>

                                <?php elseif($row->status == 'dikirim'): ?>

                                    <span class="rounded-full bg-blue-100 px-3 py-1 text-xs text-blue-600">
                                        Dikirim
                                    </span>

                                <?php elseif($row->status == 'selesai'): ?>

                                    <span class="rounded-full bg-green-100 px-3 py-1 text-xs text-green-600">
                                        Selesai
                                    </span>

                                <?php else: ?>

                                    <span class="rounded-full bg-red-100 px-3 py-1 text-xs text-red-600">
                                        Dibatalkan
                                    </span>

                                <?php endif; ?>

                            </td>

                            <td class="px-6 py-4">

                                <div class="flex justify-center gap-3">

                                    <a href="<?= site_url('sales_order/detail/'.$row->id) ?>">
                                        👁️
                                    </a>

                                    <?php if($this->session->userdata('role') == 'admin'): ?>
                                    <a href="<?= site_url('sales_order/hapus/'.$row->id) ?>">
                                        🗑️
                                    </a>
                                    <?php endif; ?>

                                </div>

                            </td>

                        </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>

                            <td colspan="7"
                                class="px-6 py-6 text-center text-gray-500 dark:text-gray-400">

                                Belum ada data sales order

                            </td>

                        </tr>

                    <?php endif; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>
</main>