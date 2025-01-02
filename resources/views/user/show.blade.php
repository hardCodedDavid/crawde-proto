
@extends('layouts.user.app')

@section('header', $crypto->name . ' (' . $crypto->symbol . ')')

@section('title_full', $crypto->symbol . ' - $' . number_format($crypto->price, 2))

@php
    function formatMarketCap($value) {
        if ($value >= 1000000000000) {
            return number_format($value / 1000000000000, 2) . 'T'; // Billions
        }
        elseif ($value >= 1000000000) {
            return number_format($value / 1000000000, 2) . 'B'; // Billions
        } elseif ($value >= 1000000) {
            return number_format($value / 1000000, 2) . 'M'; // Millions
        } elseif ($value >= 1000) {
            return number_format($value / 1000, 2) . 'K'; // Thousands
        } else {
            return number_format($value, 2); // Default (no suffix)
        }
    }
@endphp

@section('content')
    <div class="page-content">
        <div class="container-xxl">
            <!-- ::::: SECTION 1  ::::: -->
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="row align-items-center">                                        
                                    <div class="col-12 mb-1">
                                        <div class="d-flex align-items-center">
                                            <div class="position-relative">
                                                <img src="{{ $crypto->img }}" alt="" class="rounded-circle thumb-lg border border-1 border-white">
                                                <div class="position-absolute top-50 start-100 translate-middle">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/Flag_of_the_United_States.png/1200px-Flag_of_the_United_States.png" alt="" class="rounded-circle thumb-sm border border-2 border-white">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-3"> 
                                                <h5 class="m-0 fs-18 fw-bold">{{ $crypto->name }}</h5>
                                                <p class="text-muted mb-0 fs-10">{{ $crypto->symbol }}</p>                                                                                                                                 
                                            </div><!--end media body-->
                                        </div><!--end media-->
                                    </div>
                                    <div class="col-12 my-2">
                                        <div class="d-flex">
                                            <h2 class="fw-bold fs-24">
                                                ${{ number_format(floor($crypto->price), 0) }}.<span class="fs-15 text-muted fw-normal">
                                                {{ substr(number_format($crypto->price, 2), -2) }}
                                                </span>
                                            </h2>
                                            <span class="fs-11 {{ $crypto->changes_percentage > 0 ? 'text-primary' : ($crypto->changes_percentage < 0 ? 'text-danger' : 'text-dark') }} fw-normal mx-1">{{number_format($crypto->changes_percentage, 2)}}%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between fw-semibold align-items-center">
                                <p class="mb-1 d-inline-flex align-items-center"><i class="iconoir-task-list fs-18 text-muted me-1"></i>Average</p>
                                <small class="text-end text-body-emphasis d-block ms-auto">90%</small>
                            </div>
                            <div class="progress bg-primary-subtle" style="height:5px;">
                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="margin-right:2px; width: 20%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="margin-right:2px; width: 20%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="margin-right:2px; width: 1%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="row my-3 align-items-center">
                                <div class="col-6">
                                    <div class="text-start my-1">
                                        <p class="mb-0 fs-10 text-muted">Market Cap</p>  
                                        <h5 class="fs-16 fw-bold mb-0 p-0">${{ formatMarketCap($crypto->market_cap, 2) }}</h5>                                      
                                    </div>
                                    <div class="img-group d-flex my-3">
                                        <a class="user-avatar position-relative d-inline-block" href="#">
                                            <img src="https://seeklogo.com/images/B/binance-coin-bnb-logo-CD94CC6D31-seeklogo.com.png" alt="avatar" class="thumb-sm shadow-sm rounded-circle border border-1 border-white">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="https://elitecurrensea.com/wp-content/uploads/2019/11/512x512_9ZCCQMS.png" alt="avatar" class="thumb-sm shadow-sm rounded-circle border border-1 border-white">
                                        </a>               
                                    </div>
                                </div>
                                <div class="col-6 text-end align-self-center">
                                    <div class="my-1">
                                        <h6 class="fw-normal text-muted fs-10 m-0">Average:</h6> <span class="text-dark fw-semibold fs-16 my-2">${{ number_format($crypto->price_avg_50, 2) }}</span> 
                                    </div>
                                    <div class="my-3">
                                        <h6 class="fw-normal text-muted fs-10 m-0">Volume(24h):</h6> <span class="text-dark fw-semibold fs-16">${{ formatMarketCap($crypto->volume, 2) }}</span>
                                    </div>
                                </div><!--end col-->
                            </div>
                            <!--end row-->
                            <span class="badge rounded text-primary bg-primary-subtle w-100 btn-lg fs-14 fw-bold mt-0 py-2">
                                Strong Buy 
                            </span>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <div class="col-md-6 col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Market Overview</h4>
                                </div>
                                <div class="col-auto">
                                    <div class="dropdown">
                                        <a href="#" class="btn bt btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icofont-calendar fs-5 me-1"></i>
                                            Timeframe<i class="las la-angle-down ms-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Last Week</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">This Year</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-header-->
                        <div class="card-body pt-0">
                            <div id="audience" class="apex-charts"></div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
            </div>
            <!-- ::::: SECTION 2 ::::: -->
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col"> 
                            <div class="card  mb-3 mb-lg-0">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <i class="iconoir-dollar-circle fs-24 align-self-center text-primary me-2"></i>
                                        <div class="flex-grow-1 text-truncate"> 
                                            <p class="text-dark mb-0 fw-semibold fs-12">Technical Report</p>    
                                            <!-- <h3 class="mt-1 mb-0 fs-18 fw-bold">$23.45M<span class="fs-11 text-muted fw-normal mx-1">Bitcoin (BTCUSD)</span> </h3>                                                                                                                                    -->
                                            <span class="badge rounded text-primary fs-18 fw-bold m-0 mt-1 p-0">
                                                Strong Buy <span class="fs-11 text-muted fw-normal mx-1">Market overtaken</span>
                                            </span>
                                        </div><!--end media body-->
                                    </div>
                                    <div class="row mt-2 align-items-center">
                                        <div class="col-4 text-end align-self-center">
                                            <div class="text-start ">
                                                <p class="mb-0 fs-10 text-muted mb-1">Buys</p>  
                                                <span class="badge rounded text-primary bg-primary-subtle w-100 btn-lg fs-14 fw-bold mt-0 py-1">
                                                    10%
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-4 text-center align-self-center">
                                            <div class="">
                                                <h6 class="fw-normal text-muted fs-10 mb-1">Neutral:</h6> 
                                                <span class="badge rounded text-secondary bg-secondary-subtle w-100 btn-lg fs-14 fw-bold mt-0 py-1">
                                                    20%
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-4 text-end align-self-center">
                                            <div class="">
                                                <h6 class="fw-normal text-muted fs-10 mb-1">Sells:</h6>
                                                <span class="badge rounded text-danger bg-danger-subtle w-100 btn-lg fs-14 fw-bold mt-0 py-1">
                                                    40%
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                            </div> <!--end card-body-->                     
                        </div>
                        <div class="col"> 
                            <div class="card mb-3 mb-lg-0">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <i class="iconoir-dollar-circle fs-24 align-self-center text-danger me-2"></i>
                                        <div class="flex-grow-1 text-truncate"> 
                                            <p class="text-dark mb-0 fw-semibold fs-12">Public News</p>    
                                            <span class="badge rounded text-danger fs-18 fw-bold m-0 mt-1 p-0">
                                                Negative <span class="fs-11 text-muted fw-normal mx-1">Weak Reports</span>
                                            </span>                                                                                                                                 
                                        </div><!--end media body-->
                                    </div>
                                    <div class="mt-3">
                                        <div class="d-flex justify-content-between fw-semibold align-items-center">
                                            <p class="mb-1 d-inline-flex align-items-center"><i class="iconoir-rss-feed-tag fs-18 text-muted me-1"></i>32 Tasks</p>
                                            <small class="text-end text-body-emphasis d-block ms-auto">90%</small>
                                        </div>
                                        <div class="progress bg-primary-subtle" style="height:5px;">
                                            <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="margin-right:2px; width: 20%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="margin-right:2px; width: 20%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="margin-right:2px; width: 1%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                            </div> <!--end card-body-->                     
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">News Metrics</h4>                      
                                        </div>
                                    </div>                            
                                </div>
                                <div class="card-body pt-0">
                                    <div id="reports-bar" class="apex-charts pill-bar"></div>             
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-3  border-primary border-dashed bg-primary-subtle  mt-1 rounded">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <div class=" ">
                                    <a href="#" class="fw-bold me-1 text-primary">You've almost reached your goal</a> 75% of your goals are completed just complate 25% of remaining goals to achieve your target.
                                </div>  
                                <div class="row mt-3">
                                    <div class="col col-md-12 col-lg-6">
                                        <div class="">
                                            <p class="text-dark mb-2 fw-semibold fs-13">News Source</p>
                                            <div class="img-group d-flex">
                                                <a class="user-avatar position-relative d-inline-block" href="#">
                                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSobT6Nq7W-FJnK5lLapZlwySLwB0W4sKCYDg&s" alt="BBC" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                                <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                                    <img src="https://cdn.openbankingexpo.com/wp-content/uploads/2022/07/Coinpedia-Logo_600.png" alt="CNN" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                                <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                                    <img src="https://media.licdn.com/dms/image/v2/C560BAQHNGmbujelSMA/company-logo_200_200/company-logo_200_200/0/1630643047632/altcoinbuzz_logo?e=2147483647&v=beta&t=qN5wBtQUl6kuGrgaQZtOhVLeKDvAoFNQLCsUphX1O1g" alt="The New York Times" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                                <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                                    <img src="https://finbold.com/dist/images/app_icons/favicon.61758a.svg" alt="Al Jazeera" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                                <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                                    <img src="https://s3-us-west-2.amazonaws.com/cbi-image-service-prd/modified/826c68f7-c764-4ec2-b9e8-597726bfd3e6.png" alt="Reuters" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                                <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                                    <img src="https://www.cryptopolitan.com/wp-content/uploads/2022/05/CP-logo.png" alt="The Guardian" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                                <a href="#" class="user-avatar position-relative d-inline-block ms-1">
                                                    <span class="thumb-md shadow-sm justify-content-center d-flex align-items-center bg-info-subtle rounded-circle fw-semibold fs-6">+20</span>
                                                </a>                    
                                            </div>

                                        </div>                                         
                                    </div><!--end col-->
                                    <div class="col col-md-12 col-lg-6 align-self-center">
                                        <span class="badge rounded text-primary bg-transparent border border-primary mb-2 p-1">Senior team leader interview</span>
                                        <p class="text-dark  fw-semibold fs-13">15 Aug 2024, AM-10:15</p>
                                    </div><!--end col-->
                                </div><!--end row-->
                                                                        
                            </div><!--end col-->
                            <div class="col-auto align-self-center">
                                <button type="button" class="btn btn-primary px-3 btn-sm mt-2">View All</button> 
                            </div><!--end col-->
                        </div><!--end row-->                                
                    </div> 
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">                      
                                        <h4 class="card-title">Technical Summary</h4>                      
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <div class="input-group">
                                            <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                              <option value="1">One</option>
                                              <option value="4hr" selected>4 hours</option>
                                              <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div><!--end col-->
                                </div>  <!--end row-->                                  
                            </div><!--end card-header-->
                            <div class="card-body pt-0">
                                <div class="my-2">
                                    <div class="d-flex justify-content-between">
                                        <p class="text-muted fw-semibold">Items subtotal :</p>
                                        <p class="text-body-emphasis fw-semibold">$1060 <span class="badge rounded text-success bg-success-subtle fs-12 mx-2">Buy</span></p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-muted fw-semibold">Discount :</p>
                                        <p class="text-muted fw-semibold">$80 <span class="badge rounded text-danger bg-danger-subtle fs-12 mx-2">Sell</span></p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-muted fw-semibold">Tax :</p>
                                        <p class="text-body-emphasis fw-semibold">$180.70 <span class="badge rounded text-secondary bg-secondary-subtle fs-12 mx-2">Neutral</span></p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-muted fw-semibold">Items subtotal :</p>
                                        <p class="text-body-emphasis fw-semibold">$1060 <span class="badge rounded text-success bg-success-subtle fs-12 mx-2">Buy</span></p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-muted fw-semibold">Discount :</p>
                                        <p class="text-muted fw-semibold">$80 <span class="badge rounded text-danger bg-danger-subtle fs-12 mx-2">Sell</span></p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-muted fw-semibold">Tax :</p>
                                        <p class="text-body-emphasis fw-semibold">$180.70 <span class="badge rounded text-secondary bg-secondary-subtle fs-12 mx-2">Neutral</span></p>
                                    </div>
                                </div>
                                <span class="badge rounded text-primary bg-primary-subtle w-100 btn-lg fs-14 fw-bold mt-2 py-2">
                                    Strong Buy 
                                </span>
                            </div><!--card-body-->
                        </div><!--end card-->
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">                      
                                        <h4 class="card-title">Indicator Summary</h4>                      
                                    </div><!--end col-->
                                    <div class="col-auto">                      
                                        <!-- <span class="badge rounded text-warning bg-warning-subtle fs-12 p-1">Payment pending</span>                   -->
                                    </div><!--end col-->
                                </div>  <!--end row-->                                  
                            </div><!--end card-header-->
                            <div class="card-body pt-0">
                                <div class="my-2">
                                    <div class="d-flex justify-content-between">
                                        <p class="text-muted fw-semibold">Items subtotal :</p>
                                        <p class="text-body-emphasis fw-semibold">$1060 <span class="badge rounded text-success bg-success-subtle fs-12 mx-2">Buy</span></p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-muted fw-semibold">Discount :</p>
                                        <p class="text-muted fw-semibold">$80 <span class="badge rounded text-danger bg-danger-subtle fs-12 mx-2">Sell</span></p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-muted fw-semibold">Tax :</p>
                                        <p class="text-body-emphasis fw-semibold">$180.70 <span class="badge rounded text-secondary bg-secondary-subtle fs-12 mx-2">Neutral</span></p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-muted fw-semibold">Items subtotal :</p>
                                        <p class="text-body-emphasis fw-semibold">$1060 <span class="badge rounded text-success bg-success-subtle fs-12 mx-2">Buy</span></p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-muted fw-semibold">Discount :</p>
                                        <p class="text-muted fw-semibold">$80 <span class="badge rounded text-danger bg-danger-subtle fs-12 mx-2">Sell</span></p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-muted fw-semibold">Tax :</p>
                                        <p class="text-body-emphasis fw-semibold">$180.70 <span class="badge rounded text-secondary bg-secondary-subtle fs-12 mx-2">Neutral</span></p>
                                    </div>
                                </div>
                                <span class="badge rounded text-danger bg-danger-subtle w-100 btn-lg fs-14 fw-bold mt-2 py-2">
                                    Strong Sell 
                                </span>
                            </div><!--card-body-->
                        </div><!--end card-->
                    </div>
                </div>
            </div>
            <!-- ::::: SECTION 3 ::::: -->
            <div class="row">
                @foreach($news as $data)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-2">
                    <div class="card mb-3 h-100">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between">
                                <span class="badge rounded text-primary bg-primary-subtle fw-normal px-2 mb-1">{{ $data->source }}</span>
                                <span class="badge rounded text-muted fw-semibold px-2 mb-1">{{ \Carbon\Carbon::parse($data->published_at)->diffForHumans() }}</span>
                            </div>
                            <h5 class="my-2 font-14">
                                <a href="{{ $data->source_url }}" rel="noopener" target="_blank">{{ $data->title }}</a>
                            </h5>
                            <p class="text-muted mb-0 flex-grow-1">{{ $data->description }}</p>
                            <hr class="hr-dashed">
                            <div class="d-flex justify-content-between fw-semibold align-items-center">
                                <p class="mb-1 d-inline-flex align-items-center"><i class="iconoir-task-list fs-18 text-muted me-1"></i>Sentiment Score</p>
                                <small class="text-end text-body-emphasis d-block ms-auto">-20%</small>
                            </div>
                            <div class="progress bg-danger-subtle" style="height:5px;">
                                <div class="progress-bar bg-danger rounded-pill" role="progressbar" style="margin-right:2px; width: 10%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-danger rounded-pill" role="progressbar" style="margin-right:2px; width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-danger rounded-pill" role="progressbar" style="margin-right:2px; width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div><!--end card-body-->
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
        @include('components.user.footer')
    </div>
