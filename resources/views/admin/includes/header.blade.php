<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <form class="form-header" action="" method="POST" id="key">
                    <input class="au-input au-input--xl" type="text" name="search"
                        placeholder="" />
                    <button class="au-btn--submit" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                          </svg>
                    </button>
                </form>
                <div class="header-button">
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src="{{ asset(auth()->user()->image )}}" alt="John Doe" />
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="{{ asset(auth()->user()->image )  }}" alt="John Doe" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#"> {{ Auth::user()->name }}</a>
                                        </h5>
                                        <span class="email"><a href="/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
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
                                    <a href="{{route('logout')}}">
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

