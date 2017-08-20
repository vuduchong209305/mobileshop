<div class="container-2">
	<section class="content">
		<h2>Chỉnh sửa thông tin thành viên</h2>
		<font color="green"><?php echo $this->session->flashdata('mess') ?></font>
		<form action="" class="form-register" enctype="multipart/form-data" method="post">
			<h3>Thông Tin Cá Nhân</h3>
			<div class="registerbox">
				<fieldset>
					<div class="control-group">
						<label class="control-label"><span class="red"></span> Email:</label>
						<div class="controls">
							<input disabled type="text" class="input-xlarge" placeholder="<?php echo $user->user_email ?>" name="email">
							<div class="text-danger"><?php echo form_error('email') ?></div>
						</div>
					</div>
					<div class="control-group">
						<label  class="control-label"><span class="red"></span> Mật Khẩu:</label>
						<div class="controls">
							<input type="password" class="input-xlarge" placeholder="Nếu thay đổi mật khẩu thì nhập" name="password">
							<div class="text-danger"><?php echo form_error('password') ?></div>
						</div>
					</div>
					<div class="control-group">
						<label  class="control-label"><span class="red"></span> Nhập Lại Mật Khẩu:</label>
						<div class="controls">
							<input type="password" class="input-xlarge" placeholder="nhập lại mật khẩu" name="re-password">
							<div class="text-danger"><?php echo form_error('re-password') ?></div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><span class="red">*</span> Họ & Tên </label>
						<div class="controls">
							<input type="text" class="input-xlarge" placeholder="họ & tên" name="fullname" value="<?php echo $user->user_fullname ?>">
							<div class="text-danger"><?php echo form_error('fullname') ?></div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><span class="red">*</span> Địa Chỉ:</label>
						<div class="controls">
							<input type="text" class="input-xlarge" placeholder="địa chỉ" name="address" value="<?php echo $user->user_address ?>">
							<div class="text-danger"><?php echo form_error('address') ?></div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><span class="red">*</span> Số Điện Thoại:</label>
						<div class="controls">
							<input type="text" class="input-xlarge" placeholder="số điện thoại" name="phone" value="<?php echo $user->phone ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
							<div class="text-danger"><?php echo form_error('phone') ?></div>
						</div>
					</div>
				</fieldset>
			</div>
			<div class="pull-right">
				<label class="checkbox inline">
					<input type="checkbox" value="option2" >
				</label>
				I have read and agree to the <a href="#" >Privacy Policy</a>
				&nbsp;
				<input type="Submit" class="submit" value="Chỉnh sửa thông tin thành viên">
			</div>
		</form>
	</section>
	<?php $this->load->view('site/aside') ?>
</div><!--end:container-2-->