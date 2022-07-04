@extends('master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Otaqlar</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                        href="{{ route('IndexPage')}}">Ana Səhifə</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Otaqlar</li>
                </ol>
            </div>
        </div>
        <!-- start widget -->
        <div class="state-overview">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-12">
                    <a href="{{ route('aboutRoomPage') }}"> 
                        <div class="info-box bg-blue">
                            <span class="info-box-icon push-bottom"><i class="material-icons">style</i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Otaq 1</span>
                                <span class="info-box-number">10 nəfərlik</span>
                                <div class="progress">
                                    <div class="progress-bar width-100"></div>
                                </div>
                                <span class="progress-description">
                                    STP MMC, 125-ci otaq
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="info-box bg-orange">
                        <span class="info-box-icon push-bottom"><i class="material-icons">style</i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Otaq 2</span>
                            <span class="info-box-number">12 nəfərlik</span>
                            <div class="progress">
                                <div class="progress-bar width-100"></div>
                            </div>
                            <span class="progress-description">
                                STP MMC, 225-ci otaq
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="info-box bg-purple">
                        <span class="info-box-icon push-bottom"><i class="material-icons">style</i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Otaq 3</span>
                            <span class="info-box-number">15 nəfərlik</span>
                            <div class="progress">
                                <div class="progress-bar width-100"></div>
                            </div>
                            <span class="progress-description">
                                STP MMC, 325-ci otaq
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="info-box bg-success">
                        <span class="info-box-icon push-bottom"><i class="material-icons">style</i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Otaq 4</span>
                            <span class="info-box-number">20 nəfərlik</span>
                            <div class="progress">
                                <div class="progress-bar width-100"></div>
                            </div>
                            <span class="progress-description">
                                STP MMC, Giriş 80-ci otaq
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="info-box bg-blue">
                        <span class="info-box-icon push-bottom"><i class="material-icons">style</i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Otaq 1</span>
                            <span class="info-box-number">5 nəfərlik</span>
                            <div class="progress">
                                <div class="progress-bar width-100"></div>
                            </div>
                            <span class="progress-description">
                                STP MMC, 115-ci otaq
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="info-box bg-orange">
                        <span class="info-box-icon push-bottom"><i class="material-icons">style</i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Otaq 2</span>
                            <span class="info-box-number">30 nəfərlik</span>
                            <div class="progress">
                                <div class="progress-bar width-100"></div>
                            </div>
                            <span class="progress-description">
                                STP MMC, 100-cü otaq
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="info-box bg-purple">
                        <span class="info-box-icon push-bottom"><i class="material-icons">style</i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Otaq 3</span>
                            <span class="info-box-number">25 nəfərlik</span>
                            <div class="progress">
                                <div class="progress-bar width-100"></div>
                            </div>
                            <span class="progress-description">
                                STP MMC, 225-ci otaq
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="info-box bg-success">
                        <span class="info-box-icon push-bottom"><i class="material-icons">style</i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Otaq 4</span>
                            <span class="info-box-number">100 nəfərlik</span>
                            <div class="progress">
                                <div class="progress-bar width-100"></div>
                            </div>
                            <span class="progress-description">
                                STP MMC, 125-ci otaq
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
        </div>
        <!-- end widget -->
        <!-- start Payment Details -->
        <div class="booking">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card  card-box">
                        <div class="card-head">
                            <header>Rezerv Cədvəli</header>
                            <div class="tools">
                                <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table class="table display product-overview mb-30" id="support_table5">
                                        <thead>
                                            <tr>
                                                <th>№</th>
                                                <th>İclas üzrə cavabdeh şəxs</th>
                                                <th>İclasın adı</th>
                                                <th>Başlama Tarixi</th>
                                                <th>Bitmə Tarixi</th>
                                                <th>Başlama Saatı</th>
                                                <th>Bitmə Saatı</th>
                                                <th>İştirakçı sayı</th>
                                                <th>Daxili nömrə</th>
                                                <th>Otaq nömrəsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Jens Brincker</td>
                                                <td>İclas</td>
                                                <td>23/05/2016</td>
                                                <td>27/05/2016</td>
                                                <td>10:20</td>
                                                <td>11:20</td>
                                                <td>5</td>
                                                <td>123456789</td>
                                                <td>225</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Mark Hay</td>
                                                <td>İclas</td>
                                                <td>23/05/2016</td>
                                                <td>27/05/2016</td>
                                                <td>10:20</td>
                                                <td>11:20</td>
                                                <td>5</td>
                                                <td>123456789</td>
                                                <td>225</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Anthony Davie</td>
                                                <td>İclas</td>
                                                <td>23/05/2016</td>
                                                <td>27/05/2016</td>
                                                <td>10:20</td>
                                                <td>11:20</td>
                                                <td>5</td>
                                                <td>123456789</td>
                                                <td>225</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>David Perry</td>
                                                <td>İclas</td>
                                                <td>23/05/2016</td>
                                                <td>27/05/2016</td>
                                                <td>10:20</td>
                                                <td>11:20</td>
                                                <td>5</td>
                                                <td>123456789</td>
                                                <td>225</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Anthony Davie</td>
                                                <td>İclas</td>
                                                <td>23/05/2016</td>
                                                <td>27/05/2016</td>
                                                <td>10:20</td>
                                                <td>11:20</td>
                                                <td>5</td>
                                                <td>123456789</td>
                                                <td>225</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Alan Gilchrist</td>
                                                <td>İclas</td>
                                                <td>23/05/2016</td>
                                                <td>27/05/2016</td>
                                                <td>10:20</td>
                                                <td>11:20</td>
                                                <td>5</td>
                                                <td>123456789</td>
                                                <td>225</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Mark Hay</td>
                                                <td>İclas</td>
                                                <td>23/05/2016</td>
                                                <td>27/05/2016</td>
                                                <td>10:20</td>
                                                <td>11:20</td>
                                                <td>5</td>
                                                <td>123456789</td>
                                                <td>225</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Sue Woodger</td>
                                                <td>İclas</td>
                                                <td>23/05/2016</td>
                                                <td>27/05/2016</td>
                                                <td>10:20</td>
                                                <td>11:20</td>
                                                <td>5</td>
                                                <td>123456789</td>
                                                <td>225</td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Payment Details -->
    </div>
</div>
@endsection