<div class="container-fluid">
  <div class="page-title">
    <h1>Quản Lý Slide</h1>
  </div>
  <div class="row">
    <div class="col-lg-8">
      <div class="widget-container fluid-height clearfix">
        <div class="heading"><i class="icon-adjust"></i>Thêm Slide</div>
        <div class="widget-content padded">
          <div class="col-lg-12">
            <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label class="control-label col-lg-3">Tên Slide</label>
                <div class="col-lg-9">
                  <input class="form-control" placeholder="Tên sản phẩm" type="text" name="name" value="<?php echo $info->slide_title ?>"/>
                  <div class="text-danger"><?php echo form_error('name') ?></div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-3">Hình Ảnh</label>
                <div class="col-lg-9">
                  <img src="<?php echo upload_url('slide/'.$info->slide_image) ?>" alt="" style="width: 200px">
                  <input class="form-control" type="file" name="image"/>
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