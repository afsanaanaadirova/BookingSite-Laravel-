@extends('master')
@section('content')
@section('css')
<style>
</style>
@endsection
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Calendar</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Apps</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Calendar</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <div class="card-box">
                    <div class="card-head">
                        <header>Calendar</header>
                    </div>
                    <div class="card-body ">
                        <div class="panel-body">
                            <div id="calendar" class="has-toolbar"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card-box">
                    <div class="card-head">
                        <header>Draggable Events</header>
                    </div>
                    <div class="card-body ">
                        <div id="external-events">
                            <form class="inline-form">
                                <input type="text" value="" class="form-control"
                                    placeholder="Event Title..." id="event_title" />
                                <br />
                                <a href="javascript:;" id="event_add" class="btn deepPink-bgcolor"> Add
                                    Event </a>
                            </form>
                            <hr />
                            <div id="event_box" class="mg-bottom-10"></div>
                            <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline" for="drop-remove">
                                remove after drop
                                <input type="checkbox" class="group-checkable" id="drop-remove" />
                                <span></span>
                            </label>
                            <hr class="visible-xs" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>

</script>
@endsection