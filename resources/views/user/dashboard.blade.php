
@extends('layouts.user.app')

@section('title', 'Screener')

@section('header', 'Screener')

@section('content')
    <div class="page-content">
        <!-- <div class="container-xxl"> -->
            <div class="row justify-content-center mb-2">
                <div class="col-md-6 col-lg-4"> 
                    <div class="card  mb-3 mb-lg-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <i class="iconoir-dollar-circle fs-24 align-self-center text-primary me-2"></i>
                                <div class="flex-grow-1 text-truncate"> 
                                    <p class="text-dark mb-0 fw-semibold fs-13">Top Gainer</p>    
                                    <h3 class="mt-1 mb-0 fs-18 fw-bold">$23.45M<span class="fs-11 text-muted fw-normal mx-1">Bitcoin (BTCUSD)</span> </h3>                                                                                                                                   
                                </div><!--end media body-->
                            </div>
                        </div><!--end card-body-->
                    </div> <!--end card-body-->                     
                </div>
                <div class="col-md-6 col-lg-4"> 
                    <div class="card mb-3 mb-lg-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <i class="iconoir-dollar-circle fs-24 align-self-center text-warning me-2"></i>
                                <div class="flex-grow-1 text-truncate"> 
                                    <p class="text-dark mb-0 fw-semibold fs-13">Top Performer</p>    
                                    <h3 class="mt-1 mb-0 fs-18 fw-bold">$27,215k <span class="fs-11 text-muted fw-normal">Solana (SOLUSD)</span> </h3>                                                                                                                                   
                                </div><!--end media body-->
                            </div>
                        </div><!--end card-body-->
                    </div> <!--end card-body-->                     
                </div>
                <div class="col-md-6 col-lg-4"> 
                    <div class="card mb-3 mb-lg-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <i class="iconoir-dollar-circle fs-24 align-self-center text-danger me-2"></i>
                                <div class="flex-grow-1 text-truncate"> 
                                    <p class="text-dark mb-0 fw-semibold fs-13">Trades Processed</p>    
                                    <h3 class="mt-1 mb-0 fs-18 fw-bold">$27,215k <span class="fs-11 text-muted fw-normal">New 365 Days</span> </h3>                                                                                                                                   
                                </div><!--end media body-->
                            </div>
                        </div><!--end card-body-->
                    </div> <!--end card-body-->                     
                </div>
            </div>
            <!--end row-->
            {{-- <div class="row justify-content-center">
                <div class="col-md-6 col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Audience Overview</h4>
                                </div>
                                <!--end col-->
                                <div class="col-auto">
                                    <div class="dropdown">
                                        <a href="#" class="btn bt btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icofont-calendar fs-5 me-1"></i>
                                            This Year<i class="las la-angle-down ms-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Last Week</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">This Year</a>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-header-->
                        <div class="card-body pt-0">
                            <div id="audience_overview" class="apex-charts"></div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <p class="text-dark mb-0 fw-semibold fs-14">New Visitors</p>
                                    <h2 class="mt-0 mb-0 fw-bold">1,282</h2>
                                </div>
                                <!--end col-->
                                <div class="col-auto align-self-center">
                                    <div class="img-group d-flex">
                                        <a class="user-avatar position-relative d-inline-block" href="#">
                                            <img src="assets/images/users/avatar-1.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="assets/images/users/avatar-2.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="assets/images/users/avatar-4.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="assets/images/users/avatar-3.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                        </a>
                                        <a href class="user-avatar position-relative d-inline-block ms-1">
                                            <span class="thumb-md shadow-sm justify-content-center d-flex align-items-center bg-info-subtle rounded-circle fw-semibold fs-6">+6</span>
                                        </a>
                                    </div>
                                    <small class="text-muted">Logined
                                        Visitors</small>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                            <div id="visitors_report" class="apex-charts mb-2"></div>
                            <button type="button" class="btn btn-primary w-100 btn-lg fs-14">More
                                Detail <i class="fa-solid fa-arrow-right-long"></i>
                            </button>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
            </div> --}}
            <!--end row-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-h-100">
                        
                        <!--end card-header-->
                        <div class="card-body pt-2">
                            <div class="table-responsive browser_users">
                                <table class="table mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="border-top-0">Symbol</th>
                                            <th class="border-top-0">Price</th>
                                            <th class="border-top-0">changes</th>
                                            <th class="border-top-0">changes (%)</th>
                                            <th class="border-top-0">MarketCap (USD)</th>
                                            <th class="border-top-0">Price Average (50)</th>
                                            <th class="border-top-0">Price Average (200)</th>
                                            <th class="border-top-0">volume (USD)</th>
                                            <th class="border-top-0"></th>
                                        </tr>
                                        <!--end tr-->
                                    </thead> 
                                    <tbody>
                                        @foreach($crypto as $data)
                                        <tr>
                                            <td class="fw-bold">
                                                <a href="{{ route('user.show', ['id' => $data->id, 'symbol' => $data->symbol]) }}" class="">
                                                    <img src="{{ $data->img }}" alt height="24" class="me-2">{{ $data->symbol }}
                                                </a>
                                            </td>
                                            <td class="fw-bold">{{ number_format($data->price, 2) }}</td>
                                            <td class="fw-bold {{ $data->change > 0 ? 'text-primary' : ($data->change < 0 ? 'text-danger' : 'text-dark') }}">{{ number_format($data->change, 2) }}</td>
                                            <td class="fw-bold">
                                                <span class="{{ $data->changes_percentage > 0 ? 'text-primary' : ($data->changes_percentage < 0 ? 'text-danger' : '') }}">
                                                    {{ number_format($data->changes_percentage, 2) }}%
                                                </span>
                                                <i class="fas fa-caret-{{ $data->changes_percentage > 0 ? 'up' : ($data->changes_percentage < 0 ? 'down' : '') }} {{ $data->changes_percentage > 0 ? 'text-success' : ($data->changes_percentage < 0 ? 'text-danger' : '') }} font-16"></i>
                                            </td>

                                            <td class="fw-bold">{{ number_format($data->market_cap, 2) }}</td>
                                            <td class="fw-bold">{{ $data->price_avg_50 }}</td>
                                            <td class="fw-bold">{{ $data->price_avg_50 }}</td>
                                            <td class="fw-bold">{{ number_format($data->volume, 2) }}</td>
                                            <td class="fw-bold"><i class="iconoir-star menu-icon"></i> </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @if($crypto->count() < 1)
                                    <p class="text-dark text-center fs-16 fw-bold py-4 my-4">No available data!</p>
                                @endif
                                <!--end table-->
                            </div>
                            <!--end /div-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col--> {{-- 
                <div class="col-lg-6">
                    <div class="card card-h-100">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Total Visits</h4>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-header-->
                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="border-top-0">Channel</th>
                                            <th class="border-top-0">Sessions</th>
                                            <th class="border-top-0">Prev.Period</th>
                                            <th class="border-top-0">% Change</th>
                                        </tr>
                                        <!--end tr-->
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href class="text-primary">Organic search</a></td>
                                            <td>10853<small class="text-muted">(52%)</small></td>
                                            <td>566<small class="text-muted">(92%)</small></td>
                                            <td> 52.80% <i class="fas fa-caret-up text-success font-16"></i></td>
                                        </tr>
                                        <!--end tr-->
                                        <tr>
                                            <td><a href class="text-primary">Direct</a></td>
                                            <td>2545<small class="text-muted">(47%)</small></td>
                                            <td>498<small class="text-muted">(81%)</small></td>
                                            <td> -17.20% <i class="fas fa-caret-down text-danger font-16"></i></td>
                                        </tr>
                                        <!--end tr-->
                                        <tr>
                                            <td><a href class="text-primary">Referal</a></td>
                                            <td>1836<small class="text-muted">(38%)</small></td>
                                            <td>455<small class="text-muted">(74%)</small></td>
                                            <td> 41.12% <i class="fas fa-caret-up text-success font-16"></i></td>

                                        </tr>
                                        <!--end tr-->
                                        <tr>
                                            <td><a href class="text-primary">Email</a></td>
                                            <td>1958<small class="text-muted">(31%)</small></td>
                                            <td>361<small class="text-muted">(61%)</small></td>
                                            <td> -8.24% <i class="fas fa-caret-down text-danger font-16"></i></td>
                                        </tr>
                                        <!--end tr-->
                                        <tr>
                                            <td><a href class="text-primary">Social</a></td>
                                            <td>1566<small class="text-muted">(26%)</small></td>
                                            <td>299<small class="text-muted">(49%)</small></td>
                                            <td> 29.33% <i class="fas fa-caret-up text-success"></i></td>
                                        </tr>
                                        <!--end tr-->
                                    </tbody>
                                </table>
                                <!--end table-->
                            </div>
                            <!--end /div-->
                            <p class="m-0 fs-12 fst-italic ps-2 text-muted">Last data updated - 13min ago <a href="#!" class="link-danger ms-1 "><i class="align-middle iconoir-refresh"></i></a></p>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div> --}}
                <!--end col-->
            </div>
            <!--end row--> {{--
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Traffic Sources</h4>
                                </div>
                                <!--end col-->
                                <div class="col-auto">
                                    <div class="dropdown">
                                        <a href="#" class="btn bt btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icofont-search-user fs-5 me-1"></i>
                                            Direct<i class="las la-angle-down ms-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Email</a>
                                            <a class="dropdown-item" href="#">Referral</a>
                                            <a class="dropdown-item" href="#">Direct</a>
                                            <a class="dropdown-item" href="#">Organic</a>
                                            <a class="dropdown-item" href="#">Campaign</a>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-header-->
                        <div class="card-body pt-0">
                            <div class>
                                <div id="traffic_sources" class="apex-charts d-block w-90 mx-auto"></div>
                                <hr class="hr-dashed border-secondary w-25 mt-0 mx-auto">
                            </div>
                            <div class="text-center">
                                <h4>Direct Visitors</h4>
                                <p class="text-muted mt-2">This is a
                                    simple hero unit, a simple
                                    jumbotron-style component</p>
                                <button type="button" class="btn btn-outline-primary px-3 mt-2">More
                                    details</button>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col-md-6 col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Organic
                                        Traffic In World</h4>
                                </div>
                                <!--end col-->
                                <div class="col-auto">
                                    <div class="dropdown">
                                        <a href="#" class="btn bt btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icofont-calendar fs-5 me-1"></i>
                                            Today<i class="las la-angle-down ms-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Last Week</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">This Year</a>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-header-->
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div id="map_2" class style="height:320px"></div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-4 align-self-center">
                                    <div class="d-flex align-items-center my-3">
                                        <img src="assets/images/flags/us_flag.jpg" class="thumb-sm align-self-center rounded-circle" alt="...">
                                        <div class="flex-grow-1 ms-2">
                                            <h5 class="mb-1">35,365</h5>
                                            <p class="text-muted mb-0">USA
                                                . Last Month
                                                <span class="text-success">2.5%
                                                    <i class="mdi mdi-arrow-up"></i></span>
                                            </p>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                    <!--end media-->
                                    <div class="d-flex align-items-center my-3">
                                        <img src="assets/images/flags/germany_flag.jpg" class="thumb-sm align-self-center rounded-circle" alt="...">
                                        <div class="flex-grow-1 ms-2">
                                            <h5 class="mb-1">24,865</h5>
                                            <p class="text-muted mb-0">Germany
                                                . Last Month
                                                <span class="text-success">1.2%
                                                    <i class="mdi mdi-arrow-up"></i></span>
                                            </p>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                    <!--end media-->
                                    <div class="d-flex align-items-center my-3">
                                        <img src="assets/images/flags/spain_flag.jpg" class="thumb-sm align-self-center rounded-circle" alt="...">
                                        <div class="flex-grow-1 ms-2">
                                            <h5 class="mb-1">18,369</h5>
                                            <p class="text-muted mb-0">Spain
                                                . Last Month
                                                <span class="text-success">0.8%
                                                    <i class="mdi mdi-arrow-up"></i></span>
                                            </p>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                    <!--end media-->
                                    <div class="d-flex align-items-center my-3">
                                        <img src="assets/images/flags/baha_flag.jpg" class="thumb-sm align-self-center rounded-circle" alt="...">
                                        <div class="flex-grow-1 ms-2">
                                            <h5 class="mb-1">11,325</h5>
                                            <p class="text-muted mb-0">Bahamas
                                                . Last Month
                                                <span class="text-success">2.5%
                                                    <i class="mdi mdi-arrow-up"></i></span>
                                            </p>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                    <!--end media-->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->

                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
            </div>  --}}
            <!--end row-->
        <!-- </div> -->
        
        <!--Start Footer-->
            @include('components.user.footer')
        <!--end footer-->
    </div>
@endsection


        