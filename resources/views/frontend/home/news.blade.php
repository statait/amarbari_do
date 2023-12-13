@php
$blog = App\Models\BlogPost::latest()->limit(3)->get();
@endphp

<section class="news-section sec-pad">
    <div class="auto-container">
        <div class="sec-title centred">
            <h5>News & Article</h5>
            <h2>Stay Update With AmarBari</h2>
            <p style="color: black">Stay updated with AmarBari for the latest insights and trends in the real estate market, ensuring you make informed decisions for your home.</p>
        </div>
        <div class="row clearfix">
            @foreach($blog as $item) 
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="{{ url('blog/details/'.$item->post_slug) }}"><img src="{{ asset($item->post_image) }}" alt=""></a></figure>
                            <span class="category">New</span>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{ url('blog/details/'.$item->post_slug) }}">{{ $item->post_title }}</a></h4>
                            <ul class="post-info clearfix">
                                <li class="author-box">
                                    <figure class="author-thumb"><img src="{{ (!empty($item->user->photo)) ? url('upload/admin_images/'.$item->user->photo) : url('upload/no_image.jpg') }}" alt=""></figure>
                                    <h5><a href=" ">{{ $item['user']['name'] }}</a></h5>
                                </li>
                                <li>{{ $item->created_at->format('M d Y') }}</li>
                            </ul>
                            <div class="text">
                                <p> {{ $item->short_descp }}</p>
                            </div>
                            <div class="btn-box">
                                <a href="{{ url('blog/details/'.$item->post_slug) }}" class="theme-btn btn-two">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                 @endforeach               
        </div>
    </div>
</section>