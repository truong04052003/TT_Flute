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
                                <label class="form-label" for="nameVi">Tên sản phẩm</label>
                                <input type="text" class="form-control" value="{{ request()->nameuser }}"
                                    name="nameuser" id="nameuser" placeholder="Nhập tên sản phẩm cần tìm">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label" for="nameVi">Loại sản phẩm</label>
                                <select class=" form-select" name="category_id" id="category_id" style="width: 470px">
                                    <option style="text-align: center" value="">---Loại sản phẩm liên quan---
                                    </option>
                                    @foreach ($categories as $category)
                                        <option <?= request()->category_id == $category->id ? 'selected' : '' ?>
                                            value="{{ $category->id }}">{{ $category->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('products.index') }}" style="float: left" type="submit"
                        class="btn btn-warning">Đặt
                        lại</a>
                    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                </div>
            </div>
        </form>
    </div>
</div>
