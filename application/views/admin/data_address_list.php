 <div class="preloader">
      <div class="loading">
        <img src="<?= base_url() ?>loading/load1.gif" width="400">
        
      </div>
    </div>

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
                                 <a href="<?= base_url() ?>address_list/tambah_address_list" class ="btn btn-primary mb-4"> Tambah Address List</a>

                                <a href="<?= base_url() ?>address_list/cetak_data" id="" class ="btn btn-danger mb-4" target="_blank"><i class="fas fa-print"></i> Cetak PDF</a> 

                                  <a href="<?= base_url() ?>address_list/cetak_excel" id="" class ="btn btn-success mb-4" ><i class="fas fa-file-excel"></i> Cetak Excel</a> 

                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kd Address List</th>
                                                <th>Name Adress</th>
                                                <th>Alamat</th>
                                                <th>Kelurahan</th>
                                                <th>Kecamatan</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Kd Address List</th>
                                                <th>Name Adress</th>
                                                <th>Alamat</th>
                                                <th>Kelurahan</th>
                                                <th>Kecamatan</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <?php 
                                            $no = 1;
                                            foreach ($address_list as $data) { ?>

                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $data['kd_address'] ?></td>
                                                <td><?= $data['name_address'] ?></td>
                                                <td><?= $data['alamat'] ?></td>
                                                <td><?= $data['kelurahan'] ?></td>
                                                <td><?= $data['kecamatan'] ?></td>
                                                <td>
                                                     <span class="d-inline-block" data-toggle="tooltip" data-title="Hapus">
                                                    <a href="<?= base_url() ?>address_list/hapus_address_list?id=<?= $data['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')"><i class="fas fa-trash"></i></a>
                                                      </span>

                                                    <span class="d-inline-block" data-toggle="tooltip" data-title="Edit">
                                                    <a href="<?= base_url() ?>address_list/edit_address_list?id=<?= $data['id'] ?>" class="btn btn-info"><i class="fas fa-pen"></i></a>
                                                  </span>

                                                     <span class="d-inline-block" data-toggle="tooltip" data-title="Detail">
                                                    <a href="<?= base_url() ?>address_list/detail?id=<?= $data['id'] ?>" class="btn btn-success"><i class="fas fa-eye"></i></a>
                                                  </span>


                                              
                                            </tr>

                                            <!-- Modal -->



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
        </div>
        <div class="footer-right">
       
        </div>
      </footer>
    </div>
  </div>


  <script>
    $(document).ready(function(){
      $(".preloader").fadeOut('slow');
    })
    </script>
                
