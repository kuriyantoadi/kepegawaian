

		</div>
	</div>

	<script src="<?= base_url() ?>assets/js/app.js"></script>

	<!-- datepicker -->
	<script src="<?= base_url() ?>assets/datepicker/js/jquery.min.js"></script>
	<script src="<?= base_url() ?>assets/datepicker/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>assets/datepicker/libraries/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
	<script src="<?= base_url() ?>assets/datepicker/js/custom.js"></script>

	<script>
	$(document).ready(function(){
			setDatePicker()
			setDateRangePicker(".startdate", ".enddate")
			setMonthPicker()
			setYearPicker()
			setYearRangePicker(".startyear", ".endyear")
	})
	</script>


	<!-- <script src="<?= base_url() ?>assets/dataTable/jquery.js"></script> -->
	<script src="<?= base_url() ?>assets/dataTable/jquery.dataTables.min.js"></script>
	<script src="<?= base_url() ?>assets/dataTable/dataTables.bootstrap4.min.js"></script>

	<script>
	$(document).ready(function(){
			setDatePicker()
			setDateRangePicker(".startdate", ".enddate")
			setMonthPicker()
			setYearPicker()
			setYearRangePicker(".startyear", ".endyear")
	})

		document.addEventListener("DOMContentLoaded", function() {
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span title=\"Previous month\">&laquo;</span>",
				nextArrow: "<span title=\"Next month\">&raquo;</span>",
			});
		});

		$(document).ready(function() {
			$('#example').DataTable();
		});


	</script>

</body>

</html>
