<div>

<div class="section-title-01 honmob" >
            <div class="bg_parallax image_01_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>{{ $scategory->name }} Services</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>{{$scategory->name}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central" style="border-radius: 15px" >
            <div class="container" >
                <div class="row" style="margin-top: -30px;">
                    <div class="titles" >
                        <h2>{{$scategory->name}} <span>Services</span></h2>
                        <i class="fa fa-plane"></i>
                        <hr class="tall">
                    </div>
                </div>
            </div>
            <div class="content_info" style="margin-top: -70px;">
                <div>
                    <div class="container" >
                        <div class="portfolioContainer">
                            @if ($scategory->services->count() > 0)

                            @foreach ($scategory->services as $service )
                            <div class="col-xs-6 col-sm-4 col-md-3 nature hsgrids"
                                style="padding-right: 5px;padding-left: 5px; padding-top: 10%; ">
                                <a class="g-list" href="{{ route('home.service_details',['service_slug'=>$service->slug]) }}">
                                    <div class="img-hover shadow" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                                        <img src="{{asset('images/services/thumbnails')}}/{{ $service->thumbnail }}" alt="{{ $service->name }}"
                                            class="img-responsive">
                                    </div>
                                    <div class="info-gallery shadow-xl" style="border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;">
                                        <h3>{{ $service->name }}</h3>
                                        <hr class="separator">
                                        <p>{{ $service->tagline }}</p>
                                        <div class="content-btn"><a href="{{ route('home.service_details',['service_slug'=>$service->slug]) }}"
                                                class="btn btn-primary" style="border-radius: 25px">Book Now</a></div>
                                        <div class="price"><b>From</b>{{ $service->price }} <samp style="font-size: 25px;"> DH</samp></div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                            @else
                            <div class="col-md-12">
                                <div class="alert alert-warning">
                                    No Services Available for {{ $scategory->name }} Category.
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
