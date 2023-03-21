
@extends('backend.layouts.master')

@section('title')
User Create - Admin Panel
@endsection

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<style>
    .form-check-label {
        text-transform: capitalize;
    }
</style>
@endsection


@section('admin-content')

<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Instructor Create</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.instructors.index') }}">All Instructors</a></li>
                    <li><span>Create Instructor</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 pull-right" style="text-align:right;">
             <a class="btn btn-primary text-white" href="{{ route('admin.instructors.index') }}">Back to Instructors</a>
        </div>
    </div>
</div>
<!-- page title area end -->

<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Create New Instructor</h4>
                    @include('backend.layouts.partials.messages')
                    
                    
                    <form action="{{ route('admin.instructors.store') }}" method="POST">
                        @csrf
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Name</label>
                                <div class="col-sm-6">
                                  <input type="text" name="name" class="form-control" />
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Email</label>
                                <div class="col-sm-6">
                                  <input type="text" name="email" class="form-control" />
                                </div>
                              </div>
                            </div> 
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Phone Number</label>
                                <div class="col-sm-6">
                                  <input type="text" name="phone" class="form-control" />
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-6 col-form-label">University</label>
                                <div class="col-sm-6">
                                  <input type="text" name="university" class="form-control" />
                                </div>
                              </div>
                            </div>
                          </div>
                          
                           
                          <div class="row">
                               <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-6 col-form-label"> Department</label>
                                <div class="col-sm-6">
                                  <input type="text" name="department" class="form-control" />
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Address</label>
                                <div class="col-sm-6">
                                  <input type="text" name="address" class="form-control" />
                                </div>
                              </div>
                            </div>     
                          </div>
                          
                          <div class="row">
                            
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-6 col-form-label">State</label>
                                <div class="col-sm-6">
                                  <select name="state" id="state" class="form-control">
                                    <option value="">Select</option>
                                     @foreach ($states as $state)
                                        <option value="{{ $state->state_code }}">{{ $state->state_name }}</option>
                                     @endforeach
                                </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-6 col-form-label">City</label>
                                <div class="col-sm-6">
                                  <input type="text" name="city" class="form-control" />
                                </div>
                              </div>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                          <button class="btn btn-light">Cancel</button>
                        </form>
                </div>
            </div>
        </div>
        <!-- data table end -->
        
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    })
</script>
@endsection