        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Visitor</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Visitor</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-body">
                           visitor
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-area me-1"></i>
                            Area Chart 
                        </div>
                        <div class="card-body"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar me-1"></i>
                                    Bar Chart 
                                </div>
                                <div class="card-body"><canvas id="myBarChart" width="100%" height="50"></canvas></div>
                                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                            </div>
                        </div>
                       <div class="col-lg-5">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            DataTable Visitor
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th class="text-center" width="300">pengunjung</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $count = 0;
                                    foreach ($queryvisitor as $row) {
                                        $count = $count + 1;
                                    ?>
                                     <tr>
                                        <td style="vertical-align: middle;"><?php echo $row->pengunjung; ?></td>
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



                           


