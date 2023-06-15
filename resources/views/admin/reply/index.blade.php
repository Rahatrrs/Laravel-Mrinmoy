@extends('admin.master_admin')

@section('admin_content')
<br><br>

<div class="py-12">
        <div class="container ">
            <div class="row" style="display: flex">
                <div class="head" style="width:89%">
                    <h4 >Blogs</h4>
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
                            All Blogs
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col" style="color: rgb(185, 163, 35);width:10%">Serial No.</th>
                                    <th scope="col" style="color: rgb(185, 163, 35);">Blog Id</th>
                                    <th scope="col" style="color: rgb(185, 163, 35);"> Name</th>
                                    <th scope="col" style="color: rgb(185, 163, 35); width:25%">Email</th>
                                    <th scope="col" style="color: rgb(185, 163, 35);">Meassage</th>
                                    
                                    
                                    
                                    
                                    <th scope="col" style="color: rgb(185, 163, 35);">Delete</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($replies as $key => $reply)
                                        <tr>
                                            <th scope="row">{{ $key + 1  }}</th>
                                            <td>
                                                {{ $reply->blog_id}}
                                             </td>
                                            
                                            <td>
                                               {{ $reply->name}}
                                            </td>
                                            <td>
                                                {{ $reply->email}}
                                             </td>
                                            <td>
                                                {{ $reply->message}}


                                            </td>
                                            
                                            
                                            
                                                <td><a href="{{url('reply/delete/'.$reply->id)}}" onclick="return confirm('Are You Sure?')" class="btn btn-danger">Delete</a></td>
                                            
                                                
                                            
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