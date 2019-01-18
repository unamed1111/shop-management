<div class="widget-list">
    <div class="row">
        <div class="col-md-12 widget-holder">
            <div class="widget-bg">
                <div class="widget-body clearfix">
                    <h5 class="box-title mr-b-0">Tạo nhóm hàng</h5>
                    <form class="form-material" id="group">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" id="name" type="text" name="name">
                                    <input type="hidden" name="id" id="id">
                                    <label for="name">Tên nhóm hàng</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="parent_id" name="parent_id">
                                @include('products.groups.listproductgroups_option',$ProductGroup->toArray())
                            </select>
                            <label for="parent_id">Thuộc nhóm</label>
                        </div>
                        <div class="form-actions btn-list">
                            <button class="btn btn-primary button_add" type="button" >THÊM</button>
                            <button class="btn btn-primary button_edit" type="button" style="display:none;">CẬP NHẬT</button>
                            <button class="btn btn-outline-default button_cancel" type="button" style="display:none;">HỦY</button>
                        </div>
                    </form>
                </div>
                <!-- /.widget-body -->
            </div>
            <!-- /.widget-bg -->
        </div>
        <!-- /.widget-holder -->
        <div class="col-md-12 widget-holder">
            <div class="widget-bg">
                <div class="widget-body clearfix">
                    <h5 class="box-title">Danh Sách Nhóm <small>(drag to sort)</small></h5>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dd">
                                @include('products.groups.listproductgroups',['ProductGroups' => $ProductGroup ])
                            </div>
                            <!-- /.div -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.widget-body -->
            </div>
            <!-- /.widget-bg -->
        </div>
        <!-- /.widget-holder -->
    </div>
    <!-- /.row -->
</div>
<!-- /.widget-list -->
<script src="{{asset('assets/js/theme.js')}}"></script>