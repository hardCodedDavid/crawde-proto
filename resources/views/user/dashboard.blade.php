
@extends('layouts.user.app')

@section('title', 'Screener')

@section('header', 'Screener')

@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
                                            <th class="border-top-0">changes (5m)</th>
                                            <th class="border-top-0">changes (15m)</th>
                                            <th class="border-top-0">MarketCap (USD)</th>
                                            <th class="border-top-0">Open Interest</th>
                                            <th class="border-top-0">OI Chg(15m)</th>
                                            <th class="border-top-0">BTC Correl.</th>
                                            <th class="border-top-0"></th>
                                        </tr>
                                        <!--end tr-->
                                    </thead>
                                    <tbody>
                                        @foreach($crypto as $data)
                                        <tr>
                                            <td class="fw-bold">
                                                <a href="#" class="">
                                                    <img src="{{ $data['img'] }}" alt height="24" class="me-2">{{ $data['symbol'] }}
                                                </a>
                                            </td>
                                            <td class="fw-bold">{{ number_format($data['price'], 2) }}</td>
                                            <td class="fw-bold {{ $data['change_5m'] > 0 ? 'text-primary' : ($data['change_5m'] < 0 ? 'text-danger' : 'text-dark') }}">
                                                {{ number_format($data['change_5m'], 2) }}%
                                            </td>
                                            <td class="fw-bold {{ $data['change_15m'] > 0 ? 'text-primary' : ($data['change_15m'] < 0 ? 'text-danger' : 'text-dark') }}">
                                                {{ number_format($data['change_15m'], 2) }}%
                                            </td>
                                            <td class="fw-bold">{{ number_format($data['marketcap'], 2) }}</td>
                                            <td class="fw-bold">{{ number_format($data['open_interest'], 2) }}</td>
                                            <td class="fw-bold">{{ number_format($data['oi_change_15m'], 2) }}</td>
                                            <td class="fw-bold">{{ number_format($data['btc_correlation_1d'], 2) }}</td>
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
                <!--end col-->
            </div>
            <!--end row-->
        <!-- </div> -->
        
        <!--Start Footer-->
            @include('components.user.footer')
        <!--end footer-->
    </div>

<script>

$(document).ready(function () {
    // Establish WebSocket connection
    const socket = new WebSocket("wss://ws.itrustinvestment.com");

    // Listen for WebSocket events
    socket.onmessage = function (event) {
        const data = JSON.parse(event.data);

        const symbol = data.symbol;
        const price = parseFloat(data.data.price).toFixed(2);
        const change_5m = parseFloat(data.data.change_5m).toFixed(2);
        const change15m = parseFloat(data.data.change_15m).toFixed(2);
        const marketcap = parseFloat(data.data.marketcap).toFixed(2);
        const open_interest = parseFloat(data.data.open_interest).toFixed(2);
        const oi_change_15m = parseFloat(data.data.oi_change_15m).toFixed(2);

        // Find the row with the matching symbol
        const row = $("tbody tr").filter(function () {
            return $(this).find("td:first-child a").text().trim() === symbol;
        });

        if (row.length) {
            // Update price
            row.find("td:nth-child(2)").text(price);

            // Update 15-minute change
            const change15mCell = row.find("td:nth-child(3)");
            change15mCell.text(`${change15m}%`);

            // Update 15-minute change color
            change15mCell
                .removeClass("text-primary text-danger text-dark")
                .addClass(
                    change15m > 0
                        ? "text-primary"
                        : change15m < 0
                        ? "text-danger"
                        : "text-dark"
                );

            // Update market cap
            row.find("td:nth-child(5)").text(marketcap);

            // Update open interest
            row.find("td:nth-child(6)").text(open_interest);

            // Update OI change
            row.find("td:nth-child(7)").text(oi_change_15m);

            console.log(`Updated ${symbol}: Price = ${price}, Change = ${change15m}%`);
        } else {
            console.log(`Symbol ${symbol} not found in the table.`);
        }
    };

    // Handle WebSocket connection errors
    socket.onerror = function (error) {
        console.error("WebSocket error:", error);
    };

    // Handle WebSocket disconnection
    socket.onclose = function () {
        console.warn("WebSocket connection closed.");
    };
});

</script>

@endsection


        