@extends('layouts.adminLayout.admin_design')

@section('title', 'Profile')

@section('content')

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/admin/dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 mt-3">
                        <div class="card">
                            <div class="card-header">
                                Edit Profile
                            </div>
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="user_name">Name</label>
                                        <input type="text" name="name" class="form-control" value="{{$user->name}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="user_email">Email</label>
                                        <input type="email" name="email" class="form-control" value="{{$user->email}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="facebook_link">Faceook Link</label>
                                        <input type="text" name="facebook_link" class="form-control" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Choose Image</label>
                                        <input type="file" name="image" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="about">About</label>
                                        <textarea name="about" id="#editor1" cols="30" rows="4" class="form-control"></textarea>
                                    </div>
                                    <input type="submit" class="btn btn-block btn-success mt-5" value="Update">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection