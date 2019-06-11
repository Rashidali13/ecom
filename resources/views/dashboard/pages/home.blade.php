@extends('dashboard.app')
@section('content')
<div class="row">
    <div class="col-md-12 m-b-30">
        <!-- begin page title -->
        <div class="d-block d-lg-flex flex-nowrap align-items-center">
            <div class="page-title mr-4 pr-4 border-right">
                <h1>Dashboard</h1>
            </div>
            <div class="breadcrumb-bar align-items-center">
                <nav>
                    <ol class="breadcrumb p-0 m-b-0">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="ti ti-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Dashboard
                        </li>
                        <li class="breadcrumb-item active text-primary" aria-current="page">Default</li>
                    </ol>
                </nav>
            </div>
            <div class="ml-auto d-flex align-items-center secondary-menu text-center">
                <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Todo list">
                    <i class="fe fe-edit btn btn-icon text-primary"></i>
                </a>
                <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Projects">
                    <i class="fa fa-lightbulb-o btn btn-icon text-success"></i>
                </a>
                <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Task">
                    <i class="fa fa-check btn btn-icon text-warning"></i>
                </a>
                <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Calendar">
                    <i class="fa fa-calendar-o btn btn-icon text-cyan"></i>
                </a>
                <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Analytics">
                    <i class="fa fa-bar-chart-o btn btn-icon text-danger"></i>
                </a>
            </div>
        </div>
        <!-- end page title -->
    </div>
</div>
<!-- Notification -->
<div class="row">
    <div class="col-md-12">
        <div class="alert border-0 alert-primary bg-gradient m-b-30 alert-dismissible fade show border-radius-none" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those
            fields below.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="ti ti-close"></i>
            </button>
        </div>
    </div>
