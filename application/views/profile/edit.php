<div class="p-6">

    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-white">
            Edit Profile
        </h2>
    </div>

    <div class="rounded-2xl border border-gray-200 bg-white p-8 shadow-sm dark:border-gray-800 dark:bg-gray-900">

        <form action="<?= site_url('profile/update') ?>" method="post" enctype="multipart/form-data">

            <div class="grid grid-cols-1 gap-6">

                <!-- Foto -->
                <div>
                    <label class="mb-2 block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Foto Profile
                    </label>

                    <div class="mb-4 flex items-center gap-4">

                        <img
                            src="<?= base_url('assets/images/user/' . $user->foto) ?>"
                            class="h-14 w-14 rounded-full object-cover border border-gray-300">

                        <input
                            type="file"
                            name="foto"
                            class="w-full rounded-xl border border-gray-300 px-4 py-3 dark:border-gray-700 dark:bg-gray-800 dark:text-white">
                    </div>
                </div>

                <!-- Nama -->
                <div>
                    <label class="mb-2 block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Nama Lengkap
                    </label>

                    <input
                        type="text"
                        name="nama"
                        value="<?= $user->nama ?>"
                        class="w-full rounded-xl border border-gray-300 px-5 py-4 dark:border-gray-700 dark:bg-gray-800 dark:text-white">
                </div>

                <!-- Username -->
                <div>
                    <label class="mb-2 block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Username
                    </label>

                    <input
                        type="text"
                        name="username"
                        value="<?= $user->username ?>"
                        class="w-full rounded-xl border border-gray-300 px-5 py-4 dark:border-gray-700 dark:bg-gray-800 dark:text-white">
                </div>

                <!-- Email -->
                <div>
                    <label class="mb-2 block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        value="<?= $user->email ?>"
                        class="w-full rounded-xl border border-gray-300 px-5 py-4 dark:border-gray-700 dark:bg-gray-800 dark:text-white">
                </div>

                <!-- Role -->
                <div>
                    <label class="mb-2 block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Role
                    </label>

                    <input
                        type="text"
                        value="<?= ucfirst($user->role) ?>"
                        readonly
                        class="w-full rounded-xl border border-gray-300 bg-gray-100 px-5 py-4 dark:border-gray-700 dark:bg-gray-700 dark:text-white">
                </div>

                <!-- Status -->
                <div>
                    <label class="mb-2 block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Status
                    </label>

                    <input
                        type="text"
                        value="<?= ($user->status == 1) ? 'Aktif' : 'Nonaktif' ?>"
                        readonly
                        class="w-full rounded-xl border border-gray-300 bg-gray-100 px-5 py-4 dark:border-gray-700 dark:bg-gray-700 dark:text-white">
                </div>

                <!-- Button -->
                <div class="flex justify-end gap-3 pt-4">

                    <a href="<?= site_url('profile') ?>"
                        class="rounded-xl border border-gray-300 px-6 py-3 font-medium text-gray-700 hover:bg-gray-100 dark:border-gray-700 dark:text-gray-300">

                        Batal

                    </a>

                    <button
                        type="submit"
                        class="rounded-xl bg-brand-500 px-6 py-3 font-medium text-white hover:bg-brand-600">

                        Simpan Perubahan

                    </button>

                </div>

            </div>

        </form>

    </div>

</div>