        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Primary Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Warning Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Success Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">Danger Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" style="margin-left: 5px;"><i class="fa-solid fa-calendar-days"></i> &nbsp;Choose Date :</label><input type="text" name="daterange" class="form-control mb-2" style="width: 205px; cursor: pointer;" readonly />
                    </div>
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area me-1"></i>
                                    Visitor Chart
                                </div>
                                <div class="card-body" id="dataChart" data="<?php $chart_value ?>"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card mb-2">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                    Visitor Statistic
                                </div>
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td><i class="fa-regular fa-eye" style="margin-left: 1px; margin-right: 11px;"></i>Pengunjung Hari ini</td>
                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                            <td class="text-center"><?= $pengunjunghariini ?></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa-regular fa-eye" style="margin-left: 1px; margin-right: 11px;"></i>Pengunjung Kemarin</td>
                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                            <td class="text-center"><?= $pengunjungkemarin ?></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa-regular fa-eye" style="margin-left: 1px; margin-right: 11px;"></i>Pengunjung Bulan ini</td>
                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                            <td class="text-center"><?= $pengunjungbulanini ?></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa-regular fa-eye" style="margin-left: 1px; margin-right: 11px;"></i>Pengunjung Tahun ini</td>
                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                            <td class="text-center"><?= $pengunjungtahunini ?></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="card-footer">
                                    <table>
                                        <tr>
                                            <td><i class="fa-solid fa-users" style="margin-left: 1px; margin-right: 10px;"></i>Total Pengunjung</td>
                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                            <td class="text-center"><?= $totalpengunjung ?></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa-solid fa-eye" style="margin-left: 1px; margin-right: 10px;"></i>Pengunjung Online</td>
                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                            <td class="text-center"><?= $pengunjungonline ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <script type="text/javascript">
                $(function() {
                    $('input[name="daterange"]').daterangepicker({
                        opens: 'right'
                    }, function(start, end, label) {
                        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
                        GFG_Fun(start.format('YYYY-MM-DD'), end.format('YYYY-MM-DD'))
                    });
                });
            </script>

            <script type="text/javascript">
                // $(document).ready(function() {
                // });
                let idelement = document.getElementById('dataChart');
                const getvalue = JSON.parse('<?= $chart_value ?>');
                const getDate = JSON.parse('<?= $chart_date ?>');

                const ctx = document.getElementById('myAreaChart');

                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: getDate,
                        datasets: [{
                            label: 'number of visitors',
                            data: getvalue,
                            borderWidth: 2,
                            borderColor: '#36A2EB',
                            backgroundColor: '#9BD0F5',
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>

            <script>
                function GFG_Fun(start, end) {
                    var url = new URL("http://localhost/konekthing-admin/dashboard");
                    let params = new URLSearchParams(url.search);
                    params.delete('dateStart');
                    url.searchParams.append('dateStart', start);
                    url.searchParams.append('dateEnd', end);
                    history.pushState({}, '', url);
                    location.reload();
                }
            </script>