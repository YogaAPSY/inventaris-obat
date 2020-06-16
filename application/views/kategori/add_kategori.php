<section class="content">
	<div class="container-fluid">
		<div class="block-header">
			<h2>APOTEKER KATEGORI</h2>
		</div>

		<!-- Input -->
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2 style="font-weight: bold;color: #ad1455;font-size: 22px;">
							<center>FORM KATEGORI</center>
							<br>
						</h2>
					</div>

					<div class="body">
						<?php $attributes = array('method' => 'post'); ?>

						<?php echo form_open('kategori/add', $attributes); ?>
						<!-- <form action="#" method="post" enctype="multipart/form-data"> -->
						<div class="row clearfix">
							<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
								<h4 style="font-size: 17.1px;">Kode Kategori</h4>
							</div>
							<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
								<div class="form-group">
									<div class="form-line">
										<input type="text" class="form-control" placeholder="Ex : NARK2020" name="kode_kategori" required autocomplete="off" />
									</div>
								</div>
							</div>
						</div>


						<div class="row clearfix">
							<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
								<h4 style="font-size: 17.1px;">Nama Kategori</h4>
							</div>
							<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
								<div class="form-group">
									<div class="form-line">
										<input type="text" class="form-control" placeholder="Ex : Demam" name="kategori" required autocomplete="off" />
									</div>
								</div>
							</div>
						</div>


						<div class="row clearfix">
							<input type="submit" class="btn btn-primary pull-right" style="margin-right: 20px;font-size: 16px;height: 40px;width: 100px;" value="SIMPAN" name="add_kategori">
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
