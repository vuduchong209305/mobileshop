<div class="container-fluid">
  <div class="page-title">
    <h1>Quản Lý Sản Phẩm</h1>
  </div>
  <div class="row">
    <div class="col-lg-8">
      <div class="widget-container fluid-height clearfix">
        <div class="heading"><i class="icon-adjust"></i>Thêm Sản Phẩm
          <a href="<?php echo admin_url('product/index') ?>"><button class="btn btn-lg btn-primary">Danh Sách</button></a>
        </div>
        <div class="widget-content padded">
          <div class="col-lg-12">
            <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label class="control-label col-lg-3">Tên Sản Phẩm</label>
                <div class="col-lg-9">
                  <input class="form-control" placeholder="Tên sản phẩm" type="text" name="name" />
                  <div class="text-danger"><?php echo form_error('name') ?></div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-3">Hãng</label>
                <div class="col-lg-9">
                  <select class="form-control" name="catalog">
                    <option value="">--Chọn Hãng Sản Phẩm--</option>
                  <?php foreach ($category as $row): ?>
                    <option value="<?php echo $row->cat_id ?>"><?php echo $row->name ?></option>
                  <?php endforeach; ?>
                  </select>
                  <div class="text-danger"><?php echo form_error('catalog') ?></div>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-lg-3">Hình Ảnh</label>
                <div class="col-lg-9">
                  <input class="form-control" type="file" name="image"/>
                  <div class="text-danger"><?php echo form_error('image') ?></div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-3">Ảnh Kèm Theo</label>
                <div class="col-lg-9">
                  <input class="form-control" type="file" name="image_list[]" multiple=""/>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-3">Giá Bán</label>
                <div class="col-lg-9">
                  <input class="form-control" placeholder="Giá bán" type="text" name="price" onkeypress='return event.charCode >= 48 && event.charCode <= 57' />
                  <div class="text-danger"><?php echo form_error('price') ?></div>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-lg-3">Giá Khuyến Mại</label>
                <div class="col-lg-9">
                  <input class="form-control" placeholder="Giá khuyến mại" type="text" name="saleoff" onkeypress='return event.charCode >= 48 && event.charCode <= 57' />
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-3">Mô Tả Ngắn</label>
                <div class="col-lg-9">
                  <textarea class="form-control" rows="3" name="description"></textarea>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-3">Chi Tiết</label>
                <div class="col-lg-9">
                  <textarea class="form-control" rows="3" name="detail"></textarea>
                </div>
              </div>
                
              <div class="form-group">
                <label class="control-label col-lg-3">Thứ Tự Hiển Thị</label>
                <div class="col-lg-9">
                  <input class="form-control" placeholder="Số lớn nhất sẽ hiển thị đầu tiên" type="text" name="sort_order" />
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-lg-3">Có Là Sản Phẩm HOT ?</label>
                <div class="col-lg-9">
                  <select class="form-control" name="catalog">
                    <option value="1">Có</option>
                    <option value="0" selected>Không</option>
                  </select>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-lg-3">Trạng Thái</label>
                <div class="col-lg-9 clearfix">
                  <div class="holder">
                    <input checked class="check-ios" id="check" name="check" type="checkbox" value="1"/>
                    <label for="check"></label>
                    <span></span>
                  </div>
                </div>
              </div>

              <div class="form-actions col-lg-offset-3 col-lg-9">
                <button class="btn btn-primary" type="submit">Thêm Mới</button>
                <button class="btn btn-default-outline">Hủy Bỏ</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>