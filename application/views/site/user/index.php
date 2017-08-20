<style>
	table td {
		padding: 10px;
		border: 1px solid black;
	}
</style>

<div class="container-2">
	<section class="content">
		<h2>Thông Tin Thành Viên</h2>
		<table>
			<tr>
				<td>Họ Tên</td>
				<td><?php echo $user->user_fullname ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?php echo $user->user_email ?></td>
			</tr>
			<tr>
				<td>Số Điện Thoại</td>
				<td><?php echo $user->phone ?></td>
			</tr>
			<tr>
				<td>Địa Chỉ</td>
				<td><?php echo $user->user_address ?></td>
			</tr>
		</table>
		<br>
		<a href="<?php echo base_url('user/edit') ?>" class="default" style="color:white;background: #f5640c; border-radius: 5px; padding: 10px; margin-top: 100px">Sửa Thông Tin</a>
	</section>
	<?php $this->load->view('site/aside') ?>
</div><!--end:container-2-->