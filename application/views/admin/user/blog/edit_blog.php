<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Blog</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('blog') ?>">Blog</a></li>
                <li class="breadcrumb-item active">Edit Blog</li>
            </ol>
            <div>
                <hr>
                <form action="<?= base_url('blog/fungsi_edit') ?>" method="post">
                    <table border="1">
                        <br>
                        <tr>
                            <td>ID</td>
                            <td>:</td>
                            <td><input type="text" name="id" value="<?= $queryBlgDetail->id ?>" readonly></td>
                        </tr>
                        <tr>
                            <td>Gambar</td>
                            <td>:</td>
                            <td><input type="file" name="gambar" value="<?= $queryBlgDetail->gambar ?>"></td>
                        </tr>
                        <tr>
                            <td>Judul</td>
                            <td>:</td>
                            <td><input type="text" name="judul" value="<?= $queryBlgDetail->judul ?>"></td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td>:</td>
                            <td><input type="text" name="deskripsi" value="<?= $queryBlgDetail->deskripsi ?>"></td>
                        </tr>
                        <tr>
                            <td>Url</td>
                            <td>:</td>
                            <td><input type="text" name="url" value="<?= $queryBlgDetail->url ?>"></td>
                        </tr>
                        <tr>
                            <td colspan="3"><button type="submit">Edit</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </main>