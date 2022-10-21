<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah Blog</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('blog') ?>">Blog</a></li>
                <li class="breadcrumb-item active">Tambah Blog</li>
            </ol>
            <div>
                <hr>
                <?= form_open_multipart('blog/fungsi_tambah'); ?>
                <table border="1">
                    <br>
                    <tr>
                        <td>Gambar</td>
                        <td>:</td>
                        <td><input type="file" name="gambar"></td>
                    </tr>
                    <tr>
                        <td>Judul</td>
                        <td>:</td>
                        <td><input type="text" name="judul"></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td>:</td>
                        <td><input type="text" name="deskripsi"></td>
                    </tr>
                    <tr>
                        <td>Url</td>
                        <td>:</td>
                        <td><input type="text" name="url"></td>
                    </tr>
                    <tr>
                        <td colspan="3"><button type="submit">Tambah</button></td>
                    </tr>
                </table>
                <?= form_close(); ?>
            </div>
        </div>
    </main>