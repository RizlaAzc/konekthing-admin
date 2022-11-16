<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Profile</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Profile</li>
                <li class="breadcrumb-item active">Edit Profile</li>
            </ol>
            <hr>
            <div class="row">
                <div class="cpl-lg-8">
                    <?= form_open_multipart('profile/proses_edit'); ?>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="email" name="email" value="<?= $login['email']; ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="name" name="name" required value="<?= $login['nama']; ?>">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2">Picture</div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-1">
                                    <img src="<?= base_url('assets/img/profile/' . $login['image']); ?>" class="img-thumbanil" width="140">
                                </div>
                                <div class="col-sm-4">
                                    <div class="custom-file">
                                        <input type="file" class="form-control" style="margin-left: 76px; margin-top: 45px;" id="inputCity" name="gambar" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Edit Profile</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </main>