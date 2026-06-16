<main>
    <div class="p-6 bg-gray-50 dark:bg-gray-900 min-h-screen">

        <div class="mb-6">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">
                Tambah Sales
            </h2>

            <p class="text-gray-500 dark:text-gray-400">
                Form tambah data sales
            </p>
        </div>

        <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">

            <form action="" method="post" enctype="multipart/form-data">

                <div class="grid gap-5">

                    <div>
                        <label class="mb-2 block text-gray-700 dark:text-white">
                            Kode Sales
                        </label>

                        <input
                            type="text"
                            name="kode_sales"
                            required
                            class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 text-gray-800 dark:border-gray-700 dark:bg-gray-900 dark:text-white">
                    </div>

                    <div>
                        <label class="mb-2 block text-gray-700 dark:text-white">
                            Nama Sales
                        </label>

                        <input
                            type="text"
                            name="nama_sales"
                            required
                            class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 text-gray-800 focus:border-brand-500 focus:outline-none dark:border-gray-700 dark:bg-transparent dark:text-white">
                    </div>

                    <div>
                        <label class="mb-2 block text-gray-700 dark:text-white">
                            Telepon
                        </label>

                        <input
                            type="text"
                            name="telepon"
                            class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 text-gray-800 dark:border-gray-700 dark:bg-gray-900 dark:text-white">
                    </div>

                    <div>
                        <label class="mb-2 block text-gray-700 dark:text-white">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 text-gray-800 dark:border-gray-700 dark:bg-gray-900 dark:text-white">
                    </div>

                    <div>
                        <label class="mb-2 block text-gray-700 dark:text-white">
                            Foto
                        </label>

                        <input
                            type="file"
                            name="foto"
                            class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 text-gray-800 dark:border-gray-700 dark:bg-gray-900 dark:text-white">
                    </div>

                    <div>
                        <label class="mb-2 block text-gray-700 dark:text-white">
                            Status
                        </label>

                        <select
                            name="status"
                            class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 dark:text-white dark:border-gray-700 dark:bg-transparent">

                            <option value="1">Aktif</option>
                            <option value="0">Nonaktif</option>

                        </select>
                    </div>

                    <div class="flex gap-3">

                        <button
                            type="submit"
                            class="rounded-lg bg-brand-500 px-5 py-3 text-white hover:bg-brand-600">

                            Simpan

                        </button>

                        <a
                            href="<?= site_url('sales') ?>"
                            class="rounded-lg border border-gray-300 px-5 py-3 text-gray-700 dark:border-gray-700 dark:text-white">

                            Kembali

                        </a>

                    </div>

                </div>

            </form>

        </div>

    </div>
</main>