@extends('layouts.adminLayout.admin_design')

@section('title', 'Add Tender')

@section('content')

<div id="content-wrapper">

  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('/admin/dashboard') }}">Dashboard</a>
      </li>
      <li class="breadcrumb-item">
        <a href="{{ route('tender.index') }}">Tenders</a>
      </li>
      <li class="breadcrumb-item active">Add Tender</li>
    </ol>

    <!-- DataTables Example -->
    <div class="col-md-12 mt-3">
                <div class="card">
                <div class="card-header">
                  <i class="fas fa-pencil-alt"></i> Add New Tender
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @include('layouts.error')
                        <div class="form-group">
                            <label for="tender_name">Tender Name</label>
                            <input type="text" name="tender_name" id="tender_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="tender_description">Tender Description</label>
                            <textarea name="tender_description" id="tender_description" class="form-control" rows="8" cols="80"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="close_date">Close Date</label>
                            <input type="date" name="close_date" id="close_date" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-success" value="Add Tender">
                    </form>
                </div>
              </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- /.content-wrapper -->

@endsection
