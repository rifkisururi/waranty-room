<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Claim Edit</h3>
            </div>
			<?php echo form_open('claim/edit/'.$claim['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_investigasi" class="control-label">Pengguna</label>
						<div class="form-group">
							<select name="id_investigasi" class="form-control">
								<option value="">select pengguna</option>
								<?php 
								foreach($all_pengguna as $pengguna)
								{
									$selected = ($pengguna['id'] == $claim['id_investigasi']) ? ' selected="selected"' : "";

									echo '<option value="'.$pengguna['id'].'" '.$selected.'>'.$pengguna['nama'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_pengembalian" class="control-label">Tanggal Pengembalian</label>
						<div class="form-group">
							<input type="text" name="tanggal_pengembalian" value="<?php echo ($this->input->post('tanggal_pengembalian') ? $this->input->post('tanggal_pengembalian') : $claim['tanggal_pengembalian']); ?>" class="has-datepicker form-control" id="tanggal_pengembalian" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="number" class="control-label">Number</label>
						<div class="form-group">
							<input type="text" name="number" value="<?php echo ($this->input->post('number') ? $this->input->post('number') : $claim['number']); ?>" class="form-control" id="number" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tipe_claim" class="control-label">Tipe Claim</label>
						<div class="form-group">
							<input type="text" name="tipe_claim" value="<?php echo ($this->input->post('tipe_claim') ? $this->input->post('tipe_claim') : $claim['tipe_claim']); ?>" class="form-control" id="tipe_claim" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomor_mesin" class="control-label">Nomor Mesin</label>
						<div class="form-group">
							<input type="text" name="nomor_mesin" value="<?php echo ($this->input->post('nomor_mesin') ? $this->input->post('nomor_mesin') : $claim['nomor_mesin']); ?>" class="form-control" id="nomor_mesin" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="odometer" class="control-label">Odometer</label>
						<div class="form-group">
							<input type="text" name="odometer" value="<?php echo ($this->input->post('odometer') ? $this->input->post('odometer') : $claim['odometer']); ?>" class="form-control" id="odometer" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_beli" class="control-label">Tanggal Beli</label>
						<div class="form-group">
							<input type="text" name="tanggal_beli" value="<?php echo ($this->input->post('tanggal_beli') ? $this->input->post('tanggal_beli') : $claim['tanggal_beli']); ?>" class="has-datepicker form-control" id="tanggal_beli" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_pengambilan" class="control-label">Tanggal Pengambilan</label>
						<div class="form-group">
							<input type="text" name="tanggal_pengambilan" value="<?php echo ($this->input->post('tanggal_pengambilan') ? $this->input->post('tanggal_pengambilan') : $claim['tanggal_pengambilan']); ?>" class="has-datepicker form-control" id="tanggal_pengambilan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="create_date" class="control-label">Create Date</label>
						<div class="form-group">
							<input type="text" name="create_date" value="<?php echo ($this->input->post('create_date') ? $this->input->post('create_date') : $claim['create_date']); ?>" class="has-datepicker form-control" id="create_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_pengguna" class="control-label">Id Pengguna</label>
						<div class="form-group">
							<input type="text" name="id_pengguna" value="<?php echo ($this->input->post('id_pengguna') ? $this->input->post('id_pengguna') : $claim['id_pengguna']); ?>" class="form-control" id="id_pengguna" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="status_claim" class="control-label">Status Claim</label>
						<div class="form-group">
							<input type="text" name="status_claim" value="<?php echo ($this->input->post('status_claim') ? $this->input->post('status_claim') : $claim['status_claim']); ?>" class="form-control" id="status_claim" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="permasalahan" class="control-label">Permasalahan</label>
						<div class="form-group">
							<textarea name="permasalahan" class="form-control" id="permasalahan"><?php echo ($this->input->post('permasalahan') ? $this->input->post('permasalahan') : $claim['permasalahan']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="note" class="control-label">Note</label>
						<div class="form-group">
							<textarea name="note" class="form-control" id="note"><?php echo ($this->input->post('note') ? $this->input->post('note') : $claim['note']); ?></textarea>
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