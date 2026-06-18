<main>
    <div class="p-6 bg-gray-50 dark:bg-gray-900 min-h-screen">

        <div class="flex items-center justify-between mb-6">

            <div>

                <h2 class="text-3xl font-bold text-gray-800 dark:text-white">
                    Laporan Produk
                </h2>

                <p class="text-gray-500 dark:text-gray-400">
                    Data produk terjual
                </p>

            </div>

            <a href="<?= site_url('laporan/cetak_produk') ?>?produk_id=<?= $this->input->get('produk_id') ?>"
                target="_blank"
               class="rounded-lg bg-green-500 px-4 py-2 dark:text-white">

                Cetak PDF

            </a>

        </div>
        <form method="get" class="mb-4 flex items-end gap-2">

        <div>

            <label class="block text-sm mb-1 dark:text-white">
                Produk
            </label>

            <select
                name="produk_id"
                class="rounded-lg border px-3 py-2 dark:bg-gray-800 dark:text-white">

                <option value="">
                    Semua Produk
                </option>

                <?php foreach($produk_list as $p): ?>

                    <option
                        value="<?= $p->id ?>"
                        <?= ($this->input->get('produk_id') == $p->id) ? 'selected' : '' ?>>

                        <?= $p->nama_produk ?>

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
            href="<?= site_url('laporan/produk') ?>"
            class="rounded-lg bg-gray-500 px-4 py-2 text-white">

            Reset

        </a>

    </form>
        <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-theme-sm dark:border-gray-800 dark:bg-white/[0.03]">

            <table class="min-w-full">

                <thead>

                    <tr class="border-b border-gray-200 dark:border-gray-800">

                        <th class="px-6 py-4 text-left dark:text-white">
                            No
                        </th>

                        <th class="px-6 py-4 text-left dark:text-white">
                            Produk
                        </th>

                        <th class="px-6 py-4 text-left dark:text-white">
                            Total Terjual
                        </th>

                    </tr>

                </thead>

                <tbody>

                <?php $no=1; foreach($laporan as $row): ?>

                    <tr class="border-b border-gray-100 dark:border-gray-800">

                        <td class="px-6 py-4 dark:text-white">
                            <?= $no++ ?>
                        </td>

                        <td class="px-6 py-4 dark:text-white">
                            <?= $row->nama_produk ?>
                        </td>

                        <td class="px-6 py-4 font-semibold dark:text-white">
                            <?= $row->total_terjual ?>
                        </td>

                    </tr>

                <?php endforeach; ?>

                </tbody>
                <tfoot>

                <tr>

                    <td colspan="2"
                        class="px-6 py-4 text-right font-bold dark:text-white">

                        Total Terjual

                    </td>

                    <td class="px-6 py-4 font-bold dark:text-white">

                        <?= number_format($grand_total,0,',','.') ?>

                    </td>

                </tr>

                </tfoot>

            </table>

        </div>

    </div>
</main>