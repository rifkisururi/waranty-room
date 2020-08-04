<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-body">
				<?php if ($this->session->userdata("role") == 3) {
				?>
					<table class="table table-striped">
						<tr>
							<th>Nomor Claim</th>
							<th>Tipe Claim</th>
							<th>VIN</th>
							<th>Nomor Mesin</th>
							<th>Odometer</th>
							<th>Tanggal Beli</th>
							<th>Permasalahan</th>
							<th>Tanggal Pengambilan</th>
							<th>Tanggal dibuat </th>
							<th>Status Claim </th>

						</tr>
						<?php foreach ($claim as $c) { ?>
							<tr>
								<td><?php echo $c['number']; ?></td>
								<td><?php echo $c['tipe_claim']; ?></td>
								<td><?php echo $c['vin']; ?></td>
								<td><?php echo $c['nomor_mesin']; ?></td>
								<td><?php echo $c['odometer']; ?></td>
								<td><?php echo $c['tanggal_beli']; ?></td>
								<td><?php echo $c['permasalahan']; ?></td>
								<td><?php echo $c['tanggal_pengambilan']; ?></td>
								<td><?php echo $c['create_date']; ?></td>
								<td>
									<?php if ($c['status_claim'] == 1) {
										echo "Claim masuk";
									} elseif ($c['status_claim'] == 2) {
										echo "Diproses";
									} elseif ($c['status_claim'] == 3) {
										echo "Diterima";
									} elseif ($c['status_claim'] == 4) {
										echo "Ditolak";
									} elseif ($c['status_claim'] == 5) {
										echo "Selesai";
									}
									?>
								</td>
							</tr>
							<?php
							if ($c['status_claim'] == 3 ||  $c['status_claim'] == 4) {
							?>
								<tr>
									<td></td>
									<td>Tanggal Pengembalian</td>
									<td> <?php echo $c['tanggal_pengembalian']; ?></td>
									<td>Note</td>
									<td colspan="6"><?php echo $c['note']; ?></td>

								</tr>
							<?php
							}
							?>

						<?php } ?>
					</table>
				<?php } ?>

				<?php if ($this->session->userdata("role") == 1) {
				?>
					<table class="table table-striped">
						<tr>

							<th>Nama Investigasi</th>
							<th>Tanggal Pengembalian</th>
							<th>Number</th>
							<th>Tipe Claim</th>
							<th>Nomor Mesin</th>
							<th>Odometer</th>
							<th>Tanggal Beli</th>
							<th>Tanggal Pengambilan</th>
							<th>Create Date</th>
							<th>Nama Cleint</th>
							<th>Status Claim</th>
							<th>Permasalahan</th>
							<th>Note</th>
							<th>Actions</th>
						</tr>
						<?php foreach ($claim as $c) { ?>
							<tr>

								<td><?php echo $c['namaInspector']; ?></td>
								<td><?php echo $c['tanggal_pengembalian']; ?></td>
								<td><?php echo $c['number']; ?></td>
								<td><?php echo $c['tipe_claim']; ?></td>
								<td><?php echo $c['nomor_mesin']; ?></td>
								<td><?php echo $c['odometer']; ?></td>
								<td><?php echo $c['tanggal_beli']; ?></td>
								<td><?php echo $c['tanggal_pengambilan']; ?></td>
								<td><?php echo $c['create_date']; ?></td>
								<td><?php echo $c['namaCleint']; ?></td>
								<td>
									<?php if ($c['status_claim'] == 1) {
										echo "Claim masuk";
									} elseif ($c['status_claim'] == 2) {
										echo "Diproses";
									} elseif ($c['status_claim'] == 3) {
										echo "Diterima";
									} elseif ($c['status_claim'] == 4) {
										echo "Ditolak";
									} elseif ($c['status_claim'] == 5) {
										echo "Selesai";
									}
									?>

								</td>
								<td><?php echo $c['permasalahan']; ?></td>
								<td><?php echo $c['note']; ?></td>
								<td>
									<?php if ($c['status_claim'] == 1) {
									?>
										<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#exampleModal" onclick="getIdClaim(<?php echo $c['id']; ?>,0)">
											Proses
										</button>
										<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modalTolak" onclick="getIdClaim(<?php echo $c['id']; ?>,2)">
											Tolak
										</button>
									<?php
									} elseif ($c['status_claim'] == 2) {
									?>
										<a href="<?php echo site_url('claim/print/' . $c['id']); ?>" class="btn btn-primary btn-xs">Cetak</a>
									<?php
									} elseif ($c['status_claim'] == 5) {
										echo "selesai";
									}
									if ($c['status_claim'] == 3 || $c['status_claim'] == 4) {
									?>
										<button type="button" class="btn btn-warning btn-xs" onclick="selesai(<?php echo $c['id']; ?>)">
											Selesai
										</button>
									<?php
									}
									?>

								</td>
							</tr>
						<?php } ?>

						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										Pilih Inspector
										<br>
										<select name='investigator' id="investigator">
											<?php
											foreach ($all_investigator as $i) {
												echo "<option value=" . $i['id'] . ">" . $i['nama'] . "</option>";
											}
											?>
										</select>
										<br>
										<br>
										<button class="btn btn-primary btn-xs" data-dismiss="modal" onclick="proses()">Simpan</button>
									</div>
								</div>
							</div>
						</div>

						<div class="modal fade" id="modalTolak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										Note
										<input type="area" id="noteDitolak">
										<br>
										Tanggal Pengembalian
										<input type="date" id="tanggalAmbilTolak">
										<br>
										<button class="btn btn-primary btn-xs" data-dismiss="modal" onclick="prosesDitolak()">Simpan</button>
									</div>
								</div>
							</div>
						</div>
					</table>

				<?php } ?>

				<?php if ($this->session->userdata("role") == 2) {
				?>
					<table class="table table-striped">
						<tr>

							<th>Nama Investigasi</th>
							<th>Tanggal Pengembalian</th>
							<th>Number</th>
							<th>Tipe Claim</th>
							<th>Nomor Mesin</th>
							<th>Odometer</th>
							<th>Tanggal Beli</th>
							<th>Tanggal Pengambilan</th>
							<th>Create Date</th>
							<th>Nama Cleint</th>
							<th>Status Claim</th>
							<th>Permasalahan</th>
							<th>Note</th>
							<th>Actions</th>
						</tr>
						<?php foreach ($claim as $c) { ?>
							<tr>

								<td><?php echo $c['namaInspector']; ?></td>
								<td><?php echo $c['tanggal_pengembalian']; ?></td>
								<td><?php echo $c['number']; ?></td>
								<td><?php echo $c['tipe_claim']; ?></td>
								<td><?php echo $c['nomor_mesin']; ?></td>
								<td><?php echo $c['odometer']; ?></td>
								<td><?php echo $c['tanggal_beli']; ?></td>
								<td><?php echo $c['tanggal_pengambilan']; ?></td>
								<td><?php echo $c['create_date']; ?></td>
								<td><?php echo $c['namaCleint']; ?></td>
								<td>
									<?php if ($c['status_claim'] == 1) {
										echo "Claim masuk";
									} elseif ($c['status_claim'] == 2) {
										echo "Diproses";
									} elseif ($c['status_claim'] == 3) {
										echo "Diterima";
									} elseif ($c['status_claim'] == 4) {
										echo "Ditolak";
									} elseif ($c['status_claim'] == 5) {
										echo "Selesai";
									}
									?>

								</td>
								<td><?php echo $c['permasalahan']; ?></td>
								<td><?php echo $c['note']; ?></td>
								<td>
									<?php if ($c['status_claim'] == 1) {
									?>
									<?php
									} elseif ($c['status_claim'] == 2) {
									?>
										<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#modalTerima" onclick="getIdClaim(<?php echo $c['id']; ?>,1)">
											Diterima
										</button>
										<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modalTolak" onclick="getIdClaim(<?php echo $c['id']; ?>,2)">
											Tolak
										</button>
									<?php
									} elseif ($c['status_claim'] == 3) {
										echo "Diterima";
									} elseif ($c['status_claim'] == 4) {
										echo "Ditolak";
									} elseif ($c['status_claim'] == 5) {
									?>
										<button class="btn btn-sucess btn-xs">Selesai</button>
									<?php
									}
									?>


								</td>
							</tr>
						<?php } ?>

						<!-- Modal -->
						<div class="modal fade" id="modalTerima" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-body">
										Note
										<input type="area" id="noteDiteima">
										<br>
										Tanggal Pengembalian
										<input type="date" id="tanggalAmbilTerima"><br>
										<button class="btn btn-primary btn-xs" data-dismiss="modal" onclick="prosesDiterima()">Simpan</button>
									</div>
								</div>
							</div>
						</div>

						<div class="modal fade" id="modalTolak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										Note
										<input type="area" id="noteDitolak">
										<br>
										Tanggal Pengembalian
										<input type="date" id="tanggalAmbilTolak">
										<br>
										<button class="btn btn-primary btn-xs" data-dismiss="modal" onclick="prosesDitolak()">Simpan</button>
									</div>
								</div>
							</div>
						</div>
					</table>
				<?php
				} ?>

			</div>
		</div>
	</div>
