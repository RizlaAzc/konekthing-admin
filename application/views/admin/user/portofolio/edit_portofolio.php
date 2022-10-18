<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Portofolio</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url(' portofolio') ?>"> Portofolio</a></li>
                <li class="breadcrumb-item active">Edit Portofolio</li>
            </ol>
            <div>
                <hr>
                <form action="<?= base_url('portofolio/fungsi_edit') ?>" method="post">
                    <table border="1">
                        <br>
                        <tr>
                            <td>ID</td>
                            <td>:</td>
                            <td><input type="text" name="id" value="<?= $queryPrdkDetail->id ?>" readonly></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><input type="text" name="nama" value="<?= $queryPrdkDetail->nama ?>"></td>
                        </tr>
                        <tr>
                            <td colspan="3"><button type="submit">Edit</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </main>