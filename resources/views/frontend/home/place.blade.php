@php
    $skip_state_0 = App\Models\State::skip(0)->first();
    $property_0 = App\Models\Property::where('city',$skip_state_0->id)->get();

    $skip_state_1 = App\Models\State::skip(1)->first();
    $property_1 = App\Models\Property::where('city',$skip_state_1->id)->get();

     $skip_state_2 = App\Models\State::skip(2)->first();
    $property_2 = App\Models\Property::where('city',$skip_state_2->id)->get();
    
    $skip_state_3 = App\Models\State::skip(3)->first();
    $property_3 = App\Models\Property::where('city',$skip_state_3->id)->get();

    $skip_state_4 = App\Models\State::skip(4)->first();
    $property_4 = App\Models\Property::where('city',$skip_state_4->id)->get();

    $skip_state_5 = App\Models\State::skip(5)->first();
    $property_5 = App\Models\Property::where('city',$skip_state_5->id)->get();

    $skip_state_6 = App\Models\State::skip(6)->first();
    $property_6 = App\Models\Property::where('city',$skip_state_6->id)->get();

    $skip_state_7 = App\Models\State::skip(7)->first();
    $property_7 = App\Models\Property::where('city',$skip_state_7->id)->get();
@endphp


<section class="place-section sec-pad">
    <div class="auto-container">
        <div class="sec-title centred">
            <h5>Top Places</h5>
            <h2>Most Popular Places</h2>
            <p style="color: black">Discover the pulse of real estate excellence with our Most Popular Listings on AmarBari.com. Dive into a collection of sought-after properties that capture the essence of market trends and community preferences. These top-tier listings are curated for those seeking homes that resonate with popularity and style. Explore now to find the homes that are making waves in the real estate scene. Your dream property might just be among our most popular listings. Start your journey with AmarBari.com today!</p>
        </div>
        <div class="sortable-masonry">
            <div class="items-container row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all illustration brand marketing software">
                    <div class="place-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset($skip_state_0->state_image) }}" alt="" style="width:370px; height:275px;"></figure>
                            <div class="text">
                                <h4><a href="{{ route('state.details',$skip_state_0->id) }}">{{ $skip_state_0->state_name }}</a></h4>
                                <p>{{ count($property_0) }} Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all brand illustration print software logo">
                    <div class="place-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset($skip_state_1->state_image) }}" alt="" style="width:370px; height:275px;"></figure>
                            <div class="text">
                                <h4><a href="{{ route('state.details',$skip_state_1->id) }}">{{ $skip_state_1->state_name }}</a></h4>
                                <p>{{ count($property_1) }} Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
            
            
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all illustration marketing logo">
                    <div class="place-block-one">
                        <div class="inner-box">
                   <figure class="image-box"><img src="{{ asset($skip_state_2->state_image) }}" alt="" style="width:370px; height:275px;"></figure>
                            <div class="text">
                                <h4><a href="{{ route('state.details',$skip_state_2->id) }}">{{ $skip_state_2->state_name }}</a></h4>
                                <p>{{ count($property_2) }} Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
            
            
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all brand marketing print software">
                    <div class="place-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset($skip_state_3->state_image) }}" alt="" style="width:370px; height:275px;"></figure>
                            <div class="text">
                                <h4><a href="{{ route('state.details',$skip_state_3->id) }}">{{ $skip_state_3->state_name }}</a></h4>
                                <p>{{ count($property_3) }} Properties</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all brand marketing print software">
                    <div class="place-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset($skip_state_4->state_image) }}" alt="" style="width:370px; height:275px;"></figure>
                            <div class="text">
                                <h4><a href="{{ route('state.details',$skip_state_4->id) }}">{{ $skip_state_4->state_name }}</a></h4>
                                <p>{{ count($property_4) }} Properties</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all brand marketing print software">
                    <div class="place-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset($skip_state_5->state_image) }}" alt="" style="width:370px; height:275px;"></figure>
                            <div class="text">
                                <h4><a href="{{ route('state.details',$skip_state_5->id) }}">{{ $skip_state_5->state_name }}</a></h4>
                                <p>{{ count($property_5) }} Properties</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all brand marketing print software">
                    <div class="place-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset($skip_state_6->state_image) }}" alt="" style="width:370px; height:275px;"></figure>
                            <div class="text">
                                <h4><a href="{{ route('state.details',$skip_state_6->id) }}">{{ $skip_state_6->state_name }}</a></h4>
                                <p>{{ count($property_6) }} Properties</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all brand marketing print software">
                    <div class="place-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset($skip_state_7->state_image) }}" alt="" style="width:370px; height:275px;"></figure>
                            <div class="text">
                                <h4><a href="{{ route('state.details',$skip_state_7->id) }}">{{ $skip_state_7->state_name }}</a></h4>
                                <p>{{ count($property_7) }} Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
    </div>
</section>