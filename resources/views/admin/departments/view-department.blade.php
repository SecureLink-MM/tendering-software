@extends('layouts.adminLayout.admin_design')

@section('title', 'Departments')

@section('content')

<div id="content-wrapper">

  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('/admin/dashboard') }}">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Departments</li>
    </ol>

    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block mb-3">
	     <button type="button" class="close" data-dismiss="alert">×</button>
        {{ $message }}
    </div>
    @endif

    <a href="{{ route('department.create') }}" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Add New Department</a>

    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-list"></i> Department List
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Department Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($departments as $dep)
              <tr>
                <td>{{ $dep->id }}</td>
                <td>{{ $dep->name }}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('department.edit',$dep->id) }}" class="btn btn-sm btn-primary">Edit</a>&nbsp;
                        <form action="{{ route('department.destroy',$dep->id) }}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                        </form>
                    </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- /.content-wrapper -->

@endsection
