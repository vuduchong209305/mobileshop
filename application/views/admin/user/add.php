<div class="container-fluid">
  <div class="page-title">
    <h1>Quản Lý Thành Viên</h1>
  </div>
  <div class="row">
    <div class="col-lg-8">
      <div class="widget-container fluid-height clearfix">
        <div class="heading"><i class="icon-adjust"></i>Thêm Thành Viên
          <a href="<?php echo admin_url('user/index') ?>"><button class="btn btn-lg btn-primary">Danh Sách</button></a>
        </div>
        <div class="widget-content padded">
          <div class="col-lg-12">
            <form action="" class="form-horizontal" enctype="multipart/form-data" method="post">

              <div class="form-group">
                <label class="control-label col-lg-3">Email</label>
                <div class="col-lg-9">
                  <div class="input-group"><span class="input-group-addon"><i class="icon-envelope-alt"></i></span>
                    <input class="form-control" placeholder="Email" type="text" name="email" value="<?php echo set_value('email') ?>"/>
                  </div>
                  <div class="text-danger"><?php echo form_error('email') ?></div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-3">Mật Khẩu</label>
                <div class="col-lg-9">
                  <div class="input-group"><span class="input-group-addon"><i class="icon-key"></i></span>
                    <input class="form-control" placeholder="Mật Khẩu" type="password" name="password" />
                  </div>
                  <div class="text-danger"><?php echo form_error('password') ?></div>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-lg-3">Họ & Tên</label>
                <div class="col-lg-9">
                  <div class="input-group"><span class="input-group-addon"><i class="icon-smile"></i></span>
                    <input class="form-control" placeholder="Họ & Tên" type="text" name="fullname" value="<?php echo set_value('fullname') ?>"/>
                  </div>
                  <div class="text-danger"><?php echo form_error('fullname') ?></div>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-lg-3">Địa Chỉ</label>
                <div class="col-lg-9">
                  <div class="input-group"><span class="input-group-addon"><i class="icon-location-arrow"></i></span>
                    <input class="form-control" placeholder="Địa Chỉ" type="text" name="address" value="<?php echo set_value('address') ?>"/>
                  </div>
                  <div class="text-danger"><?php echo form_error('address') ?></div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-3">Số Điện Thoại</label>
                <div class="col-lg-9">
                  <div class="input-group"><span class="input-group-addon"><i class="icon-phone"></i></span>
                    <input class="form-control" placeholder="Số Điện Thoại" type="text" name="phone" value="<?php echo set_value('phone') ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                  </div>
                  <div class="text-danger"><?php echo form_error('phone') ?></div>
                </div>
              </div>
                
              <div class="form-group">
                <label class="control-label col-lg-3">Năm Sinh</label>
                <div class="col-lg-9">
                  <div class="input-group"><span class="input-group-addon"><i class="icon-user"></i></span>
                    <input class="form-control" type="date" name="birthday" />
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-lg-3">Giới Tính</label>
                <div class="col-lg-9">
                  <label class="radio-inline">
                    <input name="gioitinh" type="radio" value="Nam" checked />
                    Nam</label>
                  <label class="radio-inline">
                    <input name="gioitinh" type="radio" value="Nữ"/>
                    Nữ</label>
                </div>
              </div>
  
              <div class="form-group">
                <label class="control-label col-lg-3">Ảnh Đại Diện</label>
                <div class="col-lg-9">
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