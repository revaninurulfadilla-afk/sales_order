<main>
        <div class="p-6 bg-gray-50 dark:bg-gray-900 min-h-screen">

        <div class="mb-6">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">
                Edit Pelanggan
            </h2>

            <p class="text-gray-500">
                Ubah data pelanggan
            </p>
        </div>

        <form action="" method="post">

                <div class="grid gap-5 dark:text-white">

                    <div>
                        <label class="mb-2 block font-medium">
                            Kode Pelanggan
                        </label>

                        <input
                            type="text"
                            name="kode_pelanggan"
                            value="<?= $pelanggan->kode_pelanggan ?>"
                            class="w-full rounded-lg border px-4 py-3">
                    </div>

                    <div>
                        <label class="mb-2 block font-medium">
                            Nama Pelanggan
                        </label>

                        <input
                            type="text"
                            name="nama_pelanggan"
                            value="<?= $pelanggan->nama_pelanggan ?>"
                            class="w-full rounded-lg border px-4 py-3">
                    </div>

                    <div>
                        <label class="mb-2 block font-medium">
                            Alamat
                        </label>

                        <textarea
                            name="alamat"
                            rows="4"
                            class="w-full rounded-lg border px-4 py-3"><?= $pelanggan->alamat ?></textarea>
                    </div>

                    <div>
                        <label class="mb-2 block font-medium">
                            Telepon
                        </label>

                        <input
                            type="text"
                            name="telepon"
                            value="<?= $pelanggan->telepon ?>"
                            class="w-full rounded-lg border px-4 py-3">
                    </div>

                    <div>
                        <label class="mb-2 block font-medium">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            value="<?= $pelanggan->email ?>"
                            class="w-full rounded-lg border px-4 py-3">
                    </div>

                    <div>
                        <label class="mb-2 block font-medium">
                            Status
                        </label>

                        <select
                            name="status"
                            class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 text-gray-900
                                dark:border-gray-700 dark:bg-gray-800 dark:text-white">
                            <option value="1" <?= ($pelanggan->status == 1) ? 'selected' : '' ?>>
                                Aktif
                            </option>

                            <option value="0" <?= ($pelanggan->status == 0) ? 'selected' : '' ?>>
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
                            href="<?= site_url('pelanggan') ?>"
                            class="rounded-lg border px-6 py-3">

                            Kembali

                        </a>

                    </div>

                </div>

            </div>

        </form>

    </div>
</main>