@endsection

@section('script')

<!-- <script>
var options = {
    series: (series.monthDataSeries1.prices, [{
       name: "Expenses",
       data: [0, 30, 10, 40, 30, 60, 50, 80, 70, 100, 90, 130]
    }]),
    chart: {
       height: 280,
       type: "area",
       toolbar: {
          show: !1
       },
       dropShadow: {
          enabled: !0,
          top: 10,
          left: 0,
          bottom: 0,
          right: 0,
          blur: 2,
          color: "rgba(132, 145, 183, 0.3)",
          opacity: .35
       }
    },
    colors: ["#63c522"],
    dataLabels: {
       enabled: !1
    },
    stroke: {
       show: !0,
       curve: "smooth",
       width: [3, 3],
       dashArray: [0, 0],
       lineCap: "round"
    },
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    yaxis: {
       labels: {
          offsetX: -12,
          offsetY: 0,
          formatter: function (e) {
             return "$" + e
          }
       }
    },
    grid: {
       strokeDashArray: 3,
       xaxis: {
          lines: {
             show: !0
          }
       },
       yaxis: {
          lines: {
             show: !1
          }
       }
    },
    legend: {
       show: !1
    },
    fill: {
       type: "gradient",
       gradient: {
          type: "vertical",
          shadeIntensity: 1,
          inverseColors: !1,
          opacityFrom: .05,
          opacityTo: .05,
          stops: [45, 100]
       }
    }
 },
 chart = new ApexCharts(document.querySelector("#audience"), options),
 options = (chart.render());
