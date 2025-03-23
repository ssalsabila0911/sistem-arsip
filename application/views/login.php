<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login Sistem Arsip Digital</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.transitions.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/morrisjs/morris.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/scrollbar/jquery.mCustomScrollbar.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/metisMenu/metisMenu.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/metisMenu/metisMenu-vertical.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/calendar/fullcalendar.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/calendar/fullcalendar.print.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/form/all-type-forms.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css'); ?>">
    <script src="<?php echo base_url('assets/js/vendor/modernizr-2.8.3.min.js'); ?>"></script>
</head>

<body>
    <div class="error-pagewrap">
        <div class="error-page-int">
            <div class="text-center m-b-md custom-login">
                <h3>ARSIP DIGITAL</h3>
                <h4>Sistem Arsip Digital</h4>
                <h5>Pondok Pesantren Wali Songo Ngabar</h5>

                <br>

                <p>Silahkan login untuk mengakses arsip.</p>

            </div>
            <div class="content-error">
                <?php 
                // pesan notifikasi

                if ($this->input->get('alert') == "gagal") {
                    echo "<div class='alert alert-danger'>LOGIN GAGAL! USERNAME DAN PASSWORD SALAH!</div>";
                } else if ($this->input->get('alert') == "logout") {
                    echo "<div class='alert alert-success'>ANDA TELAH BERHASIL LOGOUT</div>";
                } else if ($this->input->get('alert') == "belum_login") {
                    echo "<div class='alert alert-warning'>ANDA HARUS LOGIN UNTUK MENGAKSES DASHBOARD</div>";
                }

                ?>
                <div class="hpanel">
                    <div class="panel-body">


                        <br>
                        <br>
                        <center>
                            <h4>LOGIN ADMIN / PETUGAS</h4>    
                        </center>
                        <br>
                        <br>

                        <form action="<?php echo site_url('auth/proses_login'); ?>" method="POST" id="loginForm">

                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="username" title="Please enter you username" required="required" autocomplete="off" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="required" autocomplete="off" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Hak Akses</label>
                                <select class="form-control" name="akses">
                                    <option value="admin">Admin</option>
                                    <option value="petugas">Petugas</option>
                                </select>
                                
                            </div>
                            
                            <input type="submit" class="btn btn-success btn-block loginbtn" value="Login">
                        </form>

                        <br>

                    </div>
                </div>

                <a href="<?php echo base_url('/'); ?>">Kembali</a>
            </div>
            <div class="text-center login-footer">
                <p class="text-muted">Copyright © <?php echo date('Y') ?>. Sistem Arsip Digital - Pondok Pesantren Wali Songo Ngabar</p>
            </div>
        </div>   
    </div>
    <script src="<?php echo base_url('assets/js/vendor/jquery-1.12.4.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/wow.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-price-slider.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.meanmenu.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.sticky.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.scrollUp.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/scrollbar/mCustomScrollbar-active.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/metisMenu/metisMenu.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/metisMenu/metisMenu-active.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/tab.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/icheck/icheck.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/icheck/icheck-active.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

    <!-- ALERT -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php if ($this->session->flashdata('pesan_sukses')):?>
    <script>swal("Sukses!", "<?php echo $this->session->flashdata('pesan_sukses'); ?>", "success");</script>
    <?php endif ?>
   
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php if ($this->session->flashdata('pesan_gagal')):?>
    <script>swal("Gagal!", "<?php echo $this->session->flashdata('pesan_gagal'); ?>", "error");</script>
    <?php endif ?>
</body>
</html>