<div class="login">
  <div class="login-container"><img alt="logo" height="30" src="<?php echo public_url('admin/images/') ?>logo-login_2x.png" width="100"/>
    <form action="" method="post">
      <div class="form-group">
        <div class="input-group"><span class="input-group-addon"><i class="icon-envelope"></i></span>
          <input class="form-control" placeholder="Tài Khoản" type="text" name="username"/>
        </div>
      </div>
      <div class="form-group">
        <div class="input-group"><span class="input-group-addon"><i class="icon-lock"></i></span>
          <input class="form-control" placeholder="Mật Khẩu" type="password" name="password" />
        </div>
      </div>
      <div class="form-group">
        <label class="checkbox">
          <input type="checkbox"/>
          Remember me</label>
      </div>
      <div class="text-danger"><?php echo form_error('login') ?></div>
      <input type="submit" class="btn btn-lg btn-primary" value="Đăng Nhập">
    </form>
    <a href="index.html#">Forgot password?</a></div>
</div>