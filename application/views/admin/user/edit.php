<div class="container-fluid">
  <div class="page-title">
    <h1>Quản Lý Thành Viên</h1>
  </div>
  <div class="row">
    <div class="col-lg-8">
      <div class="widget-container fluid-height clearfix">
        <div class="heading"><i class="icon-adjust"></i>Sửa Thành Viên
          <a href="<?php echo admin_url('user/index') ?>"><button class="btn btn-lg btn-primary">Danh Sách</button></a>
        </div>
        <div class="widget-content padded">
          <div class="col-lg-12">
            <form action="" class="form-horizontal" enctype="multipart/form-data" method="post">

              <div class="form-group">
                <label class="control-label col-lg-3">Email</label>
                <div class="col-lg-9">
                  <div class="input-group"><span class="input-group-addon"><i class="icon-envelope-alt"></i></span>
                    <input class="form-control" placeholder="Email" type="text" name="email" value="<?php echo $info->user_email ?>" />
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-3">Mật Khẩu</label>
                <div class="col-lg-9">
                  <div class="input-group"><span class="input-group-addon"><i class="icon-key"></i></span>
                    <input class="form-control" placeholder="Mật Khẩu" type="password" name="password" value="<?php echo $info->user_password ?>" />
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-lg-3">Họ & Tên</label>
                <div class="col-lg-9">
                  <div class="input-group"><span class="input-group-addon"><i class="icon-smile"></i></span>
                    <input class="form-control" placeholder="Họ & Tên" type="text" name="fullname" value="<?php echo $info->user_fullname ?>"/>
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-lg-3">Địa Chỉ</label>
                <div class="col-lg-9">
                  <div class="input-group"><span class="input-group-addon"><i class="icon-location-arrow"></i></span>
                    <input class="form-control" placeholder="Địa Chỉ" type="text" name="address" value="<?php echo $info->user_address ?>"/>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-3">Số Điện Thoại</label>
                <div class="col-lg-9">
                  <div class="input-group"><span class="input-group-addon"><i class="icon-phone"></i></span>
                    <input class="form-control" placeholder="Số Điện Thoại" type="text" name="phone" value="<?php echo $info->phone ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                  </div>
                </div>
              </div>
                
              <div class="form-group">
                <label class="control-label col-lg-3">Năm Sinh</label>
                <div class="col-lg-9">
                  <div class="input-group"><span class="input-group-addon"><i class="icon-user"></i></span>
                    <input class="form-control" placeholder="Số Điện Thoại" type="date" name="birthday" value="<?php echo $info->birthday ?>"/>
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-lg-3">Trạng Thái</label>
                <div class="col-lg-9 clearfix">
                  <div class="holder">
                    <input checked class="check-ios" id="check" name="check" type="checkbox" value="None" value="<?php echo $info->user_status ?>"/>
                    <label for="check"></label>
                    <span></span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-3">Giới Tính</label>
                <div class="col-lg-9">
                  <label class="radio-inline">
                    <input name="gioitinh" type="radio" value="Nam" checked value="<?php echo $info->sex ?>"/>
                    Nam</label>
                  <label class="radio-inline">
                    <input name="gioitinh" type="radio" value="Nữ" value="<?php echo $info->sex ?>"/>
                    Nữ</label>
                </div>
              </div>
  
              <div class="form-group">
                <label class="control-label col-lg-3">Ảnh Đại Diện</label>
                <div class="col-lg-9">
                  <?php if($info->user_image){ ?>
                  <img alt="" class="form-photo" height="150" src="<?php echo upload_url('user/'. $info->user_image) ?>" width="150"/>
                  <?php  } else { ?>
                    <img width ="50px" height="auto" src="<?php echo upload_url('no-image.png')?>" alt="">
                  <?php  } ?>
                  <input class="form-control" type="file" name="image"/>
                </div>
              </div>
              
              <div class="form-actions col-lg-offset-3 col-lg-9">
                <button class="btn btn-primary" type="submit">Submit</button>
                <button class="btn btn-default-outline">Cancel</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>