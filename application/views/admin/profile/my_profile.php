        <div id="layoutSidenav_content">
          <main>
            <div class="container-fluid px-4">
              <h1 class="mt-4">My Profile</h1>
              <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Profile</li>
                <li class="breadcrumb-item active">My Profile</li>
              </ol>
              <hr>
              <div class="row">
                <div class="col-lg-6">
                  <?= $this->session->flashdata('message'); ?>
                </div>
              </div>
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="<?= base_url('assets/img/profile/') . $login['image']; ?>" class="img-fluid rounded-start">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><?= $login['nama']; ?></h5>
                      <p class="card-text"><?= $login['email']; ?></p>
                      <p class="card-text"><small class="text-muted">memeber since <?= date('d m y -t', $login['date_created']); ?></small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </main>