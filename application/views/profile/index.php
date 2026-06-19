<main>
<div class="p-6 bg-gray-50 dark:bg-gray-900 min-h-screen">

    <!-- Title -->
    <div class="mb-6">
        <h2 class="text-3xl font-bold text-gray-800 dark:text-white">
            My Profile
        </h2>
    </div>

    <!-- Profile Header -->
    <div class="mb-6 rounded-2xl border border-gray-200 bg-white shadow-sm dark:border-gray-800 dark:bg-gray-800">

        <div class="flex flex-col gap-6 p-8 md:flex-row md:items-center md:justify-between">

            <div class="flex items-center gap-5">

                <div class="h-15 w-15 overflow-hidden rounded-full border-4 border-gray-100 dark:border-gray-700">

                    <img
                        src="<?= base_url('assets/images/user/' . $user->foto) ?>"
                        alt="<?= $user->nama ?>"
                        class="h-full w-full object-cover">

                </div>

                <div>

                    <h3 class="text-2xl font-bold text-gray-800 dark:text-white">
                        <?= $user->nama ?>
                    </h3>

                    <p class="mt-1 text-gray-500">
                        <?= ucfirst($user->role) ?>
                    </p>

                    <div class="mt-3">

                        <?php if($user->status == 1): ?>
                            <span class="inline-flex rounded-full bg-green-100 px-3 py-1 text-sm font-medium text-green-700 dark:bg-green-500/20 dark:text-green-400">
                                Aktif
                            </span>
                        <?php else: ?>
                            <span class="inline-flex rounded-full bg-red-100 px-3 py-1 text-sm font-medium text-red-700 dark:bg-red-500/20 dark:text-red-400">
                                Nonaktif
                            </span>
                        <?php endif; ?>

                    </div>

                </div>

            </div>

            <div>

                <a href="<?= site_url('profile/edit') ?>"
                    class="inline-flex items-center rounded-lg bg-brand-500 px-5 py-3 text-sm font-medium text-white hover:bg-brand-600">

                    Edit Profile

                </a>

            </div>

        </div>

    </div>

    <!-- Personal Information -->
    <div class="rounded-2xl border border-gray-200 bg-white shadow-sm dark:border-gray-800 dark:bg-gray-800">

        <div class="flex items-center justify-between border-b border-gray-200 px-6 py-4 dark:border-gray-700">

            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">
                Personal Information
            </h3>

        </div>

        <div class="grid grid-cols-1 gap-8 p-6 md:grid-cols-2 lg:grid-cols-3">

            <div>
                <p class="text-sm text-gray-500">
                    Full Name
                </p>

                <p class="mt-2 font-semibold text-gray-800 dark:text-white">
                    <?= $user->nama ?>
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500">
                    Username
                </p>

                <p class="mt-2 font-semibold text-gray-800 dark:text-white">
                    <?= $user->username ?>
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500">
                    Role
                </p>

                <p class="mt-2 font-semibold text-gray-800 dark:text-white">
                    <?= ucfirst($user->role) ?>
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500">
                    Email Address
                </p>

                <p class="mt-2 font-semibold text-gray-800 dark:text-white">
                    <?= $user->email ?>
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500">
                    Account Status
                </p>

                <p class="mt-2 font-semibold text-gray-800 dark:text-white">
                    <?= ($user->status == 1) ? 'Aktif' : 'Nonaktif' ?>
                </p>
            </div>

        </div>

    </div>

</div>
</main>