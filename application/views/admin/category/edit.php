<div class="container-fluid">
  <div class="page-title">
    <h1>Quản Lý Danh Mục</h1>
  </div>
  <div class="row">
    <div class="col-lg-8">
      <div class="widget-container fluid-height clearfix">
        <div class="heading"><i class="icon-adjust"></i>Thêm Danh Mục
          <a href="<?php echo admin_url('category/index') ?>"><button class="btn btn-lg btn-primary">Danh Sách</button></a>
        </div>
        <div class="widget-content padded">
          <div class="col-lg-12">
            <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label class="control-label col-lg-3">Tên Danh Mục</label>
                <div class="col-lg-9">
                  <input class="form-control" placeholder="Tên sản phẩm" type="text" name="name" value="<?php echo $info->name ?>"/>
                  <div class="text-danger"><?php echo form_error('name') ?></div>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-lg-3">Danh Mục Cha</label>
                <div class="col-lg-9">
                  <select class="form-control" name="category">
                    <option value="0">---Là danh mục cha---</option>
                    <?php foreach ($list as $row): ?>
                    <option value="<?php echo $row->cat_id ?>" <?php if($info->parent_id == $row->cat_id) echo 'selected' ?>><?php echo $row->name ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-3">Hình Ảnh</label>
                <div class="col-lg-9">
                  <img src="<?php echo upload_url('category/'.$info->image) ?>" alt="">
                  <input class="form-control" type="file" name="image"/>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-lg-3">Mô Tả</label>
                <div class="col-lg-9">
                  <textarea class="form-control" rows="10" name="description"><?php echo $info->description ?></textarea>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-lg-3">Thứ Tự Hiển Thị</label>
                <div class="col-lg-9">
                  <input class="form-control" placeholder="Số lớn nhất sẽ hiển thị đầu tiên" type="text" name="sort_order" value="<?php echo $info->sort_order ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
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