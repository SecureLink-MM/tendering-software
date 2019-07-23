@extends('layouts.adminLayout.admin_design')

@section('title', 'Add Tender')

@section('content')

<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{ url('/dashboard') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
      <a href="{{ route('view.tenders') }}">Tenders</a>
    </li>
    <li class="breadcrumb-item active">Add Tender</li>
  </ol>

  <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-pencil-alt"></i> Add Tender
      </div>
      <div class="card-body">
          <form action="{{ url('/admin/add-tender') }}" method="post" name="add_tender" id="add_tender">
            @csrf
            <div class="form-group">
              <label for="tender_name">Tender Name</label>
              <input type="text" class="form-control" id="tender_name" name="tender_name" placeholder="Tender Name" required>
            </div>
            <div class="form-group">
                <label for="tender_description">Tender Description</label>
                <textarea name="tender_description" rows="10" cols="80" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="category_name">Category Name</label>
                <select class="form-control" name="category_id" id="category_id" required>
                  <?php echo $categories_drop_down; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="end_date">End Date</label>
                <input type="date" id="end_date" name="end_date" class="form-control" required>
            </div>
            <input type="submit" class="btn btn-primary" value="Submit">
          </form>
      </div>
  </div>

</div>

@endsection
