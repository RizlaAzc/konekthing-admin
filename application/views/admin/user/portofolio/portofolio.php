<div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
            <h1 class="mt-4">PORTOFOLIO</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">portofolio</li>
            </ol>
                    
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            portofolio content <a href="<?= base_url('portofolio/tambah_portofolio') ?>" class="btn btn-primary text-light" style="float: right;">Tambah portofolio</a>
                        </div>

                        <div class="card-header">
                            <a href="<?= base_url('portofolio/edit_portofolio') ?>"></a>
                        </div>

                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>nomer</th>
                                        <th>nama</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                     <?php
                    $count = 0;
                    foreach ($queryAllPrdk as $row) {
                        $count = $count + 1;
                    ?>
                        <tr>
                            <td><?= $count ?></td>
                            <td><?= $row->nama ?></td>
                            <td><a href="<?= base_url('portofolio/edit_portofolio/').$row->id?>"><i class="fa-solid fa-file-arrow-down"></i></a> | <a href="<?= base_url('portofolio/fungsi_hapus/').$row->id?>"><i class="fa-solid fa-trash-can"></i></a></td>
                        </tr>
                        
                    <?php

                    }

                    ?>
                                </tbody>
                                <tfoot>


                                </tfoot>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </main>
           
           