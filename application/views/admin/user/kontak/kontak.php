<div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
            <h1 class="mt-4">kontak</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">kontak</li>
            </ol>

              <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            kontak content <a href="<?= base_url('kontak/tambah_kontak') ?>" class="btn btn-primary text-light" style="float: right;">Tambah kontak</a>
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>email</th>
                                        <th>telepon</th>
                                        <th>lokasi</th>
                                        <th>deskripsi</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                     <?php
                    $count = 0;
                    foreach ($queryAllPrdk as $row) {
                        $count = $count + 1;
                    ?>
                    <tr>
                                <td><?= $count ?></td>
                                <td><?php echo $row->email; ?></td>
                                <td><?php echo $row->telepon; ?></td>
                                <td><?php echo $row->lokasi; ?></td>
                                <td><?php echo $row->deskripsi; ?></td>
                                <td><a href="<?= base_url('kontak/edit_kontak/').$row->id?>"><i class="fa-solid fa-file-arrow-down"></i></a> | <a href="<?= base_url('kontak/fungsi_hapus/').$row->id?>"><i class="fa-solid fa-trash-can"></i></a></td>
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