</script> -->

<script>
var chart = {
   series: [{
      name: "2024",
      data: [2.7, 2.2, -1.3, 2.5, 1, -2.5, 1.2, 1.2, 2.7, -1, 3.6, 2.1]
   }],
   chart: {
      toolbar: {
         show: !1
      },
      type: "bar",
      fontFamily: "inherit",
      foreColor: "#adb0bb",
      height: 292,
      stacked: !0,
      offsetX: -15
   },
   colors: ["var(--bs-primary)"],
   plotOptions: {
      bar: {
         horizontal: !1,
         barHeight: "80%",
         columnWidth: "12%",
         borderRadius: [3],
         borderRadiusApplication: "end",
         borderRadiusWhenStacked: "all"
      }
   },
   dataLabels: {
      enabled: !1
   },
   legend: {
      show: !1
   },
   grid: {
      show: !0,
      strokeDashArray: 3,
      padding: {
         top: 0,
         bottom: 0,
         right: 0
      },
      borderColor: "rgba(0,0,0,0.05)",
      xaxis: {
         lines: {
            show: !0
         }
      },
      yaxis: {
         lines: {
            show: !1
         }
      }
   },
   yaxis: {
      tickAmount: 4
   },
   xaxis: {
      axisBorder: {
         show: !1
      },
      axisTicks: {
         show: !1
      },
      categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "July", "Aug", "Sep", "Oct", "Nov", "Dec"]
   }
};
(chart = new ApexCharts(document.querySelector("#reports-bar"), chart)).render();
</script>


