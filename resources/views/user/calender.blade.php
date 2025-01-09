@extends('layouts.user.app')

@section('title', 'Calender')

@section('header', 'Calender')

@section('content')
<div class="page-content">
    <div class="">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">                      
                        <h4 class="card-title">Economic Calender</h4>                      
                    </div>
                    <div class="col-auto">                      
                        <button type="button" class="btn btn-primary px-3 btn-sm fs-14"><i class="iconoir-calendar fs-16 me-2"></i> Filter</button>        
                    </div>
                </div>                           
            </div>
            <div class="card-body">
                <div class="accordion card-bg">
                    @foreach ($events as $index => $event)
                        <div class="task-accordion rounded  border-dashed border-theme-color mb-3 p-2">
                            <div class="cursor-pointer p-2" data-bs-toggle="collapse" data-bs-target="#task-{{ $index }}" aria-expanded="true" aria-controls="task-{{ $index }}">
                                <div class="d-md-flex">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ $event->flag }}" class="thumb-md align-self-center rounded-circle me-2" alt="...">
                                        <div class="flex-grow-1 text-truncate"> 
                                            <h6 class="m-0 mb-1 fw-semibold">{{ $event->event }} <span id="ta-buy" class="badge rounded text-primary bg-primary-subtle btn-lg fw-bold mt-0 py-1"> {{ $event->currency }} </span></h6>
                                            <div class="fw-semibold">
                                                <span>{{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}</span> - 
                                                <span class="text-info">{{ \Carbon\Carbon::parse($event->date)->format('g:i a') }}</span>
                                            </div>
                                                                                
                                        </div><!--end media body-->
                                    </div>
                                    <div class="row mx-md-3 mt-3 mt-md-0 w-100">
                                        <div class="col-md-3 col-4">
                                            <div class="text-md-center">
                                                <p class="text-muted">Actual</p>
                                                <h6 class="m-0 mb-1 fw-semibold">{{ number_format($event->actual, 2) | "---" }}</h6>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-4">
                                            <div class="text-md-center">
                                                <p class="text-muted">Previous</p>
                                                <h6 class="m-0 mb-1 fw-semibold">{{ number_format($event->previous, 2) }}</h6>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-4">
                                            <div class="text-md-center">
                                                <p class="text-muted">Priority</p>
                                                @if($event->impact == 'High')
                                                    <span class="tm-0 mb-1 fw-semibold text-danger">
                                                        <i class="fa-solid fa-stop fs-10 me-1"></i> High
                                                    </span>
                                                @elseif($event->impact == 'Medium')
                                                    <span class="tm-0 mb-1 fw-semibold text-warning">
                                                        <i class="fa-solid fa-stop fs-10 me-1"></i> Medium
                                                    </span>
                                                @else
                                                    <span class="tm-0 mb-1 fw-semibold text-success">
                                                        <i class="fa-solid fa-stop fs-10 me-1"></i> Low
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <div class="text-md-end">
                                                <p class="text-muted">Status</p>
                                                <span id="ta-buy" class="badge rounded text-secondary bg-secondary-subtle btn-lg fw-bold mt-0 py-1">
                                                .......
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="task-{{ $index }}" class="accordion-collapse collapse @if($loop->first) show @endif" data-bs-parent="#task-{{ $index }}">                                               
                                <div class="accordion-body  bg-body border-dashed-top  p-3 p-3">
                                    <h6 class="fw-semibold">{{ $event->event }} </h6>
                                    <p class="mt-2 mb-3">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis recusandae ratione voluptatem consequatur dignissimos at aliquam iste repellat? Temporibus dolores nostrum ad, eligendi mollitia saepe harum sequi illum esse aliquid?
                                    </p>
                                    <div class="row row-cols-auto">
                                        <div class="col col-md-3">
                                            <h6 class="m-0 mb-1 fw-semibold">Project type</h5>
                                            <p class="text-muted mb-0">Lorem Ipsum</p>
                                        </div><!--end col-->
                                        <div class="col col-md-2 text-end align-self-center">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="m-0 mb-1 fw-semibold">Progress</h5>
                                                <small class="text-end">70%</small>
                                            </div>
                                            <div class="progress bg-secondary-subtle" style="height:5px;">
                                                <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 15% " aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div><!--end col-->                                                        
                                        <div class="col col-md-2">
                                            <h6 class="m-0 mb-1 fw-semibold">Total Report</h5>
                                            <p class="text-muted mb-0">12</p>
                                        </div><!--end col-->
                                        <div class="col col-md-2">
                                            <h6 class="m-0 mb-1 fw-semibold">Assigned To</h5>
                                            <p class="text-muted mb-0">Kylie Bishop</p>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end accordion-body-->
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div> 
    </div>
    @include('components.user.footer')
</div>

@endsection

@section('script')



@endsection