</div>

<script>
	var id;
	var id_investigasi;
	var status_claim;


	function getIdClaim(idClaim, sc) {
		id = idClaim;
		status_claim = sc;
		cekId();
		console.log('status_claim', status_claim)
	}

	function cekId() {
		// console.log(id);
	}

	function proses() {
		console.log(id);
		id_investigasi = document.getElementById('investigator').value;

		$url = '../../claim/proses/' + id + '/' + id_investigasi;
		//window.location.replace($url);
		$.get($url, function(data) {
			alert('sukses');
			location.reload();
		});

	}

	function prosesDiterima() {
		noteDiteima = document.getElementById('noteDiteima').value;
		tanggalAmbilTerima = document.getElementById('tanggalAmbilTerima').value;

		$url = '../claim/action/' + id + '/' + noteDiteima + '/3/' + tanggalAmbilTerima;

		$.get($url, function(data) {
			alert('sukses');
			location.reload();
		});
	}

	function prosesDitolak() {
		noteDitolak = document.getElementById('noteDitolak').value;
		tanggalAmbilTolak = document.getElementById('tanggalAmbilTolak').value;
		$url = '../claim/action/' + id + '/' + noteDitolak + '/4/' + tanggalAmbilTolak;

		$.get($url, function(data) {
			alert('sukses');
			location.reload();
		});
	}

	function selesai(idClaim) {
		id = idClaim;

		$url = '../claim/selesai/' + id;

		$.get($url, function(data) {
			alert('sukses');
			location.reload();
		});
	}
</script>