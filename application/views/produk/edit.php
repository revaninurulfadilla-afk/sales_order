<main>
    <div class="p-6 bg-gray-50 dark:bg-gray-900 min-h-screen">

        <div class="mb-6">
            <h2 class="text-3xl font-bold dark:text-white">
                Edit Produk
            </h2>

            <p class="dark:text-white">
                Ubah data produk
            </p>
        </div>

        <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">

        <form action="" method="post" enctype="multipart/form-data">

                <div class="grid gap-5">

                    <div>
                        <label class="mb-2 block dark:text-white">Kode Produk</label>

                        <input
                            type="text"
                            name="kode_produk"
                            value="<?= $produk->kode_produk ?>"
                            class="w-full rounded-lg border px-4 py-3 dark:text-white">
                    </div>

                    <div>
                        <label class="mb-2 block dark:text-white">Nama Produk</label>

                        <input
                            type="text"
                            name="nama_produk"
                            value="<?= $produk->nama_produk ?>"
                            class="w-full rounded-lg border px-4 py-3 dark:text-white">
                    </div>

                    <div>
                        <label class="mb-2 block dark:text-white">Harga</label>

                        <input
                            type="number"
                            name="harga"
                            value="<?= $produk->harga ?>"
                            class="w-full rounded-lg border px-4 py-3 dark:text-white">
                    </div>

                    <div>
                        <label class="mb-2 block dark:text-white">Stok</label>

                        <input
                            type="number"
                            name="stok"
                            value="<?= $produk->stok ?>"
                            class="w-full rounded-lg border px-4 py-3 dark:text-white">
                    </div>

                    <div>
                        <label class="mb-2 block dark:text-white">Satuan</label>

                        <select
                            name="satuan"
                            class="w-full rounded-lg border px-4 py-3 dark:text-white">

                            <option value="pcs" <?= ($produk->satuan == 'pcs') ? 'selected' : '' ?>>
                                PCS
                            </option>

                            <option value="unit" <?= ($produk->satuan == 'unit') ? 'selected' : '' ?>>
                                UNIT
                            </option>

                            <option value="box" <?= ($produk->satuan == 'box') ? 'selected' : '' ?>>
                                BOX
                            </option>

                        </select>
                    </div>

                    <div>
                        <label class="mb-2 block dark:text-white">Deskripsi</label>

                        <textarea
                            name="deskripsi"
                            rows="4"
                            class="w-full rounded-lg border px-4 py-3 dark:text-white"><?= $produk->deskripsi ?></textarea>
                    </div>

                    <div>
                        <label class="mb-2 block dark:text-white">Status</label>

                        <select
                            name="status"
                            class="w-full rounded-lg border px-4 py-3 dark:text-white">

                            <option value="1" <?= ($produk->status == 1) ? 'selected' : '' ?>>
                                Aktif
                            </option>

                            <option value="0" <?= ($produk->status == 0) ? 'selected' : '' ?>>
                                Nonaktif
                            </option>

                        </select>
                    </div>

                    <div class="flex gap-3">

                        <button
                            type="submit"
                            class="rounded-lg bg-brand-500 px-6 py-3 text-white dark:text-white">

                            Update

                        </button>

                        <a
                            href="<?= site_url('produk') ?>"
                            class="rounded-lg border px-6 py-3 dark:text-white">

                            Kembali

                        </a>

                    </div>

                </div>

            </div>

        </form>

    </div>
</main>