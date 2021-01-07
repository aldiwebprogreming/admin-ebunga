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
                            <th>Status</th>
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
                            <th>Status</th>
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
                                
                                <?php 

                                      if ($data['status'] == 'aktif') { ?>

                                    <a href="<?= base_url() ?>promo/status_promo?id=<?= $data['id'] ?>" class="badge rounded-pill btn btn-primary" onclick="return confirm('Apakah ingin mengnonaktifkan promo ini ?')"><?= $data['status'] ?></a>
                                <?php } else { ?>

                                       <a href="<?= base_url() ?>promo/status_promo1?id=<?= $data['id'] ?>" class="badge rounded-pill btn btn-danger" onclick="return confirm('Apakah ingin mengnonaktifkan promo ini ?')">Nonaktif</a>
                                <?php } ?>
                              </td>
                              <td>
                                <a href="<?= base_url() ?>promo/hapus_promo?id=<?= $data['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')"><i class="fas fa-trash"></i></a>

                                <a href="<?= base_url() ?>promo/edit_promo?id=<?= $data['id'] ?>" class="btn btn-info"><i class="fas fa-pen"></i></a>


                                   <a href="<?= base_url() ?>promo/detail?id=<?= $data['id'] ?>" class="btn btn-success"><i class="fas fa-eye"></i></a>

                             <!--    <a href="#" type="button" class="btn btn-success"  data-toggle="modal" id="modal" data-target="#<?= $data['id'] ?>"> <i class="fas fa-eye"></i></a> -->

                              </td>
                              
                            </tr>

                             <?php } ?>
                        </tbody>

                    </table>
                  </div>


                  </div>

                </div>
              </div>
             
            </div>
          </div>
        </section>

        
<!--  -->
 


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

<script>
  $(document).ready(function(){

      $('#modal').click(function(){

        var id = $(this).attr('data-modal');

        alert(id)
        // $.get("<?= site_url() ?>model/data_promo?id="+id)

      });

  });
</script>

