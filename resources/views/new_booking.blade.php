@extends('master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add Room Booking</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Booking</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add Booking</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="card-head">
                        <header>Add Room Booking</header>
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
                                                <input class="mdl-textfield__input" type="text" id="sample21" value=""
                                                    readonly tabIndex="-1">
                                                <label for="sample21" class="pull-right margin-0">
                                                    <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                                </label>
                                                <label for="sample21" class="mdl-textfield__label">Otaqlar</label>
                                                <ul data-mdl-for="sample21"
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
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded is-dirty" data-upgraded=",MaterialTextfield">
                                            <input class="mdl-textfield__input flatpickr-input active" type="text" id="date">
                                                <label class="mdl-textfield__label">Başlama Tarixi</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 p-t-20">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded is-dirty" data-upgraded=",MaterialTextfield">
                                                <input class="mdl-textfield__input flatpickr-input active" type="text" id="date2">
                                                <label class="mdl-textfield__label">Bitmə Tarixi</label>
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
                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                            <input class="mdl-textfield__input" type="number" id="txtFirstName">
                                            <label class="mdl-textfield__label">İştirakçı sayı</label>
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
</div>
@endsection