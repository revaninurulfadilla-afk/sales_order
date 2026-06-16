<main>
    <div class="p-6 bg-gray-50 dark:bg-gray-900 min-h-screen">

        <!-- Header -->
        <div class="flex items-center justify-between mb-6">

            <div>
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white">
                    Master Pelanggan
                </h2>

                <p class="text-gray-500">
                    Data Pelanggan Sales Order
                </p>
            </div>

            <a href="<?= site_url('pelanggan/tambah') ?>"
               class="rounded-lg bg-brand-500 px-5 py-3 text-white hover:bg-brand-600">

                + Tambah Pelanggan

            </a>

        </div>

        <!-- Table -->
        <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-theme-sm dark:border-gray-800 dark:bg-white/[0.03]">

            <div class="overflow-x-auto">

                <table class="min-w-full">

                    <thead>

                        <tr class="border-b border-gray-200 dark:text-white">

                            <th class="px-5 py-4 text-left">
                                Kode
                            </th>

                            <th class="px-5 py-4 text-left">
                                Nama Pelanggan
                            </th>

                            <th class="px-5 py-4 text-left">
                                Telepon
                            </th>

                            <th class="px-5 py-4 text-left">
                                Email
                            </th>

                            <th class="px-5 py-4 text-left">
                                Status
                            </th>

                            <th class="px-5 py-4 text-center">
                                Action
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php foreach($pelanggan as $row): ?>

                        <tr class="border-b border-gray-100 dark:text-white">

                            <td class="px-5 py-4">
                                <?= $row->kode_pelanggan ?>
                            </td>

                            <td class="px-5 py-4">

                            <div class="flex items-center gap-3">

                                <div class="h-12 w-12 overflow-hidden rounded-full">

                                     <img
                                        src="<?= base_url('assets/images/pelanggan/' . $row->foto) ?>"
                                        alt="<?= $row->nama_pelanggan ?>"
                                        class="h-full w-full object-cover">

                                </div>

                                <div>

                                    <p class="font-medium text-gray-800 dark:text-white">
                                        <?= $row->nama_pelanggan ?>
                                    </p>

                                    <small class="text-gray-500">
                                        <?= $row->alamat ?>
                                    </small>

                                </div>

                            </div>

                        </td>

                            <td class="px-5 py-4">
                                <?= $row->telepon ?>
                            </td>

                            <td class="px-5 py-4">
                                <?= $row->email ?>
                            </td>

                            <td class="px-5 py-4">

                                <?php if($row->status == 1): ?>

                                    <span class="rounded-full bg-green-100 px-3 py-1 text-xs text-green-600">
                                        Aktif
                                    </span>

                                <?php else: ?>

                                    <span class="rounded-full bg-red-100 px-3 py-1 text-xs text-red-600">
                                        Nonaktif
                                    </span>

                                <?php endif; ?>

                            </td>

                            <td class="px-5 py-4">

                                <div class="flex justify-center gap-3">

                                    <a href="<?= site_url('pelanggan/edit/'.$row->id) ?>">
                                        ✏️
                                    </a>

                                    <a href="<?= site_url('pelanggan/hapus/'.$row->id) ?>"
                                       onclick="return confirm('Hapus data?')">
                                        🗑️
                                    </a>

                                </div>

                            </td>

                        </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>
</main>