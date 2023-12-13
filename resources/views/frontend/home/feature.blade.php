@php
$property = App\Models\Property::where('status','1')->where('featured','1')->orderBy('id','DESC')->limit(3)->get();

@endphp


{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}

 <section class="feature-section sec-pad bg-color-1">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h5>Features</h5>
                    <h2>Featured Property</h2>
                    <p>Explore the epitome of luxury and comfort with our Featured Property showcase on AmarBari.com. Immerse yourself in a curated selection of premier homes that embody excellence in design, location, and lifestyle. Our Featured Property section brings you a handpicked collection of extraordinary listings, meticulously chosen to cater to the most discerning tastes.</p>
                </div>
                <div class="row clearfix">

                    @foreach($property as $item)
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                
                                <div class="image-box">
                                    <a href="{{ url('property/details/'.$item->id) }}"><figure class="image"><img src="{{ asset($item->property_thambnail  ) }}" alt=""></figure></a>
                                    <div class="batch"><i class="icon-11"></i></div>
                                    <span class="category">Featured</span>
                                </div>
                                <div class="lower-content">
                                    <div class="author-info clearfix">
                                        <div class="author pull-left">
                                            @if($item->agent_id == Null)

            <figure class="author-thumb"><img src="{{ url('upload/admin_default.png') }}" alt=""></figure>
                                <h6>Admin </h6>

           @else

           <figure class="author-thumb"><img src="{{ (!empty($item->user->photo)) ? url('upload/agent_images/'.$item->user->photo) : url('upload/no_image.jpg') }}" alt=""></figure>
                                <h6>{{ $item->user->name }}</h6>
           @endif                
                                        </div>
                                        @if($item->property_status == 'buy')
                                        <div class="buy-btn pull-right"><a href="{{ route('buy.property') }}">For {{ $item->property_status }}</a></div>
                                        @else
                                        <div class="buy-btn pull-right"><a href="{{ route('rent.property') }}">For {{ $item->property_status }}</a></div>
                                        @endif
                                    </div>
                                    <div class="title-text"><h4><a href="{{ url('property/details/'.$item->id) }}">{{ $item->address }}</a></h4></div>
                        <div class="price-box clearfix">
                            <div class="price-info pull-left">
                                <h6>Start From</h6>
                                
                                    <h4>TK {{ $item->max_price }}</h4>
                                
                              
                            </div>
                            <ul class="other-option pull-right clearfix">
                               <li><a aria-label="Compare" class="action-btn" id="{{ $item->id }}" onclick="addToCompare(this.id)"><i class="icon-12"></i></a></li>
                               <li><a aria-label="Add To Wishlist" class="action-btn" id="{{ $item->id }}" onclick="addToWishList(this.id)" ><i class="icon-13"></i></a></li>
                            </ul>
                        </div>
                        <p>{{ $item->short_descp }}</p>
                        <ul class="more-details clearfix">
                            <li><i class="icon-14"></i>{{ $item->bedrooms }} Beds</li>
                            <li><i class="icon-15"></i>{{ $item->bathrooms }} Baths</li>
                            <li><i class="icon-16"></i>{{ $item->property_size }} Sq Ft</li>
                        </ul>
                        <div class="btn-box"><a href="{{ url('property/details/'.$item->id) }}" class="theme-btn btn-two">See Details</a></div>
                    </div>
                </div>
            </div>
        </div>
        
        @endforeach 
{{-- 
        <div class="container" style="width: 500px; height:250px">
            <gmp-map center="{{ $item->latitude }},{{ $item->longitude }}" zoom="14" map-id="DEMO_MAP_ID">
                @foreach($property as $item)
                <gmp-advanced-marker position="{{ $item->latitude }},{{ $item->longitude }}" title="My location">
                </gmp-advanced-marker>
                @endforeach
              </gmp-map>  </div> --}}

                </div>
                <div class="more-btn centred"><a href="{{ route('featured.property') }}" class="theme-btn btn-one">View All Listing</a></div>
            </div>


        </section>