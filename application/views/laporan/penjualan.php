<main>
    <div class="p-6 bg-gray-50 dark:bg-gray-900 min-h-screen">

        <div class="flex items-center justify-between mb-6">

            <div>
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white">
                    Laporan Penjualan
                </h2>

                <p class="text-gray-500 dark:text-gray-400">
                    Data seluruh transaksi sales order
                </p>
            </div>

            <a href="<?= site_url('laporan/cetak_penjualan') ?>?tanggal_awal=<?= $this->input->get('tanggal_awal') ?>&tanggal_akhir=<?= $this->input->get('tanggal_akhir') ?>"
                target="_blank"
                class="rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-white">
                Cetak PDF

            </a>
        </div>

        <form method="get" class="mb-4 flex items-end gap-2">

        <div>
            <label class="block text-sm mb-1 dark:text-white">
                Dari Tanggal
            </label>

            <input
                type="date"
                name="tanggal_awal"
                value="<?= $this->input->get('tanggal_awal') ?>"
                class="rounded-lg border px-3 py-2 text-sm dark:bg-gray-800 dark:text-white">
        </div>

        <div>
            <label class="block text-sm mb-1 dark:text-white">
                Sampai Tanggal
            </label>

            <input
                type="date"
                name="tanggal_akhir"
                value="<?= $this->input->get('tanggal_akhir') ?>"
                class="rounded-lg border px-3 py-2 text-sm dark:bg-gray-800 dark:text-white">
        </div>

        <button
            type="submit"
            class="rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-white">

            Filter

        </button>

        <a
            href="<?= site_url('laporan/penjualan') ?>"
            class="rounded-lg bg-gray-500 px-4 py-2 text-sm text-white">

            Reset

        </a>

    </form>

        <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-theme-sm dark:border-gray-800 dark:bg-white/[0.03]">

            <div class="overflow-x-auto">

                <table class="min-w-full">

                    <thead>

                        <tr class="border-b border-gray-200 dark:border-gray-800">

                            <th class="px-6 py-4 text-left dark:text-white">
                                No Order
                            </th>

                            <th class="px-6 py-4 text-left dark:text-white">
                                Tanggal
                            </th>

                            <th class="px-6 py-4 text-left dark:text-white">
                                Pelanggan
                            </th>

                            <th class="px-6 py-4 text-left dark:text-white">
                                Sales
                            </th>

                            <th class="px-6 py-4 text-left dark:text-white">
                                Total
                            </th>

                            <th class="px-6 py-4 text-left dark:text-white">
                                Status
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                    <?php foreach($laporan as $row): ?>

                        <tr class="border-b border-gray-100 dark:border-gray-800">

                            <td class="px-6 py-4 dark:text-white">
                                <?= $row->no_order ?>
                            </td>

                            <td class="px-6 py-4 dark:text-white">
                                <?= date('d-m-Y', strtotime($row->tanggal_order)) ?>
                            </td>

                            <td class="px-6 py-4 dark:text-white">
                                <?= $row->nama_pelanggan ?>
                            </td>

                            <td class="px-6 py-4 dark:text-white">
                                <?= $row->nama_sales ?>
                            </td>

                            <td class="px-6 py-4 font-semibold dark:text-white">
                                Rp <?= number_format($row->total_harga,0,',','.') ?>
                            </td>

                            <td class="px-6 py-4">

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

                        </tr>

                    <?php endforeach; ?>

                    </tbody>
                    <tfoot>

                    <tr class="bg-gray-50 dark:bg-gray-800">

                        <td colspan="4"
                            class="px-6 py-4 text-right font-bold dark:text-white">

                            Total Penjualan

                        </td>

                        <td class="px-6 py-4 font-bold dark:text-white">

                            Rp <?= number_format($grand_total,0,',','.') ?>

                        </td>

                        <td></td>

                    </tr>

                </tfoot>

                </table>

            </div>

        </div>

    </div>
</main>