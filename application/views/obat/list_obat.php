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
    			<h2>APOTERKER OBAT</h2>
    		</div>

    		<!-- Basic Examples -->
    		<div class="row clearfix">
    			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    				<div class="card">
    					<div class="header">
    						<h2 style="font-size: 22px;color:#ad1455;font-weight: bold;">
    							<center>LIST OBAT</center>
    						</h2> <br><br>
    						<a href="<?= base_url(); ?>Obat/add">
    							<button type="button" class="btn btn-info waves-effect">
    								<i class="material-icons">add</i>
    								<span>TAMBAH</span>
    							</button>
    						</a>
    					</div>

    					<div class="body">
    						<div class="table-responsive">
    							<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
    								<thead>
    									<tr>
    										<th style="width:30px">No</th>
    										<th>Kode Obat</th>
    										<th>Satuan</th>
    										<th>Kategori</th>
    										<th>Nama Obat</th>
    										<th>Stok</th>
    										<th>Harga Beli</th>
    										<th>Harga Jual</th>
    										<th>Tanggal</th>
    										<th style="text-align: center;">ACTION</th>
    									</tr>
    								</thead>

    								<tbody>

    									<?php $i = 1;
										foreach ($obat as $o) : ?>
    										<tr>
    											<td><?= $i++; ?></td>
    											<td><?= $o['kode_obat'] ?></td>
    											<td><?= get_nama_satuan_by_id($o['id_satuan']) ?></td>
    											<td><?= get_nama_kategori_by_id($o['id_kategori']) ?></td>
    											<td><?= $o['nama_obat'] ?></td>
    											<td><?= $o['stok'] ?></td>
    											<td>Rp. <?= number_format($o['harga_jual']) ?></td>
    											<td>Rp. <?= number_format($o['harga_beli']) ?></td>
    											<td><?= $o['created_at'] ?></td>
    											<td style="text-align: center;vertical-align: middle;">
    												<center>

    													<a href="#" id="btn_posisi" title="><?= ($this->session->userdata('status') == 2) ? 'Kurangi' : 'Tambah'; ?> Stok" data-id="#" data-toggle="modal" data-target="#Modal<?= $o['id_obat'] ?>"><i style="color:green;" class="material-icons">add_shopping_cart</i></a>
    													<a href="<?= base_url(); ?>obat/edit/<?= $o['id_obat'] ?>" data-toggle="tooltip" data-placement="top" title="Edit"><i style="color:#00b0e4;" class="material-icons">description</i></a>&nbsp;
    													<a href="#" id="btn_posisi" title="Delete" data-id="#" data-toggle="modal" data-target="#deleteModal"><i style="color:red;" class="material-icons">delete</i></a>
    												</center>
    											</td>
    										</tr>

    										<!-- Tambah Modal-->
    										<div class="modal fade" id="Modal<?= $o['id_obat'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    											<div class="modal-dialog" role="document">
    												<div class="modal-content">
    													<div class="modal-header">
    														<h5 class="modal-title" id="exampleModalLabel">Tambah Stok Obat</h5>
    														<button class="close" type="button" data-dismiss="modal" aria-label="Close">
    															<span aria-hidden="true">×</span>
    														</button>
    													</div>
    													<?php $attributes = array('method' => 'post'); ?>

    													<?php echo form_open('obat/obat_masuk/' . $o['id_obat'], $attributes); ?>
    													<div class="modal-body">
    														<label for="stok">Jumlah Obat</label>
    														<input type="number" id="stok" name="stok" class="form-control" data-id="<?= $o['stok'] ?>" placeholder="Jumlah obat" onblur="cek()">
    														<label for="invoice">No Invoice</label>
    														<input type="text" id="invoice" name="no_invoice" class="form-control" placeholder="Masukkan nomor invoice">
    													</div>
    													<!-- Modal footer -->
    													<div class="modal-footer">
    														<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
    														<!-- <button type="button" class="btn btn-secondary">Simpan</button> -->

    													</div>
    													</form>
    												</div>
    											</div>

    										</div>

    									<?php endforeach; ?>

    									<script>
    										function cek() {
    													var x = document.getElementById("stok").value;
    													var y = $(this).data('id');
    													console.log(y);
    													if (x > y) {
    														alert("Salah boy");
    													} else {
    														alert("bener Oi");
    													}
    												}
    									</script>

    								</tbody>
    							</table>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>

    		<!-- #END# Basic Examples -->
    	</div>
    	</div>
    </section>


    <!-- Logout Modal-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    	<div class="modal-dialog" role="document">
    		<div class="modal-content">
    			<div class="modal-header">
    				<h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
    				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
    					<span aria-hidden="true">×</span>
    				</button>
    			</div>
    			<div class="modal-body">Apakah anda yakin ingin menghapus Obat ini ?</div>
    			<div class="modal-footer">
    				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
    				<a id="hapus_nyo" class="btn btn-primary" href="#">Delete</a>
    			</div>
    		</div>
    	</div>
    </div>