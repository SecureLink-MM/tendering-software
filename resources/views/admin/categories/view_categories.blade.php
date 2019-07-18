@extends('layouts.adminLayout.admin_design')

@section('title', 'Categories')

@section('content')

<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{ url('/dashboard') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Categories</li>
  </ol>

  <a href="{{ url('/admin/add-category') }}" class="btn btn-primary mb-3">Add Category</a>

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
      Categories List</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Category Name</th>
              <th>Category Level</th>
              <th>Category URL</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($categories as $category)
            <tr>
              <td>{{$category->name}}</td>
              <td>{{$category->parent_id}}</td>
              <td>{{$category->url}}</td>
              <td>
                  <a href="#" class="btn btn-sm btn-primary"><i class="far fa-edit"></i> Edit</a>
                  <a href="#" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> Delete</a>
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
