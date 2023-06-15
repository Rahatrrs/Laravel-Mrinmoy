
@extends('master_home')
@section('home_content')


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
        <!-- page-header -->
        <div class="page-title-wrap typo-white" >
            <br>
            <div class="page-title-wrap-inner section-bg-img" data-bg="{{asset('frontend/rs-plugin/assets/zmain-slider-3-1536x864.jpg')}}">
                

					<span class="theme-overlay"></span>

                    <div class="container">

                        <div class="row text-center">

                            

                        </div>

                    </div>

                </div>

            </div>
            <h1 style ="margin-top:20px; text-align:center;">
			 যোগাযোগ করুন

			</h1>
            <!-- page-header -->
            <!-- Page Content -->
            <div class="content-wrapper pad-none">
                <div class="content-inner">
					<!-- Contact Section -->
                    <section id="contact-section" class="contact-section pad-bottom-none">
                        <div class="container">
                            <!-- Row -->
                            <div class="row">
                                <!-- Col -->
                                @php
                                    $infos = DB::table('contact_infos')->latest('updated_at')->first();

                                @endphp
                                <div class="col-lg-4 mb-lg-0 mb-4">
									<div class="div-bg-img b-radius-20" data-bg="{{asset('frontend/mrinmoy/location.jpg')}}">
										<div class="f-box c-page text-center typo-white">
											<div class="feature-icon margin-bottom-10">
												<i class="ti-location-pin"></i>
											</div>
											<div class="feature-content">
												<div class="feature-title">
													<h5 class="mb-2">আমাদের  ঠিকানা</h5>
												</div>
												<p class="mb-0">{{$infos->address}}</p>
											</div>											
										</div>
									</div>
                                </div>
                                <!-- Col -->
                                <div class="col-lg-4 mb-lg-0 mb-4">
                                    <div class="div-bg-img b-radius-20" data-bg="{{asset('frontend/mrinmoy/phone.jpg')}}">
										<div class="f-box c-page text-center typo-white">
											<div class="feature-icon margin-bottom-10">
												<i class="ti-headphone-alt"></i>
											</div>
											<div class="feature-content" >
												<div class="feature-title">
													<h5 class="mb-2">ফোন নাম্বার</h5>
												</div>
												<a href="tel:{{$infos->phone}}" style="font-weight:900">{{$infos->phone}}</a>
												<br>
												
											</div>											
										</div>
									</div>
                                </div>
                                <!-- Col -->
                                <div class="col-lg-4">
                                    <div class="div-bg-img b-radius-20" data-bg="{{asset('frontend/mrinmoy/email.jpg')}}">
										<div class="f-box c-page text-center typo-white">
											<div class="feature-icon margin-bottom-10">
												<i class="ti-email"></i>
											</div>
											<div class="feature-content">
												<div class="feature-title">
													<h5 class="mb-2">ইমেইল</h5>
												</div>
												<a href="mailto:{{$infos->email}}">{{$infos->email}}</a>
												
												
											</div>											
										</div>
									</div>
                                </div>
                            </div>
                            <!-- Row -->
                        </div>
						<!-- Container -->
                    </section>
                    <!-- Contact Section End -->
					<!-- Contact Section -->
                    <section class="contact-form-section form-with-img">
                        <div class="container">
                            <div class="row">
                                <!-- col -->
                                <div class="col-lg-8 pe-0">                                    
                                    <!-- Contact Form -->
                                    <div class="contact-form-4 bg-white">
                                        @if (session('success'))
                                            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                                                <span>{{ session('success') }}</span>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        @endif
                                        <!-- Form -->
                                        <div class="contact-form-wrap">
                                            <!-- form inputs -->
                                            <form  class="contact-form" method="POST" action="{{url('contact/message/')}}" >
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <!-- form group -->
                                                        <div class="form-group">
                                                            <input id="name" class="form-control" name="name" placeholder="Name" data-bv-field="name" type="text" />
                                                            @error('name')
                                                                <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <!-- form group -->
                                                        <div class="form-group">
                                                            <input id="email" class="form-control" name="email" placeholder="Email" data-bv-field="email" type="email">
                                                            @error('email')
                                                                <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <!-- form group -->
                                                        <div class="form-group">                                                            
															<input id="phone" class="form-control" name="phone" placeholder="Phone" data-bv-field="phone" type="tel">
                                                            @error('phone')
                                                                <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="contact-message">
                                                            <!-- form group -->
                                                            <div class="form-group">
                                                                <textarea id="message" class="form-control textarea" rows="5" name="message" placeholder="Your Message" data-bv-field="message"></textarea>
                                                                @error('message')
                                                                <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div> 
														<!-- form group -->
                                                        
                                                        <!-- form button -->
                                                        <button type="submit"  class="btn btn-default mt-0 theme-btn">Send Now</button>
                                                    </div>
                                                </div>
                                                <span class="clearfix"></span>
                                            </form>
											<div class="captcha-parent">
												<div class="g-recaptcha" data-sitekey="6LcuIvEcAAAAAFnQUTIoRRn6Gvc54vbWAf0GSEdP" data-callback="verifyRecaptchaCallback"></div>
											</div>
                                            <!-- form inputs end -->
                                            <p id="contact-status-msg" class="hide"></p>
                                        </div>
                                        <!-- Form End-->
                                    </div>
                                    <!-- contact-form-1 -->
                                </div>
                                <!-- .col -->
                                <div class="col-lg-4 pad-none">
                                    <div class="contact-img">
                                        <img class="img-fluid" src="{{asset('frontend/mrinmoy/contact_bg4.jpg')}}" width="752" height="888" alt="Contact Map">
                                    </div>
                                </div>
                                 <!-- Col -->
                            </div>
                        </div>
                    </section>
                    <!-- Contact Form Section End -->					
					<!-- Contact Map -->
					<section class="contact-map pad-top-none">
						<div class="container">
                            <div class="row">
                                <!-- col -->
                                <div class="col-md-12"> 
									<!-- Screan Reader Text -->
									<h2 class="screen-reader-text">Map</h2>
									<!-- Container Fluid -->
									<div class="container-fluid pad-none">
										<!-- Map -->
										<div class="map mt-0">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5151.125373867572!2d89.21925773666091!3d24.087576811005004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9db6f79c1473%3A0x5d20a99b0ef61ed5!2sDebottar%20Degree%20(hons)%20College!5e0!3m2!1sen!2sbd!4v1681432051765!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
										</div>
										<!-- Map -->
									</div>
									<!-- Container Fluid -->
								</div>
								<!-- col -->
							</div>
						</div>	
					</section>
					<!-- Contact Map End -->									
                </div>
            </div>
        </div>
        <!-- .page-wrapper-inner -->
    </div>
    <!--page-wrapper-->

    <!-- Footer -->
    @endsection
    <!-- Footer -->
    

    {{-- <!-- jQuery Lib -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper Js Support for Bootstrap -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Easing Js -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- Paroller Js -->
    <script src="js/jquery.paroller.min.js"></script>     
	<!-- Validator Js -->
    <script src="js/validator.min.js"></script>
	<!-- Appear Js -->
	<script src="js/jquery.appear.min.js"></script>
    <!-- Appear Js -->
    <script src="js/smartresize.min.js"></script>
    <!-- Theme Custom Js -->
    <script src="js/custom.js"></script>
    <!-- Google Map Js -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtkY02zM_XV3XtSzJbNwJdiA2iuNmP_bI"></script>
    <!-- Google Recaptcha Js-->
	<script src='../../../www.google.com/recaptcha/api.js'></script>
	<!-- Google Recaptcha Callback-->
	<script>
		(function( $ ) {	
			"use strict";			
			window.verifyRecaptchaCallback = function (response) {
				$("#hidden-grecaptcha").val(response);
				$(document).find("#hidden-grecaptcha").trigger('input');				
			};
			window.expiredRecaptchaCallback = function () {
				$(document).find("#hidden-grecaptcha").val("").trigger('input')
			}
		})(jQuery);
	</script>
	
</body>
<!-- Body End -->
<!-- Body End -->
</html> --}}