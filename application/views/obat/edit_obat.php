<!-- Bootstrap Select Css -->
<link href="<?= base_url(); ?>assets/AdminBsb/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>APOTEKER OBAT</h2>
        </div>

        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2 style="font-weight: bold;color: #ad1455;font-size: 22px;">
                            <center>FORM EDIT OBAT</center>
                            <br>
                        </h2>
                    </div>

                    <div class="body">
                        <?php $attributes = array('method' => 'post'); ?>

                        <?php echo form_open('#', $attributes); ?>
                        <form action="#" method="post" enctype="multipart/form-data">
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                    <h4 style="font-size: 17.1px;">Kode Obat</h4>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Ex : NARK2020" name="id_obat" required autocomplete="off" value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                    <h4 style="font-size: 17.1px;">Satuan</h4>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="id_satuan" class="form-control  show-tick"" id="" required autocomplete=" off">
                                                <option value="" selected disabled>Pilih Satuan</option>
                                                <option value=" kg">kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                    <h4 style="font-size: 17.1px;">Kategori</h4>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="id_kategori" class="form-control  show-tick"" id="" required autocomplete=" off">
                                                <option value="" selected disabled>Pilih Kategori</option>
                                                <option value="Obat Bebas">Obat Bebas</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                    <h4 style="font-size: 17.1px;">Nama Obat</h4>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Ex : Paratusin" name="nama_obat" required autocomplete="off" value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                    <h4 style="font-size: 17.1px;">Stok</h4>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Ex : 10" name="stok" required autocomplete="off" value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                    <h4 style="font-size: 17.1px;">Harga Beli</h4>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Ex : 5.000.000" name="harga_beli" required autocomplete="off" value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                    <h4 style="font-size: 17.1px;">Harga Jual</h4>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Ex : 7.000.000" name="harga_jual" required autocomplete="off" value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                    <h4 style="font-size: 17.1px;">Created At</h4>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Ex : " name="created_at" required autocomplete="off" value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <input type="submit" class="btn btn-primary pull-right" style="margin-right: 20px;font-size: 16px;height: 40px;width: 100px;" value="EDIT" name="edit_obat">
                                <!-- <button class="btn btn-primary pull-right" style="margin-right: 20px;font-size: 16px;height: 40px;width: 100px;">SIMPAN</button> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Input -->

    </div>
    </div>
</section>

<!-- Select Plugin Js -->
<script src="<?= base_url(); ?>assets/AdminBsb/plugins/bootstrap-select/js/bootstrap-select.js"></script>