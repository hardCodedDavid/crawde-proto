
@extends('layouts.user.auth')

@section('title', 'Maintainance')

@section('content')

<div class="container-xxl">
    <div class="row vh-100 d-flex justify-content-center">
        <div class="col-12 align-self-center">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="card">                                
                            <div class="card-body p-5">  
                                <div class="text-center p-3">
                                    <a href="index.html" class="logo logo-admin">
                                        <img src="https://framerusercontent.com/images/P9hd3hjs5W20ps21ueeNpR2Xo.svg" height="50" alt="logo" class="auth-logo">
                                    </a>
                                    <h4 class="mt-3 mb-1 fw-semibold text-white fs-18">Crawde</h4>
                                </div>
                                <div class="text-center mt-3">
                                    <img src="{{ asset('assets/images/extra/card/maintenance.png') }}" alt="" class="img-fluid mb-3">
                                    <h6 class="mb-2 fw-medium text-dark fs-24">We are down on maintenance right now</h6>
                                    <p class="text-muted mb-0 text-wrap fs-15">This website is currently undergoing Scheduled maintenance.</p>
                                    <!-- <div class="mt-3 text-center">
                                        <a class="btn btn-primary w-50" href="index.html">Back to Dashboard <i class="fas fa-redo ms-1"></i></a> 
                                    </div> -->
                                    <span class="badge rounded text-primary bg-primary-subtle w-100 btn-lg fs-14 fw-bold mt-4 py-2">
                                        Check back later
                                    </span>
                                </div> 
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
        </div><!--end col-->
    </div><!--end row-->                                        
</div>

@endsection