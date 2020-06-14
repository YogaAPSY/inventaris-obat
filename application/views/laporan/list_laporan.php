<!-- Bootstrap DatePicker Css -->
<link href="<?= base_url(); ?>assets/AdminBsb/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/AdminBsb/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" />
<style>
    .datepicker.datepicker-dropdown.dropdown-menu {
        margin-top: 111px !important;
    }
</style>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>LAPORAN APOTEKER</h2>
        </div>
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2 style="font-size: 24px;color:#ad1455;font-weight: bold;">
                            <center>FILTER LAPORAN BY DATE</center>
                        </h2>
                    </div>
                    <div class="body">
                        <?php $attributes = array('id' => 'login_form', 'class' => 'login100-form validate-form', 'method' => 'post'); ?>
                        <?php echo form_open('#', $attributes); ?>
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="input-group date datepicker">
                                    <div class="form-line ">
                                        <input type="text" name="start" class="form-control" autocomplete="off">
                                    </div>
                                    <span class="input-group-addon">
                                        <i class="material-icons">date_range</i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="input-group date datepicker">
                                    <div class="form-line">
                                        <input type="text" name="end" class="form-control" autocomplete="off">
                                    </div>
                                    <span class="input-group-addon">
                                        <i class="material-icons">date_range</i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <input type="submit" name="submit" class="btn btn-success">
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2 style="font-size: 22px;color:#ad1455;font-weight: bold;">
                            LAPORAN APOTEKER
                        </h2><br>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover" id="lapor">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Obat</th>
                                        <th>No Invoice</th>
                                        <th>Jumlah Keluar</th>
                                        <th>Jumlah Masuk</th>
                                        <th>Created At</th>
                                        <th>Total Bayar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>TotAH</td>
                                        <td>123456789</td>
                                        <td>500.000</td>
                                        <td>400.000</td>
                                        <td>Sekian</td>
                                        <td>Rp. 900.000</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="6" style="text-align: center;">Total Pendapatan</td>
                                        <td>Rp. 900.000</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
</section>