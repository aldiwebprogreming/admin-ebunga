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
                                 <a href="<?= base_url() ?>member/tambah_member" class ="btn btn-primary mb-4"> Tambah Member</a> 

                                    <a href="<?= base_url() ?>operator/cetak_data" id="" class ="btn btn-danger mb-4" target="_blank"><i class="fas fa-print"></i> Cetak PDF</a> 

                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Usernam</th>
                                                <th>Full Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Country</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                               <th>No</th>
                                                <th>Usernam</th>
                                                <th>Full Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Country</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <?php 
                                            $no = 1;
                                            foreach ($member as $data) { ?>

                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $data['username'] ?></td>
                                                <td><?= $data['full_name'] ?></td>
                                                <td><?= $data['email'] ?></td>
                                                <td><?= $data['phone'] ?></td>
                                                <td><?= $data['country'] ?></td>
                                                <td>
                                                    <a href="<?= base_url() ?>operator/hapus_operator?id=<?= $data['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')"><i class="fas fa-trash"></i></a>
                                                    <a href="<?= base_url() ?>operator/edit_operator?id=<?= $data['id'] ?>" class="btn btn-info"><i class="fas fa-pen"></i></a>

                                                    <a href="#" type="button" class="btn btn-success"  data-toggle="modal" data-target="#mymodal<?= $data['id'] ?>"> <i class="fas fa-eye"></i></a>


                                              
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
                
