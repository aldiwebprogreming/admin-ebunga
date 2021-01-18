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
                                
                                <div class="card-body">
                                 <a href="<?= base_url() ?>operator/tambah_operator" class ="btn btn-primary mb-4"> Tambah Operator</a> 

                                    <a href="<?= base_url() ?>operator/cetak_data" id="" class ="btn btn-danger mb-4" target="_blank"><i class="fas fa-print"></i> Cetak PDF</a> 


                                      <a href="<?= base_url() ?>temp_order/cetak_excel" id="" class ="btn btn-success mb-4" ><i class="fas fa-file-excel"></i> Cetak Excel</a> 

                                <div class="table-responsive">file-excel
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Usernam</th>
                                                <th>Nama Lengkap</th>
                                                <th>No Hp</th>
                                                <th>Alamat</th>
                                                <th>Posisi</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Usernam</th>
                                                <th>Nama Lengkap</th>
                                                <th>No Hp</th>
                                                <th>Alamat</th>
                                                <th>Posisi</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <?php 
                                            $no = 1;
                                            foreach ($operator as $data) { ?>

                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $data['username'] ?></td>
                                                <td><?= $data['nama_lengkap'] ?></td>
                                                <td><?= $data['hp'] ?></td>
                                                <td><?= $data['alamat'] ?></td>
                                                <td><?= $data['posisi'] ?></td>
                                                <td>
                                                    <a href="<?= base_url() ?>operator/hapus_operator?id=<?= $data['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')"><i class="fas fa-trash"></i></a>
                                                    <a href="<?= base_url() ?>operator/edit_operator?id=<?= $data['id'] ?>" class="btn btn-info"><i class="fas fa-pen"></i></a>

                                                    <a href="#" type="button" class="btn btn-success"  data-toggle="modal" data-target="#mymodal<?= $data['id'] ?>"> <i class="fas fa-eye"></i></a>


                                              
                                            </tr>

                                            <!-- Modal -->
<div class="modal fade" id="mymodal<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Operator</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
     
       <b>Username</b><p><?= $data['username'] ?></p> 
       <hr>
        <b>Nama Lengkap</b> <p><?= $data['nama_lengkap'] ?></p> 
        <hr>
        <b>No Hp</b> <p><?= $data['hp'] ?></p> 
        <hr>
        <b>Alamat</b> <p><?= $data['alamat'] ?></p> 
        <hr>
        <b>Posisi</b> <p><?= $data['posisi'] ?></p> 
        <hr>
        <b>Bio</b> <p><?= $data['bio'] ?></p> 
         <hr> 
         <b>Active</b> <p><?= $data['active'] ?></p> 
    
       





      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>



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


<script>
    $(document).ready(function(){
      $(".preloader").fadeOut('slow');
    })
    </script>
                
