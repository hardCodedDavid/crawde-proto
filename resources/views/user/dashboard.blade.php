
@extends('layouts.user.app')

@section('title', 'Screener')

@section('header', 'Screener')

@section('content')
    <div class="page-content">
        <div class="row justify-content-center mb-lg-2">
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
            <div class="col-md-6 col-lg-4 d-none d-md-block"> 
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
            <div class="col-md-6 col-lg-4 d-none d-lg-block"> 
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

        <div class="row">
            <div class="col-lg-12">
                <div class="card card-h-100">
                    
                    <!--end card-header-->
                    <div class="card-body pt-2">
                        <div class="table-responsive browser_users">
                            <table class="table mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="border-top-0"></th>
                                        <th class="border-top-0">Symbol</th>
                                        <th class="border-top-0">Price</th>
                                        <th class="border-top-0">Ticks (5m)</th>
                                        <th class="border-top-0">changes (5m)</th>
                                        <th class="border-top-0">volume (5m)</th>
                                        <th class="border-top-0">MarketCap (USD)</th>
                                        <th class="border-top-0">vdelta (5m)</th>
                                        <th class="border-top-0">volatility (5m)</th>
                                        <th class="border-top-0">BTC Correl.</th>
                                    </tr>
                                    <!--end tr-->
                                </thead>
                                <tbody>
                                    @foreach($crypto as $data)
                                        <tr data-symbol="{{ $data['symbol'] }}">
                                            <td class="fw-bold"><i class="iconoir-star menu-icon"></i> </td>
                                            <td class="fw-bold">
                                                <a href="{{ route('screener.show', $data['symbol']) }}" class="">
                                                    <img src="{{ $data['img'] }}" alt height="24" class="me-1 rounded-circle">{{ $data['symbol'] }}
                                                </a>
                                            </td>
                                            <td class="price fw-bold" data-value="{{ $data['price'] }}">{{ number_format($data['price'], 2) }}</td>
                                            <td class="ticks-5m fw-bold">
                                                {{ number_format($data['ticks_5m'], 2) }}
                                            </td>
                                            <td class="change-5m fw-bold {{ $data['change_5m'] > 0 ? 'text-primary' : ($data['change_5m'] < 0 ? 'text-danger' : 'text-dark') }}">
                                                {{ number_format($data['change_5m'], 2) }}%
                                            </td>
                                            <td class="volume-5m fw-bold">
                                                {{ number_format($data['volume_5m'], 2) }}
                                            </td>
                                            <td class="marketcap fw-bold" data-value="{{ $data['marketcap'] }}">{{ number_format($data['marketcap'], 2) }}</td>
                                            <td class="vdelta fw-bold">{{ number_format($data['vdelta_5m'], 2) }}</td>
                                            <td class="volatility-5m fw-bold">{{ number_format($data['volatility_5m'], 2) }}</td>
                                            <td class="fw-bold">{{ number_format($data['btc_correlation_1d'], 2) }}</td>
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
        <!--Start Footer-->
            @include('components.user.footer')
        <!--end footer-->
    </div>

<script>

$(document).ready(function () {
    $('body').attr('data-sidebar-size', 'collapsed');

    // Establish WebSocket connection
    const socket = new WebSocket("wss://ws.itrustinvestment.com");

    // Handle WebSocket messages
    socket.onmessage = function (event) {
        const data = JSON.parse(event.data);
        const symbol = data.symbol;

        // Find the table row using data-symbol attribute
        const row = $(`tbody tr[data-symbol="${symbol}"]`);

        if (row.length) {
            const {
                price,
                ticks_5m,
                change_5m,
                volume_5m,
                marketcap,
                vdelta_5m,
                volatility_5m,
                btc_correlation_1d
            } = data.data;

            // Helper function to set text and class based on value
            const setCell = (cell, value, classes) => {
                cell.text(value).removeClass("text-primary text-danger text-dark").addClass(classes);
            };

            function updatePriceCell(cell, newPrice) {
                const oldPrice = parseFloat(cell.data("value")) || 0;
                cell.data("value", newPrice);

                const oldPriceStr = oldPrice.toFixed(2);
                const newPriceStr = newPrice.toString();

                let styledPrice = "";
                for (let i = 0; i < newPriceStr.length; i++) {
                    if (oldPriceStr[i] !== newPriceStr[i]) {
                        styledPrice += `<span class="${newPrice > oldPrice ? 'text-primary' : 'text-danger'}">${newPriceStr[i]}</span>`;
                    } else {
                        styledPrice += newPriceStr[i];
                    }
                }

                cell.html(styledPrice);
            }

            const formatNumber = (num, decimals = 2) => {
                return parseFloat(num).toFixed(decimals).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            };

            // Update cells with new data
            updatePriceCell(row.find(".price"), parseFloat(price).toFixed(2));

            updatePriceCell(row.find(".ticks-5m"), parseFloat(ticks_5m).toFixed(2));

            setCell(
                row.find(".change-5m"),
                `${parseFloat(change_5m).toFixed(2)}%`,
                change_5m > 0 ? "text-primary" : change_5m < 0 ? "text-danger" : "text-dark"
            );

            setCell(
                row.find(".volume-5m"),
                formatNumber(volume_5m),
                "text-dark"
            );

            setCell(
                row.find(".marketcap"),
                formatNumber(volume_5m),
                "text-dark"
            );

            updatePriceCell(
                row.find(".vdelta"),
                parseFloat(vdelta_5m).toFixed(2)
            );

            setCell(
                row.find(".volatility-5m"),
                parseFloat(volatility_5m).toFixed(2),
                "text-dark"
            );

            setCell(
                row.find(".fw-bold:last"),
                parseFloat(btc_correlation_1d).toFixed(2),
                ""
            );

            // console.log(`Updated ${symbol}: Price = ${price}, MarketCap = ${marketcap}`);
        } else {
            // console.warn(`Symbol ${symbol} not found in the table.`);
        }
    };

    // Handle WebSocket errors
    socket.onerror = (error) => console.error("WebSocket error:", error);

    // Handle WebSocket disconnection
    socket.onclose = () => console.warn("WebSocket connection closed.");
});



</script>

@endsection


        