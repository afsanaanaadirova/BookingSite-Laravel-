@extends('master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">All Bookings</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Booking</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">All Bookings</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>All Bookings</header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="row p-b-20">
                            <div class="col-md-6 col-sm-6 col-6">
                                <div class="btn-group">
                                    <a href="{{ route('NewBookingPage')}}" id="addRow" class="btn btn-info">
                                        Add New <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="table-scrollable">
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
@endsection