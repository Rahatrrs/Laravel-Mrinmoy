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
                            Contact Information
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col" style="color: rgb(185, 163, 35);">Serial No.</th>
                                    <th scope="col" style="color: rgb(185, 163, 35);">Address</th>
                                    
                                    <th scope="col" style="color: rgb(185, 163, 35);">Phone</th>
                                    <th scope="col" style="color: rgb(185, 163, 35);">Email</th>
                                    
                                    <th scope="col" style="color: rgb(185, 163, 35);">Update</th>
                                    <th scope="col" style="color: rgb(185, 163, 35);">Delete</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $key=1;
                                    @endphp
                                    @foreach ($infos as $info)
                                        <tr>
                                            <th scope="row">{{  $key++ }}</th>
                                            <td>{{ $info->address }}</td>
                                            <td>{{ $info->phone }}</td>
                                            <td>{{ $info->email }}</td>
                                            
                                            
                                            
                                           
                                            <td><a href="{{url('/info/edit/'.$info->id)}}" class="btn btn-info">Update</a></td>
                                            <td><a href="{{url('/info/delete/'.$info->id)}}" onclick="return confirm('Are You Sure?')" class="btn btn-danger">Delete</a></td>
                                            
                                                
                                            
                                        </tr>
                                    @endforeach
            
                                
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>

                
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Add Contact Info
                        </div>
                        <div class="card-body">
                            <form action="/info/add" method="POST" >
                                @csrf
                                <div class="mb-3">
                                    <label  style="color: rgb(185, 163, 35);" for="brand_name" class="form-label">Address</label>
                                    <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    @error('address')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label  style="color: rgb(185, 163, 35);" for="brand_name" class="form-label">Phone</label>
                                    <input type="tel" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    @error('phone')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                

                                <div class="mb-3">
                                    <label  style="color: rgb(185, 163, 35);" for="brand_name" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                
                                
                                <button type="submit" class="btn btn-primary" style="color: rgb(185, 163, 35);font-weight:700">Add Info</button>
                            </form>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        
        {{-- Brand End --}}




    </div>
@endsection