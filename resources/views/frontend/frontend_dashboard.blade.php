<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>@yield('title') </title>
{{-- Load VUE --}}
@vite(['resources/js/app.js'])
<!-- Fav Icon -->
<link rel="icon" href="{{ asset('frontend/assets/images/favicon.png') }}" type="image/x-icon">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<meta name="csrf-token" content="{{ csrf_token() }}">


<!-- Stylesheets -->
<link href="{{ asset('frontend/assets/css/font-awesome-all.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/flaticon.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/owl.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/animate.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/jquery-ui.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/nice-select.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/color/theme-color.css') }}" id="jssDefault" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/switcher-style.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/responsive.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

{{-- MAP --}}
<script async
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8bXAGhxZG7KXI-wCtUmgXU4i9HFrhkBE&callback=initMap&libraries=maps,marker&v=beta">
</script>


<script>
    function initMap() {
      console.log('Maps JavaScript API loaded.');
    }
  </script>

  <style>
    /* Hide the Google Translate widget */
body .VIpgJd-ZVi9od-ORHb {
    display: none !important;
}

  </style>
</head>
<!-- page wrapper -->
<body>
    <div class="boxed_wrapper">


        <!-- preloader -->

        @include('frontend.home.preload')
        <!-- preloader end -->


        <!-- switcher menu -->
   
        <!-- end switcher menu -->


        <!-- main header -->

        @include('frontend.home.header')
        <!-- main-header end -->

        <!-- Mobile Menu  -->

        @include('frontend.home.mobile_menu')
        <!-- End Mobile Menu -->

        @yield('main')
          <!-- main-footer -->

        @include('frontend.home.footer')
        <!-- main-footer end -->

        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>


    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <!-- jequery plugins -->
    <script src="{{ asset('frontend/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/lang/translations.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/validation.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/appear.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/scrollbar.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/isotope.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jQuery.style.switcher.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/nav-tool.js') }}"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

    {{-- <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8bXAGhxZG7KXI-wCtUmgXU4i9HFrhkBE"></script>
    <script src="{{ asset('frontend/assets/js/gmaps.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/map-helper.js') }}"></script> --}}

    <!-- main-js -->
    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
   


{{-- Language --}}
    <script>
    function changeLanguage(language) {
    const translationKeys = translations[language];
    if (translationKeys) {
        const elementsToTranslate = document.querySelectorAll('[data-translation-key]');
        elementsToTranslate.forEach(element => {
            const translationKey = element.getAttribute('data-translation-key');
            if (translationKeys[translationKey]) {
                element.textContent = translationKeys[translationKey];
            }
        });
    }
}
    </script>



{{-- Google translate --}}
<script type="text/javascript">
 // Initialize Google Translate with additional configuration
// googleTranslateElementInit = function() {
//     new google.translate.TranslateElement({
//         pageLanguage: 'en',
//         layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
//         gaTrack: false, // Disable translation rating
//         gaId: '' // Set an empty string as the Google Analytics ID
//     }, 'google_translate_element');
// };

// function googleTranslateElementInit() {
//         new google.translate.TranslateElement({ pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE }, 'google_translate_element');
//     }
    </script>

<script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
    }
    </script>
    
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <script>
        // Function to remove or hide specific elements within the Google Translate widget
        function hideTranslateWidgetElements() {
            // Select and hide the specific elements
            var ratingElement = document.querySelector('span.VIpgJd-ZVi9od-ORHb-bN97Pc');
            var googleTranslateElement = document.querySelector('a.VIpgJd-ZVi9od-l4eHX-hSRGPd');

            if (ratingElement) {
                ratingElement.style.display = 'none';
            }

            if (googleTranslateElement) {
                googleTranslateElement.style.display = 'none';
            }
        }

        // Delay execution until the page has fully loaded
        window.addEventListener('load', function() {
            // Remove or hide specific elements in the Google Translate widget
            hideTranslateWidgetElements();
        });
    </script>



<script>
     @if(Session::has('message'))
     var type = "{{ Session::get('alert-type','info') }}"
     switch(type){
        case 'info':
        toastr.info(" {{ Session::get('message') }} ");
        break;
        case 'success':
        toastr.success(" {{ Session::get('message') }} ");
        break;
        case 'warning':
        toastr.warning(" {{ Session::get('message') }} ");
        break;
        case 'error':
        toastr.error(" {{ Session::get('message') }} ");
        break; 
     }
     @endif 
    </script>

{{-- WISHLIST --}}

<script type="text/javascript">
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    })
    
    // Add To Wishlist 
    function addToWishList(property_id){
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: "/add-to-wishList/"+property_id,
            success:function(data){
               wishlist();
                // Start Message 
            const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  
                  showConfirmButton: false,
                  timer: 3000 
            })
            if ($.isEmptyObject(data.error)) {
                    
                    Toast.fire({
                    type: 'success',
                    icon: 'success', 
                    title: data.success, 
                    })
            }else{
               
           Toast.fire({
                    type: 'error',
                    icon: 'error', 
                    title: data.error, 
                    })
                }
              // End Message  
            }
        })
    }
</script>

