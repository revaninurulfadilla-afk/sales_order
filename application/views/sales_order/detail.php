<main>
<div class="p-6 bg-gray-50 dark:bg-gray-900 min-h-screen">

    <div class="mb-6">

        <h2 class="text-3xl font-bold text-gray-800 dark:text-white">
            Detail Sales Order
        </h2>

        <p class="text-gray-500 dark:text-gray-400">
            <?= $order->no_order ?>
        </p>

    </div>

    <!-- Header Order -->
    <div class="mb-6 rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">

        <div class="grid grid-cols-2 gap-5">

            <div>

                <p class="text-gray-500">
                    No Order
                </p>

                <h5 class="font-semibold text-gray-800 dark:text-white">
                    <?= $order->no_order ?>
                </h5>

            </div>

            <div>

                <p class="text-gray-500">
                    Tanggal
                </p>

                <h5 class="font-semibold text-gray-800 dark:text-white">
                    <?= date('d-m-Y',strtotime($order->tanggal_order)) ?>
                </h5>

            </div>

            <div>

                <p class="text-gray-500">
                    Pelanggan
                </p>

                <h5 class="font-semibold text-gray-800 dark:text-white">
                    <?= $order->nama_pelanggan ?>
                </h5>

            </div>

            <div>

                <p class="text-gray-500">
                    Sales
                </p>

                <h5 class="font-semibold text-gray-800 dark:text-white">
                    <?= $order->nama_sales ?>
                </h5>

            </div>
            <div class="mt-4">

            <label class="block mb-2 font-medium dark:text-white">
                Status Order
            </label>

            <select
                onchange="location=this.value"
                class="rounded-lg border px-4 py-2 dark:bg-gray-800 dark:text-white">

                <option value="<?= site_url('sales_order/status/'.$order->id.'/draft') ?>"
                    <?= ($order->status=='draft') ? 'selected' : '' ?>>
                    Draft
                </option>

                <option value="<?= site_url('sales_order/status/'.$order->id.'/dikirim') ?>"
                    <?= ($order->status=='dikirim') ? 'selected' : '' ?>>
                    Dikirim
                </option>

                <option value="<?= site_url('sales_order/status/'.$order->id.'/selesai') ?>"
                    <?= ($order->status=='selesai') ? 'selected' : '' ?>>
                    Selesai
                </option>

                <option value="<?= site_url('sales_order/status/'.$order->id.'/dibatalkan') ?>"
                    <?= ($order->status=='dibatalkan') ? 'selected' : '' ?>>
                    Dibatalkan
                </option>

            </select>

        </div>

        </div>

    </div>

    <!-- Detail Produk -->
    <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">

        <table class="min-w-full">

            <thead>

                <tr class="border-b border-gray-200 dark:border-gray-800">

                    <th class="px-6 py-4 text-left dark:text-white">
                        Kode
                    </th>

                    <th class="px-6 py-4 text-left dark:text-white">
                        Produk
                    </th>

                    <th class="px-6 py-4 text-left dark:text-white">
                        Qty
                    </th>

                    <th class="px-6 py-4 text-left dark:text-white">
                        Harga
                    </th>

                    <th class="px-6 py-4 text-left dark:text-white">
                        Subtotal
                    </th>

                </tr>

            </thead>

            <tbody>

            <?php foreach($detail as $row): ?>

                <tr class="border-b border-gray-100 dark:border-gray-800">

                    <td class="px-6 py-4 dark:text-white">
                        <?= $row->kode_produk ?>
                    </td>

                    <td class="px-6 py-4 dark:text-white">
                        <?= $row->nama_produk ?>
                    </td>

                    <td class="px-6 py-4 dark:text-white">
                        <?= $row->qty ?>
                    </td>

                    <td class="px-6 py-4 dark:text-white">
                        Rp <?= number_format($row->harga_satuan,0,',','.') ?>
                    </td>

                    <td class="px-6 py-4 dark:text-white">
                        Rp <?= number_format($row->subtotal,0,',','.') ?>
                    </td>

                </tr>

            <?php endforeach; ?>

            </tbody>

            <tfoot>

                <tr>

                    <td colspan="4"
                        class="px-6 py-4 text-right font-bold dark:text-white">

                        Grand Total

                    </td>

                    <td class="px-6 py-4 font-bold text-brand-500">

                        Rp <?= number_format($order->total_harga,0,',','.') ?>

                    </td>

                </tr>

            </tfoot>

        </table>

    </div>

</div>
</main>