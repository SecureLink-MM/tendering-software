@extends('layouts.adminLayout.admin_design')

@section('title', 'Add Category')

@section('content')

<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{ url('/dashboard') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
      <a href="{{ route('view.categories') }}">Categories</a>
    </li>
    <li class="breadcrumb-item active">Add Category</li>
  </ol>

  <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-pencil-alt"></i> Add Category
      </div>
      <div class="card-body">
          <form action="{{ url('/admin/add-category') }}" method="post" name="add_category" id="add_category">
            @csrf
            <div class="form-group">
              <label for="category_name">Category Name</label>
              <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Category Name">
            </div>
            <div class="form-group">
              <label for="category_level">Category Level</label>
              <select name="parent_id" class="form-control">
                <option value="0">Main Category</option>
                @foreach($levels as $val)
                <option value="{{ $val->id }}">{{ $val->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="url">Category URL</label>
              <input type="text" class="form-control" id="url" name="url" placeholder="Category URL">
            </div>
            <input type="submit" class="btn btn-primary" value="Submit">
          </form>
      </div>
  </div>

</div>

@endsection
