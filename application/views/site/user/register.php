<div class="container-2">
	<section class="content">
		<h2>Đăng Ký Thành viên</h2>
		<font color="green"><?php echo $this->session->flashdata('mess') ?></font>
		<form action="" class="form-register" enctype="multipart/form-data" method="post">
			<h3>Thông Tin Cá Nhân</h3>
			<div class="registerbox">
				<fieldset>
					<div class="control-group">
						<label class="control-label"><span class="red">*</span> Email:</label>
						<div class="controls">
							<input type="text" class="input-xlarge" placeholder="email" id="email" name="email" value="<?php echo set_value('email') ?>">
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
					<div class="control-group">
						<label  class="control-label"><span class="red">*</span> Nhập Lại Mật Khẩu:</label>
						<div class="controls">
							<input type="password" class="input-xlarge" placeholder="nhập lại mật khẩu" name="re-password">
							<div class="text-danger"><?php echo form_error('re-password') ?></div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><span class="red">*</span> Họ & Tên </label>
						<div class="controls">
							<input type="text" class="input-xlarge" placeholder="họ & tên" name="fullname" value="<?php echo set_value('fullname') ?>">
							<div class="text-danger"><?php echo form_error('fullname') ?></div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><span class="red">*</span> Địa Chỉ:</label>
						<div class="controls">
							<input type="text" class="input-xlarge" placeholder="địa chỉ" name="address" value="<?php echo set_value('address') ?>">
							<div class="text-danger"><?php echo form_error('address') ?></div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><span class="red">*</span> Số Điện Thoại:</label>
						<div class="controls">
							<input type="text" class="input-xlarge" placeholder="số điện thoại" name="phone" value="<?php echo set_value('phone') ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
							<div class="text-danger"><?php echo form_error('phone') ?></div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><span class="red">*</span> Năm Sinh:</label>
						<div class="controls">
							<input type="date" class="input-xlarge" placeholder="năm sinh" name="birthday">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><span class="red">*</span> Giới Tính:</label>
						<div class="controls">
							<label><input name="gioitinh" type="radio" value="Nam" checked />Nam</label>
							<label><input name="gioitinh" type="radio" value="Nữ"/>Nữ</label>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><span class="red">*</span> Ảnh Đại Diện:</label>
						<div class="controls">
							<input type="file" class="input-xlarge" name="image">
						</div>
					</div>
				</fieldset>
			</div>
			<div class="pull-right">
				<input type="Submit" class="submit" value="Đăng Ký" onclick="check();">
			</div>
		</form>
	</section>
	<?php $this->load->view('site/aside') ?>
</div><!--end:container-2-->

<script>
	function check(){
		var email = $('#email').val();
		if(email.trim() == ''){
			alert('Bạn chưa điền Email');
			$('#email').focus();
			return false;
		}
	}	

</script>