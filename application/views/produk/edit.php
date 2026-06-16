<main>
    <div class="p-4 mx-auto max-w-4xl md:p-6">

        <div class="mb-6">
            <h2 class="text-3xl font-bold">
                Edit Produk
            </h2>

            <p class="text-gray-500">
                Ubah data produk
            </p>
        </div>

        <form action="" method="post">

            <div class="rounded-2xl border border-gray-200 bg-white p-6">

                <div class="grid gap-5">

                    <div>
                        <label class="mb-2 block">Kode Produk</label>

                        <input
                            type="text"
                            name="kode_produk"
                            value="<?= $produk->kode_produk ?>"
                            class="w-full rounded-lg border px-4 py-3">
                    </div>

                    <div>
                        <label class="mb-2 block">Nama Produk</label>

                        <input
                            type="text"
                            name="nama_produk"
                            value="<?= $produk->nama_produk ?>"
                            class="w-full rounded-lg border px-4 py-3">
                    </div>

                    <div>
                        <label class="mb-2 block">Harga</label>

                        <input
                            type="number"
                            name="harga"
                            value="<?= $produk->harga ?>"
                            class="w-full rounded-lg border px-4 py-3">
                    </div>

                    <div>
                        <label class="mb-2 block">Stok</label>

                        <input
                            type="number"
                            name="stok"
                            value="<?= $produk->stok ?>"
                            class="w-full rounded-lg border px-4 py-3">
                    </div>

                    <div>
                        <label class="mb-2 block">Satuan</label>

                        <select
                            name="satuan"
                            class="w-full rounded-lg border px-4 py-3">

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
                        <label class="mb-2 block">Deskripsi</label>

                        <textarea
                            name="deskripsi"
                            rows="4"
                            class="w-full rounded-lg border px-4 py-3"><?= $produk->deskripsi ?></textarea>
                    </div>

                    <div>
                        <label class="mb-2 block">Status</label>

                        <select
                            name="status"
                            class="w-full rounded-lg border px-4 py-3">

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
                            class="rounded-lg bg-brand-500 px-6 py-3 text-white">

                            Update

                        </button>

                        <a
                            href="<?= site_url('produk') ?>"
                            class="rounded-lg border px-6 py-3">

                            Kembali

                        </a>

                    </div>

                </div>

            </div>

        </form>

    </div>
</main>