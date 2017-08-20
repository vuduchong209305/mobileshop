<div class="container-fluid">
  <div class="page-title">
    <h1>Quản Lý Config</h1>
  </div>
  <div class="row">
    <div class="col-lg-8">
      <div class="widget-container fluid-height clearfix">
        <div class="heading"><i class="icon-adjust"></i>Thêm Config</div>
        <div class="widget-content padded">
          <div class="col-lg-12">
            <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
              
              <div class="form-group">
                <label class="control-label col-lg-3">Tiêu Đề Website</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" name="title" value="<?php echo $info->title ?>" />
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-3">Số Điện Thoại</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" name="phone" value="<?php echo $info->hotline ?>" />
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-3">Gmail</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" name="gmail" value="<?php echo $info->gmail ?>"/>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-3">Facebook</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" name="facebook" value="<?php echo $info->facebook ?>"/>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-3">Youtube</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" name="youtube" value="<?php echo $info->youtube ?>"/>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-lg-3">Footer</label>
                <div class="col-lg-9">
                  <input class="form-control" type="text" name="youtube" value="<?php echo $info->footer ?>"/>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-3">Logo</label>
                <div class="col-lg-9">
                  <img src="<?php echo upload_url('config/'. $info->logo) ?>" alt="" style="width: 200px; height: auto;">
                  <input class="form-control" type="file" name="image"/>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-lg-3">Thông Tin Website</label>
                <div class="col-lg-9">
                  <textarea class="form-control" rows="5" name="info"><?php echo $info->contact_page ?></textarea>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-3">Mô Tả</label>
                <div class="col-lg-9">
                  <textarea class="form-control" rows="8" name="detail"><?php echo $info->descript_web ?></textarea>
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