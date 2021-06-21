
			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-left">
							<p class="mb-0">
								<a href="index.html" class="text-muted"><strong>AdminKit Demo</strong></a> &copy;
							</p>
						</div>
						<div class="col-6 text-right">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
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




	<script>
		document.addEventListener("DOMContentLoaded", function() {
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span title=\"Previous month\">&laquo;</span>",
				nextArrow: "<span title=\"Next month\">&raquo;</span>",
			});
		});
	</script>

</body>

</html>
