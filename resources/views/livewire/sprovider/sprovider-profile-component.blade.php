<div>
        <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Profile</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central" >
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container "style=" border: 1px solid #F3F2F2; ">
                        <div class="row portfolioContainer">
                            <div class="col-md-12 profile1">
                                <div class="panal panal-default">
                                <div class="panel-heading">
                                    <div class="row" style="background-color: #f9f9f9; margin: 0px; padding: 10px; border-top-left-radius: 15px; border-top-right-radius: 15px;" >
                                        <div class="col-md-6" style="font-size: 20px; ">
                                            Profile
                                        </div>

                                    </div>

                                <div class="panel-body " style=" border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;" >
                                    <div class="row">
                                        <div class="col-md-6">
                                            @if ($sprovider && $sprovider->image)
                                                <img src="{{ asset('/images/sproviders/'.$sprovider->image) }}" width="100%" alt="" style="border-radius: 15px">
                                            @else
                                                <img src="{{ asset('images/sproviders/dummy-profile.png') }}" width="100%" alt="" style="border-radius: 15px">
                                            @endif

                                            <hr>
                                            <h1 style="font-size: 30px; color: #746f6f; margin-top: 10px;">{{Auth::user()->name}}</h1>
                                            <hr>
                                            <h3><b style="font-size: 20px; color: #0a3d61;"></b>{{ $sprovider->about}}</h3>
                                            <div >
                                                <a class="btn btn-success" href="/"><i class="fa fa-pine fa-2x" ></i>Home</a>
                                                <a class="btn btn-info" href="{{ route('sprovider.eddit_profile') }}"><i class="fa fa-pine fa-2x" ></i>Edit Profile</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <hr style="color: #11cad4">
                                            {{-- <h3><b style="font-size: 20px; color: #0a3d61;">About: </b>{{ $sprovider->about}}</h3> --}}
                                            <h3><b style="font-size: 20px; color: #0a3d61;">Email: </b>{{Auth::user()->email}}</h3>
                                            <h3><b style="font-size: 20px; color: #0a3d61;">Phone: </b>{{Auth::user()->phone}}</h3>
                                            <h3><b style="font-size: 20px; color: #0a3d61;">City: </b>{{$sprovider->city }} </h3>
                                            <h3><b style="font-size: 20px; color: #0a3d61;">Service Category: </b>
                                                @if ($sprovider->service_category_id)
                                                    {{  $sprovider->category->name }}
                                                @else
                                                    Not found
                                                @endif
                                            <h3><b style="font-size: 20px; color: #0a3d61;">Service Locations: </b>{{$sprovider->service_location }} </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
</div>
<div>
</div>
