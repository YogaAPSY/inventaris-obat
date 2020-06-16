            <!-- Bootstrap Select Css -->
            <link href="<?= base_url(); ?>assets/AdminBsb/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.4/dist/sweetalert2.all.min.js"></script>
            <?php if ($this->session->flashdata('message')) : ?>
            	<script type="text/javascript">
            		swal({
            			title: "BERHASIL !!!",
            			text: "<?php echo $this->session->flashdata('message'); ?>",
            			showConfirmButton: true,
            			type: 'success'
            		});
            	</script>
            <?php endif; ?>
            <?php if ($this->session->flashdata('abort')) : ?>
            	<script type="text/javascript">
            		swal({
            			title: "ERROR !!!",
            			text: "<?php echo $this->session->flashdata('abort'); ?>",
            			showConfirmButton: true,
            			type: 'error'
            		});
            	</script>
            <?php endif; ?>
            <section class="content">
            	<div class="container-fluid">
            		<div class="block-header">
            			<h2>APOTEKER MANAJEMEN USER</h2>
            		</div>

            		<!-- Input -->
            		<div class="row clearfix">
            			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            				<div class="card">
            					<div class="header">
            						<h2 style="font-weight: bold;color: #ad1455;font-size: 22px;">
            							<center>FORM USER ADMIN APOTEKER</center>
            							<br>
            						</h2>
            					</div>

            					<div class="body">
            						<?php $attributes = array('method' => 'post'); ?>
            						<?php if ($page == 'add') : ?>
            							<?php echo form_open_multipart('user/add', $attributes); ?>
            						<?php else : ?>
            							<?php echo form_open_multipart('user/edit/' . $user['id_user'], $attributes); ?>
            						<?php endif; ?>
            						<!-- <form action="#" method="post" enctype="multipart/form-data"> -->
            						<div class="row clearfix">
            							<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            								<h4 style="font-size: 17.1px;">Nama</h4>
            							</div>
            							<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            								<div class="form-group">
            									<div class="form-line">
            										<input type="text" value="<?= isset($user['nama']) ? $user['nama'] : ''; ?>" class="form-control" placeholder="Ex : Nama " name="nama" required autocomplete="off" />
            									</div>
            								</div>
            							</div>
            						</div>


            						<div class="row clearfix">
            							<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            								<h4 style="font-size: 17.1px;">Username</h4>
            							</div>
            							<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            								<div class="form-group">
            									<div class="form-line">
            										<input type="text" value="<?= isset($user['username']) ? $user['username'] : ''; ?>" class="form-control" placeholder="Ex: blablacrocxxx" name="username" required autocomplete="off" <?= isset($user['username']) ? 'readonly' : ''; ?> />

            									</div>
            									<span style="color: red;">*<small>Note : username tidak bisa diubah/edit</small></span>
            								</div>
            							</div>
            						</div>

            						<div class="row clearfix">
            							<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            								<h4 style="font-size: 17.1px;">Password</h4>
            							</div>
            							<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            								<div class="form-group">
            									<div class="form-line">
            										<input type="password" class="form-control" placeholder="Ex: xxxxx" name="password" required autocomplete="off" />
            									</div>
            								</div>
            							</div>
            						</div>

            						<div class="row clearfix">
            							<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            								<h4 style="font-size: 17.1px;">Confirm Password</h4>
            							</div>
            							<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            								<div class="form-group">
            									<div class="form-line">
            										<input type="password" class="form-control" placeholder="Ex: xxxxx" name="con_pass" required autocomplete="off" />
            									</div>
            								</div>
            							</div>
            						</div>

            						<div class="row clearfix">
            							<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            								<h4 style="font-size: 17.1px;">Status</h4>
            							</div>
            							<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            								<div class="form-group">
            									<div class="form-line">
            										<select style="font-size: 14px;" class="form-control show-tick" name="status" required autocomplete="off">
            											<option value="" selected disabled>-- Pilih Status --</option>
            											<option value="1">Pegawai</option>
            											<option value="2">Admin</option>
            										</select>
            									</div>
            								</div>
            							</div>
            						</div>

            						<div class="row clearfix">
            							<input type="submit" class="btn btn-primary pull-right" style="margin-right: 20px;font-size: 16px;height: 40px;width: 100px;" value="SIMPAN" name="submit">

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
