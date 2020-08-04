<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Pengguna Add</h3>
			</div>
			<?php echo form_open_multipart('pengguna/add'); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="role" class="control-label">Role</label>
						<div class="form-group">
							<select name="role" class="form-control">
								<option value="">select</option>
								<?php
								$role_values = array(
									'1' => 'admin',
									'2' => 'inverstigasi',
									'3' => 'claient',
								);

								foreach ($role_values as $value => $display_text) {
									$selected = ($value == $this->input->post('role')) ? ' selected="selected"' : "";

									echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
								}
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="pass" class="control-label">Pass</label>
						<div class="form-group">
							<input type="text" name="pass" value="<?php echo $this->input->post('pass'); ?>" class="form-control" id="pass" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama" class="control-label">Nama</label>
						<div class="form-group">
							<input type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" class="form-control" id="nama" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nip" class="control-label">Nip</label>
						<div class="form-group">
							<input type="text" name="nip" value="<?php echo $this->input->post('nip'); ?>" class="form-control" id="nip" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="perusahaan" class="control-label">Perusahaan</label>
						<div class="form-group">
							<input type="text" name="perusahaan" value="<?php echo $this->input->post('perusahaan'); ?>" class="form-control" id="perusahaan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label">Alamat</label>
						<div class="form-group">
							<textarea name="alamat" class="form-control" id="alamat"><?php echo $this->input->post('alamat'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label">Photo</label>
						<div class="form-group">
							<input type="file" name="photo" value="<?php echo $this->input->post('photo'); ?>" class="form-control" id="photo" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>