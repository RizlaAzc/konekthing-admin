<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Blog</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Blog</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Blog Contents <a href="<?= base_url('blog/tambah_blog') ?>" class="btn btn-primary text-light" style="float: right;">Tambah Blog</a>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Gambar</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Url</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Gambar</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Url</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>image.jpg</td>
                                <td>IOT</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem temporibus id, saepe veniam dolor voluptatibus?</td>
                                <td>https://konekthing.com</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>image.jpg</td>
                                <td>IOT</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem temporibus id, saepe veniam dolor voluptatibus?</td>
                                <td>https://konekthing.com</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>image.jpg</td>
                                <td>IOT</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem temporibus id, saepe veniam dolor voluptatibus?</td>
                                <td>https://konekthing.com</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>