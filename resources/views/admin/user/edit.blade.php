@extends('layouts.adminLayout.admin_design')

@section('title', 'Your Profile')

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
                            <div class="card-header bg-dark text-white">
                                Edit Profile
                            </div>
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row mb-3">
                                        <div class="col-md-2">
                                            <img src="{{ asset('profile/'.$user->profile->profile_image) }}" alt="default" width="100">
                                        </div>
                                        <div class="col-md-10">
                                            <label for="image">Profile Image</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="user_name">Name</label>
                                        <input type="text" name="name" class="form-control" value="{{$user->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="user_email">Email</label>
                                        <input type="email" name="email" class="form-control" value="{{$user->email}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="***********">
                                    </div>
                                    <div class="form-group">
                                        <label for="facebook_link">Faceook Link</label>
                                        <input type="text" name="facebook_link" class="form-control" value="{{$user->profile->facebook_link}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="about">About</label>
                                        <textarea name="about" id="editor1" cols="30" rows="4" class="form-control">{{$user->profile->about}}</textarea>
                                    </div>
                                    <input type="submit" class="btn btn-block btn-primary" value="Update Profile">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
