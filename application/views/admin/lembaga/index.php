<ol class="breadcrumb">
	<li class="breadcrumb-item">Setting Lembaga</li>
	<!-- Breadcrumb Menu-->
	<li class="breadcrumb-menu d-md-down-none">
		<div class="btn-group" role="group" aria-label="Button group">
			<a class="btn" href="#">
				<i class="icon-speech"></i>
			</a>
			<a class="btn" href="."><i class="icon-graph"></i>  Dashboard</a>
			<a class="btn" href="#"><i class="icon-settings"></i>  Settings</a>
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
							Setting Lembaga
						</h4>
					</div>
					<div class="card-body">
						<div class="box-body table-responsive">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Slogan</th>
										<th>Logo</th>
										<th>Logo Kecil</th>
										<th>Fotter Kiri</th>
										<th>Footer Kanan</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($row->result() as $no => $r) { ?>
										<tr>
											<td><?= $no + 1 ?></td>
											<td><?= $r->nama ?></td>
											<td><?= $r->slogan ?></td>
											<td><?= $r->logo == '' ? '' : '<img src="' . base_url('assets/img/' . $r->logo . '') . '" height="50px">' ?></td>
											<td><?= $r->logokecil == '' ? '' : '<img src="' . base_url('assets/img/' . $r->logokecil . '') . '" height="50px">' ?></td>
											<td><?= $r->footerl ?></td>
											<td><?= $r->footerr ?></td>
											<td class="text-center" width="150px">
												<a href="<?= site_url('admin/lembaga/edit/') ?>" class="btn btn-primary btn-sm">
													<i class="fa fa-pencil"></i> Edit
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