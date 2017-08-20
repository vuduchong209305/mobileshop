<div class="container-fluid">
  <div class="page-title">
    <h1> Quản Lý Config </h1>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="widget-container fluid-height clearfix">
        <div class="heading"><i class="icon-table"></i>Danh Sách Config</div>
        <div class="widget-content padded clearfix">
          <font color="green"><?php echo $this->session->flashdata('mess') ?></font>
          <table class="table table-bordered table-striped" id="dataTable1">
            <thead>
              <th class="check-header hidden-xs"></th>
              <th style="width:100px;">Tiêu Đề</th>
              <th style="width:150px;">SĐT</th>
              <th style="width:120px;">Gmail</th>
              <th style="width:120px;">Facebook</th>
              <th class="hidden-xs">Youtube</th>
              <th class="hidden-xs">Footer</th>
              <th class="hidden-xs">Logo</th>
              <th class="hidden-xs" style="width:200px;">Thông Tin</th>
              <th class="hidden-xs">Mô Tả</th>
              <th class="hidden-xs" style="width:120px;">Trạng Thái</th>
              <th class="hidden-xs">Hành Động</th>
            </thead>
            <tbody>
              <tr>
              <?php foreach ($list as $row): ?>
                <td class="check hidden-xs"><input name="optionsRadios1" type="checkbox" value="option1"/></td>
                <td><?php echo $row->title ?></td>
                <td><?php echo $row->hotline ?></td>
                <td><?php echo $row->gmail ?></td>
                <td class="hidden-xs"><?php echo $row->facebook ?></td>
                <td class="hidden-xs"><?php echo $row->youtube ?></td>
                <td class="hidden-xs"><?php echo $row->footer ?></td>
                <td><img width ="50px" height="auto" src="<?php echo upload_url('config/'). $row->logo ?>" alt=""></td>
                <th class="hidden-xs"><?php echo $row->contact_page ?></th>
                <th class="hidden-xs"><?php echo $row->descript_web ?></th>
                <td class="hidden-xs"><span class="label label-success">Approved</span></td>
                <td class="actions">
                  <div class="action-buttons">
                    <a class="table-actions"  data-popup-open="popup-<?php echo $row->id?>" href="<?php echo base_url('admin/config/view/'.$row->id) ?>"><i class="icon-eye-open"></i></a>
                    <a class="table-actions" href="<?php echo base_url('admin/config/edit/'.$row->id) ?>"><i class="icon-pencil"></i></a>
                    <a class="table-actions verify_action" href="<?php echo base_url('admin/config/delete/'.$row->id) ?>"><i class="icon-trash"></i></a>
                  </div>
                </td>
                <?php endforeach; ?>
              </tr>
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