<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h3 style="padding-top: 20px;">Manage Info

					<?php
					// echo "<pre>";
					// print_r($this->session->all_userdata());
					// exit;

					// $this->session->set_userdata('status', 'error');

					$status = $this->session->flashdata('status');

					// echo "<pre>";
					// var_dump($status);
					// exit;

					$alert_class = $status == 'success' ? "alert-success" : "alert-danger";
					?>

					<?php if (!empty($status)) : ?>
						<span class="alert <?php echo $alert_class ?>" id="message">
							<?php
							echo $this->session->flashdata('message');
							?>
						</span>
					<?php endif; ?>

					<a class="btn btn-success float-right btn-sm" href="info/list">
						<i class="fa fa-list"></i>Info List</a>

				</h3>
			</div>

			<div class="card-body">

				<div class="card-body">

					<form method="post" action="info/save" id="myForm" enctype="multipart/form-data">

						<div class="form-row">

							<div class="form-group col-md-4">
								<label>Name</label>
								<input type="text" name="name" class="form-control form-control-sm" placeholder="Write Your Name" required>
							</div>

							<div class="form-group col-md-4">
								<label>Email</label>
								<input type="email" name="email" class="form-control form-control-sm" placeholder="Write Your Email" required>
							</div>

							<div class="form-group col-md-4">
								<label>Phone</label>
								<input type="text" name="phone" class="form-control form-control-sm" placeholder="Write Your Number" required>
							</div>

							<div class="form-group col-md-4">
								<label>Address</label>
								<input type="text" name="address" class="form-control form-control-sm" placeholder="Write Your Address">
							</div>

							<div class="form-group col-md-4">
								<label>Image</label>
								<input type="file" name="image" id="image" class="form-control form-control-sm">
							</div>

							<div class="form-group col-md-4">
								<img id="showImage" src="<?php base_url() ?>" alt="" style="width: 100px; height: 105px; border: 1px solid #000" ;>
							</div>

							<div class="form-group col-md-6">
								<button type="submit" class="btn btn-primary btn-sm">Add Information</button>
							</div>
						</div>


					</form>


				</div>

			</div>
		</div>
	</div>
</div>

<!-- jquery-validation -->
<script src="assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/plugins/jquery-validation/additional-methods.min.js"></script>


<script>
	setTimeout(function() {
		document.getElementById("message").remove();
	}, 2000);
</script>

<!-- Realtime image using Javascript -->
<script type="text/javascript">
	$(document).ready(function() {
		$('#image').change(function(e) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('#showImage').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>

<!-- JavaScript form validation -->
<!-- <script type="text/javascript">
	$(function() {

		console.log($('#myForm').validate());
		return;

		$('#myForm').validate({
			rules: {
				name: {
					required: true,
				},
				email: {
					require: true,
				},
				phone: {
					require: true,
				},
				address: {
					require: true,
				},
				image: {
					require: true,
				}
			},
			messages: {
				//terms: "Please accept our terms"
			},
			errorElement: 'span',
			errorPlacement: function(error, element) {
				error.addClass('invalid-feedback');
				element.closest('.form-group').append(error);
			},
			highlight: function(element, errorClass, validClass) {
				$(element).addClass('is-invalid');
			},
			unhighlight: function(element, errorClass, validClass) {
				$(element).removeClass('is-invalid');
			}
		});
	});
</script> -->