<!-- // start load Wishlist Data  -->
<script type="text/javascript">
    function wishlist(){
        $.ajax({
            type: "GET",
            dataType: 'json',
            url: "/get-wishlist-property/",
            success:function(response){
                $('#wishQty').text(response.wishQty);
                var rows = ""
                $.each(response.wishlist, function(key,value){
                  rows += `<div class="deals-block-one">
        <div class="inner-box">
            <div class="image-box">
                <figure class="image"><img src="/${value.property.property_thambnail}" alt=""></figure>
                <div class="batch"><i class="icon-11"></i></div>
                <span class="category">Featured</span>
                <div class="buy-btn"><a href="#">For ${value.property.property_status}</a></div>
            </div>
            <div class="lower-content">
                <div class="title-text"><h4><a href="">${value.property.address}</a></h4></div>
                <div class="price-box clearfix">
                    <div class="price-info pull-left">
                        <h6>Start From</h6>
                       
                            <h4>TK ${value.property.max_price}</h4>

                    }
                      
                    </div>
                     
                </div>
               
                <ul class="more-details clearfix">
                    <li><i class="icon-14"></i>${value.property.bedrooms} Beds</li>
                    <li><i class="icon-15"></i>${value.property.bathrooms} Baths</li>
                    <li><i class="icon-16"></i>${value.property.property_size} Sq Ft</li>
                </ul>
                <div class="other-info-box clearfix">
                    
                    <ul class="other-option pull-right clearfix">
                       
       <li><a type="submit" class="text-body" id="${value.id}" onclick="wishlistRemove(this.id)" ><i class="fa fa-trash"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> `  
                });
      $('#wishlist').html(rows);       
            }
        })
    }
    wishlist();

    // Wishlist Remove Start 
    function wishlistRemove(id){
        $.ajax({
            type: "GET",
            dataType: 'json',
            url: "/wishlist-remove/"+id,
            success:function(data){
                wishlist();
                 // Start Message 
            const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  
                  showConfirmButton: false,
                  timer: 3000 
            })
            if ($.isEmptyObject(data.error)) {
                    
                    Toast.fire({
                    type: 'success',
                    icon: 'success', 
                    title: data.success, 
                    })
            }else{
               
           Toast.fire({
                    type: 'error',
                    icon: 'error', 
                    title: data.error, 
                    })
                }
              // End Message  
            }
        })
    }
    /// End Wishlist Remove 
    
</script>
{{-- END WISHLIST --}}

{{-- COMPARE --}}

<!-- /// Add to Carepage  -->
<script type="text/javascript">
    // $.ajaxSetup({
    //     headers:{
    //         'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
    //     }
    // })
    
     function addToCompare(property_id){
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: "/add-to-compare/"+property_id,
            success:function(data){
               
                // Start Message 
            const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  
                  showConfirmButton: false,
                  timer: 3000 
            })
            if ($.isEmptyObject(data.error)) {
                    
                    Toast.fire({
                    type: 'success',
                    icon: 'success', 
                    title: data.success, 
                    })
            }else{
               
           Toast.fire({
                    type: 'error',
                    icon: 'error', 
                    title: data.error, 
                    })
                }
              // End Message  
            }
        })
    }
    
</script>


<!-- // start load Wishlist Data  -->

<script type="text/javascript">
    function compare(){
        $.ajax({
            type: "GET",
            dataType: 'json',
            url: "/get-compare-property/",
            success:function(response){
 
                var rows = ""
                $.each(response, function(key,value){
  rows += ` <tr>
                <th>Property Info</th>
                <th>
                    <figure class="image-box"><img src="/${value.property.property_thambnail}" alt=""></figure>
                    <div class="title">${value.property.property_name}</div>
                    <div class="price">TK${value.property.lowest_price}</div>
                </th>
                
               
            </tr>    
            <tr>
                <td>
                    <p>City</p>
                </td>
                <td>
                    <p>${value.property.city}</p>
                </td>
                 
            </tr>
            <tr>
                <td>
                    <p>Area</p>
                </td>
                <td>
                    <p>${value.property.property_size} Sq Ft</p>
                </td>
                 
            </tr>
            <tr>
                <td>
                    <p>Rooms</p>
                </td>
                <td>
                    <p>${value.property.bedrooms}</p>
                </td>
                 
            </tr>
            <tr>
                <td>
                    <p>Bathrooms</p>
                </td>
                <td>
                    <p>${value.property.bathrooms}</p>
                </td>
                 
            </tr>
            <tr>
                <td>
                    <p>Action</p>
                </td>
                <td>
                    <a type="submit" class="text-body" id="${value.id}" onclick="compareRemove(this.id)" ><i class="fa fa-trash"></i></a>
                </td>
                 
            </tr> `   
                });
      $('#compare').html(rows);       
            }
        })
    }
    compare();

     // Compare Remove Start 
     function compareRemove(id){
        $.ajax({
            type: "GET",
            dataType: 'json',
            url: "/compare-remove/"+id,
            success:function(data){
                compare();
                 // Start Message 
            const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  
                  showConfirmButton: false,
                  timer: 3000 
            })
            if ($.isEmptyObject(data.error)) {
                    
                    Toast.fire({
                    type: 'success',
                    icon: 'success', 
                    title: data.success, 
                    })
            }else{
               
           Toast.fire({
                    type: 'error',
                    icon: 'error', 
                    title: data.error, 
                    })
                }
              // End Message  
            }
        })
    }
    // End Compare Remove 
    
</script>
{{-- COMPARE END --}}

      <!-- map script -->
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script> --}}
    {{-- <script src="{{ asset('frontend/assets/js/gmaps.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/map-helper.js') }}"></script> --}}
    
    <!-- // start load Wishlist Data  -->

</body><!-- End of .page_wrapper -->
</html>
  