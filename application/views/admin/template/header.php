<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title['header']?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url();?>assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/plugins/daterangepicker/daterangepicker.css">

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
  <link rel="stylesheet" href="<?= base_url();?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- <link rel="stylesheet" href="<?= base_url();?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css"> -->
  <link rel="stylesheet" href="<?= base_url();?>assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/css/print.min.css">
  <!-- <script src="<?= base_url();?>assets/css/print.css"></script> -->
  <script src="<?= base_url();?>assets/plugins/jquery/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
  <script src="<?= base_url();?>assets/bower_components/angular/angular.min.js"></script>

  <style>
    @media screen {
      div.print-header {
        display: none;
      }

      div.print-body {
          display: none;
      }
      .center {
        margin: 0;
        position: absolute;
        align-items: center;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
      }
    }

    @media print {
        div.print-header {
            /* display: block; */
            position: fixed;
            text-align: center;
        }
        div.print-body {
            /* display: block; */
            text-align: left;
        }
        @page { size: landscape; }
    }
    
  </style>
  
</head>
<body class="hold-transition sidebar-mini">
  <?php
  $a = $this->session->userdata('jenis');
  if(!$this->session->userdata('jenis') || $this->session->userdata('jenis')!='Admin'){
    $this->session->set_flashdata('pesan', 'Anda tidak memiliki akses, error');
    $this->session->sess_destroy();
    redirect('authorization');
  }
  ?>
  <div class="wrapper">
    <nav class="navbar-expand navbar-dark">
      <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="<?= base_url()?>admin/home" class="nav-link">
            <b>
              Home
            </b>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url()?>admin/profile" class="nav-link">
            <p>
              Profile
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url()?>admin/pegawai" class="nav-link">
            <p>
              Pegawai
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url()?>admin/pelanggan" class="nav-link">
            <p>
              Pelanggan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url()?>admin/jenis" class="nav-link">
            <p>
              Jenis Laundry
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url()?>admin/pemesanan" class="nav-link">
            <p>
              Pemesanan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url()?>admin/transaksi" class="nav-link">
            <p>
              Traksaksi
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url()?>admin/laporan" class="nav-link">
            <p>
              Laporan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url()?>admin/aboutus" class="nav-link">
            <p>
              About Us
            </p>
          </a>
        </li>
        <li class="nav-item  ml-auto">
          <a class="nav-link" href="<?= base_url()?>authorization/logout" role="button">
            <b>LOGOUT</b>
          </a>
        </li>
      </ul>
    </div>
    </nav>
  </div>
    <div>
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1><?= $title['header'];?></h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"><?= $title['dash'];?></li>
              </ol>
            </div>
          </div>
        </div>
      </section>
      <section class="content">
        <div class="container-fluid">
          <div class="data-flush" data-flash="<?= $this->session->flashdata('pesan');?>"></div>