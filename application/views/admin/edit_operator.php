<!-- loading -->
<!--  <div class="preloader">
      <div class="loading">
        <img src="<?= base_url() ?>loading/load1.gif" width="400">
        
      </div>
    </div> -->
  <!-- loading -->


<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?= $sub_title; ?></h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4><?= $sub_title ?></h4>
                  </div>       

                        <?php foreach ($operator as $data) {
                          
                        } ?>       
                                
                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Username</label>
                              <input type="text" class="form-control" name="username"  placeholder="Masukan username" required="" value="<?= $data['username'] ?>">
                                
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Nama Lengkap</label>
                              <input type="text" class="form-control" name="nama_lengkap"  placeholder="Masukan nama lengakap" required="" value="<?= $data['nama_lengkap'] ?>">
                               
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">No HP</label>
                              <input type="number" name="hp" class="form-control" required="" value="<?= $data['hp'] ?>">
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Alamat</label>
                              <textarea class="form-control" name="alamat" placeholder="Masukan alamat" required=""><?= $data['alamat'] ?></textarea>
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Posisi</label>
                             <select class="form-control" name="posisi">
                              <?php 
                                  if ($data['posisi'] == 'Admin') {
                                    echo '<option>Admin</option>';
                                     echo '<option>Super Admin</option>';
                                  } else {
                                     
                                      echo '<option>Super Admin</option>';
                                      echo '<option>Admin</option>';
                                  }

                               ?>
                             </select>
                               
                            </div>

                          

                            <div class="mb-3">
                              <label for="" class="form-label">Bio</label>
                             <textarea class="form-control" name="bio" placeholder="Masukan biodata"><?= $data['bio'] ?></textarea>
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Active</label>

                                 <select class="form-control" name="active">
                                 <?php 

                                    if ($data['active'] == '1') {
                                      echo '<option value="1">Y</option>';
                                       echo '<option value="0">N</option>';
                                    } else {
                                       echo '<option value="0">N</option>';
                                        echo '<option value="1">Y</option>';
                                    }

                                  ?>


                                 </select>
                               
                            </div>

                           

                            <div class="mb-3">
                                 <input type="submit" name="edit" class="btn btn-primary" value="Edit">
                                <a href="<?= base_url() ?>operator/data_operator" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
          
                </div>
             </div>
           </div>
         </section>
       </div>
