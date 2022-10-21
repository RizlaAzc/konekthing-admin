<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah kontak</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('kontak') ?>">kontak</a></li>
                <li class="breadcrumb-item active">Tambah kontak</li>
            </ol>
            
             <hr>
              <form action="<?= base_url('kontak/fungsi_tambah') ?>" method="post">


                <br>
                <tr>
                  
      <form class="row g-3">
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">id</label>
        <input type="text" class="form-control" id="inputEmail4" name="id">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">email</label>
        <input type="email" class="form-control" id="inputPassword4" placeholder="@" name="email">
      </div>
      <div class="col-6">
        <label for="inputAddress" class="form-label">telpon</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="+62" name="telepon">
      </div>
      <div class="col-6">
        <label for="inputAddress2" class="form-label">lokasi</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="lokasi">
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">deskripsi</label>
        <input type="text" class="form-control" id="inputCity" name="deskripsi">
      </div>
      <br>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Check me out
          </label>
        </div>
      </div>
      <br>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">tambah</button>
      </div>
    </form>

                       
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>
    </main>


            
                  