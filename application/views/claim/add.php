<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Claim Add</h3>
			</div>
			<?php echo form_open('claim/add'); ?>
			<div class="box-body">
				<div class="row clearfix">

					<div class="col-md-6">
						<label for="tipe_claim" class="control-label">Tipe Claim</label>
						<div class="form-group">
							<input type="text" name="tipe_claim" value="<?php echo $this->input->post('tipe_claim'); ?>" class="form-control" id="tipe_claim" />
						</div>
					</div>

					<div class="col-md-6">
						<label for="nomor_mesin" class="control-label">VIN</label>
						<div class="form-group">
							<input type="text" name="vin" value="<?php echo $this->input->post('vin'); ?>" class="form-control" id="vin" />
						</div>
					</div>

					<div class="col-md-6">
						<label for="nomor_mesin" class="control-label">Nomor Mesin</label>
						<div class="form-group">
							<input type="text" name="nomor_mesin" value="<?php echo $this->input->post('nomor_mesin'); ?>" class="form-control" id="nomor_mesin" />
						</div>
					</div>

					<div class="col-md-6">
						<label for="odometer" class="control-label">Odometer</label>
						<div class="form-group">
							<input type="text" name="odometer" value="<?php echo $this->input->post('odometer'); ?>" class="form-control" id="odometer" />
						</div>
					</div>

					<div class="col-md-6">
						<label for="tanggal_beli" class="control-label">Tanggal Beli</label>
						<div class="form-group">
							<input type="date" name="tanggal_beli" value="<?php echo $this->input->post('tanggal_beli'); ?>" class="form-control" id="tanggal_beli" />
						</div>
					</div>

					<div class="col-md-6">
						<label for="permasalahan" class="control-label">Permasalahan</label>
						<div class="form-group">
							<textarea name="permasalahan" class="form-control" id="permasalahan"><?php echo $this->input->post('permasalahan'); ?></textarea>
						</div>
					</div>


					<div class="col-md-6">
						<label for="tanggal_pengambilan" class="control-label">Tanggal Pengambilan</label>
						<div class="form-group">
							<input type="date" name="tanggal_pengambilan" value="<?php echo $this->input->post('tanggal_pengambilan'); ?>" class="form-control" id="tanggal_pengambilan" />
						</div>
					</div>

					<div class="col-md-6">
						<label for="tanggal_pengambilan" class="control-label">Part Validation</label>
						<div class="form-group">
							<select name="pv" id="cars">
								<option value="stater clutch">stater clutch</option>
								<option value="bearings">bearings</option>
								<option value="steering">steering</option>
							</select>

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