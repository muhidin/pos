<ol class="breadcrumb">
	<li class="breadcrumb-item">Settings</li>
	<li class="breadcrumb-item">
		<a href="#">User</a>
	</li>
	<!-- Breadcrumb Menu-->
	<li class="breadcrumb-menu d-md-down-none">
		<div class="btn-group" role="group" aria-label="Button group">
			<a class="btn" href="#">
				<i class="icon-speech"></i>
			</a>
			<a class="btn" href=".">
				<i class="icon-graph"></i>  Dashboard</a>
			<a class="btn" href="#">
				<i class="icon-settings"></i>  Settings</a>
		</div>
	</li>
</ol>
<div class="container-fluid">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">
							Tambah User
							<div class="float-right">
								<a href="<?= site_url('user') ?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Back</a>
							</div>
						</h4>
					</div>
					<div class="card-body">
						<div class="box-body table-responsive">
							<form action="user/simpan" method="post" enctype="multipart/form-data">
								<div class="card-body">
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label class="col-md-2 col-form-label" for="name">Nama Lengkap *</label>
												<div class="col-md-10">
													<input class="form-control" id="nama" name="nama" type="text" placeholder="Masukan Nama Lengkap">
												</div>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-2 col-form-label">Jenis Kelamin</label>
										<div class="col-md-10 col-form-label">
											<div class="form-check form-check-inline mr-1">
												<input class="form-check-input" id="gender1" type="radio" value="L" name="gender">
												<label class="form-check-label" for="gender1">Laki-Laki</label>
											</div>
											<div class="form-check form-check-inline mr-1">
												<input class="form-check-input" id="gender2" type="radio" value="P" name="gender">
												<label class="form-check-label" for="gender2">Perempuan</label>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label for="email">Email</label>
												<input class="form-control" id="email" name="email" type="email" placeholder="Masukan Email yang masih berlaku">
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-2 col-form-label" for="select1">Level</label>
										<div class="col-md-10">
											<select class="form-control" id="select1" name="select1">
												<option value="0">Please select</option>
												<option value="1">Option #1</option>
												<option value="2">Option #2</option>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-2 col-form-label" for="select1">Status</label>
										<div class="col-md-10">
											<select class="form-control" id="select1" name="select1">
												<option value="0">Please select</option>
												<option value="1">Option #1</option>
												<option value="2">Option #2</option>
											</select>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label for="name">Username*</label>
												<input class="form-control" id="nama" name="nama" type="text" placeholder="Masukan Nama Lengkap">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label for="name">Password *</label>
												<input class="form-control" id="nama" name="nama" type="text" placeholder="Masukan Nama Lengkap">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label for="name">Password Confirmation*</label>
												<input class="form-control" id="nama" name="nama" type="text" placeholder="Masukan Nama Lengkap">
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>