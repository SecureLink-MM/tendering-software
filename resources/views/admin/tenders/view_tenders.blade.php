@extends('layouts.adminLayout.admin_design')

@section('title', 'Tenders')

@section('content')

<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{ url('/admin/dashboard') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Tenders</li>
  </ol>

  <a href="{{ url('/admin/add-tender') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Add Tender</a>

  @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
  	   <button type="button" class="close" data-dismiss="alert">×</button>
       {{ $message }}
    </div>
  @endif

  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-list"></i>
      Tenders List</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Tender Name</th>
              <th>Category Name</th>
              <th>End Date</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($tenders as $tender)
            <tr>
              <td>{{ Str::words($tender->tender_name,2) }}</td>
              <td>{{ Str::words($tender->category_name,5) }}</td>
              <td>{{ $tender->end_date }}</td>
              <td>
                  <a href="{{ url('/admin/edit-tender/'.$tender->id) }}" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                  <a href="{{ url('/admin/delete-tender/'.$tender->id) }}" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="delete"><i class="far fa-trash-alt"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>

@endsection
