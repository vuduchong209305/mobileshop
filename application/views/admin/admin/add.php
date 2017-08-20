<div class="container-fluid">
  <div class="page-title">
    <h1>Quản Trị Viên</h1>
  </div>
  <div class="row">
    <div class="col-lg-8">
      <div class="widget-container fluid-height clearfix">
        <div class="heading"><i class="icon-adjust"></i>Thêm Quản Trị Viên
          <a href="<?php echo admin_url('admin/index') ?>"><button class="btn btn-lg btn-primary">Danh Sách</button></a>
        </div>
        <div class="widget-content padded">
          <div class="col-lg-12">

            <form action="" class="form-horizontal" enctype="multipart/form-data" method="post">
              <div class="form-group">
                <label class="control-label col-lg-3">Tài Khoản</label>
                <div class="col-lg-9">
                  <div class="input-group"><span class="input-group-addon"><i class="icon-user"></i></span>
                    <input class="form-control" placeholder="Tài Khoản" type="text" name="username" id="name" />
                  </div>
                  <div class="text-danger"><?php echo form_error('username') ?></div>
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
                    <input class="form-control" placeholder="Họ & Tên" type="text" name="fullname" />
                  </div>
                  <div class="text-danger"><?php echo form_error('fullname') ?></div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-3">Số Điện Thoại</label>
                <div class="col-lg-9">
                  <div class="input-group"><span class="input-group-addon"><i class="icon-phone"></i></span>
                    <input class="form-control" placeholder="Số Điện Thoại" type="text" name="phone" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                  </div>
                  <div class="text-danger"><?php echo form_error('phone') ?></div>
                </div>
              </div>
  
              <div class="form-group">
                <label class="control-label col-lg-3">Ảnh Đại Diện</label>
                <div class="col-lg-9">
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
                    <div>
                      <b><?php echo $controller ?>:</b>
                      <?php foreach ($actions as $action): ?>
                        <input type="checkbox" name="permissions[<?php echo $controller ?>][]" value="<?php echo $action ?>" /> <?php echo $action ?>
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
                <input class="btn btn-primary" type="submit" id="submit" onclick="check();"></input>
                <button class="btn btn-default-outline">Hủy Bỏ</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>

  $(document).ready(function(){
    var name = $('#name').val();
    $('#submit').click(function(){
      alert(name);
      // if(name.trim() == ''){
      //   alert('Bạn chưa nhập tài khoản');
      // }
    });
  });
</script>