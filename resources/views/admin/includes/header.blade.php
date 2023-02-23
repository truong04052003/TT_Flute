<style>
    .header-wrap {
        margin: 0px 0px 0px 1070px;
    }
</style>
<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">

                <div class="header-button">
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src="{{ asset(auth()->user()->image) }}" alt="John Doe" />
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#"> {{ Auth::user()->name }}</a>
                                        </h5>
                                        <span class="email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="177d787f7973787257726f767a677b723974787a">{{ Auth::user()->groups->name }}</a></span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="{{ route('users.show', Auth::user()->id) }}">
                                            Account</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="{{ route('logout') }}">
                                        Đăng xuất</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
