@extends('admin.master_admin')

@section('admin_content')

<br><br>
<div class="container">
    <div class="card">
        <div class="card-header">
            Update Profile
        </div>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                    <span>{{ session('success') }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
    
        <div class="card-body">
            <form method="POST" action="{{route('profile.update')}}" enctype="multipart/form-data">
                @csrf
                <label for="exampleFormControlInput3">Current Profile Picture</label>
                <br>
                @if ($user->profile_photo_path == '')
                <img src="{{asset('backend/assets/default user.png')}}" style="height: 60px; border-radius:5px;" alt="">
                    
    
                @else
                <img src="{{asset($user['profile_photo_url'])}}" style="height: 60px; border-radius:5px;" alt="">
                @endif
                <br>
                <br>
                <a href="{{route('remove.picture')}}" class="btn btn-danger">Remove Profile Picture</a>
                <br><br>
                <div class="form-group">
                    <label for="exampleFormControlInput3">Update Picture</label>
                    <input  name="image" type="file" class="form-control" >
                    
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput3">User Name</label>
                    <input  name="name" type="text" class="form-control" value="{{$user['name']}}">
                    
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput3">User Name</label>
                    <input  name="email" type="text" class="form-control" value="{{$user['email']}}">
                    
                </div>
               
                <button class="btn btn-info" type="submit">Update</button>
            </form>
        </div>
    </div>
</div>
<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<!-- JavaScript dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>


@endsection