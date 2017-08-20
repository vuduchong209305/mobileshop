<div class="container-fluid">
  <div class="page-title">
    <h1>Quản Lý Thành Viên</h1>
  </div>
  <div class="row">
    <div class="col-lg-8">
      <div class="widget-container fluid-height clearfix">
        <div class="heading"><i class="icon-adjust"></i>Sửa quản trị viên
          <a href="<?php echo admin_url('admin/index') ?>"><button class="btn btn-lg btn-primary">Danh Sách</button></a>
        </div>
        <div class="widget-content padded">
          <div class="col-lg-12">
            <form action="" class="form-horizontal" enctype="multipart/form-data" method="post">

              <div class="form-group">
                <label class="control-label col-lg-3">Tài Khoản</label>
                <div class="col-lg-9">
                  <div class="input-group"><span class="input-group-addon"><i class="icon-user"></i></span>
                    <input class="form-control" placeholder="Tài Khoản" type="text" name="username" value="<?php echo $info->a_name ?>"/>
                  </div>
                  <div class="text-danger"><?php echo form_error('username') ?></div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-3">Mật Khẩu</label>
                <div class="col-lg-9">
                  <div class="input-group"><span class="input-group-addon"><i class="icon-key"></i></span>
                    <input class="form-control" placeholder="Mật Khẩu" type="password" name="password"/>
                  </div>
                  <div class="text-danger"><?php echo form_error('password') ?></div>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-lg-3">Họ & Tên</label>
                <div class="col-lg-9">
                  <div class="input-group"><span class="input-group-addon"><i class="icon-smile"></i></span>
                    <input class="form-control" placeholder="Họ & Tên" type="text" name="fullname" value="<?php echo $info->a_fullname ?>"/>
                  </div>
                  <div class="text-danger"><?php echo form_error('fullname') ?></div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-3">Số Điện Thoại</label>
                <div class="col-lg-9">
                  <div class="input-group"><span class="input-group-addon"><i class="icon-phone"></i></span>
                    <input class="form-control" placeholder="Số Điện Thoại" type="text" name="phone" value="<?php echo $info->a_phone ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                  </div>
                  <div class="text-danger"><?php echo form_error('phone') ?></div>
                </div>
              </div>
  
              <div class="form-group">
                <label class="control-label col-lg-3">Ảnh Đại Diện</label>
                <div class="col-lg-9">
                  <?php if($info->a_avatar){ ?>
                  <img alt="" class="form-photo" height="150" src="<?php echo upload_url('admin/'. $info->a_avatar)  ?>" width="150"/>
                  <?php  } else { ?>
                    <img width ="50px" height="auto" src="<?php echo upload_url('no-image.png')?>" alt="">
                  <?php  } ?>
                  <input class="form-control" type="file" name="image"/>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-lg-3">Chức Vụ</label>
                <div class="col-lg-9">
                  <label class="radio-inline">
                    <input name="role" type="radio" value="Admin"/>Admin</label>
                  <label class="radio-inline">
                    <input name="role" type="radio" value="Mod" checked/>Mod</label>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-3">Phân Quyền</label>
                <div class="col-lg-9">
                  <?php foreach ($config_permissions as $controller => $actions): ?>
                    <?php
                      $permissions_actions = array();
                        if(isset($info->permissions->{$controller})){
                          $permissions_actions = $info->permissions->{$controller};
                      }
                    ?>
                    <div>
                      <b><?php echo $controller ?>:</b>
                      <?php foreach ($actions as $action): ?>
                        <input type="checkbox" name="permissions[<?php echo $controller ?>][]" value="<?php echo $action ?>" <?php echo (in_array($action, $permissions_actions)) ? 'checked' : '' ?>/> <?php echo $action ?>
                      <?php endforeach; ?>
                    </div>
                  <?php endforeach; ?>
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