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
							<center>FORM OBAT</center>
							<br>
						</h2>
					</div>

					<div class="body">
						<?php $attributes = array('method' => 'post'); ?>
						<?php if ($page == 'add') : ?>
							<?php echo form_open('obat/add', $attributes); ?>
						<?php else : ?>
							<?php echo form_open('obat/edit/' . $obat['id_obat'], $attributes); ?>
						<?php endif; ?>
						<!-- <form action="#" method="post" enctype="multipart/form-data"> -->
						<div class="row clearfix">
							<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
								<h4 style="font-size: 17.1px;">Kode Obat</h4>
							</div>
							<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
								<div class="form-group">
									<div class="form-line">
										<input type="text" value="<?= isset($obat['kode_obat']) ? $obat['kode_obat'] : ''; ?>" class="form-control" placeholder="Ex : NARK2020" name="kode_obat" required autocomplete="off" />
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

											<option value="" selected="" disabled="">-- Pilih Satuan --</option>
											<?php foreach ($satuan as $satu) : ?>
												<?php if ($obat['id_satuan'] == $satu['id_satuan']) : ?>
													<option value="<?= $satu['id_satuan']; ?>" selected> <?= $satu['kode_satuan']; ?> </option>

												<?php else : ?>
													<option value="<?= $satu['id_satuan']; ?>"> <?= $satu['kode_satuan']; ?> </option>
												<?php endif; ?>
												<!-- <option value="<?= $jenis['value'] ?>"><?= $jenis['nama'] ?></option> -->
											<?php endforeach; ?>
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

											<option value="" selected="" disabled="">-- Pilih Kategori --</option>
											<?php foreach ($kategoris as $kategori) : ?>
												<?php if ($obat['id_kategori'] == $kategori['id_kategori']) : ?>
													<option value="<?= $kategori['id_kategori']; ?>" selected> <?= $kategori['nama_kategori']; ?> </option>

												<?php else : ?>
													<option value="<?= $kategori['id_kategori']; ?>"> <?= $kategori['nama_kategori']; ?> </option>
												<?php endif; ?>
												<!-- <option value="<?= $jenis['value'] ?>"><?= $jenis['nama'] ?></option> -->
											<?php endforeach; ?>
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
										<input type="text" value="<?= isset($obat['nama_obat']) ? $obat['nama_obat'] : ''; ?>" class="form-control" placeholder="Ex : Paratusin" name="nama_obat" required autocomplete="off" />
									</div>
								</div>
							</div>
						</div>

						<!-- <div class="row clearfix">
							<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
								<h4 style="font-size: 17.1px;">Stok</h4>
							</div>
							<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
								<div class="form-group">
									<div class="form-line">
										<input type="text" class="form-control" placeholder="Ex : 10" name="stok" required autocomplete="off" disabled/>
									</div>
								</div>
							</div>
						</div> -->

						<div class="row clearfix">
							<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
								<h4 style="font-size: 17.1px;">Harga Beli</h4>
							</div>
							<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
								<div class="form-group">
									<div class="form-line">
										<input type="number" value="<?= isset($obat['harga_beli']) ? $obat['harga_beli'] : ''; ?>" class="form-control" placeholder="Ex : 5.000.000" name="harga_beli" required autocomplete="off" />
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
										<input type="number" value="<?= isset($obat['harga_jual']) ? $obat['harga_jual'] : ''; ?>" class="form-control" placeholder="Ex : 7.000.000" name="harga_jual" required autocomplete="off" />
									</div>
								</div>
							</div>
						</div>



						<div class="row clearfix">
							<input type="submit" class="btn btn-primary pull-right" style="margin-right: 20px;font-size: 16px;height: 40px;width: 100px;" value="SIMPAN" name="submit">
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
