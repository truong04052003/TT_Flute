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
                                <input type="text" class="form-control" value="{{ request()->namecustomer }}"
                                    name="namecustomer" id="namecustomer" placeholder="Nhập tên khách hàng cần tìm">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label" for="nameVi">Địa chỉ</label>
                                <input type="text" class="form-control" value="{{ request()->addresscustomer }}"
                                    name="addresscustomer" id="addresscustomer" placeholder="Nhập địa chỉ khách hàng">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label" for="nameVi">Email</label>
                                <input type="text" class="form-control" value="{{ request()->emailcustomer }}"
                                    name="emailcustomer" id="emailcustomer" placeholder="Nhập email khách hàng">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label" for="nameVi">Số Điện Thoại</label>
                                <input type="text" class="form-control" value="{{ request()->phonecustomer }}"
                                    name="phonecustomer" id="phonecustomer" placeholder="Nhập số điện thoại">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('customers.index') }}" style="float: left" type="submit"
                        class="btn btn-warning">Đặt
                        lại</a>
                    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                </div>
            </div>
        </form>
    </div>
</div>
