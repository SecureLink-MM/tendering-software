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
                <div class="card-header bg-dark text-white">
                  <i class="fas fa-pencil-alt"></i> Add Tender
                </div>
                <div class="card-body">
                    <form action="{{ route('tender.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @include('layouts.error')
                        <div class="form-group">
                            <label for="tender_name">Tender Name</label>
                            <input type="text" name="title" id="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="department">Choose Department</label>
                            <select class="form-control" name="department_id">
                                <option>Select Department</option>
                                @foreach($departments as $dep)
                                  <option value="{{ $dep->id }}">{{ $dep->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tender_description">Tender Description</label>
                            <textarea name="content" id="editor1" class="form-control" rows="8" cols="80"></textarea>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col">
                                <label for="close_date">Upload PDF</label>
                                <input type="file" name="filename" id="filename" class="form-control" required>
                            </div>
                            <div class="col">
                                <label for="close_date">Close Date</label>
                                <input type="date" name="close_date" id="close_date" class="form-control" required>
                            </div>
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
