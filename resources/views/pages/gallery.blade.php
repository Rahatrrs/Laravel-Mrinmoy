
@extends('master_home')
@section('home_content')
                                    <!--List Item End-->
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
			<h1 style ="margin-top:20px; text-align:center;">
			 গ্যালারী

			</h1>
            <!-- page-header -->

            <!-- Page Content -->

            <div class="content-wrapper pad-none">

                <div class="content-inner">

					<!-- Portfolio Section -->

                    <section class="portfolio-section pad-top-120 pad-bottom-70">

                        <div class="container">

                            <div class="row">

								<!-- Col -->

                                <div class="col-md-12">

                                    <div class="portfolio-wrap portfolio-default popup-gallery">
									
                                        <div class="isotope-grid" data-gutter="30" data-cols="3">

                                            <!-- .portfolio-item -->



											
                                        @php
                                            $galleries = DB::table('galleries')->latest()->get();
                                        @endphp
                                        
                                        @foreach ($galleries as $gallery)
                                            <div class="isotope-item">
                                                <div class="portfolio-item portfolio-overlay-wrap">
                                                    <!-- .portfolio-thumb -->
                                                    <div class="portfolio-thumb relative b-radius-6 o-hide">
                                                        <img src="{{ asset($gallery->image) }}" class="img-fluid" width="700" height="466" alt="" title="Invest Advices" />
                                                        <!-- .portfolio-wrap -->
                                                        <div class="portfolio-wrap">
                                                            <div class="portfolio-details-overlay">
                                                                <div class="portfolio-icons">
                                                                    <a href="{{ asset($gallery->image) }}" class="popup-img" title="Gallery 1">
                                                                        <i class="ti-zoom-in"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- .portfolio-wrap -->
                                                    </div>
                                                    <!-- .portfolio-thumb -->
                                                </div>
                                            </div>
                                        @endforeach
                                        

                                            <!-- .portfolio-item end-->

                                            <!-- .portfolio-item -->

                                            





                                            <!-- .portfolio-item end-->

                                            <!-- .portfolio-item -->

                                            
											
                                            <!-- .portfolio-item end-->

                                        </div>

                                        <!-- .isotope-grid -->                                    	

                                    </div>

                                    <!-- .portfolio-wrap -->

                                </div>

                                <!-- col -->

                            </div>

                            <!-- row -->

                        </div>

                        <!-- .container -->

                    </section>

                    <!-- Portfolio Section End -->                    

                </div>

            </div>

        </div>

        <!-- .page-wrapper-inner -->

    </div>

    <!--page-wrapper-->

    @endsection