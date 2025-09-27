<div>
        <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Edit Profile</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Edit Profile</li>
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
                                        <div class="col-md-10" style="font-size: 20px; ">
                                            Edit Profile
                                        </div>
                                        <div class="col-md-2">
                                            <a class="btn btn-info right-full" href="{{ route('sprovider.profile') }}"><i class="fa fa-pine fa-2x" ></i>Go Back</a>
                                        </div>
                                    </div>
                                <div class="panel-footer" style=" border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;" >
                                    <div class="row">
                                        <div class="col-md-8">
                                            @if (Session::has('message'))
                                                <div class="alert alert-success" >{{Session::get('message')}}</div>
                                            @endif
                                                <form action="" class="form-horizontal" wire:submit.prevent="updateProfile">
                                                    <div class="form-group">
                                                        <label for="newimage" class="control-label col-md-3">Image :</label>
                                                        <div class="col-md-9">
                                                        <input type="file" name="newimage" class="form-control" wire:model="newimage">
                                                            @if ($newimage)
                                                            <img src="{{ $newimage->temporaryUrl() }}" alt="" width="220">
                                                        @elseif ($image)
                                                            <img src="{{ asset('images/sproviders')}}/{{ $image }}" alt="" width="220">
                                                        @else
                                                            <img src="{{ asset('images/sproviders/dummy-profile.png')}}" alt="" width="220">
                                                        @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="about" class="control-label col-md-3">About :</label>
                                                        <div class="col-md-9">
                                                            <textarea name="about" id="" class="form-control" wire:model="about"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="service_category_id" class="control-label col-md-3">Servise Category :</label>
                                                        <div class="col-md-9">
                                                            <select id="" name="service_category_id" class="form-control" wire:model="service_category_id">
                                                                <option value="">Select Servise Category</option>
                                                                @foreach ($scategories as $scategory )
                                                                    <option value="{{ $scategory->id }}">{{$scategory->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="city" class="control-label col-md-3">City :</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="city" class="form-control" wire:model="city">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="service_location" class="control-label col-md-3">Service Location Zipcode/Pincode :</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="service_location" class="form-control" wire:model="service_location">
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-success pull-right">Edit Profile</button>
                                                </form>
                                            <div >
                                            </div>
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
