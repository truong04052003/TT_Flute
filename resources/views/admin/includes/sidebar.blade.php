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
                    <a href="#" class="fas">
                        Quản Lí Loại Sản Phẩm</a>
                </li>
                <li>
                    <a href="{{route('users.index')}}" class="fas">
                        Quản Lí Nhân Viên</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#charts-navs" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-person-lines-fill"></i><span>Quản Lí Nhân Viên </span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                <li class="nav-item">
                    <ul id="charts-navs" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ route('users.index') }}">
                                <i class="bi bi-circle"></i><span>Danh Sách Nhân Viên </span>
                            </a>
                        </li>
                        {{-- @if (Auth::user()->hasPermission('User_create')) --}}
                            <li>
                                <a href="{{ route('users.create') }}">
                                    <i class="bi bi-circle"></i><span>Đăng Kí Tài Khoản</span>
                                </a>
                            </li>
                        {{-- @endif --}}
                    </ul>
                </li>
                </li>
                <li>
                    <a href="#" class="fas">
                        Quản Lí Quyền</a>
                </li>


            </ul>
        </nav>
    </div>
</aside>
