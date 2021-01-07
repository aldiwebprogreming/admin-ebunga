  <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?= $title; ?></h1>
          </div>

          <div class="section-body">

            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">

                <div class="card">
                  <div class="card-header">
                    <h4><?= $sub_title ?></h4>
                  </div>

                  <div class="card-body">

                  <a href="<?= base_url() ?>promo/tambah_promo" class ="btn btn-primary mb-4"> Tambah Promo</a> 

                  <a href="<?= base_url() ?>promo/cetak_data" id="" class ="btn btn-danger mb-4" target="_blank"><i class="fas fa-print"></i> Cetak PDF</a> 
                   
                   


                      <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                            <th>No</th>
                            <th>Kd Promo</th>
                            <th>Nama Promo</th>
                            <th>Cakupan</th>
                            <th>Id Seller</th>
                            <th>Opsi</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Kd Promo</th>
                            <th>Nama Promo</th>
                            <th>Cakupan</th>
                            <th>Id Seller</th>
                           
                            <th>Opsi</th>
                        </tr>
                      </tfoot>

                      <tbody>

                          <?php 
                          $no = 1;
                          foreach ($promo as $data) { ?>

                          <tr>
                              <td><?= $no++; ?></td>
                              <td><?= $data['kd_promo'] ?></td>
                              <td><?= $data['nama_promo'] ?></td>
                              <td><?= $data['cakupan'] ?></td>
                              <td><?= $data['id_seller'] ?></td>
                              <td>
                                <a href="<?= base_url() ?>promo/hapus_promo?id=<?= $data['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')"><i class="fas fa-trash"></i></a>
                                <a href="<?= base_url() ?>promo/edit_promo?id=<?= $data['id'] ?>" class="btn btn-info"><i class="fas fa-pen"></i></a>

                                 <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Aw, yeah!</button>

                                <a href="#" type="button" class="btn btn-success"  data-toggle="modal" data-target="#mymodal<?= $data['id'] ?>"> <i class="fas fa-eye"></i></a>

                              </td>
                              
                            </tr>

                        
                          </tbody>
                    </table>
                  </div>


                  </div>

                </div>
              </div>
             
            </div>
          </div>
        </section>

       

     <div class="modal fade" id="mymodal<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Promo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
     
       <b>Kode Promo</b><p><?= $data['kd_promo'] ?></p> 
       <hr>
        <b>Nama Promo</b> <p><?= $data['nama_promo'] ?></p> 
        <hr>
        <b>Deks Promo</b> <p><?= $data['deks_promo'] ?></p> 
        <hr>
        <b>Cakupan</b> <p><?= $data['cakupan'] ?></p> 
        <hr>
        <b>Id Seller</b> <p><?= $data['id_seller'] ?></p> 
        <hr>
        <b>Tipe</b> <p><?= $data['tipe'] ?></p> 
        <hr>
        <b>Value</b> <p><?= $data['value'] ?></p> 
        <hr>
         <b>Start Active</b> <p><?= $data['start_active'] ?></p>
         <hr> 
         <b>End Active</b> <p><?= $data['end_active'] ?></p> 
         <hr>
         <b>Status</b> <p><?= $data['status'] ?></p> 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>


  <?php } ?>


      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>
