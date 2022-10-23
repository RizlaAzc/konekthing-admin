<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Kontak</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Kontak</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Kontak DataTables<a href="<?= base_url('kontak/tambah_kontak') ?>" class="btn btn-primary text-light" style="float: right;">Tambah Kontak</a>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr style="background-color:#B0C4DE;">
                                <th class="text-center" width="1">ID</th>
                                <th class="text-center" width="150">Nomor Telepon</th>
                                <th class="text-center" width="200">Email</th>
                                <th class="text-center" width="250">Lokasi</th>
                                <th class="text-center" width="300">Deskripsi</th>
                                <th class="text-center" width="100">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 0;
                            foreach ($queryAllPrdk as $row) {
                                $count = $count + 1;
                            ?>
                                <tr>
                                    <td class="text-center" style="vertical-align: middle;"><?= $count ?></td>
                                    <td style="vertical-align: middle;"><?php echo $row->telepon; ?></td>
                                    <td style="vertical-align: middle;"><?php echo $row->email; ?></td>
                                    <td style="vertical-align: middle;"><?php echo $row->lokasi; ?></td>
                                    <td style="vertical-align: middle;"><?php echo $row->deskripsi; ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><a href="<?= base_url('kontak/edit_kontak/') . $row->id ?>"><i class="fa-solid fa-pen-to-square" style="margin-right: 7px;"></i></a>|<a href="<?= base_url('kontak/fungsi_hapus/') . $row->id ?>"><i class="fa-solid fa-trash-can" style="margin-left: 7px; margin-right: 7px;"></i></a>|<a href="<?= base_url('kontak/detail_kontak/') . $row->id ?>"><i class="fa-solid fa-circle-info" style="margin-left: 7px;"></i></a></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>