<script>
document.addEventListener("DOMContentLoaded", function (e) {
    var t, n = {
       min: 0,
       max: 200,
       donut: !0,
       gaugeWidthScale: .6,
       counter: !0,
       hideInnerShadow: !0,
       gaugeColor: ["rgba(42, 118, 244, .1)"],
       levelColors: ["#22c55e"]
    };
    new JustGage({
       id: "gg1",
       value: 125,
       title: "javascript call",
       defaults: n
    }), new JustGage({
       id: "gg2",
       title: "data-attributes",
       defaults: n
    });
 
    function o(e, t) {
       return Math.floor(Math.random() * (t - e + 1)) + e
    }
    t = new JustGage({
       id: "Counter_2",
       value: 72,
       min: 0,
       max: 100,
       donut: !0,
       gaugeWidthScale: .6,
       counter: !0,
       hideInnerShadow: !0,
       gaugeColor: ["rgba(42, 118, 244, .1)"],
       levelColors: ["#22c55e"]
    }), document.getElementById("Counter_2_refresh").addEventListener("click", function () {
       t.refresh(o(0, 100))
    });
    var a = new JustGage({
          id: "Counter",
          value: 40960,
          min: 1024,
          max: 1e6,
          gaugeWidthScale: .6,
          counter: !0,
          formatNumber: !0,
          gaugeColor: ["rgba(42, 118, 244, .1)"],
          levelColors: ["#22c55e"]
       }),
       l = (document.getElementById("Counter_refresh").addEventListener("click", function () {
          a.refresh(o(1024, 1e6))
       }), new JustGage({
          id: "Animation_Events",
          value: 45,
          min: 0,
          max: 100,
          symbol: "%",
          pointer: !0,
          gaugeColor: ["rgba(42, 118, 244, .1)"],
          levelColors: ["#22c55e"],
          pointerOptions: {
             toplength: -15,
             bottomlength: 10,
             bottomwidth: 12,
             color: "#ff5da0",
             stroke: "#ffffff",
             stroke_width: 3,
             stroke_linecap: "round"
          },
          gaugeWidthScale: .6,
          counter: !0,
          onAnimationEnd: function () {
             console.log("animation ended");
             var e = document.getElementById("log");
             e.innerHTML = e.innerHTML + "Animation just ended.<br/>"
          }
       })),
       i = (document.getElementById("Animation_Events_refresh").addEventListener("click", function () {
          l.refresh(o(0, 100))
       }), new JustGage({
          id: "Custom_wether",
          value: 50,
          min: 0,
          max: 100,
          title: "Target",
          label: "temperature",
          pointer: !0,
          gaugeColor: ["rgba(42, 118, 244, .1)"],
          levelColors: ["#22c55e"],
          textRenderer: function (e) {
             return e < 50 ? "Cold" : 50 < e ? "Hot" : 50 === e ? "OK" : void 0
          },
          onAnimationEnd: function () {
             console.log("f: onAnimationEnd()")
          }
       })),
       n = (document.getElementById("Custom_wether_refresh").addEventListener("click", function () {
          return i.refresh(o(0, 100)), !1
       }), font_option = new JustGage({
          id: "font_option",
          title: "Font Options",
          value: 72,
          min: 0,
          minTxt: "min",
          max: 100,
          maxTxt: "max",
          gaugeWidthScale: .6,
          counter: !0,
          gaugeColor: ["rgba(42, 118, 244, .1)"],
          levelColors: ["#22c55e"],
          titleFontColor: "red",
          titleFontFamily: "Georgia",
          titlePosition: "below",
          valueFontColor: "blue",
          valueFontFamily: "Georgia"
       }), document.getElementById("font_option_refresh").addEventListener("click", function () {
          font_option.refresh(o(0, 100))
       }), {
          label: "label",
          value: 65,
          min: 0,
          max: 100,
          decimals: 0,
          gaugeWidthScale: .6,
          pointer: !0,
          gaugeColor: ["rgba(42, 118, 244, .1)"],
          levelColors: ["#22c55e"],
          pointerOptions: {
             toplength: 10,
             bottomlength: 10,
             bottomwidth: 2
          },
          counter: !0
       }),
       r = {
          label: "label",
          value: 35,
          min: 0,
          max: 100,
          decimals: 0,
          gaugeWidthScale: .6,
          pointer: !0,
          gaugeColor: ["rgba(42, 118, 244, .1)"],
          levelColors: ["#22c55e"],
          pointerOptions: {
             toplength: 5,
             bottomlength: 15,
             bottomwidth: 2
          },
          counter: !0,
          donut: !0
       };
    new JustGage({
       id: "jg1",
       defaults: n
    }), new JustGage({
       id: "jg2",
       defaults: n
    }), new JustGage({
       id: "jg3",
       defaults: n
    }), new JustGage({
       id: "jg4",
       defaults: r
    }), new JustGage({
       id: "jg5",
       defaults: r
    }), new JustGage({
       id: "jg6",
       defaults: r
    })
 });
