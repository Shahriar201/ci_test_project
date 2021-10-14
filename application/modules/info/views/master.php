<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<base href="<?php echo base_url(); ?>" />

	<script src="assets/js/jquery-3.5.1.slim.min.js"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

	<!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script> -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>

	<style type="text/css">
		::selection {
			background-color: #E13300;
			color: white;
		}

		::-moz-selection {
			background-color: #E13300;
			color: white;
		}

		body {
			background-color: #fff;
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#body {
			margin: 0 15px 0 15px;
		}

		p.footer {
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}

		#container {
			margin: 10px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
		}
	</style>

	
	<script src="assets/js/bootstrap.bundle.min.js"></script>

</head>

<body>

	<div id="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-primary">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">

					<li class="nav-item">
						<a class="nav-link" href="info/list">List Data</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="welcome/page2">Page-2</a>
					</li>

				</ul>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</nav>

		<!-- jquery-validation -->
		<script src="assets/plugins/jquery-validation/jquery.validate.min.js"></script>
		<script src="assets/plugins/jquery-validation/additional-methods.min.js"></script>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

		<!-- Another delete sweet alert by post method -->
		<script type="text/javascript">
			$(document).ready(function() {
				$(document).on('click', '#delete', function() {
					var actionTo = $(this).attr('href');
					var token = $(this).attr('data-token');
					var id = $(this).attr('data-id');
					swal({
							title: "Are you sure?",
							type: "success",
							showCancelButton: true,
							confirmButtonClass: 'btn-danger',
							confirmButtonText: 'Yes',
							cancelButtonText: "No",
							closeOnConfirm: false,
							closeOnCancel: false
						},
						function(isConfirm) {
							if (isConfirm) {
								$.ajax({
									url: actionTo,
									type: 'post',
									data: {
										id: id,
										_token: token
									},
									success: function(data) {
										swal({
												title: "Deleted!",
												type: "success"
											},
											function(isConfirm) {
												if (isConfirm) {
													$('.' + id).fadeOut();
												}
											});
									}
								});
							} else {
								swal("Cancelled", "", "error");
							}
						});
					return false;
				})
			})
		</script>
