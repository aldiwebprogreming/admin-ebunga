<!-- loading -->
 <div class="preloader">
      <div class="loading">
        <img src="<?= base_url() ?>loading/load1.gif" width="400">
        
      </div>
    </div>
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


                        <?php 

                            $rand = mt_rand(1000, 10000);
                            $string = "EBUNGA";
                            $kode = $string.$rand;


                            foreach ($produk as $data) {
                              
                            }

                         ?>       
                                
                    <div class="card-body">
                      <form method="POST" action="" enctype="multipart/form-data">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Kode Produk</label>
                              <input type="text" class="form-control" name="kd_produk" readonly="" value="<?= $data['kd_produk'] ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Nama Produk</label>
                              <input type="text" class="form-control" name="nama_produk"  placeholder="Masukan nama produk" required="" value="<?= $data['nama_produk'] ?>">
                            </div>

                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Produk</label>
                              <textarea class="form-control" id="" rows="3" name="deks"><?= $data['deks_produk'] ?></textarea>
                           
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Kategori</label>
                              <select class="form-control" name="kategori">
                                <option><?= $data['kategori'] ?></option>
                              </select>
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label"> Sub Kategori</label>
                              <select class="form-control" name="sub_kategori">
                                <option><?= $data['sub_kategori'] ?></option>
                              </select>
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Id Branch</label>
                              <input type="text" class="form-control" name="id_branch"  placeholder="Masukan id branch" required="" value="<?= $data['id_branch'] ?>">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Id Seller</label>
                              <input type="text" class="form-control" name="id_seller"  placeholder="Masukan id seller" required="" value="<?= $data['id_seller'] ?>">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Harga</label>
                              <input type="number" class="form-control" name="harga"  placeholder="Masukan harga produk " required="" value="<?= $data['harga'] ?>">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Stok</label>
                              <input type="number" class="form-control" name="stok"  placeholder="Masukan stok produk " required="" value="<?= $data['stok'] ?>">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Foto utama</label>
                              <input type="file" class="form-control" name="foto"  required="" value="<?= $data['foto_utama'] ?>">
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
                                <a href="<?= base_url() ?>produk/data_produk" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
          
               </div>
             </div>
             </div>
           </section>
         </div>
