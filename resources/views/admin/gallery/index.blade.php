@extends('admin.master_admin')

@section('admin_content')
<br><br>
<style>
    .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .pagination .prev,
    .pagination .next {
        display: flex;
        align-items: center;
        margin: 0 10px; /* Adjust the margin as needed */
    }
    
    .pagination .prev svg,
    .pagination .next svg {
        width: 0px; /* Adjust the width as per your preference */
        height: 20px; /* Adjust the height as per your preference */
        margin-right: 5px; /* Adjust the margin-right as needed */
    }
</style>
<div class="py-12">
    {{-- Brand Start--}}
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                    <span>{{ session('success') }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        Gallery
                    </div>
                    <div class="card-body">
                        <div class="card-group">
                            @foreach ($galleries as $gallery)
                                <div class="col-md-8 mt-5"  style="padding: 5px">
                                    <div class="card">
                                        <img style="padding: 3px; height:250px; width:420px;"  src="{{asset($gallery->image)}}" alt="">
                                        <div class="card-body">
                                            <a href="{{url('gallery/delete/'.$gallery->id)}}" onclick="return confirm('Are You Sure?')" class="btn btn-danger">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            
                        </div>
                        
                    </div>
                </div>
            </div>
            
           
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Add To Gallery
                    </div>
                    <div class="card-body">
                        <form action="/gallery/add" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="mb-3">
                                <label style="color: rgb(185, 163, 35);" for="image" class="form-label">Gallery Images</label>
                                <input type="file" style="padding:5px; border: 1px solid lightgray" name="image[]" class="form-control" id="image" aria-describedby="emailHelp" onchange="previewImage(event)" multiple="">
                                @error('image')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            
                            <br>
                            
                           
                            
                            
                            <button type="submit" class="btn btn-primary" style="color: rgb(185, 163, 35);font-weight:700">Add To Gallery</button>
                        </form>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    
    {{-- Brand End --}}




</div>
@endsection