@extends('layouts.adminLayout.admin_design')

@section('title', 'Dashboard')

@section('content')

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Overview</li>
  </ol>

  <!-- Icon Cards-->
  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-primary o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-synagogue"></i>
          </div>
          <div class="mr-5">{{ $departmentCount }} Department</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{ route('department.index') }}">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-warning o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-paste"></i>
          </div>
          <div class="mr-5">{{ $tenderCount }} Tender</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{ route('tender.index') }}">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-success o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-award"></i>
          </div>
          <div class="mr-5">{{ $awardtenderCount }} Award Tenders</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{ route('award-tender.index') }}">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-danger o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="far fa-building"></i>
          </div>
          <div class="mr-5">Company</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="#">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <i class="fas fa-synagogue"></i> Departments
            </div>
            <ul class="list-group">
                @forelse($departments as $dep)
                  <li class="list-group-item">{{ $dep->name }}</li>
                @empty
                  <li class="list-group-item">Department unavailable</li>
                @endforelse
            </ul>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-warning text-white">
                <i class="fas fa-paste"></i> Tenders
            </div>
            <ul class="list-group">
                @forelse($tenders as $tender)
                  <li class="list-group-item">{{ $tender->title }}</li>
                @empty
                  <li class="list-group-item">Tender unavailable</li>
                @endforelse
            </ul>
        </div>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-success text-white">
                <i class="fas fa-award"></i> Award Tenders
            </div>
            <ul class="list-group">
                @forelse($awardtenders as $awardtender)
                  <li class="list-group-item">{{ $awardtender->tender_name }}</li>
                @empty
                  <li class="list-group-item">Award Tender unavailable</li>
                @endforelse
            </ul>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-danger text-white">
                <i class="far fa-building"></i> Company
            </div>
            <ul class="list-group">
                <li class="list-group-item"></li>
            </ul>
        </div>
    </div>
  </div>


</div>
<!-- /.container-fluid -->

@endsection
