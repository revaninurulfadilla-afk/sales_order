<main>
    <div class="p-6 bg-gray-50 dark:bg-gray-900 min-h-screen">
        <div class="mb-6">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">
                Tambah Produk
            </h2>

            <p class="text-gray-500 ">
                Form tambah data produk
            </p>
        </div>

        <form method="post" enctype="multipart/form-data" action="<?= site_url('produk/simpan') ?>">
            <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">

                <div class="border-b border-gray-200 px-6 py-4 dark:border-gray-800 dark:text-white">
                    <h3 class="font-semibold">
                        Data Produk
                    </h3>
                </div>

                <div class="p-6 space-y-5 dark:text-white">

                    <div>
                        <label class="mb-2 block ">
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
            <!-- FOTO PRODUK -->
            <div class="mt-6 rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">

                <div class="border-b border-gray-200 px-6 py-4 dark:border-gray-800">
                    <h3 class="font-semibold text-gray-800 dark:text-white">
                        Foto Produk
                    </h3>
                </div>

                <div class="p-6">

                    <label class="mb-2 block font-medium text-gray-700 dark:text-white">
                        Pilih Foto Produk
                    </label>

                    <input
                        type="file"
                        name="foto_produk"
                        accept="image/*"
                        class="block w-full rounded-lg border border-gray-300 text-sm
                            file:mr-4
                            file:rounded-lg
                            file:border-0
                            file:bg-brand-500
                            file:px-4
                            file:py-2
                            file:font-medium
                            file:text-white
                            hover:file:bg-brand-600
                            dark:border-gray-700
                            dark:text-white">

                    <p class="mt-2 text-xs text-gray-500">
                        Format: JPG, JPEG, PNG, WEBP. Maksimal 2MB.
                    </p>

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
                    class="rounded-lg border px-6 py-3 dark:text-white">

                    Kembali

                </a>

            </div>

        </form>

    </div>
</main>