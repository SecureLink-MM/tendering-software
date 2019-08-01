@extends('layouts.adminLayout.admin_design')

@section('title', 'Add Departments')

@section('content')

<div id="content-wrapper">

  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('/admin/dashboard') }}">Dashboard</a>
      </li>
      <li class="breadcrumb-item">
        <a href="{{ route('department.index') }}">Department</a>
      </li>
      <li class="breadcrumb-item active">Add Department</li>
    </ol>

    <!-- DataTables Example -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-3">
                <div class="card">
                <div class="card-header">
                  <i class="fas fa-pencil-alt"></i> Add Department
                </div>
                <div class="card-body">
                    <form action="{{ route('department.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            @include('layouts.error')
                            <label for="department_name">Department Name</label>
                            <input type="text" name="department_name" id="department_name" class="form-control" required>
                        </div>
                        <input type="submit" class="btn btn-success" value="Save">
                    </form>
                </div>
              </div>
            </div>
        </div>
    </div>


  </div>
  <!-- /.container-fluid -->

</div>
<!-- /.content-wrapper -->

@endsection
