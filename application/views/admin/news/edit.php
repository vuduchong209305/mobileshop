<script src="<?php echo public_url('plugins/ckeditor/ckeditor.js') ?>"></script>
<div class="container-fluid">
	<div class="page-title">
		<h1>Quản Lý Tin Tức</h1>
	</div>
	<div class="row">
		<div class="col-lg-10">
			<div class="widget-container fluid-height clearfix">
				<div class="heading"><i class="icon-adjust"></i>Thêm Tin Tức
					<a href="<?php echo admin_url('news/index') ?>"><button class="btn btn-lg btn-primary">Danh Sách</button></a>
				</div>
				<div class="widget-content padded">
					<div class="col-lg-12">
						<form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label class="control-label col-lg-3">Tiêu Đề</label>
								<div class="col-lg-9">
									<input class="form-control" type="text" name="name" value="<?php echo $info->news_title ?>" />
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-lg-3">Hình Ảnh</label>
								<div class="col-lg-9">
									<img width="200px" src="<?php echo upload_url('news/'. $info->news_thumbnail) ?>" alt="">
									<input class="form-control" type="file" name="image"/>
								</div>
							</div>

							<div class="form-group">
							<label class="control-label col-lg-3">Nội Dung</label>
								<div class="col-lg-9">
									<textarea class="form-control ckeditor" id="detail" rows="5" name="detail"><?php echo $info->news_detail ?></textarea>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-lg-3">Trạng Thái</label>
								<div class="col-lg-9 clearfix">
									<div class="holder">
										<input checked class="check-ios" id="check" name="check" type="checkbox" value="None"/>
										<label for="check"></label>
										<span></span>
									</div>
								</div>
							</div>

							<div class="form-actions col-lg-offset-3 col-lg-9">
								<button class="btn btn-primary" type="submit">Cập Nhật</button>
								<button class="btn btn-default-outline">Hủy Bỏ</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
var editor = CKEDITOR.replace('detail',{
	language:'vi',
	filebrowserBrowseUrl :'<?php echo base_url('public/') ?>plugins/ckfinder/ckfinder.html',
	filebrowserImageBrowseUrl : '<?php echo base_url('public/') ?>plugins/ckfinder/ckfinder.html?type=Images',
	filebrowserFlashBrowseUrl : '<?php echo base_url('public/') ?>plugins/ckfinder/ckfinder.html?type=Flash',
	filebrowserUploadUrl : '<?php echo base_url('public/') ?>plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
	filebrowserImageUploadUrl : '<?php echo base_url('public/') ?>plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
	filebrowserFlashUploadUrl : '<?php echo base_url('public/') ?>plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
	});
</script>