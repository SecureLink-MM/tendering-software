@extends('layouts.adminLayout.admin_design')

@section('title', 'Edit Tender')

@section('content')

<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{ url('/admin/dashboard') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
      <a href="{{ route('view.tenders') }}">Tenders</a>
    </li>
    <li class="breadcrumb-item active">Edit Tender</li>
  </ol>

  <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-pencil-alt"></i> Edit Tender
      </div>
      <div class="card-body">
          <form action="{{ url('admin/edit-tender/'.$tenderDetails->id) }}" method="post" name="edit_tender" id="edit_tender">
            @csrf
            <div class="form-group">
              <label for="tender_name">Tender Name</label>
              <input type="text" class="form-control" id="tender_name" name="tender_name" placeholder="Tender Name" value="{{ $tenderDetails->tender_name }}" required>
            </div>
            <div class="form-group">
                <label for="tender_description">Tender Description</label>
                <textarea name="tender_description" rows="10" cols="80" class="form-control">{!! $tenderDetails->tender_description !!}</textarea>
            </div>
            <div class="form-group">
              <label for="category_name">Category Name</label>
                <select class="form-control" name="category_id" id="category_id" required>
                  <?php echo $categories_drop_down; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="end_date">End Date</label>
                <input type="date" id="end_date" name="end_date" class="form-control" value="{{ $tenderDetails->end_date }}" required>
            </div>
            <input type="submit" class="btn btn-primary" value="Update">
          </form>
      </div>
  </div>

</div>

@endsection
