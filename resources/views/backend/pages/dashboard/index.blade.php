
@extends('backend.layouts.master')

@section('title')
Dashboard Page - Admin Panel
@endsection


@section('admin-content')

<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6 clearfix">
             <h4 class="page-title pull-left">Manoj Singhal <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">Super Admin</span></h4>
        </div>
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <ul class="breadcrumbs pull-right">
                    <li><a href="#">Home</a></li>
                    <li><span>Dashboard</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- page title area end -->

<div class="main-content-inner">
  <div class="row">
    <div class="col-lg-12">
        <!--<div class="row">
            <div class="col-md-6 mt-5 mb-3">
                <div class="card">
                    <div class="seo-fact sbg1">
                        <a href="{{ route('admin.roles.index') }}">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="fa fa-users"></i> Roles</div>
                                <h2>{{ $total_roles }}</h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-md-5 mb-3">
                <div class="card">
                    <div class="seo-fact sbg2">
                        <a href="{{ route('admin.admins.index') }}">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="fa fa-user"></i> Admins</div>
                                <h2>{{ $total_admins }}</h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3 mb-lg-0">
                <div class="card">
                    <div class="seo-fact sbg3">
                        <div class="p-4 d-flex justify-content-between align-items-center">
                            <div class="seofct-icon">Permissions</div>
                            <h2>{{ $total_permissions }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="content-wrapper pb-0">
            <div class="row">
                  <div class="col-xl-3 col-md-12 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                    <div class="card bg-warning">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head">Projects</p>
                            <h2 class="text-white">715</h2>
                          </div>
                          <i class="card-icon-indicator mdi mdi-basket bg-inverse-icon-warning"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-12 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                    <div class="card bg-danger">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head">Instructors</p>
                            <h2 class="text-white">250
                            </h2>
                          </div>
                          <i class="card-icon-indicator mdi mdi-cube-outline bg-inverse-icon-danger"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-12 stretch-card grid-margin grid-margin-sm-0 pb-sm-3 pb-lg-0 pb-xl-3">
                    <div class="card bg-primary">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head">Students</p>
                            <h2 class="text-white">175</h2>
                          </div>
                          <i class="card-icon-indicator mdi mdi-briefcase-outline bg-inverse-icon-primary"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-12 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                    <div class="card bg-success">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head">User Management</p>
                            <h2 class="text-white">75</h2>
                          </div>
                          <i class="card-icon-indicator mdi mdi-account-circle bg-inverse-icon-success"></i>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            
            <!--<div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <h4 class="card-title">Line chart</h4>
                    <canvas id="lineChart" style="height: 216px; display: block; width: 432px;" width="432" height="216" class="chartjs-render-monitor"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <h4 class="card-title">Bar chart</h4>
                    <canvas id="barChart" style="height: 216px; display: block; width: 432px;" width="432" height="216" class="chartjs-render-monitor"></canvas>
                  </div>
                </div>
              </div>
            </div>-->
            
            <div class="row">
              <div class="col-xl-12 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body px-0 overflow-auto">
                    <h4 class="card-title pl-4">Students</h4>
                    <div class="table-responsive">
                         <table class="table">
                        <thead class="bg-light">
                          <tr>
                            <th>S.No</th>
                            <th>Student</th>
                            <th>Group</th>
                            <th> No.of Projects </th>
                            <th>Group Name</th>
                            <th>Batch No.</th>
                            <th>Instructor</th>
                            <th>Status</th> 
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                            	1
                            </td>
                             
                            <td>Jacob Nilson</td>
                            <td>B.Tech  CSE </td>
                            <td>6</td>
                            <td>Red</td>
                            <td> 4 </td>
                            <td>Williams</td>
                             <td>
                               <a href="#" class="badge badge-info">Active</a>
                            	<a href="#" class="badge badge-danger">Inactive</a>
                            </td>
                          </tr>
                          
                           <tr>
                            <td>
                            	2
                            </td>
                            <td>
                             Adward
                            </td>
                            <td> B.Sc   ECE</td>
                            <td>4</td>
                            <td>Green</td>
                            <td>5</td>
                            <td>James</td>
                             <td>
                               <a href="#" class="badge badge-info">Active</a>
                            	<a href="#" class="badge badge-danger">Inactive</a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                            	3
                            </td>
                            <td>
                             Williams James
                            </td>
                            <td> B.Tech  CSE</td>
                            <td>4</td>
                            <td>Yellow</td>
                            <td>3</td>
                            <td>Peter</td>
                             <td>
                               <a href="#" class="badge badge-info">Active</a>
                            	<a href="#" class="badge badge-danger">Inactive</a>
                            </td>
                          </tr>
                          
                            <tr>
                            <td>
                            	4
                            </td>
                            <td>
                             John Cricks 
                            </td>
                            <td>B.Tech ECE </td>
                            <td>4</td>
                            <td>Pink</td>
                            <td>3</td>
                            <td>John Paul </td>
                             <td>
                               <a href="#" class="badge badge-info">Active</a>
                            	<a href="#" class="badge badge-danger">Inactive</a>
                            </td>
                          </tr>
                          
                          <tr>
                            <td>
                            	5
                            </td>
                            <td>
                             Adam Smith  
                            </td>
                            <td>B.Tech CSE </td>
                            <td>4</td>
                            <td>Blue</td>
                            <td>3</td>
                            <td>Williams</td>
                             <td>
                               <a href="#" class="badge badge-info">Active</a>
                            	<a href="#" class="badge badge-danger">Inactive</a>
                            </td>
                          </tr>
                          
                        </tbody>
                      </table>
                    </div>
                    <a class="text-black mt-3 d-block pl-4" href="#">
                      <span class="font-weight-medium h6">View all Students</span>
                      <i class="mdi mdi-chevron-right"></i></a>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
    </div>
  </div>
</div>
@endsection