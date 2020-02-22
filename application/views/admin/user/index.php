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
							Daftar Users
							<div class="float-right">
								<a href="<?=site_url('admin/user/add')?>" class="btn btn-primary btn-flat"><i class="fa fa-user-plus"></i> Tambah</a>
							</div>
						</h4>
					</div>
					<div class="card-body">
						<div class="box-body table-responsive">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th>Nama</th>
										<th>Gender</th>
										<th>Username</th>
										<th>Email</th>
										<th>Level</th>
										<th>Status</th>
										<th>Foto</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach($row->result() as $no => $r) { ?>
									<tr>
										<td><?= $no+1 ?></td>
										<td><?= $r->nama ?></td>
										<td><?= $r->gender=='L'?'Laki-laki':'Perempuan' ?></td>
										<td><?= $r->username ?></td>
										<td><?= $r->email ?></td>
										<td><?= $r->level=='1'?'Admin':'Kasir' ?></td>
										<td><?= $r->status=='1'?'<span class="badge badge-success">Aktif</span>':'Nonaktif' ?></td>
										<td><?= $r->foto==''?'':'<img src="'.base_url('assets/img/avatars/'.$r->foto.'').'" height="50px">' ?></td>
										<td class="text-center" width="150px">
											<a href="<?=site_url('admin/user/edit/')?>" class="btn btn-primary btn-sm">
												<i class="fa fa-pencil"></i> Edit
											</a>
											<a href="<?=site_url('admin/user/edit/')?>" class="btn btn-danger btn-sm">
												<i class="fa fa-trash"></i> Delete
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
		</div>
	</div>
</div>
