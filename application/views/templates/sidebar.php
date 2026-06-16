<aside
  :class="sidebarToggle ? 'translate-x-0 lg:w-[90px]' : '-translate-x-full'"
  class="sidebar fixed left-0 top-0 z-9999 flex h-screen w-[290px] flex-col overflow-y-hidden border-r border-gray-200 bg-white px-5 dark:border-gray-800 dark:bg-black lg:static lg:translate-x-0"
>

  <!-- Logo -->
  <div
    :class="sidebarToggle ? 'justify-center' : 'justify-between'"
    class="flex items-center gap-2 pt-8 pb-7"
  >
    <a href="<?= site_url('dashboard') ?>">

      <span class="logo" :class="sidebarToggle ? 'hidden' : ''">
        <h2 class="text-2xl font-bold text-brand-500">
          Sales Order
        </h2>
      </span>

      <span
        class="logo-icon text-xl font-bold"
        :class="sidebarToggle ? 'lg:block' : 'hidden'"
      >
        SO
      </span>

    </a>
  </div>

  <div class="flex flex-col overflow-y-auto no-scrollbar">

    <nav x-data="{selected:'master'}">

      <!-- DASHBOARD -->
      <div>
        <h3 class="mb-4 text-xs uppercase text-gray-400">
          <span :class="sidebarToggle ? 'lg:hidden' : ''">
            Dashboard
          </span>
        </h3>

        <ul class="flex flex-col gap-2 mb-6">

          <li>
            <a href="<?= site_url('dashboard') ?>"
               class="menu-item menu-item-active">

              <span class="menu-item-text"
                    :class="sidebarToggle ? 'lg:hidden' : ''">
                Dashboard
              </span>

            </a>
          </li>

        </ul>
      </div>

      <!-- MASTER DATA -->
      <div>

        <h3 class="mb-4 text-xs uppercase text-gray-400">
          <span :class="sidebarToggle ? 'lg:hidden' : ''">
            Master Data
          </span>
        </h3>

        <ul class="flex flex-col gap-2 mb-6">

          <li>
            <a href="<?= site_url('produk') ?>"
               class="menu-item menu-item-inactive">
              <span class="menu-item-text"
                    :class="sidebarToggle ? 'lg:hidden' : ''">
                Produk
              </span>
            </a>
          </li>

          <li>
            <a href="<?= site_url('pelanggan') ?>"
               class="menu-item menu-item-inactive">
              <span class="menu-item-text"
                    :class="sidebarToggle ? 'lg:hidden' : ''">
                Pelanggan
              </span>
            </a>
          </li>

          <li>
            <a href="<?= site_url('sales') ?>"
               class="menu-item menu-item-inactive">
              <span class="menu-item-text"
                    :class="sidebarToggle ? 'lg:hidden' : ''">
                Sales
              </span>
            </a>
          </li>

        </ul>

      </div>

      <!-- TRANSAKSI -->
      <div>

        <h3 class="mb-4 text-xs uppercase text-gray-400">
          <span :class="sidebarToggle ? 'lg:hidden' : ''">
            Transaksi
          </span>
        </h3>

        <ul class="flex flex-col gap-2 mb-6">

          <li>
            <a href="<?= site_url('sales_order') ?>"
               class="menu-item menu-item-inactive">

              <span class="menu-item-text"
                    :class="sidebarToggle ? 'lg:hidden' : ''">
                Sales Order
              </span>

            </a>
          </li>

        </ul>

      </div>

      <!-- LAPORAN -->
      <div>

        <h3 class="mb-4 text-xs uppercase text-gray-400">
          <span :class="sidebarToggle ? 'lg:hidden' : ''">
            Laporan
          </span>
        </h3>

        <ul class="flex flex-col gap-2 mb-6">

          <li>
            <a href="<?= site_url('laporan/sales') ?>"
               class="menu-item menu-item-inactive">
              <span class="menu-item-text"
                    :class="sidebarToggle ? 'lg:hidden' : ''">
                Laporan Sales
              </span>
            </a>
          </li>

          <li>
            <a href="<?= site_url('laporan/produk') ?>"
               class="menu-item menu-item-inactive">
              <span class="menu-item-text"
                    :class="sidebarToggle ? 'lg:hidden' : ''">
                Laporan Produk
              </span>
            </a>
          </li>

        </ul>

      </div>

      <!-- USER -->
      <div>

        <h3 class="mb-4 text-xs uppercase text-gray-400">
          <span :class="sidebarToggle ? 'lg:hidden' : ''">
            Pengguna
          </span>
        </h3>

        <ul class="flex flex-col gap-2 mb-6">

          <li>
            <a href="<?= site_url('users') ?>"
               class="menu-item menu-item-inactive">
              <span class="menu-item-text"
                    :class="sidebarToggle ? 'lg:hidden' : ''">
                User Management
              </span>
            </a>
          </li>

          <li>
            <a href="<?= site_url('auth/logout') ?>"
               class="menu-item menu-item-inactive">
              <span class="menu-item-text"
                    :class="sidebarToggle ? 'lg:hidden' : ''">
                Logout
              </span>
            </a>
          </li>

        </ul>

      </div>

    </nav>

  </div>

</aside>