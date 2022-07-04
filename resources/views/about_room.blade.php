@extends('master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Otaq Haqqında</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="index.html">Ana Səhifə</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <!-- <li><a class="parent-item" href="#">Extra</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li> -->
                    <li class="active">Otaq Haqqında</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PROFILE CONTENT -->
                <div class="profile-content">
                    <div class="row">
                        <div class="profile-tab-box">
                            <div class="p-l-20">
                                <ul class="nav ">
                                    <li class="nav-item tab-all"><a class="nav-link active show"
                                            href="#tab1" data-toggle="tab">Haqqında</a></li>
                                    <li class="nav-item tab-all p-l-20"><a class="nav-link" href="#tab2"
                                            data-toggle="tab">Otağa baxış</a></li>
                                            <li class="nav-item tab-all p-l-20"><a class="nav-link" href="#tab3"
                                                data-toggle="tab">Rezerv et</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="white-box">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active fontawesome-demo" id="tab1">
                                    <div id="biography">
                                        <div class="row">
                                            <div class="col-md-3 col-6 b-r"> <strong>Otaq adı</strong>
                                                <br>
                                                <p class="text-muted">Otaq 1</p>
                                            </div>
                                            <div class="col-md-3 col-6 b-r"> <strong>Tutumu</strong>
                                                <br>
                                                <p class="text-muted">50 nəfərlik</p>
                                            </div>
                                            <div class="col-md-3 col-6 b-r"> <strong>Nömrəsi</strong>
                                                <br>
                                                <p class="text-muted">STP MMC, 125-ci otaq</p>
                                            </div>
                                            <!-- <div class="col-md-3 col-6"> <strong>Location</strong>
                                                <br>
                                                <p class="text-muted">India</p>
                                            </div> -->
                                        </div>
                                        <hr>
                                        <p class="biography-text">İş məkanınız bütün lazımi xidmətlər və imkanlarla təchiz olunmuş şəkildə təmin edilir.
                                         Yerində dəstək komandalarımız ehtiyac duyduğunuz hər şeydə sizə kömək etmək üçün gün boyu hazır vəziyyətdə olur.</p>
                                         <ul class="tab-list">
                                             <div class="row">
                                             <div class="col-6">
                                                <li><a href="#"><span aria-hidden="true" class="icon-people"></span>Qonaqları qarşılamaq üçün peşəkar resepşn komandası</a></li>
                                             </div>
                                             <div class="col-6">
                                                <li><a href="#"><span aria-hidden="true" class="icon-printer"></span>Təhlükəsizlik, təmizlik, kommunal xidmətlər və texniki baxım</a></li>
                                             </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-6">
                                                    <li><a href="#"><span aria-hidden="true" class="icon-screen-desktop"></span>Biznes sinfi Wi-Fi və etibarlı İT infrastrukturu</a></li>
                                                </div>
                                                <div class="col-6">
                                                    <li><a href="#"><span aria-hidden="true" class="icon-printer"></span>Poçt bildirişləri, onların idarə edilməsi, çeşidlənməsi və saxlanılması</a></li>
                                                </div>
                                                </div>
                                             <li><a href="#"><span aria-hidden="true" class="icon-pie-chart"></span>Yüksək keyfiyyətli erqonomik mebel</a></li>
                                         </ul>
                                        <br>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab2">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="page-content-wrapper">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="card-box">
                                                                <div class="card-head">
                                                                    <button id="panel-button"
                                                                        class="mdl-button mdl-js-button mdl-button--icon pull-right"
                                                                        data-upgraded=",MaterialButton">
                                                                        <i class="material-icons">more_vert</i>
                                                                    </button>
                                                                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                                                        data-mdl-for="panel-button">
                                                                        <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                                                                        </li>
                                                                        <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                                                                        </li>
                                                                        <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                                                                            here</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="card-body row">
                                                                    <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                                                                href="assets/img/image-gallery/1.jpg" data-sub-html="Demo Description">
                                                                                <img class="img-fluid img-thumbnail"
                                                                                    src="assets/img/image-gallery/thumb/thumb-1.jpg" alt=""> </a> </div>
                                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                                                                href="assets/img/image-gallery/2.jpg" data-sub-html="Demo Description">
                                                                                <img class="img-fluid img-thumbnail"
                                                                                    src="assets/img/image-gallery/thumb/thumb-2.jpg" alt=""> </a> </div>
                                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                                                                href="assets/img/image-gallery/3.jpg" data-sub-html="Demo Description">
                                                                                <img class="img-fluid img-thumbnail"
                                                                                    src="assets/img/image-gallery/thumb/thumb-3.jpg" alt=""> </a> </div>
                                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                                                                href="assets/img/image-gallery/4.jpg" data-sub-html="Demo Description">
                                                                                <img class="img-fluid img-thumbnail"
                                                                                    src="assets/img/image-gallery/thumb/thumb-4.jpg" alt=""> </a> </div>
                                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                                                                href="assets/img/image-gallery/5.jpg" data-sub-html="Demo Description">
                                                                                <img class="img-fluid img-thumbnail"
                                                                                    src="assets/img/image-gallery/thumb/thumb-5.jpg" alt=""> </a> </div>
                                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                                                                href="assets/img/image-gallery/6.jpg" data-sub-html="Demo Description">
                                                                                <img class="img-fluid img-thumbnail"
                                                                                    src="assets/img/image-gallery/thumb/thumb-6.jpg" alt=""> </a> </div>
                                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                                                                href="assets/img/image-gallery/7.jpg" data-sub-html="Demo Description">
                                                                                <img class="img-fluid img-thumbnail"
                                                                                    src="assets/img/image-gallery/thumb/thumb-7.jpg" alt=""> </a> </div>
                                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                                                                href="assets/img/image-gallery/8.jpg" data-sub-html="Demo Description">
                                                                                <img class="img-fluid img-thumbnail"
                                                                                    src="assets/img/image-gallery/thumb/thumb-8.jpg" alt=""> </a> </div>
                                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                                                                href="assets/img/image-gallery/9.jpg" data-sub-html="Demo Description">
                                                                                <img class="img-fluid img-thumbnail"
                                                                                    src="assets/img/image-gallery/thumb/thumb-9.jpg" alt=""> </a> </div>
                                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                                                                href="assets/img/image-gallery/10.jpg" data-sub-html="Demo Description">
                                                                                <img class="img-fluid img-thumbnail"
                                                                                    src="assets/img/image-gallery/thumb/thumb-10.jpg" alt=""> </a>
                                                                        </div>
                                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                                                                href="assets/img/image-gallery/11.jpg" data-sub-html="Demo Description">
                                                                                <img class="img-fluid img-thumbnail"
                                                                                    src="assets/img/image-gallery/thumb/thumb-11.jpg" alt=""> </a>
                                                                        </div>
                                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                                                                href="assets/img/image-gallery/12.jpg" data-sub-html="Demo Description">
                                                                                <img class="img-fluid img-thumbnail"
                                                                                    src="assets/img/image-gallery/thumb/thumb-12.jpg" alt=""> </a>
                                                                        </div>
                                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                                                                href="assets/img/image-gallery/13.jpg" data-sub-html="Demo Description">
                                                                                <img class="img-fluid img-thumbnail"
                                                                                    src="assets/img/image-gallery/thumb/thumb-13.jpg" alt=""> </a>
                                                                        </div>
                                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                                                                href="assets/img/image-gallery/14.jpg" data-sub-html="Demo Description">
                                                                                <img class="img-fluid img-thumbnail"
                                                                                    src="assets/img/image-gallery/thumb/thumb-14.jpg" alt=""> </a>
                                                                        </div>
                                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a
                                                                                href="assets/img/image-gallery/15.jpg" data-sub-html="Demo Description">
                                                                                <img class="img-fluid img-thumbnail"
                                                                                    src="assets/img/image-gallery/thumb/thumb-15.jpg" alt=""> </a>
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
                                <div class="tab-pane" id="tab3">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card-box">
                                                <div class="card-body row">
                                                    <div class="col-lg-2 p-t-20">
                                                        <div
                                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                            <input class="mdl-textfield__input" type="text" id="txtFirstName">
                                                            <label class="mdl-textfield__label">İclas üzrə cavabdeh şəxs</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 p-t-20">
                                                        <div
                                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                                            <input class="mdl-textfield__input" type="text" id="sample2" value=""
                                                                readonly tabIndex="-1">
                                                            <label for="sample2" class="pull-right margin-0">
                                                                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                                            </label>
                                                            <label for="sample2" class="mdl-textfield__label">Otaqlar</label>
                                                            <ul data-mdl-for="sample2"
                                                                class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                                                <li class="mdl-menu__item" data-val="DE">Otaq 1</li>
                                                                <li class="mdl-menu__item" data-val="BY">Otaq 2</li>
                                                                <li class="mdl-menu__item" data-val="BY">Otaq 3</li>
                                                                <li class="mdl-menu__item" data-val="BY">Otaq 4</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 p-t-20">
                                                        <div
                                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                            <input class="mdl-textfield__input" type="text" id="txtFirstName">
                                                            <label class="mdl-textfield__label">İclasın adı</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 p-t-20">
                                                        <div
                                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                            <input class="mdl-textfield__input" type="text" id="date2">
                                                            <label class="mdl-textfield__label">Başlama Traixi</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 p-t-20">
                                                        <div
                                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                            <input class="mdl-textfield__input" type="text" id="date2">
                                                            <label class="mdl-textfield__label">Bitmə Traixi</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 p-t-20">
                                                        <div
                                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                                            <input class="mdl-textfield__input" type="text" id="list3" value="" readonly
                                                                tabIndex="-1">
                                                            <label for="list3" class="pull-right margin-0">
                                                                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                                            </label>
                                                            <label for="list3" class="mdl-textfield__label">Başlama saatı</label>
                                                            <ul data-mdl-for="list3" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                                                <li class="mdl-menu__item" data-val="1">10:00</li>
                                                                <li class="mdl-menu__item" data-val="2">11:00</li>
                                                                <li class="mdl-menu__item" data-val="3">12:00</li>
                                                                <li class="mdl-menu__item" data-val="4">13:00</li>
                                                                <li class="mdl-menu__item" data-val="5">14:00</li>
                                                                <li class="mdl-menu__item" data-val="6">15:00</li>
                                                                <li class="mdl-menu__item" data-val="7">16:00</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 p-t-20">
                                                        <div
                                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                                            <input class="mdl-textfield__input" type="text" id="list7" value="" readonly
                                                                tabIndex="-1">
                                                            <label for="list7" class="pull-right margin-0">
                                                                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                                            </label>
                                                            <label for="list7" class="mdl-textfield__label">Bitmə saatı</label>
                                                            <ul data-mdl-for="list7" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                                                <li class="mdl-menu__item" data-val="1">10:00</li>
                                                                <li class="mdl-menu__item" data-val="2">11:00</li>
                                                                <li class="mdl-menu__item" data-val="3">12:00</li>
                                                                <li class="mdl-menu__item" data-val="4">13:00</li>
                                                                <li class="mdl-menu__item" data-val="5">14:00</li>
                                                                <li class="mdl-menu__item" data-val="6">15:00</li>
                                                                <li class="mdl-menu__item" data-val="7">16:00</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 p-t-20">
                                                        <div
                                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                                            <input class="mdl-textfield__input" type="text" id="list2" value="" readonly
                                                                tabIndex="-1">
                                                            <label for="list2" class="pull-right margin-0">
                                                                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                                            </label>
                                                        <label for="list2" class="mdl-textfield__label">İştirakçı sayı</label>
                                                            <ul data-mdl-for="list2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                                                <li class="mdl-menu__item" data-val="1">1</li>
                                                                <li class="mdl-menu__item" data-val="2">2</li>
                                                                <li class="mdl-menu__item" data-val="3">3</li>
                                                                <li class="mdl-menu__item" data-val="4">4</li>
                                                                <li class="mdl-menu__item" data-val="5">5</li>
                                                                <li class="mdl-menu__item" data-val="6">6</li>
                                                                <li class="mdl-menu__item" data-val="7">7</li>
                                                                <li class="mdl-menu__item" data-val="8">8</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 p-t-20 text-center">
                                                        <button type="button"
                                                            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Rezerv et</button>
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
                <!-- END PROFILE CONTENT -->
            </div>
        </div>
    </div>
    <!-- end page content -->
    <!-- start chat sidebar -->
    <div class="chat-sidebar-container" data-close-on-body-click="false">
        <div class="chat-sidebar">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-toggle="tab">Theme
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#quick_sidebar_tab_2" class="nav-link tab-icon" data-toggle="tab"> Chat
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-toggle="tab"> Settings
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane chat-sidebar-settings in show active animated shake" role="tabpanel"
                    id="quick_sidebar_tab_1">
                    <div class="slimscroll-style">
                        <div class="theme-light-dark">
                            <h6>Sidebar Theme</h6>
                            <button type="button" data-theme="white"
                                class="btn lightColor btn-outline btn-circle m-b-10 theme-button">Light
                                Sidebar</button>
                            <button type="button" data-theme="dark"
                                class="btn dark btn-outline btn-circle m-b-10 theme-button">Dark
                                Sidebar</button>
                        </div>
                        <div class="theme-light-dark">
                            <h6>Sidebar Color</h6>
                            <ul class="list-unstyled">
                                <li class="complete">
                                    <div class="theme-color sidebar-theme">
                                        <a href="#" data-theme="white"><span class="head"></span><span
                                                class="cont"></span></a>
                                        <a href="#" data-theme="dark"><span class="head"></span><span
                                                class="cont"></span></a>
                                        <a href="#" data-theme="blue"><span class="head"></span><span
                                                class="cont"></span></a>
                                        <a href="#" data-theme="indigo"><span class="head"></span><span
                                                class="cont"></span></a>
                                        <a href="#" data-theme="cyan"><span class="head"></span><span
                                                class="cont"></span></a>
                                        <a href="#" data-theme="green"><span class="head"></span><span
                                                class="cont"></span></a>
                                        <a href="#" data-theme="red"><span class="head"></span><span
                                                class="cont"></span></a>
                                    </div>
                                </li>
                            </ul>
                            <h6>Header Brand color</h6>
                            <ul class="list-unstyled">
                                <li class="theme-option">
                                    <div class="theme-color logo-theme">
                                        <a href="#" data-theme="logo-white"><span class="head"></span><span
                                                class="cont"></span></a>
                                        <a href="#" data-theme="logo-dark"><span class="head"></span><span
                                                class="cont"></span></a>
                                        <a href="#" data-theme="logo-blue"><span class="head"></span><span
                                                class="cont"></span></a>
                                        <a href="#" data-theme="logo-indigo"><span class="head"></span><span
                                                class="cont"></span></a>
                                        <a href="#" data-theme="logo-cyan"><span class="head"></span><span
                                                class="cont"></span></a>
                                        <a href="#" data-theme="logo-green"><span class="head"></span><span
                                                class="cont"></span></a>
                                        <a href="#" data-theme="logo-red"><span class="head"></span><span
                                                class="cont"></span></a>
                                    </div>
                                </li>
                            </ul>
                            <h6>Header color</h6>
                            <ul class="list-unstyled">
                                <li class="theme-option">
                                    <div class="theme-color header-theme">
                                        <a href="#" data-theme="header-white"><span
                                                class="head"></span><span class="cont"></span></a>
                                        <a href="#" data-theme="header-dark"><span class="head"></span><span
                                                class="cont"></span></a>
                                        <a href="#" data-theme="header-blue"><span class="head"></span><span
                                                class="cont"></span></a>
                                        <a href="#" data-theme="header-indigo"><span
                                                class="head"></span><span class="cont"></span></a>
                                        <a href="#" data-theme="header-cyan"><span class="head"></span><span
                                                class="cont"></span></a>
                                        <a href="#" data-theme="header-green"><span
                                                class="head"></span><span class="cont"></span></a>
                                        <a href="#" data-theme="header-red"><span class="head"></span><span
                                                class="cont"></span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Start Doctor Chat -->
                <div class="tab-pane chat-sidebar-chat animated slideInRight" id="quick_sidebar_tab_2">
                    <div class="chat-sidebar-list">
                        <div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd"
                            data-wrapper-class="chat-sidebar-list">
                            <div class="chat-header">
                                <h5 class="list-heading">Online</h5>
                            </div>
                            <ul class="media-list list-items">
                                <li class="media"><img class="media-object" src="assets/img/user/user3.jpg"
                                        width="35" height="35" alt="...">
                                    <i class="online dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">John Deo</h5>
                                        <div class="media-heading-sub">Spine Surgeon</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">5</span>
                                    </div> <img class="media-object" src="assets/img/user/user1.jpg"
                                        width="35" height="35" alt="...">
                                    <i class="busy dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Rajesh</h5>
                                        <div class="media-heading-sub">Director</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="assets/img/user/user5.jpg"
                                        width="35" height="35" alt="...">
                                    <i class="away dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Jacob Ryan</h5>
                                        <div class="media-heading-sub">Ortho Surgeon</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-danger">8</span>
                                    </div> <img class="media-object" src="assets/img/user/user4.jpg"
                                        width="35" height="35" alt="...">
                                    <i class="online dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Kehn Anderson</h5>
                                        <div class="media-heading-sub">CEO</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="assets/img/user/user2.jpg"
                                        width="35" height="35" alt="...">
                                    <i class="busy dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Sarah Smith</h5>
                                        <div class="media-heading-sub">Anaesthetics</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="assets/img/user/user7.jpg"
                                        width="35" height="35" alt="...">
                                    <i class="online dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Vlad Cardella</h5>
                                        <div class="media-heading-sub">Cardiologist</div>
                                    </div>
                                </li>
                            </ul>
                            <div class="chat-header">
                                <h5 class="list-heading">Offline</h5>
                            </div>
                            <ul class="media-list list-items">
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-warning">4</span>
                                    </div> <img class="media-object" src="assets/img/user/user6.jpg"
                                        width="35" height="35" alt="...">
                                    <i class="offline dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Jennifer Maklen</h5>
                                        <div class="media-heading-sub">Nurse</div>
                                        <div class="media-heading-small">Last seen 01:20 AM</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="assets/img/user/user8.jpg"
                                        width="35" height="35" alt="...">
                                    <i class="offline dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Lina Smith</h5>
                                        <div class="media-heading-sub">Ortho Surgeon</div>
                                        <div class="media-heading-small">Last seen 11:14 PM</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">9</span>
                                    </div> <img class="media-object" src="assets/img/user/user9.jpg"
                                        width="35" height="35" alt="...">
                                    <i class="offline dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Jeff Adam</h5>
                                        <div class="media-heading-sub">Compounder</div>
                                        <div class="media-heading-small">Last seen 3:31 PM</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="assets/img/user/user10.jpg"
                                        width="35" height="35" alt="...">
                                    <i class="offline dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Anjelina Cardella</h5>
                                        <div class="media-heading-sub">Physiotherapist</div>
                                        <div class="media-heading-small">Last seen 7:45 PM</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Doctor Chat -->
                <!-- Start Setting Panel -->
                <div class="tab-pane chat-sidebar-settings animated slideInUp" id="quick_sidebar_tab_3">
                    <div class="chat-sidebar-settings-list slimscroll-style">
                        <div class="chat-header">
                            <h5 class="list-heading">Layout Settings</h5>
                        </div>
                        <div class="chatpane inner-content ">
                            <div class="settings-list">
                                <div class="setting-item">
                                    <div class="setting-text">Sidebar Position</div>
                                    <div class="setting-set">
                                        <select
                                            class="sidebar-pos-option form-control input-inline input-sm input-small ">
                                            <option value="left" selected="selected">Left</option>
                                            <option value="right">Right</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Header</div>
                                    <div class="setting-set">
                                        <select
                                            class="page-header-option form-control input-inline input-sm input-small ">
                                            <option value="fixed" selected="selected">Fixed</option>
                                            <option value="default">Default</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Sidebar Menu </div>
                                    <div class="setting-set">
                                        <select
                                            class="sidebar-menu-option form-control input-inline input-sm input-small ">
                                            <option value="accordion" selected="selected">Accordion</option>
                                            <option value="hover">Hover</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Footer</div>
                                    <div class="setting-set">
                                        <select
                                            class="page-footer-option form-control input-inline input-sm input-small ">
                                            <option value="fixed">Fixed</option>
                                            <option value="default" selected="selected">Default</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-header">
                                <h5 class="list-heading">Account Settings</h5>
                            </div>
                            <div class="settings-list">
                                <div class="setting-item">
                                    <div class="setting-text">Notifications</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                for="switch-1">
                                                <input type="checkbox" id="switch-1"
                                                    class="mdl-switch__input" checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Show Online</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                for="switch-7">
                                                <input type="checkbox" id="switch-7"
                                                    class="mdl-switch__input" checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Status</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                for="switch-2">
                                                <input type="checkbox" id="switch-2"
                                                    class="mdl-switch__input" checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">2 Steps Verification</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                for="switch-3">
                                                <input type="checkbox" id="switch-3"
                                                    class="mdl-switch__input" checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-header">
                                <h5 class="list-heading">General Settings</h5>
                            </div>
                            <div class="settings-list">
                                <div class="setting-item">
                                    <div class="setting-text">Location</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                for="switch-4">
                                                <input type="checkbox" id="switch-4"
                                                    class="mdl-switch__input" checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Save Histry</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                for="switch-5">
                                                <input type="checkbox" id="switch-5"
                                                    class="mdl-switch__input" checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Auto Updates</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                for="switch-6">
                                                <input type="checkbox" id="switch-6"
                                                    class="mdl-switch__input" checked>
                                            </label>
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
    <!-- end chat sidebar -->
</div>
@endsection
@section('js')

@endsection