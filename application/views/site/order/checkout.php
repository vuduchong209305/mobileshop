<div class="container-2">
	<section class="content">
		<h2>Thông Tin Nhận Hàng</h2>
		<font color="green"><?php echo $this->session->flashdata('mess') ?></font>
		<form action="<?php echo base_url('order/checkout') ?>" class="form-register" enctype="multipart/form-data" method="post">
			<h3>Thông Tin Cá Nhân</h3>
			<div class="registerbox">
				<fieldset>
					<div class="control-group">
						<label class="control-label"><span class="red"></span><b>Tổng số tiền thanh toán:</b></label>
						<div class="controls">
							<b style="color:red;"><?php echo number_format($total_amount) ?></b>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><span class="red">*</span> Email:</label>
						<div class="controls">
							<input type="text" class="input-xlarge" name="email" value="<?php echo isset($user->user_email) ? $user->user_email : '' ?>">
							<div class="text-danger"><?php echo form_error('email') ?></div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><span class="red">*</span> Họ & Tên </label>
						<div class="controls">
							<input type="text" class="input-xlarge" name="fullname" value="<?php echo isset($user->user_fullname) ? $user->user_fullname : '' ?>">
							<div class="text-danger"><?php echo form_error('fullname') ?></div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><span class="red">*</span> Địa Chỉ:</label>
						<div class="controls">
							<input type="text" class="input-xlarge" name="address" value="<?php echo isset($user->user_address) ? $user->user_address : '' ?>">
							<div class="text-danger"><?php echo form_error('address') ?></div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><span class="red">*</span> Số Điện Thoại:</label>
						<div class="controls">
							<input type="text" class="input-xlarge" name="phone" value="<?php echo isset($user->phone) ? $user->phone:''?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
							<div class="text-danger"><?php echo form_error('phone') ?></div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><span class="red">*</span>Tin Nhắn:</label>
						<div class="controls">
							<textarea name="message" id="message" cols="30" rows="10"></textarea>
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
				<input type="Submit" class="submit" value="Thanh Toán">
			</div>
		</form>
	</section>
	<?php $this->load->view('site/aside') ?>
</div><!--end:container-2-->