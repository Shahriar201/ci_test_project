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

					<?php if(!empty($status)): ?>
						<span class="alert <?php echo $alert_class ?>" id="message">
							<?php
								echo $this->session->flashdata('message');
							?>
						</span>
					<?php endif; ?>

					<a class="btn btn-success float-right btn-sm" href="addInfo/add">
						<i class="fa fa-plus-circle"></i>Add Info</a>

				</h3>
			</div>

			<div class="card-body">


				<table class="table table-dark" style="margin-top: 20px;">
					<thead>
						<tr class="" style="font-weight: bold;">
							<td>SL</td>
							<td>Name</td>
							<td>Email</td>
							<td>Phone</td>
							<td>Address</td>
							<td>Image</td>
							<td>Action</td>
						</tr>
					</thead>

					<tbody>
						<?php foreach ($data_list as $key => $item) { ?>

							<tr>
								<th scope="row"><?php echo $key + 1 ?></th>
								<td><?php echo $item->name ?></td>
								<td><?php echo $item->email ?></td>
								<td><?php echo $item->phone ?></td>
								<td><?php echo $item->address ?></td>
								<td>
									<img height="35" width="35" src="assets/image/<?php echo $item->image ?>" alt="No Photo" />
								</td>
								
								<td>
									<a title="Edit" id="edit" class="btn btn-sm btn-primary" href="<?php echo site_url()?>addInfo/edit/<?php echo $item->id?>">
										<i class="fa fa-edit">

										</i>
									</a>
									<a title="Delete" id="delete" class="btn btn-sm btn-danger" href="<?php echo site_url()?>addInfo/delete/<?php echo $item->id?>" data-id="<?php echo $item->id?>">
										<i class="fa fa-trash"></i>
									</a>
								</td>
							</tr>

						<?php } ?>

					</tbody>
				</table>

			</div>
		</div>
	</div>
</div>


<script>
	setTimeout(function(){
		document.getElementById("message").remove();
	}, 2000);
</script>
