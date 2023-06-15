<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
      <!-- Aplication Brand -->
      <div class="app-brand">
        <a href="/dashboard">
          <img src="{{asset('frontend/mrinmoy/new.png')}}" style="height: 40px" alt="">
          <span class="brand-name"> Dashboard</span>
        </a>
      </div>
      <!-- begin sidebar scrollbar -->
      <div class="sidebar-scrollbar">

        <!-- sidebar menu -->
        <ul class="nav sidebar-inner" id="sidebar-menu">
          

          
            <li  class="has-sub active expand" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                aria-expanded="false" aria-controls="dashboard">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Home Control</span> <b class="caret"></b>
              </a>
              <ul  class="collapse show"  id="dashboard"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                  
                  
                    
                      <li  class="active" >
                        <a class="sidenav-item-link" href="{{route('slider')}}">
                          <span class="nav-text">Slider Update</span>
                          
                        </a>
                      </li>
                    
                  

                  
                  
                    
                      <li >
                        <a class="sidenav-item-link" href="{{route('blog')}}">
                          <span class="nav-text">Post Blogs</span>
                          
                          
                          
                        </a>
                      </li>

                      
                      <li >
                        <a class="sidenav-item-link" href="{{route('admin.gallery')}}">
                          <span class="nav-text">Gallery</span>
                          
                          
                          
                        </a>
                      </li>

                      <li >
                        <a class="sidenav-item-link" href="{{route('home.gallery')}}">
                          <span class="nav-text">Home Small Gallery</span>
                          
                          
                          
                        </a>
                      </li>
                      
                    
                  

                  
                </div>
              </ul>
            </li>

            <li  class="has-sub active expand" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard2"
                aria-expanded="false" aria-controls="dashboard">
                <i class="mdi mdi-account-alert"></i>
                <span class="nav-text">User Interaction</span> <b class="caret"></b>
              </a>
              <ul  class="collapse show"  id="dashboard2"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                  
                  
                    
                      

                      <li >
                        <a class="sidenav-item-link" href="{{route('reply')}}">
                          <span class="nav-text">Blog Replies</span>
                          
                          
                          
                        </a>
                      </li>
                      
                      <li >
                        <a class="sidenav-item-link" href="{{route('user.message')}}">
                          <span class="nav-text">User Messages</span>
                          
                          
                          
                        </a>
                      </li>
                      <li >
                        <a class="sidenav-item-link" href="{{route('contact.information')}}">
                          <span class="nav-text">Contact Information</span>
                          
                          
                          
                        </a>
                      </li>
                      <li >
                        <a class="sidenav-item-link" href="{{route('admin.newsLetter')}}">
                          <span class="nav-text">NewsLetter</span>
                          
                          
                          
                        </a>
                      </li>
                    
                  

                  
                </div>
              </ul>
            </li>
          

          

          
            
          

          

          
           
          

          

          
            
          

          

          
            
          

          
        </ul>

      </div>

      <hr class="separator" />

      
    </div>
  </aside>