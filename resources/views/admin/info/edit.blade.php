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
                           Update Contact Info
                        </div>
                        <div class="card-body">
                            <form action="{{url('info/update/'.$infos->id)}}" method="POST" >
                                @csrf
                                <div class="mb-3">
                                    <label  style="color: rgb(185, 163, 35);" for="brand_name" class="form-label">Address</label>
                                    <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$infos->address}}">
                                    @error('address')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label  style="color: rgb(185, 163, 35);" for="brand_name" class="form-label">Phone</label>
                                    <input type="tel" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$infos->phone}}">
                                    @error('phone')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                

                                <div class="mb-3">
                                    <label  style="color: rgb(185, 163, 35);" for="brand_name" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$infos->email}}">
                                    @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                
                                
                                <button type="submit" class="btn btn-primary" style="color: rgb(185, 163, 35);font-weight:700">Update Info</button>
                            </form>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        
        {{-- Brand End --}}




    </div>
@endsection