@extends('layouts.adminLayout.admin_design')

@section('title', 'Edit Category')

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
    <li class="breadcrumb-item active">Edit Category</li>
  </ol>

  <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-pencil-alt"></i> Edit Category
      </div>
      <div class="card-body">
          <form action="{{ url('admin/edit-category/'.$categoryDetails->id) }}" method="post" name="add_category" id="add_category">
            @csrf
            <div class="form-group">
              <label for="category_name">Category Name</label>
              <input type="text" class="form-control" id="category_name" name="category_name" value="{{ $categoryDetails->name }}">
            </div>
            <div class="form-group">
              <label for="category_level">Category Level</label>
              <select name="parent_id" class="form-control">
                <option value="0">Main Category</option>
                @foreach($levels as $val)
                    <option value="{{ $val->id }}" @if($val->id==$categoryDetails->parent_id) selected @endif>{{ $val->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="url">Category URL</label>
              <input type="text" class="form-control" id="url" name="url" value="{{ $categoryDetails->url }}">
            </div>
            <input type="submit" class="btn btn-primary" value="Update">
          </form>
      </div>
  </div>

</div>

@endsection
