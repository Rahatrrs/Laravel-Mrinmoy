@extends('admin.master_admin')

@section('admin_content')
<br><br>

<div class="py-12">
        
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
                            All NewsLetter mails
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col" style="color: rgb(185, 163, 35);width:5%">Serial No.</th>
                                    
                                    <th scope="col" style="color: rgb(185, 163, 35);">Email</th>
                                    <th scope="col" style="color: rgb(185, 163, 35);">Sign Up Date</th>
                                                               
                                                                      
                                    <th scope="col" style="color: rgb(185, 163, 35);">Delete</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($emails as $key => $email)
                                        <tr>
                                            <th scope="row">{{ $key + 1  }}</th>
                                            
                                            <td>
                                               {{ $email->email}}
                                            </td>
                                            <td>
                                                {{ \Carbon\Carbon::parse($email->created_at)->setTimezone('Asia/Dhaka')->format('M d, Y') }}
                                             </td>
                                             
                                            
                                            
                                            
                                            
                                            
                                            
                                                
                                                <td><a href="{{url('newsletter/delete/'.$email->id)}}" onclick="return confirm('Are You Sure?')" class="btn btn-danger">Delete</a></td>
                                            
                                                
                                            
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