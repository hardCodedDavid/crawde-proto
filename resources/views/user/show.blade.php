
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
                                                    <img src="https://cryptologos.cc/logos/tether-usdt-logo.png" alt="" class="rounded-circle thumb-sm border border-2 border-white bg-white">
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
                                            <h2 class="fw-bold fs-24 crypto-price"  data-price="{{ $crypto->price }}">
                                                ${{ number_format(floor($crypto->price), 0) }}.<span class="fs-15 text-muted fw-normal">
                                                {{ substr(number_format($crypto->price, 2), -2) }}
                                                </span>
                                            </h2>
                                            <span class="fs-11 {{ $crypto->change_15m > 0 ? 'text-primary' : ($crypto->change_15m < 0 ? 'text-danger' : 'text-dark') }} fw-normal mx-1">{{number_format($crypto->change_15m, 2)}}%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between fw-semibold align-items-center">
                                <p class="mb-1 d-inline-flex align-items-center"><i class="iconoir-task-list fs-18 text-muted me-1"></i>Average</p>
                                <small class="text-end text-body-emphasis d-block ms-auto">44%</small>
                            </div>
                            <div class="progress bg-primary-subtle" style="height:5px;">
                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="margin-right:2px; width: 20%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="margin-right:2px; width: 20%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="margin-right:2px; width: 1%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="row my-2 align-items-center">
                                <div class="col-6">
                                    <div class="text-start my-1">
                                        <p class="mb-0 fs-10 text-muted">Market Cap</p>  
                                        <h5 class="fs-16 fw-bold mb-0 p-0">${{ formatMarketCap($crypto->marketcap, 2) }}</h5>                                      
                                    </div>
                                </div>
                                <div class="col-6 text-end align-self-center">
                                    <div class="my-1">
                                        <h6 class="fw-normal text-muted fs-10 m-0">Volume:</h6> <span class="text-dark fw-semibold fs-16">${{ formatMarketCap($crypto->volume_5m, 2) }}</span>
                                    </div>
                                </div><!--end col-->
                            </div>
                            <div class="">
                                <div class="">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col">
                                            <p id="summary-car" class="truncate-3-line p-2 border-white border-opacity-25 border-dashed bg-dark-subtle rounded text-muted fs-12">
                                                {{ truncateWords($summary, 20, '...') }}
                                            </p>
                                        </div>
                                    </div>                             
                                </div> 
                            </div>
                            <!--end row-->
                            <div id="action-btn">
                                <span class="badge rounded text-dark bg-light-subtle w-100 btn-lg fs-14 fw-bold mt-2 py-2">
                                    <div class="spinner-border spinner-border-sm text-secondary" role="status"></div> 
                                </span>
                            </div>
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
                                    <!-- <div class="dropdown">
                                        <a href="#" class="btn bt btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icofont-time fs-5 me-1"></i>
                                            5min<i class="las la-angle-down ms-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Last Week</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">This Year</a>
                                        </div>
                                    </div> -->
                                    <select id="select-interval" class="form-select">
                                        <option value="1m" > 1min </option>
                                        <option value="3m" > 3min </option>
                                        <option value="5m" selected > 5min </option>
                                        <option value="15m" > 15min </option>
                                        <option value="30m" > 30min </option>
                                        <option value="1h" > 1hour </option>
                                        <option value="4h" > 4hour </option>
                                    </select>
                                    <!-- <button id="" class="btn badge rounded text-warning bg-warning-subtle p-1"><i class="iconoir-bell fs-18 fw-bold text-warning"></i></button> -->
                                </div>
                                <div class="col-auto">
                                    <button id="" class="btn badge rounded text-primary bg-primary-subtle p-1"><i class="iconoir-bell fs-18 fw-bold text-primary"></i></button>
                                </div>
                            </div>
                        </div>
                        <!--end card-header-->
                        <div class="card-body pt-0">
                            {{-- <div id="audience" class="apex-charts"></div> --}}
                            <div class="rounded" style="height: 290px; background: rgba(255, 255, 255, 0.04);">
                                <p class="fw-bold mx-auto text-center fs-28" style="padding-top: 100px; color: rgba(167, 154, 154, 0.65);">{{ $crypto->symbol }} Chart</p>
                            </div>
                        </div>
                    </div>
                    <!--end card-->
                </div>
            </div>
            <!-- ::::: SECTION 2 ::::: -->
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col"> 
                            <div class="card mb-3 mb-lg-0">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <i class="iconoir-candlestick-chart fs-24 align-self-center text-dark me-2"></i>
                                        <div class="flex-grow-1 text-truncate"> 
                                            <p class="text-dark mb-0 fw-semibold fs-12">Technical Report</p>                                  
                                            <span id="ta-recommendation" class="badge rounded text-primary fs-18 fw-bold m-0 mt-1 p-0">
                                                -- 
                                            </span><span class="fs-11 text-muted fw-normal mx-1">Sentiment</span>
                                        </div>
                                    </div>
                                    <div class="row mt-2 align-items-center">
                                        <div class="col-4 text-end align-self-center">
                                            <div class="text-center">
                                                <p class="fw-normal text-muted fs-10 mb-1">Buys</p>  
                                                <span id="ta-buy" class="badge rounded text-primary bg-primary-subtle w-100 btn-lg fs-14 fw-bold mt-0 py-1">
                                                    <div class="spinner-border spinner-border-sm text-secondary" role="status"></div> 
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-4 text-center align-self-center">
                                            <div class="">
                                                <h6 class="fw-normal text-muted fs-10 mb-1">Neutral:</h6> 
                                                <span id="ta-neutral" class="badge rounded text-secondary bg-secondary-subtle w-100 btn-lg fs-14 fw-bold mt-0 py-1">
                                                    <div class="spinner-border spinner-border-sm text-secondary" role="status"></div> 
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-4 text-center align-self-center">
                                            <div class="">
                                                <h6 class="fw-normal text-muted fs-10 mb-1">Sells:</h6>
                                                <span id="ta-sell" class="badge rounded text-danger bg-danger-subtle w-100 btn-lg fs-14 fw-bold mt-0 py-1">
                                                    <div class="spinner-border spinner-border-sm text-secondary" role="status"></div> 
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                            </div>                 
                        </div>
                        <div class="col"> 
                            <div class="card mb-3 mb-lg-0">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <i class="iconoir-area-search fs-24 align-self-center text-dark me-2"></i>
                                        <div class="flex-grow-1 text-truncate"> 
                                            <p class="text-dark mb-0 fw-semibold fs-12">Public News</p>    
                                            <span class="badge rounded text-primary fs-18 fw-bold m-0 mt-1 p-0">
                                                Positive <span class="fs-11 text-muted fw-normal mx-1">Reports</span>
                                            </span>                                                                                                                                 
                                        </div><!--end media body-->
                                    </div>
                                    <div class="mt-3">
                                        <div class="d-flex justify-content-between fw-semibold align-items-center">
                                            <p class="mb-1 d-inline-flex align-items-center"><i class="iconoir-rss-feed-tag fs-18 text-muted me-1"></i>{{ $news->count() }} Projects</p>
                                            <small class="text-end text-body-emphasis d-block ms-auto">63%</small>
                                        </div>
                                        <div class="progress bg-primary-subtle" style="height:5px;">
                                            <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="margin-right:2px; width: 20%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="margin-right:2px; width: 20%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="margin-right:2px; width: 35%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                            </div>                 
                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="card-body">
                            <div class="table-responsive browser_users">
                                <table class="table mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="border-top-0"></th>
                                            <th class="border-top-0">5m</th>
                                            <th class="border-top-0">15m</th>
                                            <th class="border-top-0">1h</th>
                                            <th class="border-top-0">1d</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ticks</td>
                                            <td>{{ number_format($crypto->ticks_5m , 2)?? '---' }}</td>
                                            <td>{{ number_format($crypto->ticks_15m, 2) ?? '---' }}</td>
                                            <td>{{ number_format($crypto->ticks_1h , 2)?? '---' }}</td>
                                            <td>{{ number_format($crypto->ticks_1d , 2)?? '---' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Changes</td>
                                            <td>{{ number_format($crypto->change_5m, 2) ?? '---' }}</td>
                                            <td>{{ number_format($crypto->change_15m, 2) ?? '---' }}</td>
                                            <td>{{ number_format($crypto->change_1h, 2) ?? '---' }}</td>
                                            <td>{{ number_format($crypto->change_1d, 2) ?? '---' }}</td>
                                        </tr>
                                        <tr>
                                            <td>OI Change</td>
                                            <td>{{ number_format($crypto->oi_change_5m, 2) ?? '---' }}</td>
                                            <td>{{ number_format($crypto->oi_change_15m, 2) ?? '---' }}</td>
                                            <td>{{ number_format($crypto->oi_change_1h, 2) ?? '---' }}</td>
                                            <td>{{ number_format($crypto->oi_change_1d, 2) ?? '---' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Volatility</td>
                                            <td>{{ number_format($crypto->volatility_5m, 2) ?? '---' }}</td>
                                            <td>{{ number_format($crypto->volatility_15m, 2) ?? '---' }}</td>
                                            <td>{{ number_format($crypto->volatility_1h, 2) ?? '---' }}</td>
                                            <td>{{ number_format($crypto->volatility_1d, 2) ?? '---' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Vdelta</td>
                                            <td>{{ number_format($crypto->vdelta_5m , 2) ?? '---' }}</td> <!-- Placeholder -->
                                            <td>{{ number_format($crypto->vdelta_15m, 2)  ?? '---' }}</td> <!-- Placeholder -->
                                            <td>{{ number_format($crypto->vdelta_1h , 2) ?? '---' }}</td> <!-- Placeholder -->
                                            <td>{{ number_format($crypto->vdelta_1d , 2) ?? '---' }}</td> <!-- Placeholder -->
                                        </tr>
                                        <tr>
                                            <td>Volume</td>
                                            <td>{{ number_format($crypto->volume_5m, 2) ?? '---' }}</td>
                                            <td>{{ number_format($crypto->volume_15m, 2) ?? '---' }}</td>
                                            <td>{{ number_format($crypto->volume_1h, 2) ?? '---' }}</td>
                                            <td>{{ number_format($crypto->volume_1d, 2) ?? '---' }}</td>
                                        </tr>
                                    </tbody>
                                </table>

                                @if($crypto->count() < 1)
                                    <p class="text-dark text-center fs-16 fw-bold py-4 my-4">No available data!</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
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
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">                      
                                        <h4 class="card-title">Technical Summary</h4>                      
                                    </div>
                                    <div class="col-auto">                      
                                        <!-- <span class="badge rounded text-warning bg-warning-subtle fs-12 p-1"><i class="iconoir-refresh fs-14 fw-bold text-warning"></i></span>  -->
                                        <button id="refreshTA" class="btn badge rounded text-warning bg-warning-subtle fs-12 p-1"><i class="iconoir-refresh fs-14 fw-bold text-warning"></i></button>                 
                                    </div>
                                </div>                            
                            </div>
                            <div class="card-body pt-0">
                                <div id="technical-container" class="my-2">

                                </div>
                                <!-- <span class="badge rounded text-danger bg-danger-subtle w-100 btn-lg fs-14 fw-bold mt-2 py-2">
                                    Strong Sell 
                                </span> -->
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">                      
                                        <h4 class="card-title">Indicator Summary</h4>                      
                                    </div>
                                    <div class="col-auto">
                                        <!-- <i class="iconoir-refresh-circle fs-18 align-self-center text-muted me-2"></i> -->
                                    </div>
                                </div>                                  
                            </div>
                            <div class="card-body pt-0">
                                <div id="indicator-container" class="my-2">
                                    <!-- Indicators will be populated dynamically here -->
                                </div>
                                <span id="recommendation-badge" class="badge rounded text-primary bg-primary-subtle w-100 btn-lg fs-14 fw-bold mt-2 py-2">
                                    Recommendation
                                </span>
                            </div>
                        </div>
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
                                <a href="{{ $data->source_url }}" rel="noopener" target="_blank" class="truncate-2-lines">{{ $data->title }}</a>
                            </h5>
                            <p class="text-muted mb-0 flex-grow-1 truncate-3-line">{{ truncateWords($data->description, 25, '...') }}</p>
                            <hr class="hr-dashed">
                            <div class="d-flex justify-content-between fw-semibold align-items-center">
                                <p class="mb-1 d-inline-flex align-items-center"><i class="iconoir-task-list fs-18 text-muted me-1"></i>Sentiment Score</p>
                                <small class="text-end text-body-emphasis d-block ms-auto">{{ ($data->sentiment_score * 100) }}%</small>
                            </div>
                            <div class="progress @if($data->sentiment_score <= -0) bg-danger-subtle @else bg-primary-subtle @endif" style="height:5px;">
                                <div class="progress-bar @if($data->sentiment_score <= -0) bg-danger @else bg-primary @endif rounded-pill" role="progressbar" style="margin-right:2px; width: 25%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar @if($data->sentiment_score <= -0) bg-danger @else bg-primary @endif rounded-pill" role="progressbar" style="margin-right:2px; width: 10%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar @if($data->sentiment_score <= -0) bg-danger @else bg-primary @endif rounded-pill" role="progressbar" style="margin-right:2px; width: {{ ($data->sentiment_score * 100) }}%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
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

<script>
    $(document).ready(function () {
        const symbol = "{{ $crypto->symbol }}";

        // Connect to the WebSocket server
        const socket = new WebSocket("wss://ws.itrustinvestment.com");

        socket.onopen = function () {
            console.log("WebSocket connection established.");

            // Subscribe to updates for the specific symbol
            socket.send(JSON.stringify({ type: "subscribe", symbol: symbol }));
        };

        socket.onmessage = function (event) {
            try {
                const data = JSON.parse(event.data);

                if (data.symbol === symbol) {
                    // Update the cryptocurrency price and table
                    updateCryptoData(data.data);
                }
            } catch (error) {
                console.error("Error parsing WebSocket message:", error.message);
            }
        };

        socket.onerror = function (error) {
            console.error("WebSocket error:", error);
        };

        socket.onclose = function () {
            console.log("WebSocket connection closed.");
        };

        function formatNumber(num) {
            return num.toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 });
        }

        function formatNumberZero(num) {
            return num.toLocaleString(undefined, { minimumFractionDigits: 0, maximumFractionDigits: 0 });
        }

        function updatePriceCell(cellSelector, newPrice) {
            const cell = $(cellSelector);
            const oldPrice = parseFloat(cell.data("value")) || 0;
            cell.data("value", newPrice);

            const oldPriceStr = oldPrice.toFixed(2);
            const newPriceStr = newPrice.toString();

            let styledPrice = "";
            for (let i = 0; i < newPriceStr.length; i++) {
                if (oldPriceStr[i] !== newPriceStr[i]) {
                    styledPrice += `<span class="${newPrice > oldPrice ? 'text-primary' : 'text-danger'}">${formatNumber(newPriceStr[i])}</span>`;
                } else {
                    styledPrice += newPriceStr[i];
                }
            }

            // Only update the cell content if the price has changed
            if (oldPrice !== newPrice) {
                cell.html(styledPrice);
            }
        }


        function updateCryptoData(data) {
            // Update price with animation and color change
            const $priceElement = $(".crypto-price");
            const oldPrice = parseFloat($priceElement.data("price"));
            const newPrice = parseFloat(data.price);

            if (newPrice !== oldPrice) {
                const difference = newPrice - oldPrice;
                const colorClass = difference > 0 ? "text-primary" : "text-danger";

                $priceElement.html(`
                    $${formatNumberZero(newPrice)}.<span class="fs-15 text-muted fw-normal">
                    ${String(newPrice.toFixed(2)).split(".")[1]}
                    </span>
                `);

                $priceElement.addClass(colorClass);

                // Remove color class after animation
                setTimeout(() => $priceElement.removeClass(colorClass), 1000);

                // Update the dataset price
                $priceElement.data("price", newPrice);
            }

            // Update percentage change
            const $changeElement = $(".crypto-change");
            $changeElement.text(`${data.change_15m.toFixed(2)}%`);
            $changeElement
                .removeClass("text-primary text-danger")
                .addClass(data.change_15m > 0 ? "text-primary" : "text-danger");

            // Update table values
            const updateTableCell = (selector, value) => {
                $(selector).text(value !== undefined ? formatNumber(value) : "---");
            };

            updatePriceCell("td:nth-child(2)", data.ticks_5m);
            updatePriceCell("td:nth-child(3)", data.ticks_15m);
            updateTableCell("td:nth-child(4)", data.ticks_1h);
            updateTableCell("td:nth-child(5)", data.ticks_1d);

            updatePriceCell("tr:nth-child(2) td:nth-child(2)", data.change_5m);
            updatePriceCell("tr:nth-child(2) td:nth-child(3)", data.change_15m);
            updateTableCell("tr:nth-child(2) td:nth-child(4)", data.change_1h);
            updateTableCell("tr:nth-child(2) td:nth-child(5)", data.change_1d);

            updateTableCell("tr:nth-child(3) td:nth-child(2)", data.oi_change_5m);
            updateTableCell("tr:nth-child(3) td:nth-child(3)", data.oi_change_15m);
            updateTableCell("tr:nth-child(3) td:nth-child(4)", data.oi_change_1h);
            updateTableCell("tr:nth-child(3) td:nth-child(5)", data.oi_change_1d);

            updateTableCell("tr:nth-child(4) td:nth-child(2)", data.volatility_5m);
            updateTableCell("tr:nth-child(4) td:nth-child(3)", data.volatility_15m);
            updateTableCell("tr:nth-child(4) td:nth-child(4)", data.volatility_1h);
            updateTableCell("tr:nth-child(4) td:nth-child(5)", data.volatility_1d);

            updatePriceCell("tr:nth-child(5) td:nth-child(2)", data.vdelta_5m);
            updatePriceCell("tr:nth-child(5) td:nth-child(3)", data.vdelta_15m);
            updatePriceCell("tr:nth-child(5) td:nth-child(4)", data.vdelta_1h);
            updatePriceCell("tr:nth-child(5) td:nth-child(5)", data.vdelta_1d);

            updatePriceCell("tr:nth-child(6) td:nth-child(2)", data.volume_5m);
            updatePriceCell("tr:nth-child(6) td:nth-child(3)", data.volume_15m);
            updatePriceCell("tr:nth-child(6) td:nth-child(4)", data.volume_1h);
            updatePriceCell("tr:nth-child(6) td:nth-child(5)", data.volume_1d);
        }
    });

    $(document).ready(function () {
        $('#refreshTA').on('click', function () {
            resetUI();
            fetchTA();
        });

        $('#select-interval').on('change', function () {
            resetUI();
            fetchTA();
        });

        function fetchTA() {
            const selectedInterval = $('#select-interval').val();

            TW_API = "{{ env('TW_API') }}";

            const url = `${TW_API}?symbol={{ $crypto->symbol }}&exchange=Binance&screener=crypto&interval=${selectedInterval}`;

            // Define mappings for classes and recommendations
            const recommendationStyles = {
                BUY: { text: "success", bg: "success-subtle" },
                STRONG_BUY: { text: "primary", bg: "primary-subtle" },
                SELL: { text: "danger", bg: "danger-subtle" },
                STRONG_SELL: { text: "danger", bg: "danger-subtle" },
                NEUTRAL: { text: "dark", bg: "light-subtle" },
            };

            const indicatorsToShow = ["EMA10", "EMA20", "EMA30", "SMA10", "SMA20", "SMA30", "VWMA"];
            const technicalToShow = ["BBPower", "MACD.signal", "P.SAR", "HullMA9", "UO", "ADX", "RSI", "Stoch.D", "VWMA", "W.R", "Recommend.All"];

            const getStyles = (key) => recommendationStyles[key] || { text: "light", bg: "light-subtle" };

            // Fetch and process data from API
            $.get(url)
                .done(function (data) {
                    const { RECOMMENDATION, SELL, BUY, NEUTRAL, COMPUTE } = data.moving_averages;
                    const indicatorsVal = data.indicators;

                    // Apply recommendation styles
                    const recommendation = RECOMMENDATION.replace("_", " ");
                    const { text, bg } = getStyles(RECOMMENDATION);

                    // Update UI elements
                    updateRecommendationBadge(recommendation, text, bg);
                    updateRecommendationSummary(SELL, NEUTRAL, BUY);
                    updateIndicators(COMPUTE, indicatorsVal);
                    updateTechnicals(indicatorsVal);
                })
                .fail(function (error) {
                    console.error("Error fetching sentiment data:", error);
                    $("#action-btn .badge").text("Not Available").attr("class", "badge rounded w-100 btn-lg fs-14 fw-bold mt-2 py-2 text-dark bg-black");
                });

            function updateRecommendationBadge(recommendation, text, bg) {
                $("#action-btn .badge").text(recommendation).attr("class", `badge rounded w-100 btn-lg fs-14 fw-bold mt-2 py-2 text-${text} bg-${bg}`);
                $("#ta-recommendation").text(recommendation).attr("class", `badge rounded text-${text} fs-18 fw-bold m-0 mt-1 p-0`);
                $("#recommendation-badge").text(recommendation).attr("class", `badge rounded text-${text} bg-${text}-subtle w-100 btn-lg fs-14 fw-bold mt-2 py-2`);
                $("#summary-card").attr("class", `truncate-3-lines p-2 border-${text} border-dashed bg-${bg} rounded text-dark fs-12`);
            }

            function updateRecommendationSummary(SELL, NEUTRAL, BUY) {
                $("#ta-sell").text(SELL);
                $("#ta-neutral").text(NEUTRAL);
                $("#ta-buy").text(BUY);
            }

            function updateIndicators(COMPUTE, indicatorsVal) {
                $("#indicator-container").empty();
                indicatorsToShow.forEach((indicator) => {
                    const action = COMPUTE[indicator] || "NEUTRAL";
                    const value = indicatorsVal[indicator] || "N/A";
                    const { text, bg } = recommendationStyles[action] || recommendationStyles.NEUTRAL;

                    const indicatorHtml = `
                        <div class="d-flex justify-content-between">
                            <p class="text-muted fw-semibold">${indicator} :</p>
                            <p class="text-body-emphasis fw-semibold">
                                ${value.toFixed(4)} <span class="badge rounded text-${text} bg-${bg} fs-12 mx-2">${action}</span>
                            </p>
                        </div>`;
                    $("#indicator-container").append(indicatorHtml);
                });
            }

            function updateTechnicals(indicatorsVal) {
                $("#technical-container").empty();
                technicalToShow.forEach((indicator) => {
                    const value = indicatorsVal[indicator] || "N/A";
                    const technicalHtml = `
                        <div class="d-flex justify-content-between">
                            <p class="text-muted fw-semibold">${indicator} :</p>
                            <p class="text-body-emphasis fw-semibold">${value.toFixed(4)}</p>
                        </div>`;
                    $("#technical-container").append(technicalHtml);
                });
            }
        };

        function resetUI() {
            $("#action-btn .badge").text("Loading...").attr("class", "badge rounded w-100 btn-lg fs-14 fw-bold mt-2 py-2 text-warning bg-warning-subtle");
            $("#ta-recommendation").text("Loading...").attr("class", "badge rounded text-warning fs-18 fw-bold m-0 mt-1 p-0");
            $("#recommendation-badge").text("Loading...").attr("class", "badge rounded text-warning bg-warning-subtle w-100 btn-lg fs-14 fw-bold mt-2 py-2");
            $("#summary-card").attr("class", "truncate-3-lines p-2 border-warning border-dashed bg-warning-subtle rounded text-dark fs-12");
            $("#ta-sell").text("...");
            $("#ta-neutral").text("...");
            $("#ta-buy").text("...");
            $("#indicator-container").empty().append('<div class="loader">Loading indicators...</div>');
            $("#technical-container").empty().append('<div class="loader">Loading technicals...</div>');
        }

        fetchTA();
    });
</script>

<script>
    var sentimentScores = @json($score);
    var categories = @json($categories);

    var chart = {
        series: [{
            name: "2024",
            data: sentimentScores
        }],
        chart: {
            toolbar: {
                show: false
            },
            type: "bar",
            fontFamily: "inherit",
            foreColor: "#adb0bb",
            height: 292,
            stacked: true,
            offsetX: -15
        },
        plotOptions: {
            bar: {
                horizontal: false,
                barHeight: "80%",
                columnWidth: "20%",
                borderRadius: [3],
                borderRadiusApplication: "end",
                borderRadiusWhenStacked: "all"
            }
        },
        dataLabels: {
            enabled: false
        },
        legend: {
            show: false
        },
        grid: {
            show: true,
            strokeDashArray: 3,
            padding: {
                top: 0,
                bottom: 0,
                right: 0
            },
            borderColor: "rgba(0,0,0,0.05)",
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
        yaxis: {
            tickAmount: 4
        },
        xaxis: {
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            },
            categories: categories
        },
        colors: sentimentScores.map(function(score) {
            return score < 0 ? "red" : "var(--bs-primary)";
        })
    };
    var chartInstance = new ApexCharts(document.querySelector("#reports-bar"), chart);
    chartInstance.render();
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