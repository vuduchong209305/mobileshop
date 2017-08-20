<div class="container-fluid">
  <div class="page-title">
    <h1> Quản Lý Sản Phẩm </h1>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="widget-container fluid-height clearfix">
        <div class="heading"><i class="icon-table"></i>Danh Sách Sản Phẩm
          <a href="<?php echo admin_url('product/add') ?>"><button class="btn btn-lg btn-primary"><i class="icon-plus-sign"></i>Thêm Mới</button></a>
        </div>
        <div class="widget-content padded clearfix">
          <font color="green"><?php echo $this->session->flashdata('mess') ?></font>
          <table class="table table-bordered table-striped" id="dataTable1">
            <thead>
              <th class="check-header hidden-xs" style="width:50px;"></th>
              <th style="width:100px;">Sắp Xếp</th>
              <th style="width:120px;">Hình Ảnh</th>
              <th style="width:120px;">Tên</th>
              <th style="width:120px;">Giá Bán</th>
              <th class="hidden-xs" style="width:120px;">Giá Sale</th>
              <th class="hidden-xs" style="width:450px;">Chi Tiết</th>
              <th class="hidden-xs" style="width:120px;">Ngày Tạo</th>
              <th class="hidden-xs" style="width:120px;">Trạng Thái</th>
              <th class="hidden-xs" style="width:120px;">Hành Động</th>
            </thead>
            <tbody>
              <?php foreach ($list as $row){ ?>
              <tr>
                <td class="check hidden-xs"><input name="optionsRadios1" type="checkbox" value="option1"/></td>
                <td><?php echo $row->sort_order ?></td>
                <td>
                <?php if($row->pro_image){ ?>
                  <img width ="50px" height="auto" src="<?php echo upload_url('product/'). $row->pro_image ?>" alt="">
                <?php  } else { ?>
                  <img width ="50px" height="auto" src="<?php echo upload_url('no-image.png')?>" alt="">
                <?php  } ?>
                </td>
                <td><?php echo $row->pro_title ?></td>
                <td><?php echo number_format($row->pro_price) ?></td>
                <td class="hidden-xs"><?php echo number_format($row->pro_sale) ?></td>
                <td class="hidden-xs"><?php echo word_limiter(($row->pro_detail),20) ?></td>
                <td class="hidden-xs"><?php echo $row->pro_created ?></td>
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
                <td class="actions">
                  <div class="action-buttons">
                    <a class="table-actions"  data-popup-open="popup-<?php echo $row->pro_id?>" href="<?php echo base_url('admin/product/view/'.$row->pro_id) ?>"><i class="icon-eye-open"></i></a>
                    <a class="table-actions" href="<?php echo base_url('admin/product/edit/'.$row->pro_id) ?>"><i class="icon-pencil"></i></a>
                    <a class="table-actions verify_action" href="<?php echo base_url('admin/product/delete/'.$row->pro_id) ?>"><i class="icon-trash"></i></a>
                  </div>
                </td>
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