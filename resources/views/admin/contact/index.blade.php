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
                            All Messages
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col" style="color: rgb(185, 163, 35);width:5%">Serial No.</th>
                                    <th scope="col" style="color: rgb(185, 163, 35);"> Name</th>
                                    <th scope="col" style="color: rgb(185, 163, 35);">Email</th>
                                    <th scope="col" style="color: rgb(185, 163, 35);">Phone</th>
                                    <th scope="col" style="color: rgb(185, 163, 35); width:25%">Message</th>
                                    
                                    
                                    
                                    
                                    <th scope="col" style="color: rgb(185, 163, 35);">Delete</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($contacts as $key => $contact)
                                        <tr>
                                            <th scope="row">{{ $key + 1  }}</th>
                                            
                                            <td>
                                               {{ $contact->name}}
                                            </td>
                                            <td>
                                                {{ $contact->email}}
                                             </td>
                                             <td>
                                                {{ $contact->phone}}
                                             </td>
                                             <td>
                                                {{ $contact->message}}
                                             </td>
                                            
                                            
                                            
                                            
                                            
                                            
                                                
                                                <td><a href="{{url('message/delete/'.$contact->id)}}" onclick="return confirm('Are You Sure?')" class="btn btn-danger">Delete</a></td>
                                            
                                                
                                            
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