
<!-- loading -->
 <div class="preloader">
      <div class="loading">
        <img src="<?= base_url() ?>loading/load1.gif" width="400">
        
      </div>
    </div>
  <!-- loading -->


 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><?= $sub_title; ?></li>
                        </ol>
                        <div class="row">         
                              <?php foreach ($adms as $data) {
                                # code...
                              } ?>
                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Nama Daerah</label>
                              <input type="text" class="form-control" name="nama_daerah"  placeholder="Masukan namae daerah" required="" value="<?= $data['nama_daerah'] ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Kode Pos</label>
                              <input type="text" class="form-control" name="kode_post"  placeholder="Masukan kode pos" required="" value="<?= $data['kode_pos'] ?>">
                            </div>

                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Tingkat</label>
                                <input type="text" class="form-control" name="tingkat"  placeholder="Masukan tingkat" required="" maxlength="5" value="<?= $data['tingkat'] ?>">
                           
                            </div>

                            <div class="mb-3">
                                 <input type="submit" name="edit" class="btn btn-primary" value="Edit">
                                <a href="<?= base_url() ?>daerah_administratif_1/administratif1" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
          
                </div>
                </main>
                
