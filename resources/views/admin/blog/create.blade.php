@extends('admin.master_admin')

@section('admin_content')
<!-- Flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<br><br>
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Create Blog</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('store.blog')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Blog Title</label>
                    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Blog Title">
                    @error('title')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                
                
                
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Blog Content</label>
                    <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
                    @error('content')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="type">Type</label>
                    <select class="form-control" id="type" name="type">
                        <option value="শিক্ষা সহায়তা">শিক্ষা সহায়তা</option>
                        <option value="মৃন্ময় পদক প্রদান">মৃন্ময় পদক প্রদান</option>
                        <option value="বৃক্ষ রোপন কর্মসূচি">বৃক্ষ রোপন কর্মসূচি</option>
                        <option value="ঈদ সামগ্রী বিতরণ">ঈদ সামগ্রী বিতরণ</option>
                        <option value="মানুষ মানুষের জন্য প্রকল্প">মানুষ মানুষের জন্য প্রকল্প</option>
                        <option value="বার্ষিক ভ্রমণ">বার্ষিক ভ্রমণ</option>
                    </select>
                    @error('type')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>







                <div class="form-group">
                    <label for="created_at">Created At</label>
                    <input type="text" class="form-control" id="created_at" name="created_at">
                   
                
                <!-- Include the necessary jQuery and jQuery UI Datepicker libraries -->
                

                

                  
                      
                  
















                
                  

                <div class="form-group">
                            <label style="color: rgb(185, 163, 35);" for="image1" class="form-label">Image 1</label>
                            <input type="file" style="padding:5px; border: 1px solid lightgray" name="image1" class="form-control" id="image1" aria-describedby="emailHelp" onchange="previewImage(event, 'preview1')">
                            @error('image1')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
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
                            <h5>Selected Images</h5>
                            <div id="preview3"></div>
                            
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
                        <button type="submit" class="btn btn-primary btn-default">Post</button>
                        
                    </div>
            </form>
        </div>
    </div>

<!-- Include the necessary jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Flatpickr JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        flatpickr("#created_at", {
            dateFormat: 'Y-m-d',
            allowInput: true
        });
    });
</script>
@endpush

@endsection