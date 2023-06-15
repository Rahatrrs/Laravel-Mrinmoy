@extends('admin.master_admin')

@section('admin_content')
<br><br>
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Update Home Gallery</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="{{url('home_gallery/update/'.$home_galleries->id)}}" enctype="multipart/form-data">
                @csrf
                
                
                
                
                


                <div class="form-group">
                            <label style="color: rgb(185, 163, 35);" for="image1" class="form-label">Image 1</label>
                            <input type="file" style="padding:5px; border: 1px solid lightgray" name="image1" class="form-control" id="image1" aria-describedby="emailHelp" onchange="previewImage(event, 'preview1')">
                            @error('image1')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="new" style="border: 1px solid lightgray; padding: 4px; margin-bottom: 5px;">
                            <h5>Old Images</h5>
                            <img src="{{asset($home_galleries->image1)}}" style="height: 80px"  alt="">
                            
                        </div>
                        <div class="new" style="border: 1px solid lightgray; padding: 4px; margin-bottom: 5px;">
                            <h5>Selected Images</h5>
                            <div id="preview1"></div>
                            
                        </div>

                        <div class="form-group">
                            <label style="color: rgb(185, 163, 35);" for="image2" class="form-label">Image 2</label>
                            <input type="file" style="padding:5px; border: 1px solid lightgray" name="image2" class="form-control" id="image2" aria-describedby="emailHelp" onchange="previewImage(event, 'preview2')">
                            @error('image2')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="new" style="border: 1px solid lightgray; padding: 4px; margin-bottom: 5px;">
                            <h5>Old Images</h5>
                            <img src="{{asset($home_galleries->image2)}}" style="height: 80px"  alt="">
                            
                        </div>
                        <div class="new" style="border: 1px solid lightgray; padding: 4px; margin-bottom: 5px;">
                            <h5>Selected Images</h5>
                            <div id="preview2"></div>
                            
                        </div>

                        <div class="form-group">
                            <label style="color: rgb(185, 163, 35);" for="image3" class="form-label">Image 3</label>
                            <input type="file" style="padding:5px; border: 1px solid lightgray" name="image3" class="form-control" id="image3" aria-describedby="emailHelp" onchange="previewImage(event, 'preview3')">
                            @error('image3')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="new" style="border: 1px solid lightgray; padding: 4px; margin-bottom: 5px;">
                            <h5>Old Images</h5>
                            <img src="{{asset($home_galleries->image3)}}" style="height: 80px"  alt="">
                            
                        </div>

                        <div class="new" style="border: 1px solid lightgray; padding: 4px; margin-bottom: 5px;">
                            <h5>Selected Images</h5>
                            <div id="preview3"></div>
                            
                        </div>





                        <div class="form-group">
                            <label style="color: rgb(185, 163, 35);" for="image3" class="form-label">Image 4</label>
                            <input type="file" style="padding:5px; border: 1px solid lightgray" name="image4" class="form-control" id="image4" aria-describedby="emailHelp" onchange="previewImage(event, 'preview4')">
                            @error('image4')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="new" style="border: 1px solid lightgray; padding: 4px; margin-bottom: 5px;">
                            <h5>Old Images</h5>
                            <img src="{{asset($home_galleries->image4)}}" style="height: 80px"  alt="">
                            
                        </div>

                        <div class="new" style="border: 1px solid lightgray; padding: 4px; margin-bottom: 5px;">
                            <h5>Selected Images</h5>
                            <div id="preview4"></div>
                            
                        </div>

                        <script>
                            function previewImage(event, previewId) {
                                var input = event.target;
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();

                                    reader.onload = function(e) {
                                        var imgElement = document.createElement("img");
                                        imgElement.src = e.target.result;
                                        imgElement.style.maxWidth = "100px";
                                        imgElement.style.marginTop = "40px";
                                        document.getElementById(previewId).innerHTML = "";
                                        document.getElementById(previewId).appendChild(imgElement);
                                    }

                                    reader.readAsDataURL(input.files[0]);
                                }
                            }
                        </script>


                
                
                
                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Update</button>
                        
                    </div>
            </form>
        </div>
    </div>

    

@endsection