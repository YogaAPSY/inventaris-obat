<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Admin </title>
    <link rel="icon" href="<?= base_url(); ?>assets/login/images/sindi.png" type="image/x-icon">
    <!-- Favicon-->
    <link rel="icon" href="<?= base_url(); ?>assets/login/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?= base_url(); ?>assets/login/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?= base_url(); ?>assets/login/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?= base_url(); ?>assets/login/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?= base_url(); ?>assets/login/css/style.css" rel="stylesheet">

    <style>
        .login-page {
            margin: auto;
            max-width: none;
        }

        .btn .btn-block .bg-pink .waves-effect {
            border-radius: 62px !important;
            background: #E91E63 !important;
            box-shadow: 37px 37px 74px #c61a54 !important,
                -37px -37px 74px #ff2372 !important;
        }

        .maxmax {
            max-width: 360px;
            margin: auto;
        }

        .max {
            max-width: 500px !important;
            margin: auto;
            text-align: center;
        }

        @media only screen and (max-width: 600px) {
            .max {
                margin: auto;
            }

            .card {
                margin-left: 20px;
                margin-right: 20px;
            }
        }
    </style>
</head>


<body class="login-page" style=" background: linear-gradient(to right, rgba(2,0,36,1) 0%, rgba(45,45,148,1) 35%, rgba(0,212,255,1) 100%);">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.4/dist/sweetalert2.all.min.js"></script>

    <?php if (isset($_SESSION['gagal'])) : ?>
        <script type="text/javascript">
            swal({
                title: "<span style='color:#1E4ECE; font-size:30px;'>Gagal !!!</span>",
                html: "<span style='color:red; font-size:20px;'> <?php echo $this->session->flashdata('gagal'); ?></span>",
                width: 500,
                showConfirmButton: true,
                type: 'error'
            });
        </script>
    <?php endif ?>
    <?php if (isset($_SESSION['berhasil'])) : ?>
        <script type="text/javascript">
            swal({
                title: "<span style='color:#1E4ECE; font-size:30px;'>Berhasil !!!</span>",
                html: "<span style='color:red; font-size:20px;'><?php echo $this->session->flashdata('berhasil'); ?></span>",
                width: 500,
                showConfirmButton: true,
                type: 'success'
            });
        </script>
    <?php endif ?>

    <br><br><br><br>
    <div class="login-box maxmax">
        <div class="logo">
            <img src="assets/img/Sindi.png" style="margin-bottom:20px; width:80px; height:80px; position: relative;" class="responsive-image center-block">
            <a href="javascript:void(0);"><b style="font-size: 40px">APOTEKER</b></a>
            <small style="font-size: 17px">GUDANG APOTEKER KOTA PALEMBANG</small>
        </div>
        <div class="card" style="border-radius: 25px !important;">
            <div class="body">
                <form id="sign_in" method="POST" action="<?= site_url('Login/login_proses') ?>">
                    <div class="msg" style="margin-top:20px; font-weight: bold; color: red;">Silahkan login terlebih dahulu</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username / NIP " required autocomplete="off">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required autocomplete="off">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <!-- <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label> -->
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <!-- <div class="col-xs-6">
                            <a href="sign-up.html">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.html">Forgot Password?</a>
                        </div> -->
                    </div>
                </form>
            </div>
        </div>


    </div>

    <!-- Jquery Core Js -->
    <script src="<?= base_url(); ?>assets/login/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?= base_url(); ?>assets/login/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?= base_url(); ?>assets/login/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="<?= base_url(); ?>assets/login/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="<?= base_url(); ?>assets/login/js/admin.js"></script>
    <script src="<?= base_url(); ?>assets/login/js/pages/examples/sign-in.js"></script>
</body>

<!-- <div class="max">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xs-12" style="padding-left:0px; margin-bottom: 10px; padding-right:0px;">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xs-12" style="text-align: center;">
            <a style="text-align:center; font-weight: bold; margin-left: 10px; color:white;">Supported by:</a>
        </div>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xs-12" style="padding-left:0px; padding-right:0px;">
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xs-4" style="margin-left:0px; margin-right:0px;">
            <img src="<?php echo base_url(); ?>assets/images/pmkot.png" style="width:100%;background-position:center;" class="responsive-image center-block">
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xs-4" style="margin-left:0px; margin-right:0px;">
            <img src="<?php echo base_url(); ?>assets/images/kminfo.png" style="width:100%; " class="responsive-image center-block">
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xs-4" style=" margin-right:0px;">
            <img src="<?php echo base_url(); ?>assets/images/logoBSrE1.png" style="width:75%;" class="responsive-image center-block">
        </div>

    </div> -->

<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xs-12" style="padding-left:0px; margin-top: 10px; margin-bottom:30px; padding-right:0px;">

    <div style="margin-left:0px; margin-right:0px; display: block; margin-left: auto; margin-right: auto; width: 10%;">
        <a href="#">
            <img src="<?= base_url(); ?>assets/login/img/google_play.png" style="width:100%;background-position:center;" class="responsive-image center-block">
        </a>
    </div>

</div>
</div>


</html>