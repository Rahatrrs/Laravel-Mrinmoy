@extends('admin.master_admin')

@section('admin_content')
<br><br>

<div class="py-12">
        <div class="container ">
            <div class="row" style="display: flex">
                <div class="head" style="width:89%">
                    <h4 >Blogs</h4>
                </div>
                <div class="button">
                    <a href="{{route('blog.add')}}" style="float: right;"><button class="btn btn-info">Add blog</button></a>
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
                                    <th scope="col" style="color: rgb(185, 163, 35);width:5%">Serial No.</th>
                                    <th scope="col" style="color: rgb(185, 163, 35);"> Title</th>
                                    <th scope="col" style="color: rgb(185, 163, 35); ">Content</th>
                                    <th scope="col" style="color: rgb(185, 163, 35);">Images </th>
                                    
                                    <th scope="col" style="color: rgb(185, 163, 35);">Author</th>
                                    
                                    
                                    <th scope="col" style="color: rgb(185, 163, 35);">Update</th>
                                    <th scope="col" style="color: rgb(185, 163, 35);">Delete</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($blogs as $key => $blog)
                                        <tr>
                                            <th scope="row">{{ $key + 1  }}</th>
                                            
                                            <td>
                                               <p style="width: 100px; word-wrap: break-word;">
                                                {{ $blog->title}}
                                               </p>
                                            </td>
                                            <td>
                                                <p style="width: 200px; word-wrap: break-word;">
                                                    {{ $blog->content}}
                                                </p>
                                             </td>
                                            <td>
                                                <img src="{{ asset($blog->image1)}}" style="height: 40px; width:80px" alt="">
                                                <br><br>
                                                <img src="{{ asset($blog->image2)}}" style="height: 40px; width:80px" alt="">
                                                <br> <br>
                                                <img src="{{ asset($blog->image3)}}" style="height: 40px; width:80px" alt="">
                                            </td>
                                            <td>
                                                @php
                                                    $user = \App\Models\User::find($blog->user_id);
                                                @endphp
                                                {{$user->name}}
                                            </td>
                                            
                                            
                                                <td><a href="{{url('blog/edit/'.$blog->id)}}" class="btn btn-info">Update</a></td>
                                                <td><a href="{{url('blog/delete/'.$blog->id)}}" onclick="return confirm('Are You Sure?')" class="btn btn-danger">Delete</a></td>
                                            
                                                
                                            
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