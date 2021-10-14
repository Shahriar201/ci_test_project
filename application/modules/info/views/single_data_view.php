<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<table class="table table-border">
					<thead>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Address</th>
							<th>Image</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td><?php echo $view_info->name ?></td>
							<td><?php echo $view_info->email ?></td>
							<td><?php echo $view_info->phone ?></td>
							<td><?php echo $view_info->address ?></td>
							<td>
								<img src="assets/image/<?php echo $view_info->image ?>" alt="No Photo" height="40px" width="40px">
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
