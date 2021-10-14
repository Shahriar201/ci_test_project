<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h3 style="padding-top: 20px;">Edit Info

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

					<?php if(!empty($status)): ?>
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

					<form method="post" action="<?php echo base_url(); ?>info/update" id="myForm" enctype="multipart/form-data">

						<div class="form-row">

							<div class="form-group col-md-4">
								<label>Name</label>
								<input type="text" name="name"  class="form-control form-control-sm" placeholder="Write Your Name" value="<?php echo $edit_info->name ?>">
								
								<input type="hidden" name="id" value="<?php echo $edit_info->id ?>" />
							</div>
							
							<div class="form-group col-md-4">
								<label>Email</label>
								<input type="email" name="email" class="form-control form-control-sm" placeholder="Write Your Email" value="<?php echo $edit_info->email?>">
							</div>
							
							<div class="form-group col-md-4">
								<label>Phone</label>
								<input type="text" name="phone"  class="form-control form-control-sm" placeholder="Write Your Number" value="<?php echo $edit_info->phone?>">
							</div>
							
							<div class="form-group col-md-4">
								<label>Address</label>
								<input type="text" name="address"  class="form-control form-control-sm" placeholder="Write Your Address" value="<?php echo $edit_info->address?>">
							</div>
							
							<div class="form-group col-md-4">
								<label>Image</label>
								<input type="file" name="image"  class="form-control form-control-sm">
							</div>

							<div class="form-group col-md-4">
								<img id="showImage" src="assets/image/<?php echo $edit_info->image ?>" alt="No Photo" style="width: 100px; height: 105px; border: 1px solid #000";>
							</div>

							<div class="form-group col-md-6">
								<button type="submit" class="btn btn-primary btn-sm">Update Information</button>
							</div>
						</div>


					</form>


				</div>

			</div>
		</div>
	</div>
</div>


<script>
	setTimeout(function(){
		document.getElementById("message").remove();
	}, 2000);
</script>
