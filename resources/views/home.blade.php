@extends('master_home')
@section('home_content')
@include('slider.slider')
<div class="content-wrapper pad-none">
    <div class="content-inner">
      <!-- Events Section -->
      <section class="events-section pad-tb-0 broken-top-50 pt-sm-5 pt-xl-0 pad-bottom-md-none">
        <div class="container">
          <!-- Row -->
          <div class="row">
            <!--Events Main Slider-->
            @php
              $blogs = DB::table('blogs')->latest()->take(4)->get();

            @endphp
            <div class="owl-carousel events-main-wrapper events-style-1" data-loop="1" data-nav="0" data-dots="1" data-autoplay="0" data-autoplaypause="1" data-autoplaytime="5000" data-smartspeed="1000" data-margin="30" data-items="2" data-items-tab="1" data-items-mob="1">
              @foreach ($blogs as $blog)
              <!--Item-->
              <div class="item">
                  <!--Events Inner-->
                  <div class="events-inner">
                      <div class="events-item">
                          <div class="media">
                              <div class="event-date me-4">{{ \Carbon\Carbon::parse($blog->created_at)->setTimezone('GMT+6')->format('M d') }}<span class="event-time">{{ \Carbon\Carbon::parse($blog->created_at)->setTimezone('GMT+6')->format('Y') }}</span></div>
                              <div class="media-body">
                                  <!-- Ministries Content -->
                                  <div class="event-content">
                                      <div class="event-title">
                                          <h5><a href="{{ url('blog/details/'.$blog->id) }}">{{ $blog->title }}</a></h5>
                                      </div>
                                      <div class="read-more"><a href="{{ url('blog/details/'.$blog->id) }}">আরও পড়ুন</a></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!--Events Inner Ends-->
              </div>
              <!--Item Ends-->
              @endforeach
          </div>
          
          
            <!--Events Owl Slider-->
          </div> <!-- Row -->
        </div> <!-- Container -->
      </section> <!-- Events Section End -->
      <!-- About Section -->
      <section id="section-about" class="section-about pad-top-90">
        <div class="container">
          <!-- Row -->
          <div class="row">
            <!-- Col -->
            <div class="col-xl-6 align-self-center">
              <!-- about wrap -->
              <div class="about-wrap relative">
                <div class="about-wrap-inner">
                  <!-- about details -->
                  <div class="about-wrap-details">
                    <!-- about button -->
                    <div class="text-center">
                      @php
                      $home_galleries = DB::table('home_galleries')->latest()->get();
                  @endphp
                  
                  @foreach ($home_galleries as $gallery)
                      <div class="about-img bf-pattern mb-5 mb-xl-0">
                          <img src="{{ asset($gallery->image1) }}" style="height: 300px" class="" alt="about-img">
                      </div>
                      <div class="about-img bf-pattern mb-5 mb-xl-0">
                          <img src="{{ asset($gallery->image2) }}"  style="height: 300px" class="" alt="about-img">
                      </div>
                      <div class="about-img bf-pattern mb-5 mb-xl-0">
                          <img src="{{ asset($gallery->image3) }}"  style="height: 300px" class="" alt="about-img">
                      </div>
                      <div class="about-img bf-pattern mb-5 mb-xl-0">
                          <img src="{{ asset($gallery->image4) }}"  style="height: 300px" class="" alt="about-img">
                      </div>
                  @endforeach
                  
                      <!-- .col -->
                    </div>
                  </div> <!-- about details End-->
                </div>
              </div> <!-- about wrap end -->
            </div> <!-- .col -->
            <!-- Col -->
            <div class="col-xl-6 px-3 ps-xl-0">
              <div class="title-wrap margin-bottom-30">
                <div class="section-title"> <span class="sub-title theme-color text-uppercase">আমাদের মূলনীতি</span>
                  <h2 class="section-title margin-top-5">সততা ও বিসসস্ততার মাধ্যমে মানুষের মাহায্য সহযোগিতা</h2> <span class="border-bottom"></span>
                </div>
                <div class="pad-top-15">
                  <p class="margin-bottom-20"> সংগঠনটি সম্পূর্ণভাবে অরাজনৈতিক, বিজ্ঞানমনস্ক ও কল্যাণমুখী। ১ জানুয়ারি ২০১৭, হৃদয়ে সবুজ আশা নিয়ে মৃন্ময়ের আনুষ্ঠানিক যাত্রা শুরু হয়</p>
                  <p class="styled-text"> মৃন্ময় সামাজিক ও অর্থনৈতিক উন্নয়নের ওপর গুরুত্ব দিয়ে অসহায় মানুষের চাহিদা পূরণে এবং তাদের পাশে থাকার সামাজিক দায়বদ্ধতার তাগিদ নিয়ে কাজ শুরু করেছে</p>
                </div>
                <h4>আমাদের কার্যক্রম

                </h4>
              </div>

              <div class="row">
                <!-- Feature Box -->
                <div class="col-md-6">
                  <div class="feature-box-wrap f-box-style-1 mb-md-0 mb-sm-4 relative">
                    <div class="feature-box-details">
                      <div class="feature-icon margin-bottom-25"> <span class="ti-book b-radius-50 d-block"></span> </div>
                      <div class="feature-content">
                        <div class="feature-title relative margin-bottom-15">
                          <h4>মৃন্ময় পদক</h4>
                        </div>
                        <p class="mb-0">কলেজ ও স্কুল ছাত্র ছাত্রীদের মৃন্ময় পদক প্রদান।</p>
                      </div>
                    </div>
                  </div>
                </div> <!-- Feature Box End -->
                <!-- Feature Box -->
                <div class="col-md-6">
                  <div class="feature-box-wrap f-box-style-1 relative">
                    <div class="feature-box-details">
                      <div class="feature-icon margin-bottom-25"> <span class="ti-book b-radius-50 d-block"></span> </div>
                      <div class="feature-content">
                        <div class="feature-title relative margin-bottom-15">
                          <h4>শিক্ষা ক্ষেত্রে</h4>
                        </div>
                        <p class="mb-0">গরীব ছাত্র ছাত্রিদের মধ্যে অনুদান পৌছে দেওয়া।</p>
                      </div>
                    </div>
                  </div>
                </div> <!-- Feature Box End -->
              </div>

              <div class="row" style="margin-top: 15px">
                <!-- Feature Box -->
                <div class="col-md-6">
                  <div class="feature-box-wrap f-box-style-1 mb-md-0 mb-sm-4 relative">
                    <div class="feature-box-details">
                      <div class="feature-icon margin-bottom-25"> <span class="ti-heart b-radius-50 d-block"></span> </div>
                      <div class="feature-content">
                        <div class="feature-title relative margin-bottom-15">
                          <h4>বৃক্ষ রোপণ</h4>
                        </div>
                        <p class="mb-0">স্কুল কলেজ সহ বিভিন্ন প্রাঙ্গণে বৃক্ষ রোপণ করা।</p>
                      </div>
                    </div>
                  </div>
                </div> <!-- Feature Box End -->
                <!-- Feature Box -->
                <div class="col-md-6">
                  <div class="feature-box-wrap f-box-style-1 relative">
                    <div class="feature-box-details">
                      <div class="feature-icon margin-bottom-25"> <span class="ti-heart b-radius-50 d-block"></span> </div>
                      <div class="feature-content">
                        <div class="feature-title relative margin-bottom-15">
                          <h4>মানুষ মানুষের জন্য প্রকল্প</h4>
                        </div>
                        <p class="mb-0">দুস্থ পরিবারের হাতে সহায়তা পৌছে দেওয়া।</p>
                      </div>
                    </div>
                  </div>
                </div> <!-- Feature Box End -->
              </div>
              <div class="row"  style="margin-top: 15px">
                <!-- Feature Box -->
                <div class="col-md-6">
                  <div class="feature-box-wrap f-box-style-1 mb-md-0 mb-sm-4 relative">
                    <div class="feature-box-details">
                      <div class="feature-icon margin-bottom-25"> <span class="ti-heart b-radius-50 d-block"></span> </div>
                      <div class="feature-content">
                        <div class="feature-title relative margin-bottom-15">
                          <h4>ঈদকে সামনে রেখে সহায়তা বিতরণ</h4>
                        </div>
                        <p class="mb-0">আমরা ইতিমধ্যে প্রায় ৫৩৫০০ টাকা সংগ্রহ করে ৭০টি পরিবারের মধ্যে বিতরন করেছি।</p>
                      </div>
                    </div>
                  </div>
                </div> <!-- Feature Box End -->
                <!-- Feature Box -->
                
              </div>



              
              
            </div> <!-- Col -->
          </div> <!-- Row -->
        </div> <!-- Container -->
      </section> <!-- About Section End -->
      <!-- Get a Quote Section -->
      <section id="get-quote-section" class="get-quote-section section-bg-img" data-bg="{{asset('frontend/mrinmoy/banner/pxfuel.jpg')}}" >
        <div class="container">
          <!-- Row -->
          <div class="row text-center">
            <!-- Col -->
            <div class="col-md-12">
              <div class="get-quote-1">
                <!-- video wrap -->
                <div class="video-wrap wrap-stretch relative margin-bottom-50">
                  <!-- video details -->
                  <div class="video-wrap-details">
                    <!-- video button -->
                    <div class=" text-center">
                      <div class="video-icon"> <a class="popup-youtube box-shadow1" href=""> <i class="ti-heart"></i> </a> </div>
                    </div>
                  </div> <!-- video details End-->
                </div> <!-- video wrap end -->
                <div class="title-wrap mb-0">
                  <div class="section-title typo-white margin-bottom-40">
                    <h2 class="title mb-3">“অন্যকে সাহায্য করার আগে নিজেকে সাহায্য করুন এবং সাহায্য করার জন্য সক্ষম করে গড়ে তুলুন।”</h2> <span class="dancing-text">অন্যকে সাহায্য করার ক্ষমতা পাওয়া সত্যিই এক অসাধারণ উপহার আর এরই মধ্যে জীবনের সার্থকতা পেতে পারেন।</span>
                  </div>
                  
                </div>
              </div>
            </div> <!-- Col -->
          </div> <!-- Row -->
        </div> <!-- Container -->
      </section> <!-- Get a Quote Section End -->
      <!-- Ministries Section -->
      <section id="ministries-section" class="ministries-section pad-top-95 pad-bottom-70">
        <div class="container">
          <!-- Row -->
          <div class="row">
            <div class="offset-md-2 col-md-8">
              <div class="title-wrap text-center">
                <div class="section-title"> <span class="sub-title theme-color text-uppercase"></span>
                  <h2 class="section-title margin-top-5">বার্ষিক ভ্রমণ</h2> <span class="border-bottom center"></span>
                </div>
              </div>
            </div>
            <!--Ministries Main Slider-->
            <div class="owl-carousel ministries-main-wrapper" data-loop="1" data-nav="1" data-dots="0" data-autoplay="0" data-autoplaypause="1" data-autoplaytime="5000" data-smartspeed="1000" data-margin="30" data-items="3" data-items-tab="2" data-items-mob="1">
              @foreach ($blogs->where('type', 'বার্ষিক ভ্রমণ')->sortByDesc('created_at')->take(4) as $blog)
                  <div class="item">
                      <div class="ministries-box-style-2">
                          <!-- Ministries Inner -->
                          <div class="ministries-inner">
                              <!-- Removed the ministries-thumb class here -->
                              <div>
                                  <img class="img-fluid squared w-100" src="{{ asset($blog->image1) }}" style="height: 200px" width="360" height="240" alt="Agricultural Processing">
                              </div>
                              <!-- Ministries Content -->
                              <div class="ministries-content pad-30">
                                  <div class="ministries-title margin-bottom-15">
                                      <h4><a href="{{url('blog/details/'.$blog->id)}}" class="ministries-link">{{ $blog->title }}</a></h4>
                                  </div>
                                  <div class="ministries-desc">
                                      @php
                                          $created_at = \Carbon\Carbon::parse($blog->created_at)->setTimezone('Asia/Dhaka');
                                      @endphp
                                      <p>{{ $created_at->format('M d, Y') }}</p>
                                  </div>
                                  <div class="ministries-link margin-top-20"></div>
                              </div>
                          </div>
                          <!-- Ministries Inner Ends -->
                      </div>
                  </div>
              @endforeach
          </div>
          
          
          
            <!--Ministries Owl Slider-->
          </div> <!-- Row -->
        </div> <!-- Container -->
      </section> <!-- Ministries Section End -->
      <!-- Contact Section -->
      <section class="contact-form-section typo-white section-bg-img o-visible pad-top-80 pad-bottom-160" data-bg="images/bg/bg-2.jpg">
        <div class="shape-bottom" data-negative="false"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"></path>
            <path class="shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
            <path class="shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
          </svg> </div>
        <div class="container">
          <div class="row">
            <!-- col -->
            @php
            $infos = DB::table('contact_infos')->latest('updated_at')->first();

        @endphp
            <div class="col-xl-4 pe-xl-4 pb-5 pb-xl-0">
              <div class="flip-box broken-top-115 verticalMove">
                <div class="flip-box-inner imghvr-flip-3d-horz">
                  <div class="flip-box-front">
                    <div class="flip-box-icon margin-bottom-40"><span class="text-center flip-icon-middle ti-headphone-alt"></span></div>
                    <h3 class="flip-box-title margin-bottom-30">কল করুন</h3>
                    <div class="flip-content">
                      <p>{{$infos->address}}</p>
                      <p><a href="tel:{{$infos->phone}}">{{$infos->phone}}</a></p>
                      <p><a href="mailto:{{$infos->email}}">{{$infos->email}}</a></p>
                    </div>
                  </div>
                  <div class="flip-box-back">
                    <h3 class="flip-box-title">কল করুন</h3>
                    <div class="flip-content">
                      <p>{{$infos->address}}</p>
                      <p><a href="tel:{{$infos->phone}}" >{{$infos->phone}}</a></p>
                      <p><a href="mailto:{{$infos->email}}">{{$infos->email}}</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- col -->
            <div class="col-xl-8 ps-xl-4">
              <div class="section-title-wrapper">
                <div class="title-wrap mb-0">
                  <div class="section-title"> <span class="sub-title theme-color text-uppercase">Get In Touch</span>
                    <h2 class="section-title margin-top-5">যোগাযোগ করুন</h2> <span class="border-bottom"></span>
                  </div>
                  <div class="pad-top-15">
                    <p class="margin-bottom-10">উল্লেখিত যোগাযোগ মাধ্যমে যেকোনো সময় যোগাযোগ করুন আমাদের সাথে।</p>
                  </div>
                </div>
                <div class="button-section margin-top-25"> <a class="btn btn-default" href="/contact-us" title="Learn More">যোগাযোগ করুন</a> </div>
              </div>
            </div> <!-- .col -->
          </div>
        </div>
      </section> <!-- Contact Form Section End -->
      <!-- Blog Section -->
      <section class="blog-section pad-top-50 pad-bottom-95">
        <div class="container">
          <!-- Blog Wrap -->
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap text-center">
                <div class="section-title"> <span class="sub-title theme-color text-uppercase"></span>
                  <h2 class="section-title margin-top-5">বার্তা সমূহ</h2> <span class="border-bottom center"></span>
                </div>
              </div>
              <div class="row">
                <!--Blog Main Slider-->
                <div class="owl-carousel blog-main-wrapper blog-style-1" data-loop="1" data-nav="0" data-dots="1" data-autoplay="0" data-autoplaypause="1" data-autoplaytime="5000" data-smartspeed="1000" data-margin="30" data-items="3" data-items-tab="2" data-items-mob="1">
                  @foreach ($blogs->sortByDesc('created_at')->take(4) as $blog)
                      <div class="item">
                          <!--Blog Inner-->
                          <div class="blog-inner">
                              <div class="blog-thumb relative">
                                  <img src="{{ asset($blog->image1) }}" style="height: 200px" class="img-fluid" width="768" height="600" alt="blog-img" />
                                  <div class="top-meta">
                                      <ul class="top-meta-list">
                                          <li>
                                              <div class="post-date"><a href="{{url('blog/details/'.$blog->id)}}"><i class="ti-calendar"></i>{{ \Carbon\Carbon::parse($blog->created_at)->setTimezone('Asia/Dhaka')->format('M d, Y') }}</a></div>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="blog-details">
                                  <div class="blog-title">
                                      <h4 class="margin-bottom-10"><a href="{{url('blog/details/'.$blog->id)}}" class="blog-name">{{ $blog->title }}</a></h4>
                                  </div>
                                  <div class="post-desc mt-2">
                                      <div class="blog-link">
                                          <a target="" href="{{url('blog/details/'.$blog->id)}}" class="link font-w-500">আরও পড়ুন</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!--Blog Inner Ends-->
                      </div>
                      <!--Item Ends-->
                  @endforeach
              </div>
              
              </div>
            </div>
          </div> <!-- Blog Wrap -->
        </div>
      </section> <!-- Blog Section End -->
    </div>
  </div>
  @endsection