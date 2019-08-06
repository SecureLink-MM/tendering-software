@extends('layouts.adminLayout.admin_design')

@section('title', 'Add Award Tender')

@section('content')

<div id="content-wrapper">

  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('/admin/dashboard') }}">Dashboard</a>
      </li>
      <li class="breadcrumb-item">
        <a href="{{ route('award-tender.index') }}">Award Tenders</a>
      </li>
      <li class="breadcrumb-item active">Add Award Tender</li>
    </ol>

    <!-- DataTables Example -->
    <div class="col-md-12 mt-3">
                <div class="card">
                <div class="card-header bg-dark text-white">
                  <i class="fas fa-pencil-alt"></i> Add Award Tender
                </div>
                <div class="card-body">
                    <form action="{{ route('award-tender.store') }}" method="post">
                        @csrf
                        @include('layouts.error')
                        <div class="form-group">
                            <label for="tender_name">Tender Name</label>
                            <input type="text" name="tender_name" id="tender_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="company_name">Company Name</label>
                            <input type="text" name="company_name" id="company_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="editor1" class="form-control" rows="8" cols="80"></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Save">
                    </form>
                </div>
              </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- /.content-wrapper -->

@endsection
