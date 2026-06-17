<main>
    <div class="p-6 bg-gray-50 dark:bg-gray-900 min-h-screen">

        <div class="mb-6">

            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">
                Tambah Sales Order
            </h2>

            <p class="text-gray-500 dark:text-gray-400">
                Buat transaksi sales order baru
            </p>

        </div>

        <form method="post">

            <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                    <div>
                        <label class="mb-2 block text-gray-700 dark:text-white">
                            No Order
                        </label>

                        <input
                            type="text"
                            name="no_order"
                            value="SO<?= date('YmdHis') ?>"
                            readonly
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 dark:border-gray-700 dark:bg-gray-800 dark:text-white">
                    </div>

                    <div>
                        <label class="mb-2 block text-gray-700 dark:text-white">
                            Tanggal Order
                        </label>

                        <input
                            type="date"
                            name="tanggal_order"
                            value="<?= date('Y-m-d') ?>"
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 dark:border-gray-700 dark:bg-gray-800 dark:text-white">
                    </div>

                    <div>
                        <label class="mb-2 block text-gray-700 dark:text-white">
                            Pelanggan
                        </label>

                        <select
                            name="pelanggan_id"
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 dark:border-gray-700 dark:bg-gray-800 dark:text-white">

                            <?php foreach($pelanggan as $p): ?>
                                <option value="<?= $p->id ?>">
                                    <?= $p->nama_pelanggan ?>
                                </option>
                            <?php endforeach; ?>

                        </select>
                    </div>

                    <div>
                        <label class="mb-2 block text-gray-700 dark:text-white">
                            Sales
                        </label>

                        <?php if($this->session->userdata('role') == 'sales'): ?>
                            <input
                                type="text"
                                value="<?= $this->session->userdata('nama') ?>"
                                readonly class="w-full rounded-lg border border-gray-300 bg-gray-100 px-4 py-3 dark:border-gray-700 dark:bg-gray-800 dark:text-white">
                            <?php endif; ?>

                            <?php if($this->session->userdata('role') == 'admin'): ?>
                            <select name="sales_id" class="w-full rounded-lg border border-gray-300 px-4 py-3 dark:border-gray-700 dark:bg-gray-800 dark:text-white">
                                <?php foreach($sales as $s): ?>
                                    <option value="<?= $s->id ?>">
                                        <?= $s->nama_sales ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <?php endif; ?>
                        
                    </div>

                </div>

                <div>

                    <label class="mb-2 block text-gray-700 dark:text-white">
                        Status
                    </label>

                    <input
                        type="text"
                        value="Draft"
                        readonly
                        class="w-full rounded-lg border border-gray-300 bg-gray-100 px-4 py-3 dark:border-gray-700 dark:bg-gray-800 dark:text-white">

                    <input
                        type="hidden"
                        name="status"
                        value="draft">

                </div>

                <div class="mt-6 flex gap-3">

                    <button
                        type="submit"
                        class="rounded-lg bg-brand-500 px-5 py-3 text-white">

                        Simpan Order

                    </button>

                    <a
                        href="<?= site_url('sales_order') ?>"
                        class="rounded-lg border border-gray-300 px-5 py-3 dark:border-gray-700 dark:text-white">

                        Kembali

                    </a>

                </div>

            </div>

        </form>

    </div>
</main>