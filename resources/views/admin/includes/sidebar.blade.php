<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('admin/images/icon/haha.jpg') }}" alt="" width="150px" height="100px" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">

            <ul class="list-unstyled navbar__list">
                <li>
                    <a href="{{ route('dashboard') }}" class="fas">
                        Trang chủ</a>
                </li>
                <li>
                    <a href="{{ route('suppliers.index') }}" class="fas">
                        Quản lí nhà cung cấp</a>
                </li>
                <li>
                    <a href="{{ route('categories.index') }}" class="fas">
                        Quản lí loại sản phẩm</a>
                </li>
                <li>
                    <a href="{{ route('products.index') }}" class="fas">
                        Quản lí sản phẩm</a>
                </li>
                <li>
                    <a href="{{ route('orders.index') }}" class="fas">
                        Quản lí đơn hàng</a>
                </li>
                    <li>
                        <a href="{{ route('customers.index') }}" class="fas">
                            Quản lí khách hàng</a>
                    </li>
                <li>
                    <a href="{{ route('users.index') }}" class="fas">
                        Quản lí nhân viên</a>
                </li>
                @if (Auth::user()->hasPermission('Group_viewAny'))
                    <li>
                        <a href="{{ route('group.index') }}" class="fas">
                            Quản lí quyền</a>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
</aside>
