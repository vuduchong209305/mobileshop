<div class="container-fluid">
  <div class="page-title">
    <h1>Quản Lý Sản Phẩm</h1>
  </div>
  <div class="row">
    <div class="col-lg-8">
      <div class="widget-container fluid-height clearfix">
        <div class="heading"><i class="icon-adjust"></i>Sửa Sản Phẩm
          <a href="<?php echo admin_url('product/index') ?>"><button class="btn btn-lg btn-primary">Danh Sách</button></a>
        </div>
        <div class="widget-content padded">
          <div class="col-lg-12">
            <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label class="control-label col-lg-3">Tên Sản Phẩm</label>
                <div class="col-lg-9">
                  <input class="form-control" placeholder="Tên sản phẩm" type="text" name="name" value="<?php echo $info->pro_title ?>"/>
                  <div class="text-danger"><?php echo form_error('name') ?></div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-3">Hãng</label>
                <div class="col-lg-9">
                  <select class="form-control" name="catalog">
                  <optgroup label="Danh Mục">
                  <?php foreach ($category as $row): ?>
                    <option value="<?php echo $row->cat_id ?>" <?php if($row->cat_id == $info->cat_id) echo 'selected' ?>><?php echo $row->name ?></option>
                  <?php endforeach; ?>
                  </optgroup>
                  </select>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-lg-3">Hình Ảnh</label>
                <div class="col-lg-9">
                  <img alt="" class="form-photo" src="<?php echo upload_url('product/'. $info->pro_image) ?>" width="100" height="100"/>
                  <input class="form-control" type="file" name="image"/>
                  <div class="text-danger"><?php echo form_error('image') ?></div>
                </div>
              </div>
              
              <?php $image_list = json_decode($info->pro_image_list); ?>
              <div class="form-group">
                <label class="control-label col-lg-3">Ảnh Kèm Theo</label>
                <div class="col-lg-9">
                <img id="img" alt="" class="form-photo" src="<?php echo upload_url('product/'. $info->pro_image) ?>" width="100" height="100"/><br>
                <?php if(is_array($image_list)): ?>
                  <?php foreach ($image_list as $img): ?>
                  <img  alt="" class="form-photo img-list" src="<?php echo upload_url('product/'. $img) ?>" width="100" height="100"/>
                  <?php endforeach; ?>
                <?php endif; ?>
                  <input class="form-control" type="file" name="image_list[]" multiple=""/>
                </div>
              </div>
                  
              <div class="form-group">
                <label class="control-label col-lg-3">Giá Bán</label>
                <div class="col-lg-9">
                  <input class="form-control" placeholder="Giá bán" type="text" name="price" value="<?php echo $info->pro_price ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                  <div class="text-danger"><?php echo form_error('price') ?></div>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-lg-3">Giá Khuyến Mại</label>
                <div class="col-lg-9">
                  <input class="form-control" placeholder="Giá khuyến mại" type="text" name="saleoff" value="<?php echo $info->pro_sale ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-lg-3">Mô Tả Ngắn</label>
                <div class="col-lg-9">
                  <textarea class="form-control" rows="3" name="description"><?php echo $info->pro_descript ?></textarea>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-3">Chi Tiết</label>
                <div class="col-lg-9">
                  <textarea class="form-control" rows="3" name="detail"><?php echo $info->pro_detail ?></textarea>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-lg-3">Thứ Tự</label>
                <div class="col-lg-9">
                  <input class="form-control" placeholder="Thứ Tự" type="text" name="sort_order" value="<?php echo $info->sort_order ?>"/>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-3">Có Là Sản Phẩm HOT ?</label>
                <div class="col-lg-9">
                  <select class="form-control" name="hot">
                    <option value="1" <?php if($info->hot == 1) echo 'selected' ?>>Có</option>
                    <option value="0" <?php if($info->hot == 0) echo 'selected' ?>>Không</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-3">Trạng Thái</label>
                <div class="col-lg-9 clearfix">
                  <div class="holder">
                    <input checked class="check-ios" id="check" name="check" type="checkbox" value="None" value="<?php echo $info->status ?>"/>
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

<script>
  $(document).ready(function(){
    $('.img-list').click(function(){
      var img = $(this).attr('src');
      $('#img').attr('src', img);
    });
  });
</script>