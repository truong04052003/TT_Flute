<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{ asset('admin/images/icon/logo.png') }}" alt="" />
            {{-- Shop TT-Flute --}}
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a href="#" class="fas">
                        Trang Chủ</a>
                </li>
                <li>
                    <a href="#" class="fas">
                        Quản Lí Sản Phẩm</a>
                </li>
                <li>
                    <a href="#" class="fas">
                        Quản Lí Đơn Hàng</a>
                </li>
                <li>
                    <a href="#" class="fas">
                        Quản Lí Khách Hàng</a>
                </li>
                <li>
                    <a href="{{ route('categories.index') }}" class="fas">
                        Quản Lí Loại Sản Phẩm</a>
                </li>
                <li>
                    <a href="#" class="fas">
                        Quản Lí Nhân Viên</a>
                </li>
                <li>
                    <a href="#" class="fas">
                        Quản Lí Quyền</a>
                </li>


            </ul>
        </nav>
    </div>
</aside>
