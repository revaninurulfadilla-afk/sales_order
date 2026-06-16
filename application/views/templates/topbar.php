<header
    x-data="{menuToggle:false}"
    class="sticky top-0 z-99999 flex w-full border-b border-gray-200 bg-white dark:border-gray-800 dark:bg-gray-900">

    <div class="flex grow items-center justify-between px-4 py-4 lg:px-6">

        <!-- LEFT -->
        <div class="flex items-center gap-4">

            <button
                @click.stop="sidebarToggle = !sidebarToggle"
                class="flex h-11 w-11 items-center justify-center rounded-lg border border-gray-200 dark:border-gray-800">

                <svg
                    width="16"
                    height="12"
                    viewBox="0 0 16 12"
                    fill="currentColor">

                    <path d="M1 1h14M1 6h8M1 11h14"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"/>

                </svg>

            </button>

            <div class="hidden lg:block">

                <form action="" method="GET">

                    <div class="relative">

                        <input
                            type="text"
                            name="keyword"
                            placeholder="Cari data..."
                            class="h-11 w-[350px] rounded-lg border border-gray-200 pl-10 pr-4 dark:border-gray-800">

                    </div>

                </form>

            </div>

        </div>

        <!-- RIGHT -->
        <div class="flex items-center gap-3">

            <!-- DARK MODE -->
            <button
                @click.prevent="darkMode = !darkMode"
                class="flex h-11 w-11 items-center justify-center rounded-full border border-gray-200 dark:border-gray-800">

                🌙

            </button>

            <!-- USER -->
            <div
                x-data="{ dropdownOpen:false }"
                @click.outside="dropdownOpen = false"
                class="relative">

                <a
                    href="#"
                    @click.prevent="dropdownOpen = !dropdownOpen"
                    class="flex items-center gap-3">

                    <img
                        src="<?= base_url('assets/images/user/default.png') ?>"
                        class="h-11 w-11 rounded-full">

                    <div class="hidden lg:block">

                        <p class="font-medium">
                            <?= $this->session->userdata('nama'); ?>
                        </p>

                        <small class="text-gray-500">
                            <?= ucfirst($this->session->userdata('role')); ?>
                        </small>

                    </div>

                </a>

                <!-- DROPDOWN -->
                <div
                    x-show="dropdownOpen"
                    class="absolute right-0 mt-3 w-60 rounded-xl border border-gray-200 bg-white p-3 dark:border-gray-800 dark:bg-gray-900">

                    <a
                        href="<?= site_url('profile') ?>"
                        class="block rounded-lg px-3 py-2 hover:bg-gray-100">
                        Profile
                    </a>

                    <a
                        href="<?= site_url('auth/logout') ?>"
                        class="block rounded-lg px-3 py-2 hover:bg-gray-100">
                        Logout
                    </a>

                </div>

            </div>

        </div>

    </div>

</header>