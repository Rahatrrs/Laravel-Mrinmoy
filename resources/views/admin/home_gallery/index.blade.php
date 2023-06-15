@extends('admin.master_admin')

@section('admin_content')
<br><br>

<div class="py-12">
        <div class="container ">
            <div class="row" style="display: flex">
                <div class="head" style="width:89%">
                    <h4 >Home gallery</h4>
                </div>
                <div class="button">
                    <a href="{{route('home_gallery.add')}}" style="float: right;"><button class="btn btn-info">Add More</button></a>
                </div>
            </div>
        </div>
        <br>
        {{-- Brand Start--}}
        <div class="container">
            <div class="row">
                <br><br>
                <div class="col-md-12">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                        <span>{{ session('success') }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            Home Small Gallery
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col" style="color: rgb(185, 163, 35);width:5%">Serial No.</th>
                                    
                                    <th scope="col" style="color: rgb(185, 163, 35);">Images 1 </th>
                                    <th scope="col" style="color: rgb(185, 163, 35);">Images 2 </th>
                                    <th scope="col" style="color: rgb(185, 163, 35);">Images 3</th>
                                    <th scope="col" style="color: rgb(185, 163, 35);">Images 4</th>
                                    
                                    
                                    
                                    
                                    <th scope="col" style="color: rgb(185, 163, 35);">Update</th>
                                    <th scope="col" style="color: rgb(185, 163, 35);">Delete</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($home_galleries as $key => $home_gallery)
                                        <tr>
                                            <th scope="row">{{ $key + 1  }}</th>
                                            
                                            <td>
                                                <img src="{{ asset($home_gallery->image1)}}" style="height: 40px; width:80px" alt="">

                                            </td>
                                            <td>
                                                <img src="{{ asset($home_gallery->image2)}}" style="height: 40px; width:80px" alt="">

                                            </td>
                                            <td>
                                                <img src="{{ asset($home_gallery->image3)}}" style="height: 40px; width:80px" alt="">

                                            </td>
                                            <td>
                                                <img src="{{ asset($home_gallery->image4)}}" style="height: 40px; width:80px" alt="">

                                            </td>
                                            
                                            
                                            
                                                <td><a href="{{url('home_gallery/edit/'.$home_gallery->id)}}" class="btn btn-info">Update</a></td>
                                                <td><a href="{{url('home_gallery/delete/'.$home_gallery->id)}}" onclick="return confirm('Are You Sure?')" class="btn btn-danger">Delete</a></td>
                                            
                                                
                                            
                                        </tr>
                                    @endforeach
            
                                
                                </tbody>
                            </table>
                           
                            
                        </div>
                    </div>
                </div>

                
                
            </div>
        </div>
        
        {{-- Brand End --}}




    </div>
@endsection