<?php
$role = $this->session->userdata('role');
$menu = $this->uri->segment(1);
?>

<aside
  :class="sidebarToggle ? 'translate-x-0 lg:w-[90px]' : '-translate-x-full'"
  class="sidebar fixed left-0 top-0 z-9999 flex h-screen w-[290px] flex-col overflow-y-hidden border-r border-gray-200 bg-white px-5 dark:border-gray-800 dark:bg-black lg:static lg:translate-x-0">

    <!-- Logo -->
    <div
      :class="sidebarToggle ? 'justify-center' : 'justify-between'"
      class="flex items-center gap-2 pt-5 pb-6">


            <a href="<?= site_url('dashboard') ?>"
        class="logo flex justify-center"
        :class="sidebarToggle ? 'hidden' : ''">

                <img
                    src="<?= base_url('assets/src/images/logo/logo2.png') ?>"
                    alt="PT Maju Jaya"
                    style="height:85px;">

            </span>

            <span
                class="logo-icon"
                :class="sidebarToggle ? 'lg:block' : 'hidden'">

                <img
                    src="<?= base_url('assets/src/images/logo/logo2.png') ?>"
                    alt="Logo"
                    class="h-5 w-5">

            </span>
                </a>

    </div>

    <div class="flex flex-col overflow-y-auto no-scrollbar">

        <nav>

            <!-- DASHBOARD -->
            <div>

                <h3 class="mb-4 text-xs uppercase text-gray-400">
                    Dashboard
                </h3>

                <ul class="flex flex-col gap-2 mb-6">

                    <li>

                        <a href="<?= site_url('dashboard') ?>"
                           class="menu-item <?= ($menu == 'dashboard') ? 'menu-item-active' : 'menu-item-inactive' ?>">

                           <i data-lucide="layout-dashboard" class="size-5"></i>

                            <span class="menu-item-text">
                                Dashboard
                            </span>

                        </a>

                    </li>

                </ul>

            </div>

            <!-- ADMIN -->
            <?php if($role == 'admin'): ?>

            <div>

                <h3 class="mb-4 text-xs uppercase text-gray-400">
                    Master Data
                </h3>

                <ul class="flex flex-col gap-2 mb-6">

                    <li>

                        <a href="<?= site_url('produk') ?>"
                           class="menu-item <?= ($menu == 'produk') ? 'menu-item-active' : 'menu-item-inactive' ?>">

                           <i data-lucide="package" class="size-5"></i>

                            <span class="menu-item-text">
                                Produk
                            </span>

                        </a>

                    </li>

                    <li>

                        <a href="<?= site_url('pelanggan') ?>"
                           class="menu-item <?= ($menu == 'pelanggan') ? 'menu-item-active' : 'menu-item-inactive' ?>">

                           <i data-lucide="users" class="size-5"></i>

                            <span class="menu-item-text">
                                Pelanggan
                            </span>

                        </a>

                    </li>

                    <li>
                    <a href="<?= site_url('sales') ?>"
                           class="menu-item <?= ($menu == 'sales') ? 'menu-item-active' : 'menu-item-inactive' ?>">

                        <i data-lucide="user" class="size-5"></i>
                        
                        <span class="menu-item-text">
                            Sales
                        </span>

                    </a>
                </li>

                </ul>

            </div>

            <div>

                <h3 class="mb-4 text-xs uppercase text-gray-400">
                    Transaksi
                </h3>

                <ul class="flex flex-col gap-2 mb-6">

                    <li>

                        <a href="<?= site_url('sales_order') ?>"
                           class="menu-item <?= ($menu == 'sales_order') ? 'menu-item-active' : 'menu-item-inactive' ?>">

                           <i data-lucide="clipboard-list" class="size-5"></i>

                            <span class="menu-item-text">
                                Sales Order
                            </span>

                        </a>

                    </li>

                </ul>

            </div>

            <?php endif; ?>

            <!-- SALES -->
            <?php if($role == 'sales'): ?>

            <div>

                <h3 class="mb-4 text-xs uppercase text-gray-400">
                    Transaksi
                </h3>

                <ul class="flex flex-col gap-2 mb-6">

                    <li>

                        <a href="<?= site_url('sales_order') ?>"
                           class="menu-item <?= ($menu == 'sales_order') ? 'menu-item-active' : 'menu-item-inactive' ?>">

                            <span class="menu-item-text">
                                Sales Order
                            </span>

                        </a>

                    </li>

                </ul>

            </div>

            <?php endif; ?>

            <!-- MANAGER -->
            <?php if($role == 'manager'): ?>

            <div>

                <h3 class="mb-4 text-xs uppercase text-gray-400">
                    Laporan
                </h3>

                <ul class="flex flex-col gap-2 mb-6">

                    <li>

                        <a href="<?= site_url('laporan/penjualan') ?>"
                           class="menu-item <?= ($menu == 'laporan/penjualan') ? 'menu-item-active' : 'menu-item-inactive' ?>">

                           <i data-lucide="bar-chart-3" class="size-5"></i>

                            <span class="menu-item-text">
                                Laporan Penjualan
                            </span>

                        </a>

                    </li>

                    <li>

                        <a href="<?= site_url('laporan/produk') ?>"
                           class="menu-item <?= ($menu == 'laporan/produk') ? 'menu-item-active' : 'menu-item-inactive' ?>">

                           <i data-lucide="package-search" class="size-5"></i>

                            <span class="menu-item-text">
                                Laporan Produk
                            </span>

                        </a>

                    </li>

                    <li>

                        <a href="<?= site_url('laporan/sales') ?>"
                           class="menu-item <?= ($menu == 'laporan/sales') ? 'menu-item-active' : 'menu-item-inactive' ?>">

                           <i data-lucide="users" class="size-5"></i>

                            <span class="menu-item-text">
                                Laporan Sales
                            </span>

                        </a>

                    </li>

                </ul>

            </div>

            <?php endif; ?>

        </nav>

    </div>

    <script src="https://unpkg.com/lucide@latest"></script>
<script>
    lucide.createIcons();
</script>

</aside>

<div class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto">