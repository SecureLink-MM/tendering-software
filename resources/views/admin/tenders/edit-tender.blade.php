@extends('layouts.adminLayout.admin_design')

@section('title', 'Edit Tender')

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
      <li class="breadcrumb-item active">Edit Tender</li>
    </ol>

    <!-- DataTables Example -->
    <div class="col-md-12 mt-3">
                <div class="card">
                <div class="card-header">
                  <i class="fas fa-pencil-alt"></i> Edit Tender
                </div>
                <div class="card-body">
                    <form action="{{ route('tender.update',$tender->id) }}" method="post">
                        @csrf
                        {{ method_field('PUT') }}
                        @include('layouts.error')
                        <div class="form-group">
                            <label for="tender_name">Tender Name</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $tender->title }}" required>
                        </div>
                        <div class="form-group">
                            <label for="department">Choose Department</label>
                            <select class="form-control" name="department_id">
                                <option>Select Department</option>
                                @foreach($departments as $dep)
                                <option value="{{ $dep->id }}" @if($dep->id == $tender->department_id) selected @endif >{{ $dep->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tender_description">Tender Description</label>
                            <textarea name="content" id="editor1" class="form-control" rows="8" cols="80">{!! $tender->content !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="close_date">Close Date</label>
                            <input type="date" name="close_date" id="close_date" class="form-control" value="{{ $tender->close_date }}" required>
                        </div>
                        <input type="submit" class="btn btn-success" value="Save">
                    </form>
                </div>
              </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- /.content-wrapper -->

@endsection
