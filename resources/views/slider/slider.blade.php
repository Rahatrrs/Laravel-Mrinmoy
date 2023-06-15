<rs-module-wrap id="rev_slider_1_1_wrapper" data-alias="zegen-home-1" data-source="gallery" style="visibility:hidden;background:#000000;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">

    @php
      $sliders = DB::table('sliders')->latest()->take(5)->get();
    @endphp

    <rs-module id="rev_slider_1_1" style="" data-version="6.5.31">
      <rs-slides>
        @if ($sliders->count() >= 1)
        <rs-slide style="position: absolute;" data-key="rs-1" data-title="Web Show" data-thumb="" data-anim="adpr:false;e:slidingoverlay;ms:2000;" data-in="o:1;x:(100%);" data-out="a:false;"> <img src="rs-plugin/assets/dummy.png" alt="Non Profit Wordpress Theme" title="zmain-slider-1.jpg" width="1536" height="864" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="{{$sliders[0]->slider_image}}" data-parallax="5" data-no-retina><!--							-->
          <h1 id="slider-1-slide-1-layer-2" class="rs-layer Concept-Title" data-type="text" data-color="#ffffff||rgba(255, 255, 255, 1)||rgba(255, 255, 255, 1)||rgba(255, 255, 255, 1)" data-rsp_ch="on" data-xy="x:c;y:m;yo:10px,-26px,-10px,-33px;" data-text="w:normal,nowrap,nowrap,normal;s:54,50,45,30;l:52,55,50,40;ls:3px;fw:700;a:center;" data-dim="w:754px,699px,auto,400px;" data-padding="b:10;" data-frame_0="sX:2;sY:2;" data-frame_0_mask="u:t;" data-frame_1="e:power2.out;st:2110;sp:1270;sR:2110;" data-frame_1_mask="u:t;" data-frame_999="x:left;e:power3.in;st:w;sp:1000;sR:5620;" data-frame_999_reverse="x:true;" style="z-index:10;font-family:'Poppins';text-transform:uppercase;">{{$sliders[0]->slider_title}} </h1> <br>
          <!--							-->
          <!--							-->
          <!--							-->
          <!--							-->
          <rs-layer id="slider-1-slide-1-layer-21" data-type="image" data-rsp_ch="on" data-xy="x:c;yo:228px,95px,91px,90px;" data-text="w:normal;s:20,16,12,7;l:0,20,15,9;" data-dim="w:67px,60px,56px,45px;h:67px,60px,56px,45px;" data-frame_0="x:100%;" data-frame_0_mask="u:t;" data-frame_1="st:210;sp:1000;sR:210;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:7790;" style="z-index:12;"> </rs-layer>
          <!---->
        </rs-slide>
        @endif
        @if ($sliders->count() >= 2)
        <rs-slide style="position: absolute;" data-key="rs-2" data-title="Web Show" data-thumb="" data-anim="adpr:false;e:slidingoverlay;ms:2000;" data-in="o:1;x:(100%);" data-out="a:false;"> <img src="rs-plugin/assets/dummy.png" alt="Non Profit Wordpress Theme" title="zmain-slider-1.jpg" width="1536" height="864" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="{{$sliders[1]->slider_image}}" data-parallax="5" data-no-retina><!--							-->
          <h1 id="slider-1-slide-1-layer-2" class="rs-layer Concept-Title" data-type="text" data-color="#ffffff||rgba(255, 255, 255, 1)||rgba(255, 255, 255, 1)||rgba(255, 255, 255, 1)" data-rsp_ch="on" data-xy="x:c;y:m;yo:10px,-26px,-10px,-33px;" data-text="w:normal,nowrap,nowrap,normal;s:54,50,45,30;l:52,55,50,40;ls:3px;fw:700;a:center;" data-dim="w:754px,699px,auto,400px;" data-padding="b:10;" data-frame_0="sX:2;sY:2;" data-frame_0_mask="u:t;" data-frame_1="e:power2.out;st:2110;sp:1270;sR:2110;" data-frame_1_mask="u:t;" data-frame_999="x:left;e:power3.in;st:w;sp:1000;sR:5620;" data-frame_999_reverse="x:true;" style="z-index:10;font-family:'Poppins';text-transform:uppercase;"> {{$sliders[1]->slider_title}}</h1><!--							-->
          <!--							-->
          <!--							-->
          <!--							-->
          <rs-layer id="slider-1-slide-1-layer-21" data-type="image" data-rsp_ch="on" data-xy="x:c;yo:228px,95px,91px,90px;" data-text="w:normal;s:20,16,12,7;l:0,20,15,9;" data-dim="w:67px,60px,56px,45px;h:67px,60px,56px,45px;" data-frame_0="x:100%;" data-frame_0_mask="u:t;" data-frame_1="st:210;sp:1000;sR:210;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:7790;" style="z-index:12;"> </rs-layer>
          <!---->
        </rs-slide>
        @endif
        @if ($sliders->count() >= 3)
        <rs-slide style="position: absolute;" data-key="rs-3" data-title="Web Show" data-thumb="" data-anim="adpr:false;e:slidingoverlay;ms:2000;" data-in="o:1;x:(100%);" data-out="a:false;"> <img src="rs-plugin/assets/dummy.png" alt="Non Profit Wordpress Theme" title="zmain-slider-1.jpg" width="1536" height="864" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="{{$sliders[2]->slider_image}}" data-parallax="5" data-no-retina><!--							-->
          <h1 id="slider-1-slide-1-layer-2" class="rs-layer Concept-Title" data-type="text" data-color="#ffffff||rgba(255, 255, 255, 1)||rgba(255, 255, 255, 1)||rgba(255, 255, 255, 1)" data-rsp_ch="on" data-xy="x:c;y:m;yo:10px,-26px,-10px,-33px;" data-text="w:normal,nowrap,nowrap,normal;s:54,50,45,30;l:52,55,50,40;ls:3px;fw:700;a:center;" data-dim="w:754px,699px,auto,400px;" data-padding="b:10;" data-frame_0="sX:2;sY:2;" data-frame_0_mask="u:t;" data-frame_1="e:power2.out;st:2110;sp:1270;sR:2110;" data-frame_1_mask="u:t;" data-frame_999="x:left;e:power3.in;st:w;sp:1000;sR:5620;" data-frame_999_reverse="x:true;" style="z-index:10;font-family:'Poppins';text-transform:uppercase;">{{$sliders[2]->slider_title}}</h1><!--							-->
          <!--							-->
          <!--							-->
          <!--							-->
          <rs-layer id="slider-1-slide-1-layer-21" data-type="image" data-rsp_ch="on" data-xy="x:c;yo:228px,95px,91px,90px;" data-text="w:normal;s:20,16,12,7;l:0,20,15,9;" data-dim="w:67px,60px,56px,45px;h:67px,60px,56px,45px;" data-frame_0="x:100%;" data-frame_0_mask="u:t;" data-frame_1="st:210;sp:1000;sR:210;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:7790;" style="z-index:12;"> </rs-layer>
          <!---->
        </rs-slide>
        @endif
        @if ($sliders->count() >= 4)
        <rs-slide style="position: absolute;" data-key="rs-4" data-title="Web Show" data-thumb="" data-anim="adpr:false;e:slidingoverlay;ms:2000;" data-in="o:1;x:(100%);" data-out="a:false;"> <img src="rs-plugin/assets/dummy.png" alt="Non Profit Wordpress Theme" title="zmain-slider-1.jpg" width="1536" height="864" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="{{$sliders[3]->slider_image}}" data-parallax="5" data-no-retina><!--							-->
          <h1 id="slider-1-slide-1-layer-2" class="rs-layer Concept-Title" data-type="text" data-color="#ffffff||rgba(255, 255, 255, 1)||rgba(255, 255, 255, 1)||rgba(255, 255, 255, 1)" data-rsp_ch="on" data-xy="x:c;y:m;yo:10px,-26px,-10px,-33px;" data-text="w:normal,nowrap,nowrap,normal;s:54,50,45,30;l:52,55,50,40;ls:3px;fw:700;a:center;" data-dim="w:754px,699px,auto,400px;" data-padding="b:10;" data-frame_0="sX:2;sY:2;" data-frame_0_mask="u:t;" data-frame_1="e:power2.out;st:2110;sp:1270;sR:2110;" data-frame_1_mask="u:t;" data-frame_999="x:left;e:power3.in;st:w;sp:1000;sR:5620;" data-frame_999_reverse="x:true;" style="z-index:10;font-family:'Poppins';text-transform:uppercase;">{{$sliders[3]->slider_title}}
          </h1><!--							-->
          <!--							-->
          <!--							-->
          <!--							-->
          <rs-layer id="slider-1-slide-1-layer-21" data-type="image" data-rsp_ch="on" data-xy="x:c;yo:228px,95px,91px,90px;" data-text="w:normal;s:20,16,12,7;l:0,20,15,9;" data-dim="w:67px,60px,56px,45px;h:67px,60px,56px,45px;" data-frame_0="x:100%;" data-frame_0_mask="u:t;" data-frame_1="st:210;sp:1000;sR:210;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:7790;" style="z-index:12;"> </rs-layer>
          <!---->
        </rs-slide>
        @endif
        






        



        
        
      </rs-slides>
      <rs-static-layers>
        <!--					-->
      </rs-static-layers>
    </rs-module>

              


    <script> </script>
    <script>
      if (typeof revslider_showDoubleJqueryError === "undefined") {
        function revslider_showDoubleJqueryError(sliderID) {
          console.log("You have some jquery.js library include that comes after the Slider Revolution files js inclusion.");
          console.log("To fix this, you can:");
          console.log("1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on");
          console.log("2. Find the double jQuery.js inclusion and remove it");
          return "Double Included jQuery Library";
        }
      }
    </script>
  </rs-module-wrap> 