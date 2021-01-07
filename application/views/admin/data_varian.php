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
                                
                                <div class="card-body">
                                 <a href="<?= base_url() ?>varian_produk/tambah_varian" class ="btn btn-primary mb-4"> Tambah variant produk </a> 

                                     <a href="<?= base_url() ?>varian_produk/cetak_data" id="" class ="btn btn-danger mb-4" target="_blank"><i class="fas fa-print"></i> Cetak PDF</a> 

                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kd Variant</th>
                                                <th>Kd Produk</th>
                                                <th>Nama Variant</th>
                                                <th>Deks</th>
                                                <th>Active</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Kd Variant</th>
                                                <th>Kd Produk</th>
                                                <th>Nama Variant</th>
                                                <th>Deks</th>
                                                <th>Active</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <?php 
                                            $no = 1;
                                            foreach ($varian as $data) { ?>

                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $data['kd_variant'] ?></td>
                                                <td><?= $data['kd_product'] ?></td>
                                                <td><?= $data['nama_variant'] ?></td>
                                                <td><?= $data['deks_variant'] ?></td>
                                                <td><?= $data['active'] ?></td>
                                                <td>
                                                  
                                                    <a href="<?= base_url() ?>varian_produk/hapus_varian?id=<?= $data['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')"><i class="fas fa-trash"></i></a>


                                                    <a href="<?= base_url() ?>varian_produk/edit_varian?id=<?= $data['id'] ?>" class="btn btn-info"><i class="fas fa-pen"></i></a> 
                                                                           

                                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           
                 </div>
                </div>

            </div>
           
         
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
         <!--  Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a> -->
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>