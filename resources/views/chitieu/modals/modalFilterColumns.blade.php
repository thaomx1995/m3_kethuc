<div class="modal fade" id="modalFilterColumns" tabindex="-1" role="dialog" aria-labelledby="modalFilterColumnsLabel" aria-hidden="true">
    <!-- .modal-dialog -->
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <!-- .modal-content -->
        <div class="modal-content" style="height: fit-content;" >
            <!-- .modal-header -->
            <div class="modal-header">
                <h5 class="modal-title" id="modalFilterColumnsLabel"> Thêm </h5>
            </div><!-- /.modal-header -->
            <!-- .modal-body -->
            <div class="modal-body">
                <!-- #filter-columns -->
                <div id="filter-columns">
                    <!-- .form-row -->
                    <div class="form-group form-row filter-row">
                        <div class="col-lg-4">
                            <label class=""></label>
                        </div>
                        <div class="col-lg-8">
                        </div>
                    </div>

                    <div class="form-group form-row filter-row">
                        <div class="col-lg-4">
                            <label class="">Danh mục</label>
                        </div>
                        <div class="col-lg-8">
                            <div class="input text"><input type="text" name="danhmuc" class="form-control filter-column f-name"  id="danhmuc" /></div>
                        </div>
                    </div>

                    <div class="form-group form-row filter-row">
                        <div class="col-lg-4">
                            <label class="">Ngày</label>
                        </div>
                        <div class="col-lg-8">
                            <div class="input text"><input type="text" name="ngay" class="form-control filter-column f-name" value="" id="address" /></div>
                        </div>
                    </div>
                    <div class="form-group form-row filter-row">
                        <div class="col-lg-4">
                            <label class="">Số tiền</label>
                        </div>
                        <div class="col-lg-4">
                            <label class="">Ghi chú</label>
                        </div>
                        <div class="col-lg-8">
                            <div class="input text"><input type="text" name="sotien" class="form-control filter-column f-name" value="" id="phone" /></div>
                        </div>
                    </div>
                </div><!-- #filter-columns -->
            </div><!-- /.modal-body -->
            <div class="modal-footer justify-content-start">
            <button type="submit" class="btn btn-primary" id="apply-filter">Thêm</button>
                <a href="{{ route('chitieu.index') }}" class="btn btn-dark " >Hủy</a>
                <button type="button" data-dismiss="modal"  class="btn btn-secondary ml-auto" id="clear-filter">Hủy</button>
            </div><!-- /.modal-footer -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
