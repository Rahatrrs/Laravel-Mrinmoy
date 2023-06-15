@extends('master_home')
@section('home_content')



<title>মৃন্ময় - বার্তা</title>

       
        
                        <!--List Item End-->
                      </ul> <!-- Menu -->
                    </div>
                  </div>
                </nav>
              </div>
              <!--sticky-head-->
            </div>
            <!--sticky-outer-->
          </div>
        </header>

        <style>
            
            #two {
  height: 0;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
#month {
  background: #0081c7;
  padding: 10px 0;
  font-size: 22px;
  padding: 5px;
}
#day,
#year {
  font-size: 20px;
  color: green;
}
#date {
  font-size: 120px;
  font-weight: 700;
  margin: -5px 0;
  color: green;

}



        </style>

            <!-- header -->

            <!-- page-header -->

            <div class="page-title-wrap typo-white">
                <br>
                
                <div class="page-title-wrap-inner section-bg-img" data-bg="./rs-plugin/assets/zmain-slider-3-1536x864.jpg">

					<span class="theme-overlay"></span>

                    <div class="container">

                        <div class="row text-center">

                            <div class="col-md-12">

                                <div class="page-title-inner">

									

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- page-header -->

            <!-- Page Content -->

            <div class="content-wrapper pad-none">

                <div class="content-inner">

                    <!-- Blog Single Section -->

                    <section id="blog-single" class="blog-single">

                        <div class="container">
                            @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                                <span>{{ session('success') }}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif

                            <!-- Blog Main Wrap -->

                            <div class="blog-main-wrap blog-list">

                                <!-- Row -->

                                <div class="row">

                                    <!-- Col -->

                                    <div class="col-lg-8">

                                        <!-- blog-wrap -->

                                        <div class="blog-wrap mb-4 pb-3">

                                            <!-- blog-info-wrap -->

                                            <div class="blog-info-wrap">

                                                <!-- blog img -->
                                                <img src="{{asset($blog->image1)}}" alt="">
                                                <div class="blog-thumb mb-4 pb-2">

                                                    

                                                </div>

                                                <!-- Meta -->

                                                <div class="post-meta top-meta margin-bottom-30">

                                                    <ul class="nav">

                                                        

                                                        <li class="nav-item">

                                                            <div class="post-date">

                                                                <span class="ti-time me-2 theme-color"></span>

                                                                <a href="#">
                                                                    @php
                                                                    use Carbon\Carbon;
                                                                    

                                                                        $createdAgo = Carbon::parse($blog->created_at)->diffForHumans();
                                                                    @endphp
                                                                    {{ $createdAgo}}
                                                                </a>

                                                            </div>

                                                        </li>                                                                                                                

                                                    </ul>

                                                </div>

                                                <!-- Meta -->

                                                <div class="blog-content pb-4 mb-2">
                                                    <h1>{{$blog->title}}</h1>
                                                    <p   style="width: 100%; word-wrap: break-word;">
                                                    {{$blog->content}}
                                                    </p>

                                                    <!-- <p>Learn the Lord Jesus by all your heart, you will be showered with his blessings. Learning the Bible enhances your wisdom, and give you boldness about your faith. We collaborate with volunteers like children’s and community family service agencies, medical treatment programs, residential programs for elders, counseling centers, providing emergency assistance to families in need, and so on. Our Zegen Church WordPress Theme is ultimately flexible and a power pack with loads of nice options and features and functionalities. Launch your church website today!</p> -->

													

													<!-- <p>It is a long-established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ‘Content here, content here’, making it look like readable English.</p> -->



                                                    <blockquote class="blockquote-1">
