<?php include 'header.php'; ?>

<!-- BREADCRUMB -->
<div id="breadcrumb">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Dashboard Customer</li>
		</ul>
	</div>
</div>
<!-- /BREADCRUMB -->

<div class="section">
	<div class="container">
		<div class="row">

			<?php
			include 'customer_sidebar.php';
			?>

			<div id="main" class="col-md-9">

				<h4>DASHBOARD</h4>

				<div id="store">

					<div class="row">

						<div class="col-lg-12">
							<?php
							$id = $_SESSION['customer_id'];
							$customer = mysqli_query($koneksi, "select * from customer where customer_id='$id'");
							while ($i = mysqli_fetch_array($customer)) {
							?>

								<h1 class="welcome_message">Halo, Selamat Datang <?php echo ucfirst($i['customer_nama']) ?> ! </h1>
								<br>
								<div class="form-group row col-md-6">
									<div class="row">
										<div class="col-sm-3">
											<label class="label_costumer">Email</label>
										</div>
										<div class="col-sm-9">
											<?php echo $i['customer_email'] ?>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-3">
											<label>No.Hp</label>
										</div>
										<div class="col-sm-9">
											<?php echo $i['customer_hp'] ?>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-3">
											<label>Alamat</label>
										</div>
										<div class="col-sm-9">
											<?php echo $i['customer_alamat'] ?>
										</div>
									</div>
								</div>
							<?php
							}
							?>

						</div>


					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>