</div>
<!-- end row -->
<!-- begin row -->
<div class="row">
    <div class="col-sm-12">
        <div class="card card-statistics">
            <div class="row no-gutters">
                <div class="col-xxl-3 col-lg-6">
                    <div class="p-20 border-lg-right border-bottom border-xxl-bottom-0">
                        <div class="d-flex m-b-10">
                            <p class="mb-0 font-regular text-muted font-weight-bold">Total Visits</p>
                            <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                        </div>
                        <div class="d-block d-sm-flex h-100 align-items-center">
                            <div class="apexchart-wrapper">
                                <div id="analytics7"></div>
                            </div>
                            <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                <h3 class="mb-0"><i class="icon-arrow-up-circle"></i> 15,640</h3>
                                <p>Monthly visitor</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6">
                    <div class="p-20 border-xxl-right border-bottom border-xxl-bottom-0">
                        <div class="d-flex m-b-10">
                            <p class="mb-0 font-regular text-muted font-weight-bold">Total Cost</p>
                            <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                        </div>
                        <div class="d-block d-sm-flex h-100 align-items-center">
                            <div class="apexchart-wrapper">
                                <div id="analytics8"></div>
                            </div>
                            <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                <h3 class="mb-0"><i class="icon-arrow-up-circle"></i> 16,656</h3>
                                <p>This month</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6">
                    <div class="p-20 border-lg-right border-bottom border-lg-bottom-0">
                        <div class="d-flex m-b-10">
                            <p class="mb-0 font-regular text-muted font-weight-bold">Total Sales</p>
                            <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                        </div>
                        <div class="d-block d-sm-flex h-100 align-items-center">
                            <div class="apexchart-wrapper">
                                <div id="analytics9"></div>
                            </div>
                            <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                <h3 class="mb-0"><i class="icon-arrow-up-circle"></i>569</h3>
                                <p>Avg. Sales per day</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6">
                    <div class="p-20">
                        <div class="d-block d-sm-flex h-100 align-items-center">
                            <div class="apexchart-wrapper">
                                <div id="analytics10"></div>
                            </div>
                            <div class="statistics ml-sm-auto mt-4 mt-sm-0 pr-sm-5">
                                <ul class="list-style-none p-0">
                                    <li class="d-flex py-1">
                                        <span><i class="fa fa-circle text-primary pr-2"></i> Redirect Visits</span> <span class="pl-2 font-weight-bold">456</span></li>
                                    <li class="d-flex py-1"><span><i class="fa fa-circle text-warning pr-2"></i> New Visits</span> <span class="pl-2 font-weight-bold">256</span></li>
                                    <li class="d-flex py-1"><span><i class="fa fa-circle text-info pr-2"></i> Direct Visits</span> <span class="pl-2 font-weight-bold">128</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xxl-8">
        <div class="card card-statistics analytics-contant">
            <div class="card-body">
                <div class="row no-gutters">
                    <div class="col-xl-4">
                        <h4 class="card-title mb-3">Site Visitors</h4>
                        <p class="mb-4 ">Architecto expedita sequi nisi a excepturi error provident, repellendus quisquam unde aut.</p>
                        <div class="row">
                            <div class="col-12 mb-3">
                                <span>United states: </span><b class="float-right">80%</b>
                                <div class="progress my-2" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <span>India: </span><b class="float-right">75%</b>
                                <div class="progress my-2" style="height: 5px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <span>Australia: </span><b class="float-right">65%</b>
                                <div class="progress my-2" style="height: 5px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <span>Germany: </span><b class="float-right">55%</b>
                                <div class="progress my-2" style="height: 5px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <span>United kingdom: </span><b class="float-right">80%</b>
                                <div class="progress my-2" style="height: 5px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <a class="btn btn-link pl-0" href="#"><b>View details </b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="vectormap-wrapper">
                            <div id="world" class="vmap"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-4 m-b-30">
        <div class="card card-statistics h-100 mb-0 o-hidden">
            <div class="card-header">
                <h4 class="card-title">Received all time</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6 col-xxs-4 col-md-4 mb-3 mb-sm-0">
                        <h3 class="mb-1 mb-xxs-0">25,456</h3>
                        <span class="d-block"> <i class="fa fa-arrow-up text-success"></i> <b class="text-success">+23%</b> Views  </span>
                    </div>
                    <div class="col-6 col-xxs-4 col-md-4 mb-3 mb-sm-0">
                        <h3 class="mb-1 mb-xxs-0">45,541</h3>
                        <span class="d-block"> <i class="fa fa-arrow-up text-success"></i> <b class="text-success">+15%</b> Likes </span>
                    </div>
                    <div class="col-12 col-xxs-4 col-md-4 mb-3 mb-sm-0">
                        <h3 class="mb-1 mb-xxs-0">78,462</h3>
                        <span class="d-block"> <i class="fa fa-arrow-up text-success"></i> <b class="text-success">+32%</b> Comments </span>
                    </div>
                </div>
                <div class="mt-2 mt-xxs-4">
                    <p>You're scheduled earn <span class="badge  badge-success-inverse">$2,350 today</span></p>
                </div>
            </div>
            <div class="mt-3">
                <div class="tab nav-border-bottom">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link py-2 active show" id="home-02-tab" data-toggle="tab" href="#home-02" role="tab" aria-controls="home-02" aria-selected="true">Views</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-2" id="profile-02-tab" data-toggle="tab" href="#profile-02" role="tab" aria-controls="profile-02" aria-selected="false">Likes </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-2" id="portfolio-02-tab" data-toggle="tab" href="#portfolio-02" role="tab" aria-controls="portfolio-02" aria-selected="false">Comments </a>
                        </li>
                    </ul>
                    <div class="tab-content mt-5">
                        <div class="tab-pane fade active show" id="home-02" role="tabpanel" aria-labelledby="home-02-tab">
                            <div class="apexchart-wrapper">
                                <div id="analytics4" class="chart-fit mb-minus"></div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile-02" role="tabpanel" aria-labelledby="profile-02-tab">
                            <div class="apexchart-wrapper">
                                <div id="analytics5" class="chart-fit mb-minus"></div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="portfolio-02" role="tabpanel" aria-labelledby="portfolio-02-tab">
                            <div class="apexchart-wrapper">
                                <div id="analytics6" class="chart-fit mb-minus"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end row -->
<!-- event Modal -->
<div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="verticalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="verticalCenterTitle">Add New Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="modelemail">Event Name</label>
                        <input type="email" class="form-control" id="modelemail">
                    </div>
                    <div class="form-group">
                        <label>Choose Event Color</label>
                        <select class="form-control">
                            <option>Primary</option>
                            <option>Warning</option>
                            <option>Success</option>
                            <option>Danger</option>
                        </select>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Save changes</button>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
