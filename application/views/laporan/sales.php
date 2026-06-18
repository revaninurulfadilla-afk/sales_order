<main>
    <div class="p-6 bg-gray-50 dark:bg-gray-900 min-h-screen">

        <div class="flex items-center justify-between mb-6">

            <div>

                <h2 class="text-3xl font-bold text-gray-800 dark:text-white">
                    Laporan Sales
                </h2>

                <p class="text-gray-500 dark:text-gray-400">
                    Data performa penjualan sales
                </p>

            </div>

            <a href="<?= site_url('laporan/cetak_sales?sales_id='.$this->input->get('sales_id')) ?>"
               target="_blank"
               class="rounded-lg bg-green-500 px-4 py-2 dark:text-white">

                Cetak

            </a>

        </div>

        <!-- Filter -->
        <form method="get" class="mb-4 flex items-end gap-2">

            <div>

                <label class="block text-sm mb-1 dark:text-white">
                    Sales
                </label>

                <select
                    name="sales_id"
                    class="rounded-lg border border-gray-300 px-3 py-2 dark:border-gray-700 dark:bg-gray-800 dark:text-white">

                    <option value="">
                        Semua Sales
                    </option>

                    <?php foreach($sales_list as $s): ?>

                    <option
                        value="<?= $s->id ?>"
                        <?= ($this->input->get('sales_id') == $s->id) ? 'selected' : '' ?>>

                        <?= $s->nama_sales ?>

                    </option>

                    <?php endforeach; ?>

                </select>

            </div>

            <button
                type="submit"
                class="rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-white">
                Filter

            </button>

            <a
                href="<?= site_url('laporan/sales') ?>"
                class="rounded-lg bg-gray-500 px-4 py-2 text-white">

                Reset

            </a>

        </form>

        <!-- Table -->
        <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-theme-sm dark:border-gray-800 dark:bg-white/[0.03]">

            <div class="overflow-x-auto">

                <table class="min-w-full">

                    <thead>

                        <tr class="border-b border-gray-200 dark:border-gray-800">

                            <th class="px-6 py-4 text-left dark:text-white">
                                No
                            </th>

                            <th class="px-6 py-4 text-left dark:text-white">
                                Nama Sales
                            </th>

                            <th class="px-6 py-4 text-left dark:text-white">
                                Total Order
                            </th>

                            <th class="px-6 py-4 text-left dark:text-white">
                                Total Penjualan
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                    <?php if(!empty($laporan)): ?>

                        <?php $no=1; foreach($laporan as $row): ?>

                        <tr class="border-b border-gray-100 dark:border-gray-800">

                            <td class="px-6 py-4 dark:text-white">
                                <?= $no++ ?>
                            </td>

                            <td class="px-6 py-4 dark:text-white">
                                <?= $row->nama_sales ?>
                            </td>

                            <td class="px-6 py-4 dark:text-white">
                                <?= $row->total_order ?>
                            </td>

                            <td class="px-6 py-4 font-semibold dark:text-white">
                                Rp <?= number_format($row->total_penjualan,0,',','.') ?>
                            </td>

                        </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>

                            <td colspan="4"
                                class="px-6 py-6 text-center text-gray-500 dark:text-gray-400">

                                Tidak ada data

                            </td>

                        </tr>

                    <?php endif; ?>

                    </tbody>

                    <tfoot>

                        <tr class="bg-gray-50 dark:bg-gray-800">

                            <td colspan="2"
                                class="px-6 py-4 text-right font-bold dark:text-white">

                                Grand Total

                            </td>

                            <td class="px-6 py-4 font-bold dark:text-white">

                                <?= $grand_order ?>

                            </td>

                            <td class="px-6 py-4 font-bold dark:text-white">

                                Rp <?= number_format($grand_penjualan,0,',','.') ?>

                            </td>

                        </tr>

                    </tfoot>

                </table>

            </div>

        </div>

    </div>
</main>