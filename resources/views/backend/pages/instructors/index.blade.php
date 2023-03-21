
@extends('backend.layouts.master')

@section('title')
Users - Admin Panel
@endsection

@section('styles')
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
@endsection


@section('admin-content')

<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Instructors</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><span>All Instructors</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 pull-right" style="text-align:right;">
            <a class="btn btn-primary text-white" href="{{ route('admin.instructors.create') }}">Create New Instructor</a>
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
                    <div class="clearfix"></div>
                    <div class="data-tables">
                        @include('backend.layouts.partials.messages')
                        <table id="dataTable" class="text-center">
                            <thead class="bg-light text-capitalize">
                                <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>University</th>
                                    <th>Department</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Action</th>
                                  </tr>
                            </thead>
                            <tbody>
                               @foreach ($instructors as $instructor)
                               <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $instructor->name }}</td>
                                    <td>{{ $instructor->email }}</td>
                                    <td>{{ $instructor->phone }}</td>
                                    <td>{{ $instructor->university }}</td>
                                    <td>{{ $instructor->department }}</td>
                                    <td>{{ $instructor->state }}</td>
                                    <td>{{ $instructor->city }}</td>
                                    <td>
                                        <a class="btn btn-success text-white" href="{{ route('admin.instructors.edit', $instructor->id) }}">Edit</a>

                                        <a class="btn btn-danger text-white" href="{{ route('admin.instructors.destroy', $instructor->id) }}"
                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $instructor->id }}').submit();">
                                            Delete
                                        </a>

                                        <form id="delete-form-{{ $instructor->id }}" action="{{ route('admin.instructors.destroy', $instructor->id) }}" method="POST" style="display: none;">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- data table end -->
        
    </div>
</div>
@endsection


@section('scripts')
     <!-- Start datatable js -->
     <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
     <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
     <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
     <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
     
     <script>
         /*================================
        datatable active
        ==================================*/
        if ($('#dataTable').length) {
            $('#dataTable').DataTable({
                responsive: true
            });
        }

     </script>
@endsection