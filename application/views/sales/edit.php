<main>
    <div class="p-6 bg-gray-50 dark:bg-gray-900 min-h-screen">

        <div class="mb-6">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">
                Edit Sales
            </h2>

            <p class="text-gray-500 dark:text-gray-400">
                Form edit data sales
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
                            value="<?= $sales->kode_sales ?>"
                            class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 dark:border-gray-700 dark:bg-transparent dark:text-white">
                    </div>

                    <div>
                        <label class="mb-2 block text-gray-700 dark:text-white">
                            Nama Sales
                        </label>

                        <input
                            type="text"
                            name="nama_sales"
                            value="<?= $sales->nama_sales ?>"
                            class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 dark:border-gray-700 dark:bg-transparent dark:text-white">
                    </div>

                    <div>
                        <label class="mb-2 block text-gray-700 dark:text-white">
                            Telepon
                        </label>

                        <input
                            type="text"
                            name="telepon"
                            value="<?= $sales->telepon ?>"
                            class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 dark:border-gray-700 dark:bg-transparent dark:text-white">
                    </div>

                    <div>
                        <label class="mb-2 block text-gray-700 dark:text-white">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            value="<?= $sales->email ?>"
                            class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 dark:border-gray-700 dark:bg-transparent dark:text-white">
                    </div>

                    <div>
                        <label class="mb-2 block text-gray-700 dark:text-white">
                            Status
                        </label>

                        <select
                            name="status"
                            class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 dark:border-gray-700 dark:bg-transparent dark:text-white">

                            <option value="1" <?= ($sales->status == 1) ? 'selected' : '' ?>>
                                Aktif
                            </option>

                            <option value="0" <?= ($sales->status == 0) ? 'selected' : '' ?>>
                                Nonaktif
                            </option>

                        </select>
                    </div>

                    <div class="flex gap-3">

                        <button
                            type="submit"
                            class="rounded-lg bg-brand-500 px-5 py-3 text-white">

                            Update

                        </button>

                        <a
                            href="<?= site_url('sales') ?>"
                            class="rounded-lg border px-5 py-3 dark:text-white">

                            Kembali

                        </a>

                    </div>

                </div>

            </form>

        </div>

    </div>
</main>