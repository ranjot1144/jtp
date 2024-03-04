<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Johnson Test Papers</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!-- <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900|Oswald:400,700" rel="stylesheet"> -->
            <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }} ">
            <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/fancybox.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/my_style.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

            
            <link rel="stylesheet" href="{{ asset('assets/menu/flexdropdown.css') }}">
            @vite(['public/assets/css/custom.scss', 'public/assets/css/custom.css'])
            
            <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        
            <script nonce="886ff7d4-afc9-4269-8a4b-ee49e6b789fc">
                (function(w,d){!function(j,k,l,m){j[l]=j[l]||{};j[l].executed=[];j.zaraz={deferred:[],listeners:[]};j.zaraz.q=[];j.zaraz._f=function(n){return async function(){var o=Array.prototype.slice.call(arguments);j.zaraz.q.push({m:n,a:o})}};for(const p of["track","set","debug"])j.zaraz[p]=j.zaraz._f(p);j.zaraz.init=()=>{var q=k.getElementsByTagName(m)[0],r=k.createElement(m),s=k.getElementsByTagName("title")[0];s&&(j[l].t=k.getElementsByTagName("title")[0].text);j[l].x=Math.random();j[l].w=j.screen.width;j[l].h=j.screen.height;j[l].j=j.innerHeight;j[l].e=j.innerWidth;j[l].l=j.location.href;j[l].r=k.referrer;j[l].k=j.screen.colorDepth;j[l].n=k.characterSet;j[l].o=(new Date).getTimezoneOffset();if(j.dataLayer)for(const w of Object.entries(Object.entries(dataLayer).reduce(((x,y)=>({...x[1],...y[1]})),{})))zaraz.set(w[0],w[1],{scope:"page"});j[l].q=[];for(;j.zaraz.q.length;){const z=j.zaraz.q.shift();j[l].q.push(z)}r.defer=!0;for(const A of[localStorage,sessionStorage])Object.keys(A||{}).filter((C=>C.startsWith("_zaraz_"))).forEach((B=>{try{j[l]["z_"+B.slice(7)]=JSON.parse(A.getItem(B))}catch{j[l]["z_"+B.slice(7)]=A.getItem(B)}}));r.referrerPolicy="origin";r.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(j[l])));q.parentNode.insertBefore(r,q)};["complete","interactive"].includes(k.readyState)?zaraz.init():j.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);
            </script>
    </head>

    <body data-spy="scroll" class="overflow-x-hidden" data-target=".site-navbar-target" data-offset="200">
      
      <div class="site-wrap">
        
        @include('frontend_view.layouts.sidebar')
        <main class="main-content">
            @yield('content')
        </main>
      </div>

      <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
      <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
      <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
      <script src="{{ asset('assets/js/popper.min.js') }}"></script>
      <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
      <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
      <script src="{{ asset('assets/js/aos.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
      <script src="{{ asset('assets/js/main.js') }}"></script>
      <script src="{{ asset('assets/js/my-style.js') }}"></script>

      <script src="{{ asset('assets/menu/accord-menu.js') }}"></script>
      
        <script>
        jQuery(document).ready(function ($) {
            if (screen && screen.width > 800) {
                var base_url = window.location.origin;
                var scriptElement = document.createElement('script');
                scriptElement.src = base_url+'/assets/menu/flexdropdown.js';
                document.body.appendChild(scriptElement);
            }
        });

        jQuery(document).ready(function ($) {
            if($("#flexmenu1 li > ul > li > ul > li").length == 0) {
                $("#flexmenu1 li > ul > li > a > img").addClass('Testing');
            }
        })

        $(document).ready(function () {
    // Select all <ul> elements that are children of an <li> element
    var nestedUl = $('ul.second_layer_menu, ul.submenu_third_layer');

    // Iterate over each <ul> element
    nestedUl.each(function () {
        // Check if the current <ul> has <li> elements
        var hasLi = $(this).find('li').length > 0;

        if (hasLi) {
            // Do something if the <ul> has <li> elements
            //console.log('This <ul> has <li> elements:', this);
        } else {
            // Do something else if the <ul> does not have <li> elements
            $(this).prev('li a').addClass('no_submenu');
            //console.log('This <ul> does not have <li> elements:', this);
        }
    });
});
        </script>

      <script>
      $('.owl-carousel').owlCarousel({
          stagePadding: 50,
          loop:true,
          margin:0,
          autoplay:true,
          autoplayTimeout:1000,
          smartSpeed:1500,
          nav:true,
          dots:false,
          navText: ['<span aria-label="Previous">‹</span>','<span aria-label="Next">›</span>'],
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:5
              },
              1000:{
                  items:4
              }
              
          }
      });


        window.dataLayer = window.dataLayer || [];
        
        function gtag(){
          dataLayer.push(arguments);
        }
          gtag('js', new Date());
          gtag('config', 'UA-23581568-13');
      </script>
      <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"833c986bcf4c651e","b":1,"version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>
</html>