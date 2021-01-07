<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?= $title; ?></title>
        <link href="<?= base_url() ?>assets/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
         <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
         <script type="text/javascript" src="<?= base_url() ?>chartjs/Chart.js"></script>


    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Ebunga</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <!-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" /> -->
                    <!-- <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div> -->
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                       
                        <a class="dropdown-item" href="<?= base_url() ?>auth/logout">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
            


        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                           
                          
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Data Master
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    
                                    <a class="nav-link" href="<?= base_url() ?>user/data_user/">User</a>

                                    <a class="nav-link" href="<?= base_url() ?>registrasi_user/data_registrasi/">Registrasi User</a>

                                    <a class="nav-link" href="<?= base_url() ?>produk/data_produk">Produk</a>

                                    <a class="nav-link" href="<?= base_url() ?>katagori/data_katagori/"> Katagori Produk</a>

                                    <a class="nav-link" href="<?= base_url() ?>katagori/sub_kategori/"> Sub Katagori</a>

                                    <a class="nav-link" href="<?= base_url() ?>variasi_produk/data_variasi_produk/">Variasi Produk</a>

                                    <a class="nav-link" href="<?= base_url() ?>promo/data_promo/">Promo</a>

                                    <a class="nav-link" href="<?= base_url() ?>bank_account/data_bank_account/">Bank Account</a>

                                     <a class="nav-link" href="<?= base_url() ?>customer/data_customer/">Customer</a>

                                    <a class="nav-link" href="<?= base_url() ?>customer_order/data_customer_order/">Customer Order</a>

                                   <a class="nav-link" href="<?= base_url() ?>blog/data_blog/">Blog</a>

                                    <a class="nav-link" href="<?= base_url() ?>address_list/data_address_list/">Address List</a>

                                     <a class="nav-link" href="<?= base_url() ?>seller/data_seller/">Seller</a>

                                    <a class="nav-link" href="<?= base_url() ?>Komplain/data_komplain/">Komplain</a>

                                    <a class="nav-link" href="<?= base_url() ?>operator/data_operator/">Operator</a>



                                </nav>
                            </div>


                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="true" aria-controls="collapseLayouts2">
                                 <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Data Administratif
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                 
                                    <a class="nav-link" href="<?= base_url() ?>daerah_administratif_1/administratif1">Daerah Administratif 1</a>

                                    <a class="nav-link" href="<?= base_url() ?>daerah_administratif_2/administratif2">Daerah Administratif 2</a>

                                    <a class="nav-link" href="<?= base_url() ?>daerah_administratif_3/administratif3">Daerah Administratif 3</a>


                                </nav>
                            </div>
                            
                          
                            <a class="nav-link" href="<?= base_url() ?>branch_seller/data_branch_seller">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                               Branch Seller
                            </a>
                           <!--  <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a> -->
                        </div>
                    </div>
                  
                </nav>
            </div>