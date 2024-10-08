@extends('admin.layout')

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
            
            </div>
            <!-- end page title -->
        </div>
    </div>
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
    <div class="col-xxl-7 m-b-30">
        <div class="card card-statistics h-100 mb-0 apexchart-tool-force-top">
            <div class="card-header d-flex justify-content-between">
                <div class="card-heading">
                    <h4 class="card-title">Site activity</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6 col-xs-6 col-lg-3">
                        <div class="row mb-2 pb-3 align-items-end">
                            <div class="col">
                                <p>Users</p>
                                <h3 class="tex-dark mb-0">8.6K</h3>
                            </div>
                            <div class="col ml-auto">
                                <span><i class="fa fa-arrow-down"></i> 2.5%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xs-6 col-lg-3">
                        <div class="row mb-2 pb-3 align-items-end">
                            <div class="col">
                                <p>Revenue</p>
                                <h3 class="tex-dark mb-0">176K</h3>
                            </div>
                            <div class="col ml-auto">
                                <span><i class="fa fa-arrow-up"></i> 15%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xs-6 col-lg-3">
                        <div class="row mb-2 pb-3 align-items-end">
                            <div class="col">
                                <p>Rate</p>
                                <h3 class="tex-dark mb-0">6.2K</h3>
                            </div>
                            <div class="col ml-auto">
                                <span><i class="fa fa-arrow-down"></i> 6.5%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xs-6 col-lg-3">
                        <div class="row mb-2 pb-3 align-items-end">
                            <div class="col">
                                <p>Sessions</p>
                                <h3 class="tex-dark mb-0">44K</h3>
                            </div>
                            <div class="col ml-auto">
                                <span><i class="fa fa-arrow-down"></i> 1.8%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 px-0">
                        <div class="apexchart-wrapper p-inherit">
                            <div id="analytics1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-5 m-b-30">
        <div class="card card-statistics h-100 mb-0">
            <div class="card-header d-flex justify-content-between">
                <div class="card-heading">
                    <h4 class="card-title">Income Analysis</h4>
                </div>
                <div class="dropdown">
                    <a class="p-2" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fe fe-circle"></i>
                    </a>
                    <div class="dropdown-menu custom-dropdown dropdown-menu-right p-4">
                        <h6 class="mb-1">Action</h6>
                        <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-o pr-2"></i>View reports</a>
                        <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-edit pr-2"></i>Edit reports</a>
                        <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-bar-chart-o pr-2"></i>Statistics</a>
                        <h6 class="mb-1 mt-3">Export</h6>
                        <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-pdf-o pr-2"></i>Export to PDF</a>
                        <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-excel-o pr-2"></i>Export to CSV</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xs-6">
                        <h2>3.8k</h2>
                        <span class="d-block mb-2 font-16">AVG sessions</span>
                        <span class="d-block mb-2 mb-sm-5"><b class="text-primary">-65.88%</b> vs last 1 months</span>
                        <p class="mb-3">Sapiente corporis fugiat, doloremque eveniet nostrum id molestiae quaerat!</p>
                        <a class="btn btn-round btn-inverse-primary mb-3 mb-sm-0" href="#"><b>View details </b></a>
                    </div>
                    <div class="col-xs-6">
                        <div class="apexchart-wrapper">
                            <div id="analytics2" class="chart-fit"></div>
                        </div>
                    </div>
                </div>
                <div class="border-top my-4"></div>
                <h4 class="card-title">Income by department</h4>
                <div class="row">
                    <div class="col-12 col-md-3">
                        <span>FCBK: <b>$1,475</b></span>
                        <div class="progress my-3" style="height: 4px;">
                            <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <span>GGL: <b>$23,475</b></span>
                        <div class="progress my-3" style="height: 4px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 66%;" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <span>APL: <b>$1,658</b></span>
                        <div class="progress my-3" style="height: 4px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 78%;" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <span>SMG: <b>$12,489</b></span>
                        <div class="progress my-3" style="height: 4px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection