<main>
<div class="p-6 bg-gray-50 dark:bg-gray-900 min-h-screen">

    <h2 class="mb-6 text-2xl font-bold text-gray-800 dark:text-white">
        My Profile
    </h2>

    <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">

        <div class="flex items-center gap-5">

            <div class="h-24 w-24 overflow-hidden rounded-full">

                <img
                    src="<?= base_url('assets/images/users/default.png') ?>"
                    class="h-full w-full object-cover">

            </div>

            <div>

                <h3 class="text-2xl font-bold text-gray-800 dark:text-white">
                    <?= $user->nama ?>
                </h3>

                <p class="text-gray-500">
                    <?= ucfirst($user->role) ?>
                </p>

            </div>

        </div>

        <hr class="my-6">

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">

            <div>

                <label class="text-sm text-gray-500">
                    Username
                </label>

                <p class="font-medium dark:text-white">
                    <?= $user->username ?>
                </p>

            </div>

            <div>

                <label class="text-sm text-gray-500">
                    Email
                </label>

                <p class="font-medium dark:text-white">
                    <?= $user->email ?>
                </p>

            </div>

            <div>

                <label class="text-sm text-gray-500">
                    Role
                </label>

                <p class="font-medium dark:text-white">
                    <?= ucfirst($user->role) ?>
                </p>

            </div>

            <div>

                <label class="text-sm text-gray-500">
                    Status
                </label>

                <p class="font-medium dark:text-white">
                    <?= ($user->status == 1) ? 'Aktif' : 'Nonaktif' ?>
                </p>

            </div>

        </div>

    </div>

</div>
</main>