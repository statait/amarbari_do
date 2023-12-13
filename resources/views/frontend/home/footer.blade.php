@php
   $setting = App\Models\SiteSetting::find(1);
   $blog = App\Models\BlogPost::latest()->limit(1)->get();
@endphp

<footer class="main-footer">
    <div class="footer-top bg-color-2">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget about-widget">
                        <div class="widget-title">
                            <h3>About</h3>
                        </div>
                        <div class="text">
                        <p>Discover your dream home with Amarbari - Your Trusted Partner in Real Estate. Explore our listings and make your property dreams a reality today.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget ml-70">
                        <div class="widget-title">
                            <h3>Services</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list class">
                                <li><a href="{{ route('about.us') }}">About Us</a></li>
                                <li><a href="{{ route('all.listing') }}">Listing</a></li>
                                {{-- <li><a href="index.html">How It Works</a></li>
                                <li><a href="index.html">Our Services</a></li> --}}
                                <li><a href="{{ route('blog.list') }}">Our Blog</a></li>
                                <li><a href="{{ route('contact.us') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget post-widget">
                        <div class="widget-title">
                            <h3>Top News</h3>
                        </div>
                        <div class="post-inner">
                            @foreach($blog as $item)                               
                            <div class="post">
                                <figure class="post-thumb"><a href="{{ url('blog/details/'.$item->post_slug) }}"><img src="{{ asset($item->post_image) }}" alt=""></a></figure>
                                <h5><a href="{{ url('blog/details/'.$item->post_slug) }}">{{ $item->post_title }}</a></h5>
                                <p>{{ $item->created_at->format('M d Y') }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget">
                        <div class="widget-title">
                            <h3>Contacts</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="info-list clearfix">
                                <li><i class="fas fa-map-marker-alt"></i>{{ $setting->company_address }}</li>
                                <li><i class="fas fa-microphone"></i><a href="tel:23055873407">+{{ $setting->support_phone }}</a></li>
                                <li><i class="fas fa-envelope"></i><a href="mailto:info@example.com">{{ $setting->email }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-box clearfix">
                <figure class="footer-logo"><img src="{{ asset('frontend/assets/images/footer-logo.png') }}" alt=""></figure>
                <div class="copyright pull-left">
                    <p><a target="_blank" href="https://stataglobal.com/">{{ $setting->copyright }}</p>
                </div>
                <ul class="footer-nav pull-right clearfix">
                    <li><a href="{{route('terms.services')}}">Terms & Service</a></li>
                    <li><a href="{{route('privacy.policy')}}">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>