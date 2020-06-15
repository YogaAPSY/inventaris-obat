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
										<th>No Invoice</th>
										<th>Nama Obat</th>
										<th>Status Transaksi</th>
										<th>Total</th>
										<th>Stok</th>
										<th>Pendapatan</th>
										<th>Tanggal Transaksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1;
									$keluar = 0;
									$masuk = 0;

									foreach ($laporan as $lapor) : ?>
										<tr>
											<td><?= $i++; ?></td>
											<td><?= $lapor['no_invoice'] ?></td>
											<td><?= $lapor['nama_obat'] ?></td>
											<td><?= ($lapor['status'] == 1) ? '<span style="color:red;">Keluar</span>' : '<span style="color:green;">Masuk</span>';  ?></td>
											<td><?= $lapor['jumlah'] ?></td>
											<td><?= $lapor['stok'] ?></td>
											<td>Rp. <?= number_format($lapor['pendapatan']) ?></td>
											<td><?= $lapor['created_at'] ?></td>
										</tr>
										<?php if ($lapor['status'] == 2) {
											$masuk = $masuk + $lapor['pendapatan'];
										} else {
											$keluar = $keluar + $lapor['pendapatan'];
										} ?>
									<?php endforeach; ?>
								</tbody>
								<tfoot>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>

										<td style="text-align: center;">Total Pendapatan</td>
										<td></td>
										<td>Rp. <?= number_format($masuk - $keluar) ?></td>
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
