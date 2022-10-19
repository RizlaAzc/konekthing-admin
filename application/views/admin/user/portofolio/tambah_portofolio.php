<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah portofolio</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('portofolio') ?>">portofolio</a></li>
                <li class="breadcrumb-item active">Tambah portofolio</li>
            </ol>
            <div>
                <hr>
                <form action="<?= base_url('portofolio/fungsi_tambah') ?>" method="post">
                    <table border="1">
                        <br>
                        <tr>
                            <td>Nama portofolio</td>
                            <td>:</td>
                            <td><input type="text" name="nama"></td>
                        </tr>
                        <tr>
                            <td colspan="3"><button type="submit">Tambah</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </main>