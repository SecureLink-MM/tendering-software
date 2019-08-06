@extends('layouts.adminLayout.admin_design')

@section('title', 'Award Tenders')

@section('content')

<div id="content-wrapper">

  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('/admin/dashboard') }}">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Award Tenders</li>
    </ol>

    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block mb-3">
	     <button type="button" class="close" data-dismiss="alert">×</button>
        {{ $message }}
    </div>
    @endif

    <a href="{{ route('award-tender.create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Add Award Tender</a>

    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-list"></i> Award Tender List
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Tender Name</th>
                <th>Company Name</th>
                <th>Description</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($awardtenders as $awardtender)
                <tr>
                  <td>{{ Str::words($awardtender->tender_name,5) }}</td>
                  <td>{{ $awardtender->company_name }}</td>
                  <td>{!! Str::words($awardtender->description,5) !!}</td>
                  <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                          <a href="{{ route('award-tender.edit',$awardtender->id)}}" class="btn btn-sm btn-primary">Edit</a>&nbsp;
                          <form action="{{ route('award-tender.destroy',$awardtender->id) }}" method="post">
                              @csrf
                              {{ method_field('DELETE') }}
                              <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                          </form>
                      </div>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- /.content-wrapper -->

@endsection
