<div class="container-fluid">
  <div class="page-title">
    <h1> Quản Trị Viên </h1>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="widget-container fluid-height clearfix">
        <div class="heading"><i class="icon-table"></i>Danh Sách Quản Trị Viên
          <a href="<?php echo admin_url('admin/add') ?>"><button class="btn btn-lg btn-primary"><i class="icon-plus-sign"></i>Thêm Mới</button></a>
        </div>
        <div class="widget-content padded clearfix">
        <font color="green"><?php echo $this->session->flashdata('mess') ?></font>
          <table class="table table-bordered table-striped" id="dataTable1">
            <thead>
              <th class="check-header hidden-xs"></th>
              <th>Mã Số</th>
              <th>Tài Khoản</th>
              <th>Avatar</th>
              <th>Họ & Tên</th>
              <th class="hidden-xs">Số Điện Thoại</th>
              <th class="hidden-xs">Chức Vụ</th>
              <th class="hidden-xs">Đăng Ký</th>
              <th class="hidden-xs">Trạng Thái</th>
              <th class="hidden-xs">Hành Động</th>
              </thead>
            <tbody>
            <?php foreach ($list as $row){ ?>
              <tr>
                <td class="check hidden-xs"><input name="optionsRadios1" type="checkbox" value="option1"/></td>
                <td><?php echo $row->a_id ?></td>
                <td><?php echo $row->a_name ?></td>
                <td>
                <?php if($row->a_avatar){ ?>
                  <img width ="50px" height="auto" src="<?php echo upload_url('admin/'). $row->a_avatar ?>" alt="">
                <?php  } else { ?>
                  <img width ="50px" height="auto" src="<?php echo upload_url('no-image.png')?>" alt="">
                <?php  } ?>
                </td>
                <td><?php echo $row->a_fullname ?></td>
                <td class="hidden-xs"><?php echo $row->a_phone ?></td>
                <td class="hidden-xs"><?php echo $row->a_role ?></td>
                <td class="hidden-xs"><?php echo $row->a_created ?></td>
                <td>
                  <div class="form-group">
                    <div class="col-lg-9 clearfix">
                      <div class="holder">
                        <input checked class="check-ios" id="check" name="check" type="checkbox" value="1"/>
                        <label for="check"></label>
                        <span></span>
                      </div>
                    </div>
                  </div>
                </td>
                <!-- <td class="hidden-xs"><span class="label label-success">Approved</span></td> -->
                <td class="actions"><div class="action-buttons"><a class="table-actions" href="<?php echo base_url('admin/admin/view') ?>"><i class="icon-eye-open"></i></a><a class="table-actions" href="<?php echo base_url('admin/admin/edit/'.$row->a_id) ?>"><i class="icon-pencil"></i></a><a class="table-actions verify_action" href="<?php echo base_url('admin/admin/delete/'.$row->a_id) ?>"><i class="icon-trash"></i></a></div></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  $('a.verify_action').click(function(){
    if(!confirm('Bạn chắc chắn muốn xóa ?'))
    {
      return false;
    }
  });
</script>