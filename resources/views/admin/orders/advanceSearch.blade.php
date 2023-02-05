<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog">
        <form method="get">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tìm kiếm chi tiết</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label" for="nameVi">Tên khách hàng</label>
                                <input type="text" class="form-control" value="{{ request()->nameCus }}"
                                    name="nameCus" id="nameCus" placeholder="Nhập tên khách hàng cần tìm">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('orders.index') }}" style="float: left" type="submit" class="btn btn-warning">Đặt
                        lại</a>
                    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                </div>
            </div>
        </form>
    </div>
</div>
