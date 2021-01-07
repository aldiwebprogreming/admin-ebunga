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

                        <?php foreach ($variasi_p as $data) {
                         
                        } ?>       
                                
                    <div class="card-body">
                      <form method="POST" action="" enctype="multipart/form-data">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Kd Sub Produk</label>
                              <select class="form-control" name="kode_sub_produk">
                                <option><?= $data['kd_sub_produk'] ?></option>
                                <option>-- Pilih kode sub produk --</option>

                              </select>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Nama Sub Produk</label>
                             <input type="text" name="nama_sub_produk" class="form-control" value="<?= $data['nama_sub_produk'] ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Deks Sub Prduk</label>
                               <textarea class="form-control" name="deks_sub_produk"><?= $data['deks_sub_produk'] ?></textarea>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Kode Produk</label>
                                  <input type="text" class="form-control" name="kode_produk" required="" value="<?= $data['kd_produk'] ?>">
                            </div>

                            

                            <div class="mb-3">
                              <label for="" class="form-label">Foto Produk</label>
                                  <input type="file" class="form-control" name="foto" value="<?= $data['foto'] ?>">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Active</label>
                                <select class="form-control" name="active">
                                  <?php if ($data['active'] == 1 ) { ?>
                                    <option value="<?= $data['active'] ?>">Y</option>
                                      <option value="0">N</option>

                                    <?php } else { ?>

                                      <option value="0">N</option>
                                      <option value="1">Y</option>

                                    <?php } ?>
                                </select>
                            </div>


                            <div class="mb-3">
                                 <input type="submit" name="edit" class="btn btn-primary" value="Edit">
                                <a href="<?= base_url() ?>variasi_produk/data_variasi_produk" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
          
             
             </div>
           </div>
         </div>
       </section>
     </div>