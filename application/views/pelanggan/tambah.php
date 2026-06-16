<main>
     <div class="p-6 bg-gray-50 dark:bg-gray-900 min-h-screen">
        <div class="mb-6">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">
                Tambah Pelanggan
            </h2>

            <p class="text-gray-500">
                Form tambah data pelanggan
            </p>
        </div>

        <form action="" method="post" enctype="multipart/form-data">

            <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">

                <div class="border-b border-gray-200 px-6 py-4 dark:border-gray-800">
                    <h3 class="font-semibold text-gray-800 dark:text-white">
                        Data Pelanggan
                    </h3>
                </div>

                <div class="p-6 space-y-5">

                    <!-- Kode Pelanggan -->
                    <div>
                        <label class="mb-2 block font-medium dark:text-white">
                            Kode Pelanggan
                        </label>

                        <input
                            type="text"
                            name="kode_pelanggan"
                            placeholder="PLG001"
                            required
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-brand-500 focus:outline-none dark:text-white">
                    </div>

                    <!-- Nama Pelanggan -->
                    <div>
                        <label class="mb-2 block font-medium dark:text-white">
                            Nama Pelanggan
                        </label>

                        <input
                            type="text"
                            name="nama_pelanggan"
                            placeholder="PT Teknologi Nusantara"
                            required
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-brand-500 focus:outline-none dark:text-white">
                    </div>

                    <!-- Alamat -->
                    <div>
                        <label class="mb-2 block font-medium dark:text-white">
                            Alamat
                        </label>

                        <textarea
                            name="alamat"
                            rows="4"
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-brand-500 focus:outline-none dark:text-white"
                            placeholder="Masukkan alamat pelanggan"></textarea>
                    </div>

                    <!-- Telepon -->
                    <div>
                        <label class="mb-2 block font-medium dark:text-white">
                            Telepon
                        </label>

                        <input
                            type="text"
                            name="telepon"
                            placeholder="08123456789"
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-brand-500 focus:outline-none dark:text-white">
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="mb-2 block font-medium dark:text-white">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            placeholder="customer@email.com"
                            class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-brand-500 focus:outline-none dark:text-white">
                    </div>

                    <!-- Status -->
                    <div>
                        <label class="mb-2 block font-medium dark:text-white">
                            Status
                        </label>

                        <select
                            name="status"
                            class="w-full rounded-lg border dark:text-white px-4 py-3 focus:border-brand-500 focus:outline-none dark:text-white">

                            <option value="1">Aktif</option>
                            <option value="0">Nonaktif</option>

                        </select>
                    </div>

                </div>

            </div>

            <!-- FILE UPLOAD -->
            <div class="mt-6 rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">

                <div class="border-b border-gray-200 px-6 py-4 dark:border-gray-800">
                    <h3 class="font-semibold text-gray-800 dark:text-white dark:text-white">
                        Upload Foto
                    </h3>
                </div>

                <div class="p-6">

                    <label class="mb-2 block font-medium dark:text-white">
                        Pilih Foto
                    </label>

                    <input
                        type="file"
                        name="foto"
                        class="block w-full rounded-lg border border-gray-300 text-sm file:mr-4 file:border-0 file:bg-brand-500 file:px-4 file:py-3 file:text-white hover:file:bg-brand-600 dark:text-white">

                </div>

            </div>

            <!-- BUTTON -->
            <div class="mt-6 flex gap-3">

                <button
                    type="submit"
                    class="rounded-lg bg-brand-500 px-6 py-3 text-white hover:bg-brand-600">

                    Simpan

                </button>

                <a
                    href="<?= site_url('pelanggan') ?>"
                    class="rounded-lg border border-gray-300 px-6 py-3 dark:text-white">

                    Kembali

                </a>

            </div>

        </form>

    </div>
</main>