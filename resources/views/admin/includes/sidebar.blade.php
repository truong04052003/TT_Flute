<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="{{ route('dashboard.admin') }}">
            <img src="{{ asset('admin/images/icon/logo.png') }}" alt="" />
            {{-- Shop TT-Flute --}}
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">

            <ul class="list-unstyled navbar__list">
                <li>


                    <a href="{{ route('dashboard.admin') }}" class="fas">

                        Trang Chủ</a>
                </li>
                <li>
                    <a href="{{ route('products.index') }}" class="fas">
                        Quản Lí Sản Phẩm</a>
                </li>

                <li>
                    <a href="{{ route('group.index') }}" class="fas">
                        Quản Lí Quyền</a>
                </li>
                <li>
                    <a href="{{ route('orders.index') }}" class="fas">
                        Quản Lí Đơn Hàng</a>
                </li>
                <li>
                    <a href="{{ route('customers.index') }}" class="fas">
                        Quản Lí Khách Hàng</a>
                </li>
                <li>
                    <a href="{{ route('categories.index') }}" class="fas">
                        Quản Lí Loại Sản Phẩm</a>
                </li>
                <li>
                    <a href="{{ route('users.index') }}" class="fas">
                        Quản Lí Nhân Viên</a>
                </li>

            </ul>
        </nav>
    </div>
</aside>