</script>

<script>
    // Inject chart data into the frontend
    const initialSymbol = "{{ $crypto->symbol }}";
    const initialChartData = @json($chartData);

    function updateChart(closeValues) {
        const options = {
            series: [{
                name: "Price",
                data: closeValues
            }],
            chart: {
                height: 280,
                type: "area",
                toolbar: {
                    show: false
                },
                dropShadow: {
                    enabled: true,
                    top: 12,
                    left: 0,
                    bottom: 0,
                    right: 0,
                    blur: 2,
                    color: "rgba(132, 145, 183, 0.3)",
                    opacity: 0.35
                }
            },
            colors: ["#63c522"],
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                curve: "smooth",
                width: [3],
                lineCap: "round"
            },
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            yaxis: {
                labels: {
                    offsetX: -12,
                    formatter: function (value) {
                        return "$" + value.toFixed(2);
                    }
                }
            },
            grid: {
                strokeDashArray: 3,
                xaxis: {
                    lines: {
                        show: true
                    }
                },
                yaxis: {
                    lines: {
                        show: false
                    }
                }
            },
            legend: {
                show: false
            },
            fill: {
                type: "gradient",
                gradient: {
                    type: "vertical",
                    shadeIntensity: 1,
                    inverseColors: false,
                    opacityFrom: 0.05,
                    opacityTo: 0.05,
                    stops: [45, 100]
                }
            }
        };
        const chart = new ApexCharts(document.querySelector("#audience"), options);
        chart.render();
    }

    // Initialize chart with data from backend
    document.addEventListener("DOMContentLoaded", function () {
        updateChart(initialChartData);

        document.querySelectorAll(".dropdown-item").forEach(item => {
            item.addEventListener("click", function () {
                const selectedTimeframe = this.textContent.trim().toLowerCase().replace(" ", "");
                fetchChartData(initialSymbol, selectedTimeframe);
            });
        });
    });
</script>



@endsection