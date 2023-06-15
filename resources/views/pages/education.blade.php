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

            <div class="page-title-wrap typo-white">

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
                <br>
            </div>
            
			<h1 style ="margin-top:20px; text-align:center;">
			 শিক্ষা ক্ষেত্রে সহায়তা

			</h1>
            <!-- page-header -->

            <!-- Page Content -->

            <div class="content-wrapper pad-none">

                <div class="content-inner">					

					<!-- Blog Section -->

                    <section id="blog-section" class="blog-section pad-bottom-70">

                        <div class="container">

							<!-- Blog Main Wrap -->

							<div class="blog-main-wrap blog-grid">

								<!-- Row -->

								<div class="row">

									<!-- Col -->

									<div class="col-lg-12">

										<!-- Row -->

										<div class="row">

											<!-- Col -->
											@php
												$blogs = DB::table('blogs')->where('type', 'শিক্ষা সহায়তা')->get();
											@endphp

											@foreach ($blogs as $blog)

											<div class="col-md-4">

												<div class="blog-style-1">

													<!--Blog Inner-->

														<div class="blog-inner">
															<div class="blog-thumb relative">
																<img style="height: 246px" src="{{ asset('frontend/mrinmoy/blog/blog-1.jpeg') }}" class="img-fluid" width="768" height="600" alt="blog-img" />
																<div class="top-meta">
																	<ul class="top-meta-list">
																		<li>
																			<div class="post-date"><a href="{{url('blog/details/'.$blog->id)}}"><i class="ti-calendar"></i> {{ \Carbon\Carbon::parse($blog->created_at)->setTimezone('Asia/Dhaka')->format('M d, Y') }}</a></div>
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
																		<a target="" href="blog-details-1.php" class="link font-w-500">আরও পড়ুন</a>
																	</div>
																</div>
															</div>
														</div>
														
														
														<!--Blog Inner Ends-->
														
													</div>
													
												</div>
												
												@endforeach
											<!-- Col -->

											<!-- Col -->

											<div class="col-md-4">

												<div class="blog-style-1">

													<!--Blog Inner-->

													

													<!--Blog Inner Ends-->

												</div>

											</div>

											<!-- Col -->

											<!-- Col -->

											<div class="col-md-4">

												<div class="blog-style-1">

													<!--Blog Inner-->

													

													<!--Blog Inner Ends-->

												</div>

											</div>

											<!-- Col -->

											<!-- Col -->

											<div class="col-md-4">

												<div class="blog-style-1">

													<!--Blog Inner-->

													

													<!--Blog Inner Ends-->

												</div>

											</div>

											

											

											<!-- Col -->											

										</div>

										<!-- row -->

									</div>									

                                    <!-- Col -->

								</div>

								<!-- Row -->

							</div>

							<!-- Blog Main Wrap -->

						</div>

						<!-- Container -->

                    </section>

                    <!-- Blog Section End -->

                </div>

            </div>

        </div>

    <!-- .page-wrapper-inner -->

    </div>

    <!--page-wrapper-->

    @endsection
	
    