<!-- 
                                                        <p class="mb-3">Don’t quit, and don’t give up. The reward is just around the corner. And in times of doubt or times of joy, listen for that still.</p>

														<p class="quote-author mb-0">Mark Johnson</p> -->

                                                    </blockquote>



                                                    <!-- <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their infancy.</p>

													

													<p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

													

													<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, etc.</p> -->
                                                    
                                                    

                                                </div>

												<!-- Row -->

												<div class="row margin-bottom-40">

													 <!-- Col -->

													<div class="col-md-6">

													   <div class="sermons-thumb relative">

															<img src="{{asset($blog->image2)}}" class="img-fluid b-radius-6" width="768" height="456" alt="sermons-img" />

														</div>

													</div>

													 <!-- Col -->

													<!-- Col -->

													<div class="col-md-6">

													   <div class="sermons-thumb relative">

															<img src="{{asset($blog->image3)}}" class="img-fluid b-radius-6" width="768" height="456" alt="sermons-img" />

														</div>

													</div>                                             

												</div>

												<!-- Row -->

                                                <!-- Meta -->

                                                <div class="post-meta bottom-meta">

													<div class="meta-left pull-left">

														<ul class="nav">

															<li class="nav-item">

																

															</li>

															<li class="nav-item">
                                                                @php
                                                    use App\Models\Reply;
                                                    $replies = Reply::where('blog_id', $blog->id)->get();
                                                    
                                                @endphp

																<div class="post-comment"><a href="#" rel="bookmark" class="comments-count">Comments {{$replies->count()}}</a>

																</div>

															</li>					

														</ul>

													</div>

													<div class="social-icons social-2 icons-circle widget-content pull-right small">

                                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::url()) }}" target="_blank"><span class="fa fa-facebook"></span></a>

                                                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::url()) }}" target="_blank"><span class="fa fa-twitter"></span></a>

                                                        <a href="https://pinterest.com/pin/create/button/?url={{ urlencode(Request::url()) }}" target="_blank"><span class="fa fa-pinterest"></span></a>

                                                        <a href="https://plus.google.com/share?url={{ urlencode(Request::url()) }}" target="_blank"><span class="fa fa-google-plus"></span></a>

                                                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(Request::url()) }}" target="_blank"><span class="fa fa-linkedin"></span></a>


                                                    </div>

                                                </div>

                                                <!-- Meta -->

                                            </div>

                                            <!-- blog-info-wrap -->

                                        </div>

                                        <!-- blog-wrap -->

										<!-- row -->

										<div class="row pad-top-20 pad-bottom-40">

											<div class="col-md-12">

												<div class="post-navigation-wrapper">
                                                    <div class="prev-nav-link">
                                                        
                                                        @php
                                                            $currentIndex = $blogs->search(function ($item) use ($blog) {
                                                                return $item->id === $blog->id;
                                                            });
                                                
                                                            $previousPost = $currentIndex > 0 ? $blogs[$currentIndex - 1] : null;
                                                        @endphp
                                                
                                                        @if ($previousPost)
                                                            <a class="prev" href="{{ url('/blog/details/' . $previousPost->id) }}">
                                                                <span class="post-nav-text">Prev</span>
                                                            </a>
                                                        @endif
                                                    </div>
                                                    <div class="next-nav-link">
                                                        
                                                        @php
                                                            $nextPost = $currentIndex < $blogs->count() - 1 ? $blogs[$currentIndex + 1] : null;
                                                        @endphp
                                                
                                                        @if ($nextPost)
                                                            <a class="next" href="{{ url('/blog/details/' . $nextPost->id) }}">
                                                                <span class="post-nav-text">Next</span>
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                
                                                
                                                
                                                

											</div>

										</div>

										<!-- row -->

                                        <!-- row -->

                                        <div class="row">

                                            <div class="col-md-12">

                                                <!-- Contact Form -->

                                                <div class="comments-form">

                                                    <h4 class="comment-reply-title">Leave a Reply</h4>

                                                    <p class="mb-4"> Required fields are marked.</p>

                                                    <!-- Form -->

                                                    <div class="contact-form-wrap">

                                                        <!-- form inputs -->

                                                        <form method="POST" action="{{ url('send/reply/'.$blog->id) }}" class="contact-form" >
                                                            @csrf

                                                            <div class="row">

                                                                <div class="col-md-6 mb-3">

                                                                    <!-- form group -->

                                                                    <div class="form-group">

                                                                        <input id="name" class="form-control" name="name" placeholder="Name*" data-bv-field="name" type="text" />
                                                                        @error('name')
                                                                            <span class="text-danger">{{$message}}</span>
                                                                        @enderror
                                                                    </div>

                                                                </div>

                                                                <div class="col-md-6 mb-3">

                                                                    <!-- form group -->

                                                                    <div class="form-group">

                                                                        <input id="email" class="form-control" name="email" placeholder="Email*" data-bv-field="email" type="email">
                                                                        @error('email')
                                                                            <span class="text-danger">{{$message}}</span>
                                                                        @enderror
                                                                    </div>

                                                                </div>

																<div class="col-md-12 mb-3">

																	

																	

																</div>	

                                                                <div class="col-md-12 mb-3">

                                                                    <div class="contact-message">

                                                                        <!-- form group -->

                                                                        <div class="form-group">

                                                                            <textarea id="message" class="form-control textarea" rows="8" name="message" placeholder="Message" data-bv-field="message"></textarea>
                                                                            @error('message')
                                                                            <span class="text-danger">{{$message}}</span>
                                                                            @enderror
                                                                        </div>

                                                                    </div>

                                                                    <!-- form button -->

                                                                    

                                                                </div>

                                                            </div>

                                                            <button type="submit"  class="btn btn-default mt-3 theme-btn">Submit</button>

                                                        </form>

                                                        <!-- form inputs end -->

                                                        <p id="contact-status-msg" class="hide"></p>

                                                    </div>

                                                    <!-- Form End-->

                                                </div>


                                                


                                                <!-- contact-form-1 -->

                                            </div>

                                            <!-- Col -->

                                        </div>
                                            <br>
                                        <!-- Row -->
                                                @php
                                                    
                                                    $replies = Reply::where('blog_id', $blog->id)->get();
                                                    $uniqueEmails = [];
                                                @endphp

                                                @foreach ($replies as $reply)
                                                    @php
                                                        $initial = substr($reply->name, 0, 1);
                                                    @endphp
                                                    
                                                    <div class="user-reply-section" >
                                                        <!-- User's Image -->
                                                        <div class="user-image" >
                                                            @if (!in_array($reply->email, $uniqueEmails))
                                                            <span class="user-initial text-center" style="display: inline-block; width: 40px; height: 40px; line-height: 40px; border-radius: 50%; background-color: #c0c0c0; color: #fff; font-weight: bold;">{{ $initial }}</span> <span><b>{{$reply->name}}</b></span>
                                                            <!-- Display the first letter of the name -->
                                                            @endif
                                                        </div>
                                                        <!-- User's Replies -->
                                                        <div class="reply" style=" margin-left:50px; display: flex">
                                                            <p style="display: inline-block; width: 30%; text-align: left;">{{$reply->message}}</p>  
                                                            <small style="color: lightgray" >{{$reply->created_at->diffForHumans()}}</small>
                                                        </div>
                                                        
                                                         
                                                            
                                                                
                                                                
                                                            
                                                        
                                                    </div>
                                                    <hr>
                                                    @php
                                                        $uniqueEmails[] = $reply->email;
                                                    @endphp
                                                @endforeach
                                                    

                                    </div>
                                    

                                    <!-- Col -->

                                    <!-- Sidebar -->

                                    <!-- Col -->

                                    <div class="col-lg-4 ps-5 px-sm-15">

                                        <!-- Sidebar -->

                                        <div class="sidebar right-sidebar">

                                            <!-- Search -->

                                            <div class="widget search-widget">

                                                <div class="search-form-wrapper">

                                                    <form class="search-form" role="search" action="search.php" method="get">
                                                            
                                                        <div class="input-group add-on">
                                                        
                                                            
                                                            
                                                            <input class="form-control" name="q" placeholder="Search for.."  type="text">
                                                            <div class="input-group-btn">

                                                                <button class="btn btn-default search-btn" type="submit"><i class="ti-arrow-right"></i></button>
                                                            </div>
                                                        

                                                        </div>

                                                    </form>

                                                </div>

                                            </div>

                                            <!-- Search -->

											<!-- Categories -->

                                            <div class="widget category-widget">

                                                <div class="widget-title">

                                                    <!-- Title -->

                                                    <h3 class="title">মৃন্ময়</h3>

                                                </div>
                                                <img src="./mrinmoy/logo.jpg" alt="">
                                                
                                            </div>

                                            <!-- Categories -->

                                            <!-- Popular Post -->

                                            <div class="widget recent-posts">

                                                <div class="widget-title">

                                                    <!-- Title -->

                                                    <h3 class="title">Latest Posts</h3>

                                                </div>

                                                    <ul class="list-post-content">
                                                        @php
                                                            $blogs = DB::table('blogs')->latest()->take(4)->get();

                                                        @endphp
                                                        @foreach ($blogs as $blog)
                                                        <li>
                                                            <!-- Media -->
                                                            <div class="media list-post">
                                                                <span class="popular-thumb me-3">
                                                                    <img width="70" height="70" class="rounded" src="{{ asset($blog->image1) }}" alt="">
                                                                </span>
                                                                <div class="media-body">
                                                                    <a href="{{ url('blog/details/'.$blog->id) }}">{{ $blog->title }}</a>
                                                                    <div class="meta-items mt-2">
                                                                        <span class="post-date"><i class="ti-time me-2 theme-color"></i>{{ \Carbon\Carbon::parse($blog->created_at)->setTimezone('GMT+6')->format('M d') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Media End -->
                                                        </li>
                                                        <hr>
                                                        @endforeach
                                                        

                                                    

                                                </ul>

                                            </div>

                                            <!-- Popular Post -->                                            

                                            <!-- Tag Cloud -->

                                            <div class="widget tag-cloud mb-0">

                                                <div class="widget-title">

                                                    <!-- Title -->

                                                    <h3 class="title">Date</h3>

                                                </div>

                                                <div class="balls"></div>
                                                <div class="balls"></div>
                                                <div id="box">
                                                 <div>
                                                    <div id="month"></div>
                                                 </div>
                                                 <div id="two" style="background-color: lightgray; padding: 10px;">
                                                   <div id="day" ></div>
                                                   <div id="date" style="margin-left: 80px"></div>
                                                   <div id="year"></div>
                                                  </div>
                                                </div>

                                            </div>

                                            <!-- Tag Cloud -->

                                        </div>

                                        <!-- Sidebar -->

                                    </div>

                                    <!-- Col -->

                                </div>

                                <!-- Row -->

                            </div>

                            <!-- Blog Main Wrap -->

                        </div>

                        <!-- Container -->

                    </section>

                    <!-- Blogs Section End -->

                </div>

            </div>

        </div>

        <!-- .page-wrapper-inner -->

    </div>

    <!--page-wrapper-->

    <script>
        var date = document.getElementById("date"),
  day = document.getElementById("day"),
  month = document.getElementById("month"),
  year = document.getElementById("year"),
  days = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday"
  ],
  months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December"
  ];

function update() {
  let now = new Date();
  date.innerText = now.getDate();
  day.innerText = days[now.getDay()];
  month.innerText = months[now.getMonth()];
  year.innerText = now.getFullYear();
}

document.body.onload = () => {
  setInterval(update, 1000);
  setTimeout(() => {
    document.getElementById("two").style.height = "260px";
    document.getElementById("box").style.color = "gainsboro";
  }, 500);
};
    </script>

    <!-- Footer -->

 @endsection

    