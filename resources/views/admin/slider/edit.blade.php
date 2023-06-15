@extends('admin.master_admin')

@section('admin_content')
    <br><br>
    <div class="py-12">
        {{-- Brand Start--}}
        <div class="container">
            <div class="row">
                
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Update Slider
                        </div>
                        <div class="card-body">
                            <form action="{{url('/slider/update/'.$sliders->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label  style="color: rgb(185, 163, 35);" for="slider_title" class="form-label">Slider Name</label>
                                    <input type="text" name="slider_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$sliders->slider_title}}">
                                    @error('slider_title')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label style="color: rgb(185, 163, 35);" for="slider_image" class="form-label">Slider Image</label>
                                    <input type="file" style="padding:5px; border: 1px solid lightgray" name="slider_image" class="form-control" id="slider_image" aria-describedby="emailHelp" onchange="previewImage(event)">
                                    @error('slider_image')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="new" style="border: 1px solid lightgray;padding:4px; margin-bootom:5px;">
                                    <h5>Selected Image</h5>
                                    <div id="image_preview"></div>
                                </div>
                                <br>
                                <div class="old" style="border: 1px solid lightgray;padding:4px; margin-bootom:5px;">
                                    <h5>Old Image</h5>
                                    <img style="height: 40px; width: 100px" src="{{asset($sliders->slider_image)}}" alt="">
                                </div>
                                <br>
                                
                                
                                
                                <script>
                                    function previewImage(event) {
                                        var input = event.target;
                                        if (input.files && input.files[0]) {
                                            var reader = new FileReader();
                                
                                            reader.onload = function(e) {
                                                var imgElement = document.createElement("img");
                                                imgElement.src = e.target.result;
                                                imgElement.style.maxWidth = "100px";
                                                imgElement.style.marginTop = "40px";
                                                document.getElementById("image_preview").innerHTML = "";
                                                document.getElementById("image_preview").appendChild(imgElement);
                                            }
                                
                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    }
                                </script>
                                
                                
                                <button type="submit" class="btn btn-primary" style="color: rgb(185, 163, 35);font-weight:700">Update</button>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Brand End --}}




    </div>
@endsection
