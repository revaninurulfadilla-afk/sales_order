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
            <?php if($this->session->userdata('role') == 'admin'): ?>

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
            <?php endif; ?>

        </div>

        </div>

    </div>

    <?php if($this->session->userdata('role') != 'manager'): ?>

    <div class="mb-6 rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">

        <form action="<?= site_url('sales_order/tambah_item/'.$order->id) ?>" method="post">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

                <div>
                    <label class="block mb-2 dark:text-white">
                        Produk
                    </label>

                    <select
                        name="produk_id"
                        class="w-full rounded-lg border px-4 py-3 dark:bg-gray-800 dark:text-white">

                        <?php foreach($produk as $p): ?>
                        <option value="<?= $p->id ?>">
                            <?= $p->nama_produk ?>
                        </option>
                        <?php endforeach; ?>

                    </select>
                </div>

                <div>
                    <label class="block mb-2 dark:text-white">
                        Qty
                    </label>

                    <input
                        type="number"
                        name="qty"
                        min="1"
                        value="1"
                        class="w-full rounded-lg border px-4 py-3 dark:bg-gray-800 dark:text-white">
                </div>

                <div class="flex items-end">
                    <button
                        type="submit"
                        class="rounded-lg bg-brand-500 px-5 py-3 text-white">

                        Tambah Produk

                    </button>
                </div>

            </div>

        </form>

    </div>

    <?php endif; ?>

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
    <div class="mt-6 flex gap-3">
        <a href="<?= site_url('sales_order') ?>"
            class="rounded-lg border border-gray-300 px-5 py-3 dark:border-gray-700 dark:text-white">
                Kembali
        </a>
    </div>

</div>
</main>