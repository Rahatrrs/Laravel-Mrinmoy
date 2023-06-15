 <!-- Footer -->
 <footer id="footer" class="footer footer-1 footer-bg-img" >
    <!--Footer Widgets Columns Posibilities 4-->
    <div class="footer-widgets">
      <div class="footer-middle-wrap footer-overlay-dark">
        <div class="color-overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-3 widget text-widget">
              <div class="widget-title">
                <!-- Title -->
                <h3 class=" typo-white">মৃন্ময়</h3>
              </div> <!-- Text -->
              <div class="widget-text margin-bottom-30">
                <p>মৃন্ময় একটি নন-প্রফিট ওয়েবসাইট যা সামাজিক দায়িত্ব সম্পর্কিত। এই ওয়েবসাইটে বিভিন্ন ধরনের সেবা প্রদান করা হয়, যার মধ্যে শিক্ষা, স্বাস্থ্য ও কর্মজীবন উন্নয়নের জন্য সামাজিক প্রকল্প, দাতা ও স্বেচ্ছাসেবীদের সহযোগিতা, বিনি প্রতিষ্ঠান সংগঠন এবং নিরাপত্তা কর্মকর্তা ও নিরাপদ মানব</p>
              </div>
             
            </div> <!-- Col -->
            <div class="col-lg-3 widget text-widget">
              <div class="widget-title">
                <!-- Title -->
                <h3 class=" typo-white">Quick Links</h3>
              </div> <!-- Text -->
              <div class="menu-quick-links">
                <ul class="menu">
                  <li class="menu-item"><a href="/comitee">কমিটি</a></li>
                  <li class="menu-item"><a href="/contact-us">যোগাযোগ</a></li>
                  <li class="menu-item"><a href="/gallery">গ্যালারী</a></li>
                  <li class="menu-item"><a href="/all-blogs">বার্তা</a></li>
                  <li class="menu-item"><a href="/team">সদস্য</a></li>
                </ul>
              </div>
            </div> <!-- Col -->
            <div class="col-lg-3 widget recent-posts">
              <div class="widget-title">
                <!-- Title -->
                <h3 class=" typo-white">Latest News</h3>
              </div>
              <nav>
                <ul class="footer-list-posts">
                  @php
                  use Carbon\Carbon;
                    $blogs = DB::table('blogs')->latest('created_at')->limit(2)->get();
                  @endphp
                  @foreach ($blogs as $blog)
                  @php
										  $createdAgo = Carbon::parse($blog->created_at)->diffForHumans();
									@endphp
                    
                  <!-- List Items -->
                  <li>
                    <div class="side-image"> <a href="{{url('blog/details/'.$blog->id)}}"><img width="80" height="80" src="{{asset($blog->image1)}}" class="img-responsive wp-post-image" alt="Blog"></a> </div>
                    <div class="side-item-text"><a href="{{url('blog/details/'.$blog->id)}}">{{$blog->title}}</a> <span class="post-date d-block">{{$createdAgo}}</span> </div>
                  </li>
                  @endforeach
                 
                </ul>
              </nav>
            </div> <!-- Col -->
            <div class="col-lg-3 widget contact-info-widget">
              <div class="widget-title">
                <!-- Title -->
                <h3 class="typo-white">Newsletter</h3>
              </div>
              <p>Sign up for our weekly newsletter to stay updated on all news and events at Mrinmoy. .</p>
              <div class="mailchimp-widget-wrap">
                <!-- subscribe form -->
                    
                <form action="{{url('send/mail/')}}" method="POST">
                  @csrf
                  <div>
                    <div>
                      <input type="email" name="email" placeholder="Email Address" class="form-control">
                    @error('email')
                      <span class="text-danger">{{$message}}</span>
                      
                    @enderror
                    </div>

                    <button type="submit" class="btn btn-default subscribe-btn">Sign Up</button>
                  </div>
                </form>
              </div>
            </div> <!-- Col -->
          </div>
        </div>
      </div>
    </div>
    <!--Footer Copyright Columns Posibilities 4-->
    
  </footer> <!-- Footer -->








  @if (session('success'))
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Success</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>{{ session('success') }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener('DOMContentLoaded', function() {
            var successModal = new bootstrap.Modal(document.getElementById('successModal'));
            successModal.show();
        });
    </script>
@endif

  
  <!-- jQuery Lib -->
  <script src="{{asset('frontend/js/jquery.min.js')}}"></script> <!-- Bootstrap Js -->
  <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script> <!-- Easing Js -->
  <script src="{{asset('frontend/js/jquery.easing.min.js')}}"></script> <!-- Carousel Js Code -->
  <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script> <!-- Paroller Js -->
  <script src="{{asset('frontend/js/jquery.paroller.min.js')}}"></script> <!-- Isotope Js -->
  <script src="{{asset('frontend/js/isotope.pkgd.min.js')}}"></script> <!-- Magnific Popup Js -->
  <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script> <!-- Validator Js -->
  <script src="{{asset('frontend/js/validator.min.js')}}"></script> <!-- Smart Resize Js -->
  <script src="{{asset('frontend/js/smartresize.min.js')}}"></script> <!-- Appear Js -->
  <script src="{{asset('frontend/js/jquery.appear.min.js')}}"></script> <!-- Theme Custom Js -->
  <script src="{{asset('frontend/js/custom.js')}}"></script> <!-- REVOLUTION JS FILES -->
  <script src="{{asset('frontend/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
  <script src="{{asset('frontend/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script> <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
  <script src="{{asset('frontend/rs-plugin/js/main-slider/rbtools.min.js')}}"></script>
  <script src="{{asset('frontend/rs-plugin/js/main-slider/rs6.min.js')}}"></script>
  <script src="{{asset('frontend/rs-plugin/js/main-slider/home-1.js')}}"></script> <!-- Color -->
  <script src="{{asset('frontend/js/color-panel.js')}}"></script>
</body><!-- Body End -->
<!-- Body End -->

</html>