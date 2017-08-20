<div class="container-fluid">
  <div class="page-title">
    <h1> Quản Lý Tin Tức </h1>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="widget-container fluid-height clearfix">
        <div class="heading"><i class="icon-table"></i>Danh Sách Tin Tức
          <a href="<?php echo admin_url('news/add') ?>"><button class="btn btn-lg btn-primary"><i class="icon-plus-sign"></i>Thêm Mới</button></a>
        </div>
        <div class="widget-content padded clearfix">
        <font color="green"><?php echo $this->session->flashdata('mess') ?></font>
          <table class="table table-bordered table-striped" id="dataTable1">
            <thead>
              <th class="check-header hidden-xs"></th>
              <th style="width: 70px">Mã</th>
              <th>Tiêu Đề</th>
              <th>Hình Ảnh</th>
              <th>Ngày Tạo</th>
              <th class="hidden-xs">Trạng Thái</th>
              <th class="hidden-xs">Hành Động</th>
              </thead>
            <tbody>
            <?php foreach ($list as $row){ ?>
              <tr>
                <td class="check hidden-xs"><input name="optionsRadios1" type="checkbox" value="option1"/></td>
                <th><?php echo $row->news_id ?></th>
                <td><?php echo $row->news_title ?></td>
                <td><img width ="100px" height="auto" src="<?php echo upload_url('news/'). $row->news_thumbnail ?>" alt=""></td>
                <td class="hidden-xs"><?php echo $row->date_create ?></td>
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
                <td class="actions"><div class="action-buttons"><a class="table-actions" href="<?php echo base_url('admin/news/view') ?>"><i class="icon-eye-open"></i></a><a class="table-actions" href="<?php echo base_url('admin/news/edit/'.$row->news_id) ?>"><i class="icon-pencil"></i></a><a class="table-actions verify_action" href="<?php echo base_url('admin/news/delete/'.$row->news_id) ?>"><i class="icon-trash"></i></a></div></td>
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