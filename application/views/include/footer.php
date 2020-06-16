<!-- Jquery Core Js -->
<script src="<?= base_url(); ?>assets/AdminBsb/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="<?= base_url(); ?>assets/AdminBsb/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<!-- <script src="<?= base_url(); ?>assets/AdminBsb/plugins/bootstrap-select/js/bootstrap-select.js"></script> -->

<!-- Slimscroll Plugin Js -->
<script src="<?= base_url(); ?>assets/AdminBsb/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?= base_url(); ?>assets/AdminBsb/plugins/node-waves/waves.js"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="<?= base_url(); ?>assets/AdminBsb/plugins/jquery-countto/jquery.countTo.js"></script>

<!-- Morris Plugin Js -->
<script src="<?= base_url(); ?>assets/AdminBsb/plugins/raphael/raphael.min.js"></script>
<script src="<?= base_url(); ?>assets/AdminBsb/plugins/morrisjs/morris.js"></script>

<!-- ChartJs -->
<script src="<?= base_url(); ?>assets/AdminBsb/plugins/chartjs/Chart.bundle.js"></script>


<!-- Flot Charts Plugin Js -->
<script src="<?= base_url(); ?>assets/AdminBsb/plugins/flot-charts/jquery.flot.js"></script>
<script src="<?= base_url(); ?>assets/AdminBsb/plugins/flot-charts/jquery.flot.resize.js"></script>
<script src="<?= base_url(); ?>assets/AdminBsb/plugins/flot-charts/jquery.flot.pie.js"></script>
<script src="<?= base_url(); ?>assets/AdminBsb/plugins/flot-charts/jquery.flot.categories.js"></script>
<script src="<?= base_url(); ?>assets/AdminBsb/plugins/flot-charts/jquery.flot.time.js"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="<?= base_url(); ?>assets/AdminBsb/plugins/jquery-sparkline/jquery.sparkline.js"></script>

<!-- Custom Js -->
<script src="<?= base_url(); ?>assets/AdminBsb/js/admin.js"></script>
<script src="<?= base_url(); ?>assets/AdminBsb/js/pages/index.js"></script>
<script src="<?= base_url(); ?>assets/AdminBsb/js/pages/tables/jquery-datatable.js"></script>

<!-- Demo Js -->
<script src="<?= base_url(); ?>assets/AdminBsb/js/demo.js"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="<?= base_url(); ?>assets/AdminBsb/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="<?= base_url(); ?>assets/AdminBsb/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="<?= base_url(); ?>assets/AdminBsb/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>assets/AdminBsb/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="<?= base_url(); ?>assets/AdminBsb/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="<?= base_url(); ?>assets/AdminBsb/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>assets/AdminBsb/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="<?= base_url(); ?>assets/AdminBsb/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>assets/AdminBsb/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

<script>
	$(document).ready(function() {
		$('#lapor').DataTable({
			dom: 'Bfrtip',
			buttons: [{
					extend: 'copyHtml5',
					footer: true
				},
				{
					extend: 'excelHtml5',
					footer: true
				},
				{
					extend: 'csvHtml5',
					footer: true
				},
				{
					extend: 'pdfHtml5',
					footer: true
				},

			]
		});
	});
</script>
<!-- Bootstrap Datepicker Plugin Js -->
<script src="<?= base_url(); ?>assets/AdminBsb/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?= base_url(); ?>assets/AdminBsb/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript">
	$(function() {
		$(".datepicker").datepicker({
			format: 'yyyy-mm-dd',
			todayHighlight: true,
			autoclose: true,
			orientation: 'bottom auto',

		});
	});
</script>


<script type="text/javascript">
	$(document).on("click", "#btn_posisi", function() {
		var id = $(this).data('id');
		var url = '<?= site_url('kategori/delete/') ?>';
		$("#hapus_nyo").attr('href', url + id);

	})
</script>


<script type="text/javascript">
	$(document).on("click", "#btn_posisi1", function() {
		var id = $(this).data('id');
		var url = '<?= site_url('satuan/delete/') ?>';
		$("#hapus_nyo").attr('href', url + id);

	})
</script>
<script>
	function cekJpg(file) {
		var sFileName = file.files[0].name;
		var sFileExtension = sFileName.split('.')[sFileName.split('.').length - 1].toLowerCase();
		var iFileSize = file.size;
		var iConvert = (file.files[0].size / 1048576).toFixed(2);
		var FileSize = file.files[0].size / 1024 / 1024; // in MB

		/// OR together the accepted extensions and NOT it. Then OR the size cond.
		/// It's easier to see this way, but just a suggestion - no requirement.
		if (!(sFileExtension === "JPG" ||
				sFileExtension === "JPEG" ||
				sFileExtension === "GIF" ||
				sFileExtension === "PNG" ||
				sFileExtension === "jpg" ||
				sFileExtension === "jpeg" ||
				sFileExtension === "gif" ||
				sFileExtension === "png") || FileSize > 0.5) { /// 10 mb
			txt = "Tipe File :   '" + sFileExtension + "'\n\n";
			txt += "Size:  " + iConvert + " MB \n\n";
			txt += "Tidak Diperbolehkan Karna Bukan Format File Yang Diperbolehkan JPG,JPEG,PNG dan tidak lebih dari 500 KB.\n\n" + sFileExtension + FileSize;
			console.log(txt);
			swal({
				title: "ERROR !!!",
				text: txt,
				showConfirmButton: true,
				type: 'error'
			});
			$(file).val('');
			return false;
		} else {
			console.log('ini salah');
		}
	}
</script>

<script>
	$(function() {
		new Chart(document.getElementById("line_chart").getContext("2d"), getChartJs('line'));
		new Chart(document.getElementById("pie_chart").getContext("2d"), getChartJs('pie'));
	});

	function getChartJs(type) {
		var config = null;

		if (type === 'line') {
			config = {
				type: 'line',
				data: {
					labels: ["January", "February", "March", "April", "May", "June", "July"],
					datasets: [{
						label: "My First dataset",
						data: [65, 59, 80, 81, 56, 55, 40],
						borderColor: 'rgba(0, 188, 212, 0.75)',
						backgroundColor: 'rgba(0, 188, 212, 0.3)',
						pointBorderColor: 'rgba(0, 188, 212, 0)',
						pointBackgroundColor: 'rgba(0, 188, 212, 0.9)',
						pointBorderWidth: 1
					}, {
						label: "My Second dataset",
						data: [28, 48, 40, 19, 86, 27, 90],
						borderColor: 'rgba(233, 30, 99, 0.75)',
						backgroundColor: 'rgba(233, 30, 99, 0.3)',
						pointBorderColor: 'rgba(233, 30, 99, 0)',
						pointBackgroundColor: 'rgba(233, 30, 99, 0.9)',
						pointBorderWidth: 1
					}]
				},
				options: {
					responsive: true,
					legend: false
				}
			}
		} else if (type === 'pie') {
			config = {
				type: 'pie',
				data: {
					datasets: [{
						data: [225, 50, 100, 40],
						backgroundColor: [
							"rgb(233, 30, 99)",
							"rgb(255, 193, 7)",
							"rgb(0, 188, 212)",
							"rgb(139, 195, 74)"
						],
					}],
					labels: [
						"Pink",
						"Amber",
						"Cyan",
						"Light Green"
					]
				},
				options: {
					responsive: true,
					legend: false
				}
			}
		}
		return config;
	}
</script>