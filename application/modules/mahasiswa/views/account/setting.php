<div class="row">
	<dov class="col-md-8 col-md-offset-2 col-xs-12">
		<div class="box box-primary">
<?php  
/**
 * Open Form
 *
 * @return string
 **/
echo form_open(site_url('mahasiswa/account/set'), array('class' => 'form-horizontal', 'id' => 'form-setting-login'));
?>
			<div class="box-body" style="margin-top: 10px;">
				<div class="form-group">
					<div class="col-md-8 col-md-offset-2"><?php echo $this->session->flashdata('alert'); ?></div>
				</div>
				<div class="form-group">
					<label for="email" class="control-label col-md-3 col-xs-12">E-Mail : <strong class="text-red">*</strong></label>
					<div class="col-md-8">
						<input type="email" name="email" class="form-control" value="<?php echo $get->email; ?>">
						<p class="help-block"><?php echo form_error('email', '<small class="text-red">', '</small>'); ?></p>
						<p class="help-block"><small><i>E-Email ini dibutuhkan jika terjadi masalah terhadap password anda.</i></small></p>
					</div>
				</div>
				<div class="form-group">
					<label for="new_pass" class="control-label col-md-3 col-xs-12">Password Baru : <strong class="text-blue">*</strong></label>
					<div class="col-md-8">
						<input type="password" name="new_pass" class="form-control" value="<?php echo set_value('new_pass'); ?>">
						<p class="help-block"><?php echo form_error('new_pass', '<small class="text-red">', '</small>'); ?></p>
					</div>
				</div>
				<div class="form-group">
					<label for="repeat_pass" class="control-label col-md-3 col-xs-12">Ulangi : <strong class="text-blue">*</strong></label>
					<div class="col-md-8">
						<input type="password" name="repeat_pass" class="form-control" value="<?php echo set_value('repeat_pass'); ?>">
						<p class="help-block"><?php echo form_error('repeat_pass', '<small class="text-red">', '</small>'); ?></p>
					</div>
				</div>
				<div class="form-group">
					<label for="old_pass" class="control-label col-md-3 col-xs-12">Password Lama : <strong class="text-red">*</strong></label>
					<div class="col-md-8">
						<input type="text" name="old_pass" class="form-control" value="<?php echo set_value('old_pass'); ?>" required>
						<p class="help-block"><?php echo form_error('old_pass', '<small class="text-red">', '</small>'); ?></p>
					</div>
				</div>
			</div>
			<div class="box-footer with-border">
				<div class="col-md-6">
					<small><strong class="text-red">*</strong>	Field wajib diisi!</small> <br>
					<small><strong class="text-blue">*</strong>	Field Optional (Bila ingin mengganti password)</small>
				</div>
				<div class="hidden-md hidden-lg"><hr></div>
				<div class="col-md-5 col-xs-12">
					<button type="submit" class="btn btn-app pull-right">
						<i class="fa fa-save"></i>
						Simpan
					</button>
				</div>
			</div>
<?php  
// End Form
echo form_close();
?>
		</div>
	</dov>
</div>