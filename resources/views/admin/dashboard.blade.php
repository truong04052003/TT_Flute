@extends('admin.layouts.master')
@section('content')

    <body class="animsition">
        <div class="page-wrapper">

            <div class="page-container">
                <div class="main-content">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="overview-wrap">
                                        <h2 class="title-1">overview</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-t-25">
                                <div class="col-sm-6 col-lg-3">
                                    <div class="overview-item overview-item--c1">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                        fill="currentColor" class="bi bi-basket-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z" />
                                                    </svg>
                                                </div>
                                                <div class="text">
                                                    <h2>10368</h2>
                                                    <span>members online</span>
                                                </div>
                                            </div>
                                            <div class="overview-chart">
                                                <canvas id="widgetChart1"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="overview-item overview-item--c2">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                        fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                                    </svg>
                                                </div>
                                                <div class="text">
                                                    <h2>388,688</h2>
                                                    <span>items solid</span>
                                                </div>
                                            </div>
                                            <div class="overview-chart">
                                                <canvas id="widgetChart2"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="overview-item overview-item--c3">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                        fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                                                    </svg>
                                                </div>
                                                <div class="text">
                                                    <h2>1,086</h2>
                                                    <span>this week</span>
                                                </div>
                                            </div>
                                            <div class="overview-chart">
                                                <canvas id="widgetChart3"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="overview-item overview-item--c4">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                        fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
                                                        <path
                                                            d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z" />
                                                    </svg>
                                                </div>
                                                <div class="text">
                                                    <h2>1,086</h2>
                                                    <span>this week</span>
                                                </div>
                                            </div>
                                            <div class="overview-chart">
                                                <canvas id="widgetChart4"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="au-card recent-report">
                                        <div class="au-card-inner">
                                            <h3 class="title-2">recent reports</h3>
                                            <div class="chart-info">
                                                <div class="chart-info__left">
                                                    <div class="chart-note">
                                                        <span class="dot dot--blue"></span>
                                                        <span>products</span>
                                                    </div>
                                                    <div class="chart-note mr-0">
                                                        <span class="dot dot--green"></span>
                                                        <span>services</span>
                                                    </div>
                                                </div>
                                                <div class="chart-info__right">
                                                    <div class="chart-statis">
                                                        <span class="index incre">
                                                            <i class="zmdi zmdi-long-arrow-up"></i>25%</span>
                                                        <span class="label">products</span>
                                                    </div>
                                                    <div class="chart-statis mr-0">
                                                        <span class="index decre">
                                                            <i class="zmdi zmdi-long-arrow-down"></i>10%</span>
                                                        <span class="label">services</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="recent-report__chart">
                                                <canvas id="recent-rep-chart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="au-card chart-percent-card">
                                        <div class="au-card-inner">
                                            <h3 class="title-2 tm-b-5">char by %</h3>
                                            <div class="row no-gutters">
                                                <div class="col-xl-6">
                                                    <div class="chart-note-wrap">
                                                        <div class="chart-note mr-0 d-block">
                                                            <span class="dot dot--blue"></span>
                                                            <span>products</span>
                                                        </div>
                                                        <div class="chart-note mr-0 d-block">
                                                            <span class="dot dot--red"></span>
                                                            <span>services</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="percent-chart">
                                                        <canvas id="percent-chart"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-9">
                                    <h2 class="title-1 m-b-25">Earnings By Items</h2>
                                    <div class="table-responsive table--no-card m-b-40">
                                        <table class="table table-borderless table-striped table-earning">
                                            <thead>
                                                <tr>
                                                    <th>date</th>
                                                    <th>order ID</th>
                                                    <th>name</th>
                                                    <th class="text-right">price</th>
                                                    <th class="text-right">quantity</th>
                                                    <th class="text-right">total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>2018-09-29 05:57</td>
                                                    <td>100398</td>
                                                    <td>iPhone X 64Gb Grey</td>
                                                    <td class="text-right">$999.00</td>
                                                    <td class="text-right">1</td>
                                                    <td class="text-right">$999.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2018-09-28 01:22</td>
                                                    <td>100397</td>
                                                    <td>Samsung S8 Black</td>
                                                    <td class="text-right">$756.00</td>
                                                    <td class="text-right">1</td>
                                                    <td class="text-right">$756.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2018-09-27 02:12</td>
                                                    <td>100396</td>
                                                    <td>Game Console Controller</td>
                                                    <td class="text-right">$22.00</td>
                                                    <td class="text-right">2</td>
                                                    <td class="text-right">$44.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2018-09-26 23:06</td>
                                                    <td>100395</td>
                                                    <td>iPhone X 256Gb Black</td>
                                                    <td class="text-right">$1199.00</td>
                                                    <td class="text-right">1</td>
                                                    <td class="text-right">$1199.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2018-09-25 19:03</td>
                                                    <td>100393</td>
                                                    <td>USB 3.0 Cable</td>
                                                    <td class="text-right">$10.00</td>
                                                    <td class="text-right">3</td>
                                                    <td class="text-right">$30.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2018-09-29 05:57</td>
                                                    <td>100392</td>
                                                    <td>Smartwatch 4.0 LTE Wifi</td>
                                                    <td class="text-right">$199.00</td>
                                                    <td class="text-right">6</td>
                                                    <td class="text-right">$1494.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2018-09-24 19:10</td>
                                                    <td>100391</td>
                                                    <td>Camera C430W 4k</td>
                                                    <td class="text-right">$699.00</td>
                                                    <td class="text-right">1</td>
                                                    <td class="text-right">$699.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2018-09-22 00:43</td>
                                                    <td>100393</td>
                                                    <td>USB 3.0 Cable</td>
                                                    <td class="text-right">$10.00</td>
                                                    <td class="text-right">3</td>
                                                    <td class="text-right">$30.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <h2 class="title-1 m-b-25">Top countries</h2>
                                    <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                        <div class="au-card-inner">
                                            <div class="table-responsive">
                                                <table class="table table-top-countries">
                                                    <tbody>
                                                        <tr>
                                                            <td>United States</td>
                                                            <td class="text-right">$119,366.96</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Australia</td>
                                                            <td class="text-right">$70,261.65</td>
                                                        </tr>
                                                        <tr>
                                                            <td>United Kingdom</td>
                                                            <td class="text-right">$46,399.22</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Turkey</td>
                                                            <td class="text-right">$35,364.90</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Germany</td>
                                                            <td class="text-right">$20,366.96</td>
                                                        </tr>
                                                        <tr>
                                                            <td>France</td>
                                                            <td class="text-right">$10,366.96</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Australia</td>
                                                            <td class="text-right">$5,366.96</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Italy</td>
                                                            <td class="text-right">$1639.32</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                        <div class="au-card-title"
                                            style="background-image:url('images/bg-title-01.jpg');">
                                            <div class="bg-overlay bg-overlay--blue"></div>
                                            <h3>
                                                <i class="zmdi zmdi-account-calendar"></i>26 April, 2018
                                            </h3>
                                            <button class="au-btn-plus">
                                                <i class="zmdi zmdi-plus"></i>
                                            </button>

                                        </div>
                                        <div class="au-task js-list-load">
                                            <div class="au-task__title">
                                                <p>Tasks for John Doe</p>
                                            </div>
                                            <div class="au-task-list js-scrollbar3">
                                                <div class="au-task__item au-task__item--danger">
                                                    <div class="au-task__item-inner">
                                                        <h5 class="task">
                                                            <a href="#">Meeting about plan for Admin Template
                                                                2018</a>
                                                        </h5>
                                                        <span class="time">10:00 AM</span>
                                                    </div>
                                                </div>
                                                <div class="au-task__item au-task__item--warning">
                                                    <div class="au-task__item-inner">
                                                        <h5 class="task">
                                                            <a href="#">Create new task for Dashboard</a>
                                                        </h5>
                                                        <span class="time">11:00 AM</span>
                                                    </div>
                                                </div>
                                                <div class="au-task__item au-task__item--primary">
                                                    <div class="au-task__item-inner">
                                                        <h5 class="task">
                                                            <a href="#">Meeting about plan for Admin Template
                                                                2018</a>
                                                        </h5>
                                                        <span class="time">02:00 PM</span>
                                                    </div>
                                                </div>
                                                <div class="au-task__item au-task__item--success">
                                                    <div class="au-task__item-inner">
                                                        <h5 class="task">
                                                            <a href="#">Create new task for Dashboard</a>
                                                        </h5>
                                                        <span class="time">03:30 PM</span>
                                                    </div>
                                                </div>
                                                <div class="au-task__item au-task__item--danger js-load-item">
                                                    <div class="au-task__item-inner">
                                                        <h5 class="task">
                                                            <a href="#">Meeting about plan for Admin Template
                                                                2018</a>
                                                        </h5>
                                                        <span class="time">10:00 AM</span>
                                                    </div>
                                                </div>
                                                <div class="au-task__item au-task__item--warning js-load-item">
                                                    <div class="au-task__item-inner">
                                                        <h5 class="task">
                                                            <a href="#">Create new task for Dashboard</a>
                                                        </h5>
                                                        <span class="time">11:00 AM</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="au-task__footer">
                                                <button class="au-btn au-btn-load js-load-btn">load more</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                        <div class="au-card-title"
                                            style="background-image:url('images/bg-title-02.jpg');">
                                            <div class="bg-overlay bg-overlay--blue"></div>
                                            <h3>
                                                <i class="zmdi zmdi-comment-text"></i>New Messages
                                            </h3>
                                            <button class="au-btn-plus">
                                                <i class="zmdi zmdi-plus"></i>
                                            </button>
                                        </div>
                                        <div class="au-inbox-wrap js-inbox-wrap">
                                            <div class="au-message js-list-load">
                                                <div class="au-message__noti">
                                                    <p>You Have
                                                        <span>2</span>
                                                        new messages
                                                    </p>
                                                </div>
                                                <div class="au-message-list">
                                                    <div class="au-message__item unread">
                                                        <div class="au-message__item-inner">
                                                            <div class="au-message__item-text">
                                                                <div class="avatar-wrap">
                                                                    <div class="avatar">
                                                                        <img src="{{ asset('admin/images/icon/avatar-02.jpg') }}"
                                                                            alt="John Smith">
                                                                    </div>
                                                                </div>
                                                                <div class="text">
                                                                    <h5 class="name">John Smith</h5>
                                                                    <p>Have sent a photo</p>
                                                                </div>
                                                            </div>
                                                            <div class="au-message__item-time">
                                                                <span>12 Min ago</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="au-message__item unread">
                                                        <div class="au-message__item-inner">
                                                            <div class="au-message__item-text">
                                                                <div class="avatar-wrap online">
                                                                    <div class="avatar">
                                                                        <img src="{{ asset('admin/images/icon/avatar-03.jpg') }}"
                                                                            alt="Nicholas Martinez">
                                                                    </div>
                                                                </div>
                                                                <div class="text">
                                                                    <h5 class="name">Nicholas Martinez</h5>
                                                                    <p>You are now connected on message</p>
                                                                </div>
                                                            </div>
                                                            <div class="au-message__item-time">
                                                                <span>11:00 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="au-message__item">
                                                        <div class="au-message__item-inner">
                                                            <div class="au-message__item-text">
                                                                <div class="avatar-wrap online">
                                                                    <div class="avatar">
                                                                        <img src="{{ asset('admin/images/icon/avatar-04.jpg') }}"
                                                                            alt="Michelle Sims">
                                                                    </div>
                                                                </div>
                                                                <div class="text">
                                                                    <h5 class="name">Michelle Sims</h5>
                                                                    <p>Lorem ipsum dolor sit amet</p>
                                                                </div>
                                                            </div>
                                                            <div class="au-message__item-time">
                                                                <span>Yesterday</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="au-message__item">
                                                        <div class="au-message__item-inner">
                                                            <div class="au-message__item-text">
                                                                <div class="avatar-wrap">
                                                                    <div class="avatar">
                                                                        <img src="{{ asset('admin/images/icon/avatar-05.jpg') }}"
                                                                            alt="Michelle Sims">
                                                                    </div>
                                                                </div>
                                                                <div class="text">
                                                                    <h5 class="name">Michelle Sims</h5>
                                                                    <p>Purus feugiat finibus</p>
                                                                </div>
                                                            </div>
                                                            <div class="au-message__item-time">
                                                                <span>Sunday</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="au-message__item js-load-item">
                                                        <div class="au-message__item-inner">
                                                            <div class="au-message__item-text">
                                                                <div class="avatar-wrap online">
                                                                    <div class="avatar">
                                                                        <img src="{{ asset('admin/images/icon/avatar-04.jpg') }}"
                                                                            alt="Michelle Sims">
                                                                    </div>
                                                                </div>
                                                                <div class="text">
                                                                    <h5 class="name">Michelle Sims</h5>
                                                                    <p>Lorem ipsum dolor sit amet</p>
                                                                </div>
                                                            </div>
                                                            <div class="au-message__item-time">
                                                                <span>Yesterday</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="au-message__item js-load-item">
                                                        <div class="au-message__item-inner">
                                                            <div class="au-message__item-text">
                                                                <div class="avatar-wrap">
                                                                    <div class="avatar">
                                                                        <img src="{{ asset('admin/images/icon/avatar-05.jpg') }}"
                                                                            alt="Michelle Sims">
                                                                    </div>
                                                                </div>
                                                                <div class="text">
                                                                    <h5 class="name">Michelle Sims</h5>
                                                                    <p>Purus feugiat finibus</p>
                                                                </div>
                                                            </div>
                                                            <div class="au-message__item-time">
                                                                <span>Sunday</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__footer">
                                                    <button class="au-btn au-btn-load js-load-btn">load more</button>
                                                </div>
                                            </div>
                                            <div class="au-chat">
                                                <div class="au-chat__title">
                                                    <div class="au-chat-info">
                                                        <div class="avatar-wrap online">
                                                            <div class="avatar avatar--small">
                                                                <img src="{{ asset('admin/images/icon/avatar-02.jpg') }}"
                                                                    alt="John Smith">
                                                            </div>
                                                        </div>
                                                        <span class="nick">
                                                            <a href="#">John Smith</a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="au-chat__content">
                                                    <div class="recei-mess-wrap">
                                                        <span class="mess-time">12 Min ago</span>
                                                        <div class="recei-mess__inner">
                                                            <div class="avatar avatar--tiny">
                                                                <img src="{{ asset('admin/images/icon/avatar-02.jpg') }}"
                                                                    alt="John Smith">
                                                            </div>
                                                            <div class="recei-mess-list">
                                                                <div class="recei-mess">Lorem ipsum dolor sit amet,
                                                                    consectetur adipiscing elit non iaculis</div>
                                                                <div class="recei-mess">Donec tempor, sapien ac viverra
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="send-mess-wrap">
                                                        <span class="mess-time">30 Sec ago</span>
                                                        <div class="send-mess__inner">
                                                            <div class="send-mess-list">
                                                                <div class="send-mess">Lorem ipsum dolor sit amet,
                                                                    consectetur adipiscing elit non iaculis</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-chat-textfield">
                                                    <form class="au-form-icon">
                                                        <input class="au-input au-input--full au-input--h65"
                                                            type="text" placeholder="Type a message">
                                                        <button class="au-input-icon">
                                                            <i class="zmdi zmdi-camera"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>

        <script src="{{ asset('admin/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/jquery-3.2.1.min.js') }}"></script>

        <script src="{{ asset('admin/vendor/bootstrap-4.1/popper.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>

        <script src="{{ asset('admin/vendor/slick/slick.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/wow/wow.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/animsition/animsition.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/counter-up/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/circle-progress/circle-progress.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('admin/vendor/chartjs/Chart.bundle.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/select2/select2.min.js') }}"></script>

        <script src="{{ asset('admin/js/main.js') }}"></script>
        <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
            integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
            data-cf-beacon='{"rayId":"791732552eea0436","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}'
            crossorigin="anonymous"></script>
    </body>
@endsection
