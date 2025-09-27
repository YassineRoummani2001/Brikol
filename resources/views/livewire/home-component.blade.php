<div>
<section class="tp-banner-container" >
            <div class="tp-banner">
                <ul>
                    @foreach ( $slides as $slide )
                    <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                        data-saveperformance="off" data-title="Slide">
                        <img src="{{ asset('images/slider')}}/{{$slide->image}}" alt="{{$slide->title}}" data-bgposition="center center" loading="lazy"
                            data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                            data-bgfitend="100"  data-bgpositionend="right center">
                    </li>
                    @endforeach
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
            <div class="filter-title">
                <div class="title-header">
                    <h1 style="color:#fff;">BOOK A SERVICE</h1>
                    <h2 class="lead" style="color:#fff;">Book a service at very affordable price, </h2>
                </div>
                <div class="filter-header">
                    <form id="sform" action="{{ route('searchService') }}" method="post">
                        @csrf
                        <input type="text" id="q" name="q" required="required" placeholder="What Services do you want?"
                            class="input-large typeahead" autocomplete="off">
                        <input type="submit" name="submit" value="Search">
                    </form>
                </div>
            </div>
        </section>
        <section class="content-central" style="border-radius: 15px">
            <div class="content_info content_resalt" style="border-radius: 15px">
                <div class="container" style="margin-top: 40px;">
                    <div class="row">
                    </div>
                </div>
                <div class="container" style="border-radius: 15px">
                    <div class="row" style="border-radius: 15px">
                        <div class="col-md-12">
                            <ul id="sponsors" class="tooltip-hover">
                                @foreach ( $scategories as $scategory )
                                    <li data-toggle="tooltip" title="" data-original-title="{{ $scategory->name }}">
                                        <a href="{{ route('home.services_by_category',['category_slug'=>$scategory->slug]) }}">
                                            <img src="{{ asset('images/categories')}}/{{ $scategory->image }}" alt="{{ $scategory->name }}">
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="semiboxshadow text-center">
                <img src="{{ asset('assets/img/img-theme/shp.png')}}" class="img-responsive" alt="">
            </div> --}}
            <div class="content_info">
                <div>
                    <div class="container">
                        <div class="row">
                            <div class="titles">
                                <h2>BRIKOL<span>Choice</span> of Services</h2>
                                <i class="fa fa-plane"></i>
                                <hr class="tall">
                            </div>
                        </div>
                        <div class="portfolioContainer " style="margin-top: -50px; ">
                            @foreach ($fservices as $service )
                            <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                                style="padding-right: 5px;padding-left: 5px;">
                                <a class="g-list" href="{{ route('home.service_details',['service_slug'=>$service->slug]) }}">
                                    <div class="img-hover" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                                        <img src="{{ asset('images/services/thumbnails')}}/{{$service->thumbnail}}" alt="{{$service->name}}"
                                            class="img-responsive">
                                    </div>
                                    <div class="info-gallery shadow-xl" style="border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;">
                                        <h3>{{$service->name}}</h3>
                                        <hr class="separator">
                                        <p>{{$service->tagline}}</p>
                                        <div class="content-btn" ><a href="{{ route('home.service_details',['service_slug'=>$service->slug]) }}"
                                                class="btn btn-primary" style="border-radius: 25px">Book Now</a></div>
                                        <div class="price"><b>From</b>{{$service->price}} DH</div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                </div>
                </div>
            </div>
            <div class="content_info">
                <div class="bg-dark color-white border-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 ">
                                <div class="services-lines-info">
                                    <h2>WELCOME TO BRIKOL</h2>
                                    <p class="lead">
                                        Book best services at one place.
                                        <span class="line"></span>
                                    </p>
                                    <p class="lead">At BRIKOL, we are dedicated to simplifying your life by offering a wide variety of professional services under one roof. We understand that finding reliable help can be stressful and time-consuming, which is why we bring together trusted experts across multiple fields—ready to serve you whenever you need them.
                                    <span class="line"></span>
                                    </p>
                                    <p class="lead">Whether you are looking for home cleaning, repair and maintenance, beauty care, moving assistance, event planning, or lifestyle solutions, BRIKOL is here to connect you with the best service providers in your area.
                                    <span class="line"></span>
                                    </p>
                                    <p class="lead">
                                        ✅ Convenience at your fingertips – browse, book, and manage services easily.<br>
                                        ✅ Trusted professionals – skilled experts who value your time, comfort, and safety.<br>
                                        ✅ Wide variety of services – no matter the task, you’ll find the right solution here.<br>
                                        ✅ Customer-first approach – we focus on delivering satisfaction and peace of mind.
                                    <span class="line"></span>
                                    </p>
                                    <h2>
                                        🌍 Explore a world of services.<br>
                                        ✨ Discover the difference.<br>
                                        💼 Choose BRIKOL today.
                                    </h2>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <ul class="services-lines">
                                    @foreach ( $fscategories as $fscategory )
                                    <li>
                                        <a href="{{ route('home.services_by_category',['category_slug'=>$fscategory->slug]) }}">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="{{ asset('images/categories')}}/{{ $fscategory->image }}" alt="{{ $fscategory->name }}"></i>
                                                <h5>{{ $fscategory->name }}</h5>
                                            </div>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="container">
                    <div class="row">
                        <div class="titles">
                            <h2><span>Appliance</span>Services</h2>
                            <i class="fa fa-plane"></i>
                            <hr class="tall">
                        </div>
                    </div>
                </div>
                <div id="boxes-carousel">
                    @foreach ($apservices as $apservice )
                    <div style="padding-right: 10px;padding-left: 10px; padding-top: 10%; ">
                        <a class="g-list" href="{{ route('home.service_details',['service_slug'=>$apservice->slug]) }}">
                            <div class="img-hover" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                                <img src="{{ asset('images/services/thumbnails')}}/{{ $apservice->thumbnail }}" alt="" class="{{ $apservice->name }}">
                            </div>
                            <div class="info-gallery" style="border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;">
                                <h3>{{ $apservice->name }}</h3>
                                <hr class="separator">
                                <p>{{ $apservice->tagline }}</p>
                                <div class="content-btn"><a href="service-details/ac-wet-servicing.html"
                                        class="btn btn-primary" style="border-radius: 25px">Book Now</a></div>
                                <div class="price"><b>From</b>{{ $apservice->price }} DH</div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
</div>

@push('scripts')
<script type="text/javascript" >
    var path = "{{ route('autocomplete') }}";
    $('input.typeahead').typeahead({
        source:function(query,process){
            return $.get(path,{query:query},function(data){
                return process(data);
            });
        }
    });
</script>

@endpush
