<main>
    <div class="p-4 mx-auto max-w-4xl md:p-6">

        <div class="mb-6">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">
                Tambah Produk
            </h2>

            <p class="text-gray-500">
                Form tambah data produk
            </p>
        </div>

        <form action="" method="post">

            <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">

                <div class="border-b border-gray-200 px-6 py-4 dark:border-gray-800">
                    <h3 class="font-semibold">
                        Data Produk
                    </h3>
                </div>

                <div class="p-6 space-y-5">

                    <div>
                        <label class="mb-2 block">
                            Kode Produk
                        </label>

                        <input
                            type="text"
                            name="kode_produk"
                            required
                            placeholder="PRD001"
                            class="w-full rounded-lg border px-4 py-3">
                    </div>

                    <div>
                        <label class="mb-2 block">
                            Nama Produk
                        </label>

                        <input
                            type="text"
                            name="nama_produk"
                            required
                            placeholder="Nama Produk"
                            class="w-full rounded-lg border px-4 py-3">
                    </div>

                    <div>
                        <label class="mb-2 block">
                            Harga
                        </label>

                        <input
                            type="number"
                            name="harga"
                            required
                            placeholder="100000"
                            class="w-full rounded-lg border px-4 py-3">
                    </div>

                    <div>
                        <label class="mb-2 block">
                            Stok
                        </label>

                        <input
                            type="number"
                            name="stok"
                            required
                            placeholder="10"
                            class="w-full rounded-lg border px-4 py-3">
                    </div>

                    <div>
                        <label class="mb-2 block">
                            Satuan
                        </label>

                        <select
                            name="satuan"
                            class="w-full rounded-lg border px-4 py-3">

                            <option value="pcs">PCS</option>
                            <option value="unit">UNIT</option>
                            <option value="box">BOX</option>

                        </select>
                    </div>

                    <div>
                        <label class="mb-2 block">
                            Deskripsi
                        </label>

                        <textarea
                            name="deskripsi"
                            rows="4"
                            class="w-full rounded-lg border px-4 py-3"></textarea>
                    </div>

                    <div>
                        <label class="mb-2 block">
                            Status
                        </label>

                        <select
                            name="status"
                            class="w-full rounded-lg border px-4 py-3">

                            <option value="1">Aktif</option>
                            <option value="0">Nonaktif</option>

                        </select>
                    </div>

                </div>

            </div>

            <div class="mt-6 flex gap-3">

                <button
                    type="submit"
                    class="rounded-lg bg-brand-500 px-6 py-3 text-white">

                    Simpan

                </button>

                <a
                    href="<?= site_url('produk') ?>"
                    class="rounded-lg border px-6 py-3">

                    Kembali

                </a>

            </div>

        </form>

    </div>
</main>