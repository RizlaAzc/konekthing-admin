<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">edit kontak</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('kontak') ?>">kontak</a></li>
                <li class="breadcrumb-item active">edit kontak</li>
            </ol>
            
             <hr>
              <form action="<?= base_url('kontak/fungsi_edit') ?>" method="post">


                <br>
                <tr>
                  
      <form class="row g-3">
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">id</label>
        <input type="text" class="form-control" id="inputEmail4" name="id" value="<?php echo $queryPrdkDetail->id ?>" required>
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">email</label>
        <input type="email" class="form-control" id="inputPassword4" placeholder="@" name="email" value="<?php echo $queryPrdkDetail->email ?>" required>
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">telepon</label>
        <input type="text" class="form-control" id="inputPassword4" placeholder="+62" name="telepon" value="<?php echo $queryPrdkDetail->telepon ?>" required>
      </div>
     <div class="col-6">
        <label for="inputAddress2" class="form-label">lokasi</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor"name="lokasi" value="<?php echo $queryPrdkDetail->lokasi ?>" required>
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">deskripsi</label>
        <input type="text" class="form-control" id="inputCity" name="deskripsi" value="<?php echo $queryPrdkDetail->deskripsi ?>" required>
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
        <button type="submit" class="btn btn-primary">edit</button>
      </div>
    </form>

                       
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>
    </main>


            
                 