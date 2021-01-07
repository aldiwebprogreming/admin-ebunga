
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

                         ?>       
                                
                    <div class="card-body">
                      <form method="POST" action="" enctype="multipart/form-data">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Kode Produk</label>
                              <input type="text" class="form-control" name="kd_produk" readonly="" value="<?= $kode; ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Nama Produk</label>
                              <input type="text" class="form-control" name="nama_produk"  placeholder="Masukan nama produk" required="">
                            </div>

                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Produk</label>
                              <textarea class="form-control" id="" rows="3" name="deks"></textarea>
                           
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Kategori</label>
                              <select class="form-control" name="kategori">
                                <option>--Pilih Kategori--</option>
                              </select>
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label"> Sub Kategori</label>
                              <select class="form-control" name="sub_kategori">
                                <option value="">--Pilih Sub Kategori--</option>
                                <?php foreach ($kategori as $data) { ?>
                                  <option><?= $data['kd_sub_kategori'] ?></option>

                                <?php } ?>
                              </select>
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Id Branch</label>
                              <input type="text" class="form-control" name="id_branch"  placeholder="Masukan id branch" required="">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Id Seller</label>
                              <input type="text" class="form-control" name="id_seller"  placeholder="Masukan id seller" required="">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Harga</label>
                              <input type="number" class="form-control" name="harga"  placeholder="Masukan harga produk " required="">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Stok</label>
                              <input type="number" class="form-control" name="stok"  placeholder="Masukan stok produk " required="">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Foto utama</label>
                              <input type="file" class="form-control" name="foto"  required="">
                            </div>



                            <div class="mb-3">
                                 <input type="submit" name="kirim" class="btn btn-primary" value="Save">
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
                
