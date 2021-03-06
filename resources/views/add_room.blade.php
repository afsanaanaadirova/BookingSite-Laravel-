@extends('master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="index.html">Ana Səhifə</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Otaqlar</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Otaq əlavə et</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="card-head">
                        <header>Otaq əlavə et</header>
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
                        <div class="col-lg-6 p-t-20">
                            <div
                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                <input class="mdl-textfield__input" type="text" id="txtRoomNo">
                                <label class="mdl-textfield__label">Otaq adı</label>
                            </div>
                        </div>
                        <div class="col-lg-6 p-t-20">
                            <div
                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                <input class="mdl-textfield__input" type="text">
                                <label class="mdl-textfield__label">Otaq ünvanı</label>
                            </div>
                        </div>
                        <div class="col-lg-6 p-t-20">
                            <div
                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                            <input class="mdl-textfield__input" type="text">
                            <label class="mdl-textfield__label">Otaq tutumu</label>
                        </div>
                        </div>
                        <div class="col-lg-6 p-t-20">
                            <div
                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                            <input class="mdl-textfield__input" type="text">
                            <label class="mdl-textfield__label">Otaq haqqında</label>
                        </div>
                        </div>
                        <div class="col-lg-12 p-t-20">
                            <label class="control-label col-md-3">Şəkillər əlavə et</label>
                            <form id="id_dropzone" class="dropzone">
                                <div class="dz-message">
                                    <div class="dropIcon">
                                        <i class="material-icons">cloud_upload</i>
                                    </div>
                                    <h3>Şəkil yüklə</h3>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-12 p-t-20 text-center">
                            <button type="button"
                                class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Yadda Saxla</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
