@extends('admin.master_admin')

@section('admin_content')
<br><br>
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
                            Sliders
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col" style="color: rgb(185, 163, 35);">Serial No.</th>
                                    <th scope="col" style="color: rgb(185, 163, 35);">Title</th>
                                    
                                    <th scope="col" style="color: rgb(185, 163, 35);">Preview</th>
                                    <th scope="col" style="color: rgb(185, 163, 35);">Created At</th>
                                    
                                    <th scope="col" style="color: rgb(185, 163, 35);">Update</th>
                                    <th scope="col" style="color: rgb(185, 163, 35);">Delete</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sliders as $key => $slider)
                                        <tr>
                                            <th scope="row">{{ $sliders->firstItem() + $key }}</th>
                                            <td>{{ $slider->slider_title }}</td>
                                            
                                            <td>
                                                <img style="width: 70px; height: 40px; margin-top: -4px;" src="{{asset($slider->slider_image)}}" alt="">
                                            </td>
                                            <td>{{ $slider->created_at->diffForHumans() }}</td>
                                           
                                                <td><a href="{{url('/slider/edit/'.$slider->id)}}" class="btn btn-info">Update</a></td>
                                                <td><a href="{{url('/slider/delete/'.$slider->id)}}" onclick="return confirm('Are You Sure?')" class="btn btn-danger">Delete</a></td>
                                            
                                                
                                            
                                        </tr>
                                    @endforeach
            
                                
                                </tbody>
                            </table>
                            {{ $sliders->links()}}
                        </div>
                    </div>
                </div>

                
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Add Slider
                        </div>
                        <div class="card-body">
                            <form action="/slider/add" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label  style="color: rgb(185, 163, 35);" for="brand_name" class="form-label">Slider Title</label>
                                    <input type="text" name="slider_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    @error('slider_title')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label style="color: rgb(185, 163, 35);" for="brand_image" class="form-label">SLider Image</label>
                                    <input type="file" style="padding:5px; border: 1px solid lightgray" name="slider_image" class="form-control" id="slider_image" aria-describedby="emailHelp" onchange="previewImage(event)">
                                    @error('slider_image')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div id="image_preview"></div>
                                <br>
                                
                                <script>
                                    function previewImage(event) {
                                        var input = event.target;
                                        if (input.files && input.files[0]) {
                                            var reader = new FileReader();
                                
                                            reader.onload = function(e) {
                                                var imgElement = document.createElement("img");
                                                imgElement.src = e.target.result;
                                                imgElement.style.maxWidth = "200px";
                                                imgElement.style.marginTop = "10px";
                                                document.getElementById("image_preview").innerHTML = "";
                                                document.getElementById("image_preview").appendChild(imgElement);
                                                
                                                
                                            }
                                
                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    }
                                </script>
                                
                                
                                <button type="submit" class="btn btn-primary" style="color: rgb(185, 163, 35);font-weight:700">Add Slider</button>
                              </form>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        
        {{-- Brand End --}}




    </div>
@endsection