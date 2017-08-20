<div class="container-2">
	<section class="content">
		<h2>Đăng Nhập</h2>
		<div><?php echo form_error('login') ?></div>
		<form action="<?php echo base_url('user/login') ?>" class="form-register" enctype="multipart/form-data" method="post">
			<div class="registerbox">
				<fieldset>
					<div class="control-group">
						<label class="control-label"><span class="red">*</span> Email:</label>
						<div class="controls">
							<input type="text" class="input-xlarge" placeholder="email" name="email" value="<?php echo set_value('email') ?>">
							<div class="text-danger"><?php echo form_error('email') ?></div>
						</div>
					</div>
					<div class="control-group">
						<label  class="control-label"><span class="red">*</span> Mật Khẩu:</label>
						<div class="controls">
							<input type="password" class="input-xlarge" placeholder="mật khẩu" name="password">
							<div class="text-danger"><?php echo form_error('password') ?></div>
						</div>
					</div>
				</fieldset>
			</div>
			<div class="pull-right">
				<input type="Submit" class="submit" value="Đăng Nhập">
			</div>
		</form>
	</section>
	<?php $this->load->view('site/aside') ?>
</div><!--end:container-2-->