@extends('layouts.user.app')

@section('content')
<div class="page-content">
    <div class="container-xxl">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">                      
                                <h4 class="card-title">Economic Calender</h4>                      
                            </div><!--end col-->
                            <div class="col-auto">                      
                                <button type="button" class="btn btn-primary px-3 btn-sm fs-14"><i class="iconoir-calendar fs-16 me-2"></i> Filter</button>        
                            </div><!--end col-->
                        </div>  <!--end row-->                                  
                    </div><!--end card-header-->
                    <div class="card-body pt-0">
                        <div class="accordion card-bg " id="task-1">
                            <div class="task-accordion rounded  border-dashed border-theme-color mb-3 p-2">
                                <div class="cursor-pointer" data-bs-toggle="collapse" data-bs-target="#task-one" aria-expanded="true" aria-controls="task-one">
                                    <table class="table mb-0">
                                        <tbody>
                                            <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/Flag_of_the_United_States.png/1200px-Flag_of_the_United_States.png" class="thumb-md align-self-center rounded-circle me-2" alt="...">
                                                    <div class="flex-grow-1 text-truncate"> 
                                                        <h6 class="m-0 mb-1 fw-semibold">KOF Economic Barometer</h6>
                                                        <div class="fw-semibold"><span>20 Mar 2024</span> - <span class="text-info">4:30pm</span></div>                                                                                          
                                                    </div><!--end media body-->
                                                </div>
                                            </td>
                                            <td class="text-start">
                                                <h6 class="m-0 mb-1 fw-normal text-muted">Previous</h6>
                                                <span class="fs-14 fw-semibold">2.34K</span>   
                                            </td>
                                            <td class="text-start">
                                                <h6 class="m-0 mb-1 fw-normal text-muted">Actual</h6>
                                                <span class="fs-14 fw-semibold">2.34K</span>   
                                            </td>
                                            <td class="text-start">
                                                <h6 class="m-0 mb-1 fw-normal text-muted">Forecast</h6>
                                                <span class="fs-14 fw-semibold">2.34K</span>   
                                            </td>
                                            <td class="text-start">
                                                <h6 class="m-0 mb-1 fw-semibold">Priority</h6>
                                                <span class="text-danger"><i class="fa-solid fa-stop fs-10 me-1"></i> High</span>
                                            </td>
                                            
                                            <td class="text-end">
                                                <h6 class="m-0 mb-1 fw-semibold">Status</h6>
                                                <span class="badge rounded text-blue bg-transparent border border-blue p-1">In progress</span>
                                            </td>                                                    
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="task-one" class="accordion-collapse collapse show " data-bs-parent="#task-1">                                                
                                    <div class="accordion-body  bg-body border-dashed-top  p-3 p-3">
                                        <h6 class="fw-semibold">KOF Economic Barometer</h6>
                                        <p class="mt-2 mb-3">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis recusandae ratione voluptatem consequatur dignissimos at aliquam iste repellat? Temporibus dolores nostrum ad, eligendi mollitia saepe harum sequi illum esse aliquid?
                                        </p>
                                        <div class="row row-cols-auto">
                                            <div class="col col-md-3">
                                                <h6 class="m-0 mb-1 fw-semibold">Project type</h5>
                                                <p class="text-muted mb-0">Bank data Management</p>
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
                                </div><!--end task-->
                            </div> <!--end --> 
                            <div class="task-accordion rounded  border-dashed border-theme-color mb-3 p-2">
                                <div class="cursor-pointer " data-bs-toggle="collapse" data-bs-target="#task-two" aria-expanded="false" aria-controls="task-two">
                                    <table class="table mb-0">
                                        <tbody>
                                            <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <i class="iconoir-calendar fs-2 me-2"></i>
                                                    <div class="flex-grow-1 text-truncate"> 
                                                        <h6 class="m-0 mb-1 fw-semibold">Start from to end</h6>
                                                        <div class="fw-semibold"><span>10 Jan 2024</span> - <span class="text-danger"> 30 Apr 2024</span></div>                                                                                          
                                                    </div><!--end media body-->
                                                </div>
                                            </td>
                                            <td class="text-start">
                                                <h6 class="m-0 mb-1 fw-semibold">Task</h6>
                                                <span class="fs-13 fw-semibold">Add Product page</span>   
                                            </td>
                                            <td class="text-start">
                                                <h6 class="m-0 mb-1 fw-semibold">Priority</h6>
                                                <span class="text-warning"><i class="fa-solid fa-stop fs-10"></i> Low</span>
                                            </td>  
                                                
                                            <td class="text-start">
                                                <h6 class="m-0 mb-1 fw-semibold">Team</h6>
                                                <span class="text-secondary">Flutter development team</span>
                                            </td> 
                                            
                                            <td class="text-end">
                                                <h6 class="m-0 mb-1 fw-semibold">Status</h6>
                                                <span class="badge rounded text-success bg-transparent border border-success p-1">Done</span>
                                            </td>                                                    
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="task-two" class="accordion-collapse collapse" data-bs-parent="#task-1">                                                
                                    <div class="accordion-body  bg-body border-dashed-top  p-3">
                                        <h6 class="fw-semibold">Task Info</h6>
                                        <p class="mt-2 mb-3">
                                            Outline common error scenarios that team members may encounter when using the APIs. 
                                            Provide guidance on how to handle these errors gracefully and troubleshoot issues effectively.
                                            Offer examples of typical API requests and corresponding responses. 
                                            These examples can help team members understand how to interact with the APIs and interpret the data they receive.
                                        </p>
                                        <div class="row row-cols-auto">
                                            <div class="col col-md-3">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images/users/avatar-1.jpg" class="thumb-md align-self-center rounded-circle" alt="...">
                                                    <div class="flex-grow-1 ms-2">
                                                        <h6 class="m-0 mb-1 fw-semibold">Daniel Baldwin</h5>
                                                        <p class="text-muted mb-0">Client</p>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col col-md-3">
                                                <h6 class="m-0 mb-1 fw-semibold">Project type</h5>
                                                <p class="text-muted mb-0">Ecommerce</p>
                                            </div><!--end col-->
                                            <div class="col col-md-2 text-end align-self-center">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="m-0 mb-1 fw-semibold">Progress</h5>
                                                    <small class="text-end">85%</small>
                                                </div>
                                                <div class="progress bg-secondary-subtle" style="height:5px;">
                                                    <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 45% " aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div><!--end col-->                                                        
                                            <div class="col col-md-2">
                                                <h6 class="m-0 mb-1 fw-semibold">Total Report</h5>
                                                <p class="text-muted mb-0">15</p>
                                            </div><!--end col-->
                                            <div class="col col-md-2">
                                                <h6 class="m-0 mb-1 fw-semibold">Assigned To</h5>
                                                <p class="text-muted mb-0">Pearl Carlson</p>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end accordion-body-->
                                </div><!--end task-->
                            </div> <!--end --> 
                            <div class="task-accordion rounded  border-dashed border-theme-color p-2">
                                <div class="cursor-pointer" data-bs-toggle="collapse" data-bs-target="#task-three" aria-expanded="false" aria-controls="task-three">
                                    <table class="table mb-0">
                                        <tbody>
                                            <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <i class="iconoir-calendar fs-2 me-2"></i>
                                                    <div class="flex-grow-1 text-truncate"> 
                                                        <h6 class="m-0 mb-1 fw-semibold">Start from to end</h6>
                                                        <div class="fw-semibold"><span>15 jun 2024</span> - <span class="text-danger"> 15 Aug 2024</span></div>                                                                                          
                                                    </div><!--end media body-->
                                                </div>
                                            </td>
                                            <td class="text-start">
                                                <h6 class="m-0 mb-1 fw-semibold">Task</h6>
                                                <span class="fs-13 fw-semibold">Form submit page</span>   
                                            </td>
                                            <td class="text-start">
                                                <h6 class="m-0 mb-1 fw-semibold">Priority</h6>
                                                <span class="text-info"><i class="fa-solid fa-stop fs-10"></i> Medium</span>
                                            </td>  
                                                
                                            <td class="text-start">
                                                <h6 class="m-0 mb-1 fw-semibold">Team</h6>
                                                <span class="text-secondary">Agular development team</span>
                                            </td> 
                                            
                                            <td class="text-end">
                                                <h6 class="m-0 mb-1 fw-semibold">Status</h6>
                                                <span class="badge rounded text-secondary bg-transparent border border-secondary p-1">Pending</span>
                                            </td>                                                    
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="task-three" class="accordion-collapse collapse" data-bs-parent="#task-1">                                                
                                    <div class="accordion-body  bg-body border-dashed-top  p-3">
                                        <h6 class="fw-semibold">Task Info</h6>
                                        <p class="mt-2 mb-3">
                                            Outline common error scenarios that team members may encounter when using the APIs. 
                                            Provide guidance on how to handle these errors gracefully and troubleshoot issues effectively.
                                            Offer examples of typical API requests and corresponding responses. 
                                            These examples can help team members understand how to interact with the APIs and interpret the data they receive.
                                        </p>
                                        <div class="row row-cols-auto">
                                            <div class="col col-md-3">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images/users/avatar-3.jpg" class="thumb-md align-self-center rounded-circle" alt="...">
                                                    <div class="flex-grow-1 ms-2">
                                                        <h6 class="m-0 mb-1 fw-semibold">Unity Pugh</h5>
                                                        <p class="text-muted mb-0">Client</p>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col col-md-3">
                                                <h6 class="m-0 mb-1 fw-semibold">Project type</h5>
                                                <p class="text-muted mb-0">AI Chat & Images</p>
                                            </div><!--end col-->
                                            <div class="col col-md-2 text-end align-self-center">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="m-0 mb-1 fw-semibold">Progress</h5>
                                                    <small class="text-end">30%</small>
                                                </div>
                                                <div class="progress bg-secondary-subtle" style="height:5px;">
                                                    <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 15% " aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div><!--end col-->                                                        
                                            <div class="col col-md-2">
                                                <h6 class="m-0 mb-1 fw-semibold">Total Report</h5>
                                                <p class="text-muted mb-0">8</p>
                                            </div><!--end col-->
                                            <div class="col col-md-2">
                                                <h6 class="m-0 mb-1 fw-semibold">Assigned To</h5>
                                                <p class="text-muted mb-0">Theodore Duran</p>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end accordion-body-->
                                </div><!--end task-->
                            </div> <!--end -->                                       
                        </div><!--end accordion-->                                    
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->   
    </div> <!-- end row -->   
    @include('components.user.footer')
</div> <!-- end row -->   

@endsection

@section('script')



@endsection